/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.Views;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.ShareButton;
import com.codename1.facebook.ui.LikeButton;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import static com.codename1.io.Log.e;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.Models.Equipe;
import com.mycompany.Models.Joueur;
import com.mycompany.Services.Service_Equipe;
import com.mycompany.Services.Service_Joueur;
import com.mycompany.myapp.MyApplication;
import java.io.IOException;
import java.io.OutputStream;

/**
 *
 * @author USER-PC
 */public class JoueurForm extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");
    public JoueurForm(Form previous,Equipe e1)
    {

           super("Categories",BoxLayout.y());
                 this.add(new InfiniteProgress());

        Display.getInstance().scheduleBackgroundTask(() -> {
            // this will take a while...
                  Display.getInstance().callSerially(() -> {
                this.removeAll();
             for (Joueur c : new Service_Joueur().findAll(e1.getId_e())) {
         Container rank=new Container(BoxLayout.x());

            this.add(addItem_Joueur(c));
                       //    this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));

     rank.add(new Rate_joueur().createStarRankSlider());

                 this.add(rank);
        }
               this.revalidate();
            });   
    
        });

        this.getToolbar().addSearchCommand(e -> {
            String text = (String) e.getSource();
            if (text == null || text.length() == 0) {
                // clear search
                for (Component cmp : this.getContentPane()) {
                    cmp.setHidden(false);
                    cmp.setVisible(true);
                }
                this.getContentPane().animateLayout(150);
            } else {
                text = text.toLowerCase();
                for (Component cmp : this.getContentPane()) {
                    MultiButton mb = (MultiButton) cmp;
                    String line1 = mb.getTextLine1();
                    String line2 = mb.getTextLine2();
                    mb.setUIIDLine1("libC");
                    mb.setUIIDLine2("btn");
                    boolean show = line1 != null && line1.toLowerCase().indexOf(text) > -1
                            || line2 != null && line2.toLowerCase().indexOf(text) > -1;
                    mb.setHidden(!show);
                    mb.setVisible(show);
                }
                this.getContentPane().animateLayout(150);
            }
        }, 4);
        
        
        
           
           this.getToolbar().addCommandToRightBar("add", null, ev -> {
               try {
                   new AddJoueurForm(this).show();
               } catch (Exception ex) {
            
               }
               
               
               
        });
        
        
        
        
              
           this.getToolbar().addCommandToRightBar("add", null, ev -> {
               try {
                   new AddEquipeForm(this).show();
               } catch (Exception ex) {
            
               }
               
               
               
        });
           
           
           
           
               this.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
           new ListEquipeForm(theme).show();
        });
    }
    
    
     public Container addItem_Cotch_detail(Joueur j) {
  String url = "http://127.0.0.1:8000/" + j.getImage();
         System.out.println(url);
            ImageViewer image_coach;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
                 image_coach = new ImageViewer(imge);
        
        Container cn1 = new Container(new BorderLayout());
        Container cn2 = new Container(BoxLayout.y());
        
        Label nom_joueur = new Label("Nom Joueur : "+j.getNom_joueur());
        Label prenom_joueur = new Label("Prenom Coach : "+j.getPrenom_joueur());
        
       Label age = new Label("age Joueur : "+j.getAge_joueur());
       Label date_naissance = new Label("Date_naissance Joueur : "+j.getDateNaissance());
       Label adresse_mail = new Label("Adresse_mail : "+j.getAdresse_mail());
     //  Label ville = new Label("ville : "+j.getVille());
       
      // Label categorie = new Label("Categorie  : "+j.getCategorie());
       
       Label nom_equipe = new Label("Equipe : "+j.getNom_equipe());
     
       
//   Label image = new Label("Image : "+j.getImage());

   
      
           
     
 //Yosri 7ot houni win thezzek
 
       
        cn2.add(nom_joueur).add(prenom_joueur).add(age).add(date_naissance).add(adresse_mail).add(nom_equipe).add(image_coach);
        cn1.add(BorderLayout.WEST, cn2);
      
      
         /*for (int i = 0; i < c.getQuestionnaires().size(); i++) {
              Container cnq = new Container(new BorderLayout());
        Container cnq2 = new Container(BoxLayout.y());
       
   
      
        

        cnq2.add(c.getQuestionnaires().get(i));
        cnq.add(BorderLayout.WEST, cn2);
      
       
         }*/
        //(String) c.getQuestionnaires().get("username");

       
        return cn1;

    }
     
     
   public MultiButton  addItem_Joueur(Joueur j) {
         
          MultiButton m = new MultiButton();
       
  String url = "http://127.0.0.1:8000/" + j.getImage();
            ImageViewer image_joueur;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
                 image_joueur = new ImageViewer(imge);
        
        
        
        Label nom_coach = new Label("Nom Joueur : "+j.getNom_joueur());
        Label prenom_coach = new Label("Prenom Joueur : "+j.getPrenom_joueur());
        
       Label agresse_mail = new Label("Adresse mail : "+j.getAdresse_mail());
       Label nom_equipe = new Label(" Nom equipe : "+j.getNom_equipe());
       
       
              
        String date = j.getDateNaissance().toString();
                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
                        String dateString = formatter.format(date);
                        j.setDateNaissance(dateString);   
       
       
       
       Label date_naissance = new Label("Date naissance joueur : "+dateString);
       
       Label ville = new Label("Ville : "+j.getVille());
          Label age = new Label(String.valueOf("Age : "+j.getAge_joueur()));

       Label numreo = new Label("Numero : "+String.valueOf(j.getNumero()));
       

   
      Label mdp = new Label("Mot de passe : "+j.getPassword());
            m.setTextLine1(j.getNom_joueur());
        m.setTextLine2(j.getPrenom_joueur());
   
                  
        m.setTextLine3(j.getVille());
          
        m.setEmblem(theme.getImage("round.png"));
      
            m.setIcon(imge);
              m.addActionListener(l
                -> {

            Form f2 = new Form("Detail",BoxLayout.y());
            
            f2.add(addItem_Cotch_detail(j));
             f2.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
           new MyApplication().start();
        });
            f2.show(); });
         
        return m;

    }
   
     

}
