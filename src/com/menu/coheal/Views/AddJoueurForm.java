/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.capture.Capture;
import com.codename1.components.InfiniteProgress;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.codename1.ui.validation.LengthConstraint;
import com.codename1.ui.validation.RegexConstraint;
import com.codename1.ui.validation.Validator;
import com.mycompany.Models.Equipe;
import com.mycompany.Models.Joueur;
import com.menu.coheal.Service.Service_Equipe;
import com.menu.coheal.Service.Service_Joueur;
import com.menu.coheal.ui.HomeForm;
import java.io.IOException;
import java.util.Calendar;
import java.util.Date;

import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import static jdk.nashorn.internal.runtime.Debug.id;

/**
 *
 * @author USER-PC
 */
public class AddJoueurForm extends Form{
      String file ;
      Resources theme;
     public AddJoueurForm(Form previous) throws IOException {
         

      super("Joueurs", BoxLayout.y());
      theme = UIManager.initFirstTheme("/theme");
 
Label AJOUT = new Label("ADD Joueur");
     
            this.add(AJOUT);

        TextField nom_joueur = new TextField("", "nom", 20, TextArea.ANY);
          
        TextField prenom_joueur = new TextField("", "prenom", 20, TextArea.ANY);
        TextField jae=new TextField("", "prenom", 20, TextArea.TEXT_CURSOR);
        
            Picker  DATENAISSANCE = new Picker ();
            TextField tfage=new TextField("", "age..");
           // TextField tfage=new TextField("","age..");
                    
            DATENAISSANCE.addActionListener(new ActionListener() {
          @Override
          public void actionPerformed(ActionEvent evt) {
              System.out.println(              DATENAISSANCE.getDate()
);
                                  String out = new SimpleDateFormat("yyyy/MM/dd").format(  DATENAISSANCE.getDate());
                                  String auj=new SimpleDateFormat("yyyy-MM-dd").format( new Date());
                                  String mano = out.substring(0,4);
         int p3 = Integer.parseInt(mano);
         String mano1=auj.substring(0,4);
         int a3=Integer.parseInt(mano1);
                                  mano=out.substring(5,7);
                                   int p2 = Integer.parseInt(mano);      // mm
         mano = out.substring(8,10);
         int p1 = Integer.parseInt(mano);   
            
            


       // System.out.println(year);

 //System.out.println(year1-1);
    // static Integer age=0;
 
int age;
age=a3-p3;
System.out.println(age);
 
int agee=age-1;
tfage.setText(String.valueOf(agee));




                      
          }
      });

     //   TextField age_joueur = new TextField("", "Age", 20, TextArea.TEXT_CURSOR);
        
                  TextField numero = new TextField("", "numero", 20, TextArea.NUMERIC);

        

             TextField adresse_mail = new TextField("", "Adresse_mail", 20, TextArea.EMAILADDR);
             

       
         TextField ville = new TextField("", "Ville", 20, TextArea.TEXT_CURSOR);

          //TextField gategorie = new TextField("", "Gategorie", 20, TextArea.TEXT_CURSOR);
          
           //TextField position = new TextField("", "Position", 20, TextArea.TEXT_CURSOR);
        ComboBox cb1=new ComboBox();
                cb1.addItem("Attaque ");
        
                cb1.addItem("Goal");
                                cb1.addItem("Milieu");
                                cb1.addItem("Déffense");

                                
        Button upload = new Button("Upload Image Joueur");
        upload.setUIID("vtnvalid");
        
            ComboBox id_e=new ComboBox();
            
                            for (Equipe e : new Service_Equipe().AffichageEquipe()
                                    ) {

                                
                                    id_e.addItem(e.getNom_equipe());
                                    
                                

                            }

           

           TextField password = new TextField("", "Mot de passe ", 20, TextArea.TEXT_CURSOR);

        
    
        
        Button save = new Button("Ajouter");
      
      
        
        
        this.add("Nom : ").add(nom_joueur);
        this.add("Prenom : ").add(prenom_joueur);
        this.add("Date naissance : ").add(DATENAISSANCE);
       this.add("age : ").add(tfage);
        
        this.add("numero : ").add(numero);

        this.add("Mail : ").add(adresse_mail);
        
      this.add(" Ville : ").add(ville);

                 // this.add("Categorie: ").add(gategorie);
                  this.add("Position : ").add(cb1);
      
            this.add("Id Equipe : ").add(id_e);
//            id_e.addActionListener(new ActionListener() {
//          @Override
//          public void actionPerformed(ActionEvent evt) {
//            String nom;
//              nom=id_e.getSelectedItem().toString();
//                      System.out.println(nom);
//
//          int id=new Service_Equipe().get_Categorie(nom);
//          System.out.println("aaa"+id);
//
//          }
//      });
         System.out.println(id_e.getSelectedItem());
              this.add("Mot de passe : ").add(password);




        
        
        this.add(upload);

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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            Validator val_nom = new Validator();
            val_nom.addConstraint(nom_joueur, new LengthConstraint(4));
            String text_saisir_des_caracteres = "^[0-9]+$";
            val_nom.addConstraint(nom_joueur, new RegexConstraint(text_saisir_des_caracteres, ""));
        
         Validator val_prenom = new Validator();
            val_prenom.addConstraint(prenom_joueur, new LengthConstraint(1));

            val_prenom.addConstraint(prenom_joueur, new RegexConstraint(text_saisir_des_caracteres, ""));
        
        
        
        
        Validator val_num=new Validator();
        val_num.addConstraint(numero, new LengthConstraint(4));
            val_num.addConstraint(numero, new RegexConstraint(text_saisir_des_caracteres, ""));
        
        Validator val_mail=new Validator();
val_mail.addConstraint(adresse_mail, RegexConstraint.validEmail("error"));        
        
        
        
    
        save.addActionListener(l
                                -> {

                            if (nom_joueur.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de firstname ", "OK", null);
                          
                            }
                            else if(val_nom.isValid()){
                              Dialog.show("Erreur Libelle !", "il faut saisir des caracteres   !", "OK", null);

                            
                            }else if (prenom_joueur.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de lastname ", "OK", null);

                            }
                               else if(val_prenom.isValid()){
                              Dialog.show("Erreur Prenom joueur !", "il faut saisir des caracteres  !", "OK", null);

                            
                            }
                            
                            else if (numero.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de email ", "OK", null);

                            } 
                            else if(!val_num.isValid())
                            {  Dialog.show("Erreur", "des numero ", "OK", null);
}
                            else if (Integer.valueOf(numero.getText()) <= 0) {
                                    Dialog.show("Erreur Quantite !", "numero n'est pas acceptable", "OK", null);

                                }
                            
                            
                            
                            
                            else if (adresse_mail.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide d'email ", "OK", null);} 
                            
                            else if(!val_mail.isValid())
                            {   Dialog.show("Erreur", "Verifier votre Mail", "OK", null);} 

                             else if (adresse_mail.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de password ", "OK", null);

                       
                            } 
                            
                            
                            
                            
                            else {
                           
                                try {
                                  
                                    
                                    DateFormat dd = new SimpleDateFormat("yyyy-MM-dd");
                                    Date ddebut = DATENAISSANCE.getDate();
                                    
                                    String dated = dd.format(ddebut);
                                    
                                   
                                 
                                    Joueur c = new Joueur();
                                    
                                    c.setNom_joueur(nom_joueur.getText());
                                    c.setPrenom_joueur(prenom_joueur.getText());
                                    c.setDateNaissance(dated);
                                    c.setAge_joueur(Integer.valueOf(tfage.getText()));
                                    c.setNumero(Integer.valueOf(numero.getText()));
                                    c.setAdresse_mail(adresse_mail.getText());
                                    c.setVille(ville.getText());
                                      c.setPosition(cb1.getSelectedItem().toString());
                                      System.out.println(cb1.getSelectedItem().toString());
    String nom=id_e.getSelectedItem().toString();
 
    int id=new Service_Equipe().get_Categorie(nom);
                                      c.setId_equipe(Integer.valueOf(id));
                                 //   System.out.println(Integer.valueOf(id_e.getSelectedItem().toString()));
                                  
                                    c.setPassword(password.getText());
                                    c.setImage(file);

                                    
                                    
                                  
                                  
                                    
                                    
                                    
                                                 System.out.println("forms.addEvet.addItem()"+c);
                                 new Service_Joueur().AddJoueur(c);


                                        Dialog.show("Ajouter Coach", "Ajouter Joueur aves success ", "OK", null);
                                        
                                        
                                 
                                } catch (Exception ex) {
                                       System.out.println("hekllllo");
                                }

                            }

                        }
                        );
     
       
        
 this.getToolbar().addCommandToLeftBar(null, theme.getImage("back.png"), evx -> {
     
                //this.ListEquipeForm(theme).showBack();
                    
        });

        this.show();
   
        
           
                            

      
  
           this.getToolbar().addCommandToLeftSideMenu("Backk", null, ev -> {
               try {
                   new HomeForm(theme).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
     
  
     

   }
        
           
                            

      
     
}