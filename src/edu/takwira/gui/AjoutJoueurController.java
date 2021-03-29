/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import edu.takwira.services.EquipeCrud;
import edu.takwira.services.JoueurCrud;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.io.InputStream;


import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.Instant;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.Calendar;
import java.util.List;
import java.util.Observable;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.DateCell;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.scene.control.DatePicker;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.DragEvent;
import javafx.scene.input.TransferMode;
import javafx.stage.Stage;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
//import org.omg.CORBA.portable.InputStream;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class AjoutJoueurController implements Initializable {

    @FXML
    private Pane titreEquipe;
    @FXML
    private JFXTextField prenom_joueur;
    @FXML
    private JFXTextField ville;
    @FXML
    private JFXTextField nom_joueur;
    @FXML
    private JFXTextField numreo;
    @FXML
    private JFXTextField adresse_mail;
    @FXML
    private JFXComboBox<String> position;
    @FXML
    private JFXComboBox<Integer> id_equipe;
    @FXML
    private JFXDatePicker date_naissance;
    @FXML
    private JFXButton btnAjouter;
    @FXML
    private JFXTextField age;
    java.sql.Timestamp timestamp = null;
   private String nomImage_Joueur = "";
    @FXML
    private ImageView imageview_joueur;
    private String password="";

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ObservableList<String> List = FXCollections.observableArrayList("Attaque","Deffense","Milieu","Goal");


             System.out.println(password);
        
        position.setItems(List);
        LocalDate minDate = LocalDate.of(1980, 1, 1);
LocalDate maxDate = LocalDate.of(2011, 1, 1);
date_naissance.setDayCellFactory(d ->
           new DateCell() {
               @Override public void updateItem(LocalDate item, boolean empty) {
                   super.updateItem(item, empty);
                   setDisable(item.isAfter(maxDate) || item.isBefore(minDate));
               }});
        
        
            // TODO
        Integer choix = id_equipe.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM equipe";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                id_equipe.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }    
    
    
    
    

    @FXML
    private void ajouterjoueur(ActionEvent event) throws MessagingException {
                   password= Randompassword.makePassword(8);

         // int id_j=Integer.parseInt(this.id_joueur.getText());
       String nom_j=this.nom_joueur.getText();
              String prenom_j=this.prenom_joueur.getText();
              

        
          java.util.Date date_n = new java.sql.Date(new java.util.Date(date_naissance.getEditor().getText()).getTime());
 int age=Integer.parseInt(this.age.getText());


       String adresse_mail=this.adresse_mail.getText();
      String ville=this.ville.getText();



          
         int numero=Integer.parseInt(this.numreo.getText());
             String position=this.position.getSelectionModel().getSelectedItem();

    int id_equipe=(Integer) this.id_equipe.getSelectionModel().getSelectedItem();
        //Integer   age=Integer.parseInt(this.age.getText());
        sendmail(adresse_mail,nom_j,prenom_j,password);
            
  Joueur j = new Joueur(nom_j, prenom_j,(java.sql.Date)date_n,age,numero,adresse_mail,ville,"jjj",position,id_equipe,nomImage_Joueur,password);

        //  j.setPassword(password);
            
            
        JoueurCrud ecd=new JoueurCrud();
        if(age<=18)
 {
     j.setCategorie("junior");
 }
 else {     j.setCategorie("sunior");
}

        System.out.println(age);
        
 ecd.ajouterJoueur(j);
        
        //Equipe e=new Equipe(nom_equipe,)
        
        
        
         
                 InputStream inStream = null;
                OutputStream outStream = null;

                try {
                // InputStream inStream = null;

                    File afile = new File("./src/images/" + nomImage_Joueur);
                    File bfile = new File("C:/wamp64/www/images/" + nomImage_Joueur);

                    inStream = new FileInputStream(afile);
                    outStream = new FileOutputStream(bfile);

                    byte[] buffer = new byte[1024];

                    int length;
                    //copy the file content in bytes
                    while ((length = inStream.read(buffer)) > 0) {

                        outStream.write(buffer, 0, length);

                    }

                    inStream.close();
                    outStream.close();

                    System.out.println("File is copied successful!");

                } catch (IOException e) {
                    e.printStackTrace();
                }            
            
            
            
            
        
        
        
    }

 
           

   

   /* private void golistejoueurs(ActionEvent event) throws IOException {
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("affichagejoueurs.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
        
    }*/

    @FXML
    private void CalculerAge(ActionEvent event) {
   // LocalDate ld=date_naissance.getValue();
   // LocalDate date_n=(date_naissance.getValue());
  java.sql.Date date_n = java.sql.Date.valueOf(date_naissance.getValue());


        System.out.println(date_n);
       
 Calendar cal = Calendar.getInstance();
cal.setTime(date_n);



 Calendar now = Calendar.getInstance();
Calendar dob = Calendar.getInstance();
int year_date_naissence = cal.get(cal.YEAR);
int month_date_naissence = cal.get(cal.MONTH);
int day_date_naissence = cal.get(cal.DAY_OF_MONTH);
   
dob.set(year_date_naissence, month_date_naissence, day_date_naissence);
if (dob.after(now)) {
  throw new IllegalArgumentException("Can't be born in the future");
}
int year1 = now.get(Calendar.YEAR);
int year2 = dob.get(Calendar.YEAR);
int age1 = year1 - year2;
int month1 = now.get(Calendar.MONTH);
int month2 = dob.get(Calendar.MONTH);
if (month2 > month1) {
  age1--;
} else if (month1 == month2) {
  int day1 = now.get(Calendar.DAY_OF_MONTH);
  int day2 = dob.get(Calendar.DAY_OF_MONTH);
  if (day2 < day1) {
    age1--;
  }
    System.out.println(age1);
    

   // age.setText(age1.toInt());
   //  Integer.parseInt(age.setText(age1));
  age.setText(String.valueOf(age1));

    // age.setText(age1.getindex().toString());// try this

   
       // System.out.println(date_n);*/
             

    }
    }

    @FXML
    private void handleDragOver_joueur(DragEvent event) {
        if (event.getDragboard().hasFiles()) {
            event.acceptTransferModes(TransferMode.ANY);
        }
    }

    @FXML
    private void handleDrop_joueur(DragEvent event) throws FileNotFoundException {
         List<File> files = event.getDragboard().getFiles();
        Image img = new Image(new FileInputStream(files.get(0)));
        imageview_joueur.setImage(img);
        nomImage_Joueur= files.get(0).getName();
    }
    public static void sendmail(String recepient,String nom,String prenom, String Password_joueur) throws MessagingException 
    {
        System.out.println("preparing");
           Properties properties = new Properties();

        System.out.println("Preparing to send");
        
        properties.put("mail.smtp.auth", "true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "587");
        
        String myAccountEmail = "co.takwira.tunisie@gmail.com";
        String password = "limitless2021";
         
        Session session = Session.getInstance(properties, new javax.mail.Authenticator() {
            @Override
            protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                return new javax.mail.PasswordAuthentication(myAccountEmail, password);
            }
            
});
   
             Message message = prepareMessage(session,myAccountEmail,recepient,nom,prenom,Password_joueur);
Transport.send(message);
System.out.println("send secsussefully");
}
    private static Message prepareMessage(Session session, String myAccountEmail, String recepient,String nom,String prenom,String Password_joueur ) {
        try {
            Message message=new MimeMessage(session);
            message.setFrom(new InternetAddress(myAccountEmail));
            message.setRecipient(Message.RecipientType.TO,new InternetAddress(recepient));
            String body="Vous etes le bienvenue à notre application Co-takwira Mr "+nom+" "+prenom+"\n"+"Votre mot de passe sera "+Password_joueur;
            message.setSubject("Inscription effectuée avec succées");
           message.setText(body);
            return message;
            
        } catch (Exception ex) {
            Logger.getLogger(AjoutJoueurController.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
        
        



}
    
}
