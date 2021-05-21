/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.menu.coheal.Views;


import com.codename1.codescan.CodeScanner;
import com.codename1.codescan.ScanResult;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.ToastBar;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
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

//package com.menu.coheal.Views;

import com.menu.coheal.Models.Coach;
import com.menu.coheal.Service.Service_Coach;
import com.menu.coheal.ui.HomeForm;
//import static com.menu.coheal.Views.ListEntrainementForm.getScreenshot;


import com.mycompany.myapp.MyApplication;
import java.io.IOException;
import java.io.OutputStream;



/**
 *
 * @author ASUS
 */
public class CoachForm extends BaseForm {

    Resources theme = UIManager.initFirstTheme("/themeCoHeal");
    public CoachForm(Form previous)
    {
        
        
        
        
        
        
           super("Categories",BoxLayout.y());
                 this.add(new InfiniteProgress());
        Display.getInstance().scheduleBackgroundTask(() -> {
            // this will take a while...

            Display.getInstance().callSerially(() -> {
                this.removeAll();
             for (Coach c : new Service_Coach().findAll()) {

            this.add(addItem_Coach(c));

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
                   new AddCoachForm(this).show();
               } catch (Exception ex) {
            
               }
               
               
               
        });
           
           
           
                  
  
           this.getToolbar().addCommandToLeftSideMenu("Back", null, ev -> {
               try {
                   new HomeForm(theme).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });

    }
    
    
//      public static Image getScreenshot() {
//        Form form = Display.getInstance().getCurrent();
//        if (form != null) {
//            Image screenshot = Image.createImage(form.getWidth(), form.getHeight());
//            form.paintComponent(screenshot.getGraphics(), true);
//            
//            return screenshot;
//            
//            
//            
//        } else {
//            
//            return null;
//        }   
//       
//
//
//      }
//    
    
    
     public Container addItem_Cotch_detail(Coach c) {
  String url = "http://127.0.0.1:8000/uploads/images/" + c.getImage_coach();
  
  
      
  
  
  
            ImageViewer image_coach;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
            
                 image_coach = new ImageViewer(imge);
        
        Container cn1 = new Container(new BorderLayout());
        Container cn2 = new Container(BoxLayout.y());
        
        Label nom_coach = new Label("Nom Coach : "+c.getNom_coach());
        Label prenom_coach = new Label("Prenom Coach : "+c.getPrenom_coach());
        
       Label grade = new Label("Grade Coach : "+c.getGrade());
       
       
                    String date = c.getDate_naissance().toString();
                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
                        String dateString = formatter.format(date);
                        c.setDate_naissance(dateString);   
       
      //  dateString.substring(2,3);
       
       Label date_naissance = new Label("Date_naissance Coach : "+dateString);
       
       
                    
         
       
       
       Label adresse_mail = new Label("Adresse_mail : "+c.getAdresse_mail());
       
       Label date_fin_contrat = new Label("Date_fin_contrat : "+c.getDate_fin_contrat());
     
       Label formation_prefere = new Label("Formation prefere : "+c.getFormation_prefere());
       
       Label salaire = new Label("Salaire : "+String.valueOf(c.getSalaire()));
       
       Label nbtrophelocaux = new Label("Trophe Locaux : "+String.valueOf(c.getNb_trophe_locaux()));
       
       Label nbtropheinternationaux = new Label("Trophe Internationaux : "+String.valueOf(c.getNb_trophe_internationaux()));
       
       
      Label image_formation = new Label("Image Foamtion : "+c.getImage_formation());

      Label age = new Label(String.valueOf("Age : "+c.getAge()));
      
      Label mdp = new Label("Mot de passe : "+c.getMdp_coach());
      
           
      //  Button btn = new Button("Supprimer");
        Button screen = new Button("Screen");

        
                       Button statistique = new Button("Statistique");    

        
      
        cn2.add(nom_coach).add(prenom_coach).add(grade).add(date_naissance).add(adresse_mail).add(date_fin_contrat).add(formation_prefere).add(salaire).add(nbtrophelocaux).add(nbtropheinternationaux).add(image_formation).add(image_coach).add(age).add(mdp).add(statistique);
        cn1.add(BorderLayout.WEST, cn2);
        
        
        
        
        
        
        screen.addActionListener(e -> {
            
             Form form = Display.getInstance().getCurrent();
        if (form != null) {
            
            Image screenshot = Image.createImage(form.getWidth(), form.getHeight());
form.revalidate();
form.setVisible(true);
form.paintComponent(screenshot.getGraphics(), true);

String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "screenshot.png";
try(OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
    ImageIO.getImageIO().save(screenshot, os, ImageIO.FORMAT_PNG, 1);
} catch(IOException err) {
    Log.e(err);
}
        }  
            
            });
        
        
        
        
        
                statistique.addActionListener((x) -> {
                    
                    
                    
             new StatCoach().createPieChartForm("Coachs", new Service_Coach().getStat());
  
                    

          
        });
                
            
        
        
        
        
      
         /*for (int i = 0; i < c.getQuestionnaires().size(); i++) {
              Container cnq = new Container(new BorderLayout());
        Container cnq2 = new Container(BoxLayout.y());
       
   
      
        

        cnq2.add(c.getQuestionnaires().get(i));
        cnq.add(BorderLayout.WEST, cn2);
      
       
         }*/
        //(String) c.getQuestionnaires().get("username");
        
        
        
        

        
        
        
//        CodeScanner scanner=CodeScanner.getInstance();
//       scanner.scanQRCode(new ScanResult()
//{ public void scanCompleted(String contents,String formatName, byte[] rawBytes)
//
//{ Dialog.show("Contenu du QRcode", contents,"Ok", null);
//
//} 
//
//public void scanCanceled() { 
//    
//    Dialog.show("Annulation", "Scan ducode annulé", "Ok", null); } 
//
//public void scanError(int errorCode, String message) {
//Dialog.show("Erreur", "Une erreur s’est produite. "+message, "Ok", null); 
//
//
//}
//
//
//});
        
        
        
      
        return cn1;

    }
     
     
   public MultiButton  addItem_Coach(Coach c) {
     
          MultiButton m = new MultiButton();
          
/////////////////////////////////////   Notification     /////////////////////
  ToastBar.Status status = ToastBar.getInstance().createStatus();
  status.setMessage("Liste des coachs");
  status.setExpires(4000);  // only show the status for 3 seconds, then have it automatically clear
  status.show();
  System.out.println("Hallo");
///////////////////////////////////////////

                   
               

  String url = "http://127.0.0.1:8000/uploads/images/" + c.getImage_coach();
            ImageViewer image_coach;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
                 image_coach = new ImageViewer(imge);
        
        Label nom_coach = new Label("Nom Coach : "+c.getNom_coach());
        Label prenom_coach = new Label("Prenom Coach : "+c.getPrenom_coach());  
       Label grade = new Label("Grade Coach : "+c.getGrade());
       
       
       
       
       Label date_naissance = new Label("Date_naissance Coachhhhh : "+c.getDate_naissance());

       Label adresse_mail = new Label("Adresse_mail : "+c.getAdresse_mail());
       Label date_fin_contrat = new Label("Date_fin_contrat : "+c.getDate_fin_contrat());
       Label formation_prefere = new Label("Formation prefere : "+c.getFormation_prefere());
       Label salaire = new Label("Salaire : "+String.valueOf(c.getSalaire()));
       Label nbtrophelocaux = new Label("Trophe Locaux : "+String.valueOf(c.getNb_trophe_locaux()));
       Label nbtropheinternationaux = new Label("Trophe Internationaux : "+String.valueOf(c.getNb_trophe_internationaux())); 
       Label image_formation = new Label("Image Foamtion : "+c.getImage_formation());
       Label age = new Label(String.valueOf("Age : "+c.getAge()));
       Label mdp = new Label("Mot de passe : "+c.getMdp_coach());
       m.setTextLine1(c.getNom_coach());
       m.setTextLine2(c.getPrenom_coach());
       
        m.setTextLine3(c.getGrade());
          
        m.setEmblem(theme.getImage("round.png"));
      
            m.setIcon(imge);
              m.addActionListener(l
                -> {

            Form f2 = new Form("Detail",BoxLayout.y());
            
            f2.add(addItem_Cotch_detail(c));
             f2.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
                   new CoachForm(this).showBack();
        });
            f2.show(); });
         
        return m;

    }
         
        
}




