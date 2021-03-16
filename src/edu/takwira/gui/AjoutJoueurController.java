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
import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.Instant;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.Calendar;
import java.util.Observable;
import java.util.ResourceBundle;
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
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class AjoutJoueurController implements Initializable {

    @FXML
    private Pane titreEquipe;
    @FXML
    private JFXTextField id_joueur;
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
    @FXML
    private JFXButton btnAjouter1;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
        ObservableList<String> List = FXCollections.observableArrayList("Attaque","Deffense","Milieu","Goal");
    
        
        position.setItems(List);
        LocalDate minDate = LocalDate.of(1989, 4, 16);
LocalDate maxDate = LocalDate.now();
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
    private void ajouterjoueur(ActionEvent event) {
        
     
          int id_j=Integer.parseInt(this.id_joueur.getText());
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
            
  Joueur j = new Joueur(id_j,nom_j, prenom_j,(java.sql.Date)date_n,age,numero,adresse_mail,ville,"jjj",position,id_equipe);

            
            
            
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
        
        
        
         

            
            
            
            
            
        
        
        
    }

 
          // }

   

    @FXML
    private void golistejoueurs(ActionEvent event) throws IOException {
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("affichagejoueurs.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
        
    }

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
    
}
