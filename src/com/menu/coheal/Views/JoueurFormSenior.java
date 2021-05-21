/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.googlemaps.MapContainer;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.maps.Coord;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.Models.Equipe;
import com.mycompany.Models.Joueur;
import com.menu.coheal.Service.Service_Equipe;
import com.menu.coheal.Service.Service_Joueur;
import com.menu.coheal.ui.HomeForm;
import com.mycompany.myapp.MyApplication;
import java.io.IOException;
import java.io.OutputStream;

/**
 *
 * @author USER-PC
 */
public class JoueurFormSenior extends Form {

    Resources theme = UIManager.initFirstTheme("/themeCoHeal");
    public JoueurFormSenior(Form previous,Equipe e1)
    {

           super("Joueurs",BoxLayout.y());
                 this.add(new InfiniteProgress());

        Display.getInstance().scheduleBackgroundTask(() -> {
            // this will take a while...
            Display.getInstance().callSerially(() -> {
                this.removeAll();
             for (Joueur c : new Service_Joueur().findsenior(e1.getId_e() )) {
         Container rank=new Container(BoxLayout.x());

            this.add(addItem_Joueur(c));
                       //    this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));

     rank.add(new Rate_joueur().createStarRankSlider());
                 this.add(rank);
        }
             
             Button Share=new Button("Share");

 Share.addPointerPressedListener(l->{
     Display.getInstance().execute(" https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2F"+e1.getId_e()+"%2FlistJoueure&amp;src=sdkpreparse");
 });
 this.add(Share);
             
             
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
                 //  new AddEquipeForm(this).show();
               } catch (Exception ex) {
            
               }
               
               
               
        });
           
           
           
           
                this.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
           new ListEquipeForm(theme).showBack();
        });
    }
  
    
     public Container addItem_Cotch_detail(Joueur j) {
  String url = "http://127.0.0.1:8000/uploads/images/" + j.getImage();
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
       
       Label ville = new Label("Position : "+j.getPosition());
       
       Label categorie = new Label("Categorie  : "+j.getCategorie());
       
       Label nom_equipe = new Label("Equipe : "+j.getNom_equipe());

       
//   Label image = new Label("Image : "+j.getImage());

   
      Label mdp = new Label("Mot de passe : "+j.getPassword());
           //  this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));

           
        Button btn = new Button("screen");
        
      Button stat = new Button("Statistique");
                
      Button map = new Button("Ville");


         //  this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));

      
        cn2.add(nom_joueur).add(prenom_joueur).add(age).add(date_naissance).add(adresse_mail).add(ville).add(categorie).add(nom_equipe).add(mdp).add(image_coach).add(map);
        cn2.add(btn).add(stat);
        cn1.add(BorderLayout.WEST, cn2);
        btn.addActionListener(e -> {
               Form form = Display.getInstance().getCurrent();
        if (form != null) {
            
            Image screenshot = Image.createImage(form.getWidth(), form.getHeight());
form.revalidate();
form.setVisible(true);
btn.setVisible(false);
map.setVisible(false);
stat.setVisible(false);
form.paintComponent(screenshot.getGraphics(), true);

String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "screenshot.png";
try(OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
    ImageIO.getImageIO().save(screenshot, os, ImageIO.FORMAT_PNG, 1);
} catch(IOException err) {
    Log.e(err);
}
        }     

        });
        
        
        
        
         stat.addActionListener((x) -> {
                    
                    
                    
             new StatJoueur().createPieChartForm("Coachs", new Service_Joueur().getStat());
  
                    

          
        });
         
         
         
         
         
         
         
         
         
         
         
         
         
                    
          
                  
    map.addActionListener(new ActionListener<ActionEvent>() {
      @Override
      public void actionPerformed(ActionEvent evt) {
 String lat=j.getVille().substring(0,9);
          System.out.println(lat);
          
 double x=Double.parseDouble(lat); 
          System.out.println("aaa"+x);
 String lon=j.getVille().substring(10);
  double y=Double.parseDouble(lon); 
          System.out.println(y);

         //   adresses = geocoder.getFromLocation(localisation.getLatitude(), localisation.getLongitude(), 1);
          System.out.println("yyyyyyyyyyyyyy");
                          Form contmap=new Form("",new FlowLayout());
                          contmap.show();
          System.out.println("yyyyyy");
          MapContainer map = new MapContainer("AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&libraries=places&callback=initialize");
          
      Coord coord = new Coord(x,y);
      
                Style s = new Style();
                s.setFgColor(0x5C246E);
                s.setBgTransparency(0);
                FontImage markerImg = FontImage.createMaterial(FontImage.MATERIAL_PLACE, s);
                EncodedImage icon = EncodedImage.createFromImage(markerImg, false);
             map.addMarker(icon, coord, j.getVille(), null, null);
               map.zoom(coord, 15);
                map.setLabelForComponent(new Label("Location"));
                map.setShowMyLocation(true);
                contmap.add(map);
                contmap.show();
                
                
                 contmap.getToolbar().addCommandToLeftSideMenu("Back", null, ev -> {
               try {
                   new HomeForm(theme).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
                
                        
      }
  });
                  
                  
            
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
       
      
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
//         Container rank=new Container(BoxLayout.x());
          MultiButton m = new MultiButton();
       
  String url = "http://127.0.0.1:8000/uploads/images/" + j.getImage();
            ImageViewer image_joueur;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
                 image_joueur = new ImageViewer(imge);
               //   this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));
//                 rank.add(new Rate_joueur().createStarRankSlider());
//                 this.add(rank);
//                 
        
        
        Label nom_coach = new Label("Nom Joueur : "+j.getNom_joueur());
        Label prenom_coach = new Label("Prenom Joueur : "+j.getPrenom_joueur());
        
       Label agresse_mail = new Label("Adresse mail : "+j.getAdresse_mail());
       Label nom_equipe = new Label(" Nom equipe : "+j.getNom_equipe());
       
       
        String date = j.getDateNaissance().toString();
                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
                        String dateString = formatter.format(date);
                        j.setDateNaissance(dateString);   
       
       
       
       
       Label date_naissance = new Label("Date naissance joueur : "+dateString);
       

          Label age = new Label(String.valueOf("Age : "+j.getAge_joueur()));

       Label numreo = new Label("Numero : "+String.valueOf(j.getNumero()));
       

   
      Label mdp = new Label("Mot de passe : "+j.getPassword());
            m.setTextLine1(j.getNom_joueur());
        m.setTextLine2(j.getPrenom_joueur());
     m.setTextLine3(String.valueOf("Age: "+j.getAge_joueur()));
     
     
     
                    //   this.add(FlowLayout.encloseCenter(new Rate_joueur().createStarRankSlider()));


                    
                    
                    
                    
        m.setEmblem(theme.getImage("round.png"));
      
            m.setIcon(imge);
              m.addActionListener(l
                -> {

            Form f2 = new Form("Detail",BoxLayout.y());
            
            f2.add(addItem_Cotch_detail(j));
             f2.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
                 
           new HomeForm(theme).showBack();
        });
            f2.show(); });
         
        return m;

    }
     
}