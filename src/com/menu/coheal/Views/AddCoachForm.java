/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.menu.coheal.Views;



import com.codename1.capture.Capture;
import com.codename1.codescan.CodeScanner;
import com.codename1.codescan.ScanResult;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import static com.codename1.io.Log.e;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.notifications.LocalNotification;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;


import com.menu.coheal.Models.Coach;
import com.menu.coheal.Service.Service_Coach;




import java.io.IOException;
import java.util.Date;






/**
 *
 * @author ASUS
 */
public class AddCoachForm extends BaseForm{
      String file ;
      String file2 ;
      Resources theme;
    
     public AddCoachForm(Form previous) throws IOException {
      super("Coachs", BoxLayout.y());
      theme = UIManager.initFirstTheme("/themeCoHeal");
 
Label AJOUT = new Label("ADD Coach");


  
//          ImageViewer image_template = new ImageViewer();
//          image_template.setImage(theme.getImage("news-items.jpg"))

     
            this.add(AJOUT);
            
            
//            String urlImage = "news-items.jpg";
//            Image placeHolder = Image.createImage(120, 90);
//            EncodedImage enc = EncodedImage.createFromImage(placeHolder, false);
//            URLImage urlim = URLImage.createToStorage(enc, urlImage, urlImage, URLImage.RESIZE_SCALE);
//            addButton(urlim, theme);
//
//            ScaleImageLabel image = new ScaleImageLabel(urlim);
//            Container containerImg = new Container();
//            image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);

//        ImageViewer image_template = new ImageViewer();
//
//
//        image_template.setImage(theme.getImage("news-items.jpg"));
//



//
//   
//            
//           Tabs swipe = new Tabs();
//        Label s1 = new Label();
//        Label s2 = new Label();
//        addTab(swipe, s1, theme.getImage("back-logo.jpeg"), "", "", theme);
//
//        /////////////////////////////////////////////////
//        swipe.setUIID("Container");
//        swipe.getContentPane().setUIID("Container");
//        swipe.hideTabs();
//           
            
            
        TextField nom_coach = new TextField("", "nom", 20, TextArea.TEXT_CURSOR);
          
        TextField prenom_coach = new TextField("", "prenom", 20, TextArea.TEXT_CURSOR);
        
            Picker  DATENAISSANCE = new Picker ();

       // TextField grade = new TextField("", "Grade", 20, TextArea.TEXT_CURSOR);
        
                ComboBox grade = new ComboBox("b0","b1","b2","b3");

        

        
                   Picker  DATEFINCONTRAT = new Picker ();

             TextField adresse_mail = new TextField("", "Adresse_mail", 20, TextArea.TEXT_CURSOR);
             
           ComboBox formation_prefere = new ComboBox("442 deffensif","442 offensif","443 deffensif","443 offensif");

             
          //TextField formation_prefere = new TextField("", "formation_prefere", 20, TextArea.TEXT_CURSOR);
          

       
         TextField salaire = new TextField("", "salaire", 20, TextArea.TEXT_CURSOR);

          TextField nb_trophe_locaux = new TextField("", "nb_trophe_locaux", 20, TextArea.TEXT_CURSOR);
          
           TextField nb_trophe_iternationaux = new TextField("", "nb_trophe_locaux", 20, TextArea.TEXT_CURSOR);
           
           
        Button upload = new Button("Upload Image coach");
        upload.setUIID("vtnvalid");
        
        
        
        Button upload2 = new Button("Upload Image Formation");
        upload2.setUIID("vtnvalid");
           
           

           TextField age = new TextField("", "Age", 20, TextArea.TEXT_CURSOR);
           TextField mdp_coach = new TextField("", "Mot de passe ", 20, TextArea.TEXT_CURSOR);

        
    
        
        Button save = new Button("Ajouter");
      
        
        
        this.add("Nom : ").add(nom_coach);
        this.add("Prenom : ").add(prenom_coach);
        this.add("Date naissance : ").add(DATENAISSANCE);
        this.add("Grade : ").add(grade);
        
        
        this.add("Date fin contrat : ").add(DATEFINCONTRAT);
        this.add("Mail : ").add(adresse_mail);
        
                this.add("Salaire : ").add(salaire);
               this.add("Formation prefere : ").add(formation_prefere);

                                this.add("Nombre trophe locaux : ").add(nb_trophe_locaux);
                                this.add("Nombre Trophee internationaux : ").add(nb_trophe_iternationaux);
                               
                 this.add("Age : ").add(age);
                 
              this.add("Mot de passe : ").add(mdp_coach);




        
       // this.addAll(image_template);

        this.add(upload);
        this.add(upload2);

        this.add(save);
        
        
        
        
        
        
        upload.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                try {
                    String fileNameInServer = "";
                    MultipartRequest cr = new MultipartRequest();
                    String filepath = Capture.capturePhoto(-1, -1);
                    cr.setUrl("http://localhost/MobileProject/uploadimage.php");
                    cr.setPost(true);
                    String mime = "image/jpeg";
                    cr.addData("file", filepath, mime);
                    String out = new SimpleDateFormat("yyyyMMddhhmmss").format(new Date());
                    cr.setFilename("file", out + ".jpg");//any unique name you want
                    
                    fileNameInServer += out + ".jpg";
                    System.err.println("path2 =" + fileNameInServer);
                    file=fileNameInServer;
                    InfiniteProgress prog = new InfiniteProgress();
                    Dialog dlg = prog.showInifiniteBlocking();
                    cr.setDisposeOnCompletion(dlg);
                    NetworkManager.getInstance().addToQueueAndWait(cr);
                } catch (IOException ex) {
                    System.out.println(ex.getMessage());
                }
                                        
            }
        });
        
        
        
        
        
        
        
        
          upload2.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                try {
                    String fileNameInServer = "";
                    MultipartRequest cr = new MultipartRequest();
                    String filepath = Capture.capturePhoto(-1, -1);
                    cr.setUrl("http://localhost/MobileProject/uploadimage.php");
                    cr.setPost(true);
                    String mime = "image/jpeg";
                    cr.addData("file", filepath, mime);
                    String out = new SimpleDateFormat("yyyyMMddhhmmss").format(new Date());
                    cr.setFilename("file", out + ".jpg");//any unique name you want
                    
                    fileNameInServer += out + ".jpg";
                    System.err.println("path2 =" + fileNameInServer);
                    file2=fileNameInServer;
                    InfiniteProgress prog = new InfiniteProgress();
                    Dialog dlg = prog.showInifiniteBlocking();
                    cr.setDisposeOnCompletion(dlg);
                    NetworkManager.getInstance().addToQueueAndWait(cr);
                } catch (IOException ex) {
                    System.out.println(ex.getMessage());
                }
                                        
            }
        });
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
        save.addActionListener(l
                                -> {

                            if (nom_coach.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de firstname ", "OK", null);

                            }  else if (prenom_coach.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de lastname ", "OK", null);

//                            } else if (grade.getText().equals("")) {
//                                Dialog.show("Erreur", "Champ vide de email ", "OK", null);
//                                
//                                

                            }  else if (adresse_mail.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de password ", "OK", null);} 
                            
                            
                             else if (adresse_mail.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de password ", "OK", null);

                       
                            } 
                            
                            
                            
                            
                            else {
                           
                                try {
                                  
                                    
                                    DateFormat dd = new SimpleDateFormat("yyyy-MM-dd");
                                    Date ddebut = DATENAISSANCE.getDate();
                                    String dated = dd.format(ddebut);
                                    
                                    DateFormat df = new SimpleDateFormat("yyyy-MM-dd");
                                    Date dfin = DATEFINCONTRAT.getDate();
                                    String datef = df.format(dfin);
                                    
                                 
                                    Coach c = new Coach();
                                    c.setNom_coach(nom_coach.getText());
                                    c.setPrenom_coach(prenom_coach.getText());
                                    c.setAdresse_mail(adresse_mail.getText());
                                    c.setDate_naissance(dated);
                                    c.setDate_fin_contrat(datef);

                                    
                                    
                                     if(grade.getSelectedIndex() == 1)
                {
                                    c.setGrade("b0");
                }
                
                if(grade.getSelectedIndex() == 2)
                {
                                    c.setGrade("b1");

                }
                
                if(grade.getSelectedIndex() == 3)
                {
                                    c.setGrade("b2");

                }
                      
                 if(grade.getSelectedIndex() == 4)
                {
                                    c.setGrade("b3");

                }
                      
                
                
                
                                    
                                //    c.setGrade(grade.getSelectCommandText());
                                    c.setSalaire(Float.valueOf(salaire.getText()));
                               
                                    
                                    
                                    
                                    
                                    
           
                                    
                                     
                                     if(formation_prefere.getSelectedIndex() == 0)
                {
                                    c.setFormation_prefere("442 deffensif");
                }
                
                if(formation_prefere.getSelectedIndex() == 1)
                {
                                    c.setFormation_prefere("442 offensif");

                }
                
                if(formation_prefere.getSelectedIndex() == 2)
                {
                                    c.setFormation_prefere("443 deffensif");

                }
                      
                 if(formation_prefere.getSelectedIndex() == 3)
                {
                                    c.setFormation_prefere("443 offensif");

                }
                      
                
                                    
                                    
                                    
                                    c.setNb_trophe_locaux(Integer.valueOf(nb_trophe_locaux.getText()));
                                    c.setNb_trophe_internationaux(Integer.valueOf(nb_trophe_iternationaux.getText()));
                                    c.setAge(Integer.valueOf(age.getText()));
                                    c.setMdp_coach(mdp_coach.getText());
                                    c.setImage_formation(file);
                                    c.setImage_coach(file2);

                                    
                                    
                                  
                                  
                                    
                                    
                                    
           System.out.println("forms.addEvet.addItem()"+c);

           new Service_Coach().AddCoach(c);
           Dialog.show("Ajouter Coach", "Ajouter Coach aves success ", "OK", null);
                                        
                                        
                                 
                                        
  /////////////////////////////////////   Notification     /////////////////////
  
  ToastBar.Status status = ToastBar.getInstance().createStatus();
  status.setMessage("Coach  "+c.getNom_coach()+"  "+c.getPrenom_coach()+"   ajoute avec succes");
  status.setExpires(4000);  // only show the status for 3 seconds, then have it automatically clear
  status.show();
  System.out.println("hallllllllllllllllllllllllllllllo");
////////////////////////////////////////////
                                        
                                } catch (Exception ex) {
                                       System.out.println("hekllllo");
                                }

                            }

                        }
                        );
        
        
        LocalNotification n = new LocalNotification();
        n.setId("demo-notification");
        n.setAlertBody("It's time to take a break and look at me");
        n.setAlertTitle("Break Time!");
        n.setAlertSound("/notification_sound_bells.mp3"); //file name must begin with notification_sound


        Display.getInstance().scheduleLocalNotification(
                n,
                System.currentTimeMillis() + 10 * 1000, // fire date/time
                LocalNotification.REPEAT_MINUTE  // Whether to repeat and what frequency
        );
      
        
        
        
        
        
        
        
        
           
           this.getToolbar().addCommandToLeftSideMenu("Back", null, ev -> {
               try {
                   new CoachForm(this).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
        
        
           
           
           
           
           






           
        
 this.getToolbar().addCommandToLeftBar(null, theme.getImage("back.png"), evx -> {
                this.showBack();
            });
        
        this.show();

             
     
     
                            

      
     
     }
     
     
     
     private void addButton(Image img, Resources res) {
         
         
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);

        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);
        add(cnt);  
        
		}
     
     
     
     
     private void addTab(Tabs swipe, Label spacer, Image image, String string, String text, Resources res) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (image.getHeight() < size) {
            image = image.scaledHeight(size);
        }
        if (image.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            image = image.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }

        ScaleImageLabel imageScale = new ScaleImageLabel(image);
        imageScale.setUIID("Container");
        imageScale.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overLay = new Label("", "ImageOverLay");

//        Container page1 = LayeredLayout.encloseIn(
//                imageScale,
//                overLay,
//                BorderLayout.south(
//                        BoxLayout.encloseY(
//                                new SpanLabel(text, "LargeWhiteText"),
//                                spacer
//                        )
//                )
//        );

        //swipe.addTab("", res.getImage("back-logo.jpeg"));
    }

     
     
     
     
     
     
}
