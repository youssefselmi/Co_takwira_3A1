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
import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import static edu.takwira.gui.AfficherEquipeController.seletionedEquipe;
import edu.takwira.services.EquipeCrud;
import edu.takwira.services.JoueurCrud;
import java.io.IOException;
import static java.lang.String.valueOf;
import java.net.URL;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class AffichagejoueursController implements Initializable {

    @FXML
    private Pane titreEquipe;
    @FXML
    private TableView<Joueur> TableView;
    //private TableColumn<Joueur,Integer > id_joueur;
    @FXML
    private TableColumn<Joueur, String> nom_joueur;
    @FXML
    private TableColumn<Joueur, String> prenom_joueur;

    @FXML
    private TableColumn<Joueur, Date> date_naissance;
    @FXML
    private TableColumn<Joueur, String> mail;
    @FXML
    private TableColumn<Joueur, String> ville;
    @FXML
    private TableColumn<Joueur, String> position;
    @FXML
    private TableColumn<Joueur, Integer> numero;
    @FXML
    private TableColumn<Joueur, Integer> id_equipe;
    
    EquipeCrud service = new EquipeCrud();
         static Joueur seletionedJoueur;
    @FXML
    private JFXTextField id_joueur1;
    @FXML
    private JFXTextField prenom_joueur1;
    @FXML
    private JFXTextField ville1;
    @FXML
    private JFXTextField nom_joueur1;
    @FXML
    private JFXTextField numreo;
    @FXML
    private JFXTextField adresse_mail;
    @FXML
    private JFXComboBox<String> position1;
    @FXML
    private JFXComboBox<Integer> id_equipe1;
    @FXML
    private JFXDatePicker date_naissance1;
    @FXML
    private JFXTextField age;
    @FXML
    private JFXButton btnAjouter;
    @FXML
    private JFXButton btnAjouter1;
    
    @FXML
    private TableColumn<Joueur, String> categorie;
    @FXML

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        JoueurCrud jcd = new JoueurCrud();
        jcd.miseajour();
                   List<Joueur> ListJoueur = new ArrayList<>();
             
                   ListJoueur=jcd.afficherJoueur();

                   ObservableList<Joueur> Liste = FXCollections.observableArrayList(ListJoueur);
                   
        //id_joueur.setCellValueFactory(new PropertyValueFactory<Joueur,Integer>("id_joueur"));
        nom_joueur.setCellValueFactory(new PropertyValueFactory<Joueur,String>("nom_joueur"));
        prenom_joueur.setCellValueFactory(new PropertyValueFactory<Joueur,String>("prenom_joueur"));
        date_naissance.setCellValueFactory(new PropertyValueFactory<Joueur,Date>("dateNaissance"));
        numero.setCellValueFactory(new PropertyValueFactory<Joueur,Integer>("numero"));
        mail.setCellValueFactory(new PropertyValueFactory<Joueur,String>("adresse_mail"));
        ville.setCellValueFactory(new PropertyValueFactory<Joueur,String>("ville"));
                categorie.setCellValueFactory(new PropertyValueFactory<Joueur,String>("categorie"));

                position.setCellValueFactory(new PropertyValueFactory<Joueur,String>("position"));


       id_equipe.setCellValueFactory(new PropertyValueFactory<Joueur,Integer>("id_equipe"));



        
        TableView.setItems(Liste);

        // TODO
    }    

  /*  @FXML
    private void setOnMouseClicked(MouseEvent event) {
         seletionedJoueur = TableView.getSelectionModel().getSelectedItem();
        nom_joueur1.setText(String.valueOf(AffichagejoueursController.seletionedJoueur.getNom_joueur()));
        prenom_joueur1.setText(AffichagejoueursController.seletionedJoueur.getPrenom_joueur());
        
                mail.setText(AffichagejoueursController.seletionedJoueur.getAdresse_mail());

       // prenom_joueur1.setText(AffichagejoueursController.seletionedJoueur.getPrenom_joueur());
        position.setText(AffichagejoueursController.seletionedJoueur.getPosition());
        ville1.setText(AffichagejoueursController.seletionedJoueur.getVille());
                categ.setText(AffichagejoueursController.seletionedJoueur.getCategorie());

        //id_joueur1.setValue(AffichagejoueursController.seletionedJoueur.getId_joueur());
        //id_joueur1=String.setText(valueOf(AffichagejoueursController.seletionedJoueur.getId_joueur())); 

      //    nvidc.setText(ListeEquipeController.seletionedEquipe.getNom_equipe());
     // date_naissance.setValue(AffichagejoueursController.seletionedJoueur.getDateNaissance().toLocalDate);
        numero.setText(String.valueOf(AffichagejoueursController.seletionedJoueur.getNumero()));
       // nvidc.setValue(String.valueOf(AfficherEquipeController.seletionedEquipe.getNom_coach()));
        
        
    }

   // @FXML
 /*   private void deletejoueur(ActionEvent event) {
        
        int id_joueur=Integer.parseInt(valueOf(AffichagejoueursController.seletionedJoueur.getId_joueur())); 
       // System.out.println(id_joueur);
       // int numero=numreo.getText();
        int numero=Integer.parseInt(numreo.getText());

       String nom_joueur=this.nom_joueur.getText();
              String prenom_joueur=this.prenom_joueur.getText();
              String addresse=this.adresse_mail.getText();
              
                            String ville=this.ville.getText();
                           String categorie=this.categ.getText();
                           
             String position=this.position.getText();
        int id_equipe=Integer.parseInt(this.id_equipe.getText());





        //String nom_coach=tftnomupdate.getText();
        //String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
//        int coach=(int) tftidcoachupdate.getSelectionModel().getSelectedItem();
//                int stade=(int) tftidstadeupdate.getSelectionModel().getSelectedItem();
//                                int equipe=(int) tftidequipeupdate.getSelectionModel().getSelectedItem();


        //float salaire=Float.parseFloat(tftsalaireupdate.getText());
        java.util.Date dtae_nais = new java.sql.Date(new java.util.Date(date_naissance1.getEditor().getText()).getTime());
        //java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
        Joueur e = new Joueur(id_joueur,nom_joueur,prenom_joueur, (java.sql.Date) dtae_nais, numero, addresse, ville,categorie,position, id_equipe);
        JoueurCrud ec = new JoueurCrud();
        ec.supprimerJoueur(e);
    }*/

    @FXML
    private void goajoutjoueur(ActionEvent event) throws IOException {
        
        
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("ajoutJoueur.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }
    
}
