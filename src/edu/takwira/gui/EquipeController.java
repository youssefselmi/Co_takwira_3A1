/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Equipe;
import static edu.takwira.gui.ListeEquipeController.seletionedEquipe;
import edu.takwira.services.EquipeCrud;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
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
public class EquipeController implements Initializable {

    @FXML
    private JFXButton btnAjouter;
    @FXML
    private JFXTextField tfNomEquipe;
    @FXML
    private JFXTextField tfnomcoach;
    @FXML
    private JFXTextField prenom;
    @FXML
    private JFXComboBox<Integer> combocoach;
    @FXML
    private Pane titreEquipe;
    @FXML
    private JFXButton btnAjouter1;
    @FXML
    private JFXButton btnAjouter2;

    /**
     * Initializes the controller class.
     */


    @Override
    public void initialize(URL url, ResourceBundle rb) {

             
        // TODO
        Integer choix = combocoach.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                combocoach.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
             
        // TODO
    }  
    /* private void refreche ()
    {
        List<Equipe> listequipe = new ArrayList<>();
             
                   listequipe=service.afficherEquipe();

                   ObservableList<Equipe> Liste = FXCollections.observableArrayList(listequipe);
                   
        id_e.setCellValueFactory(new PropertyValueFactory<Equipe,Integer>("id_equipe") );
        nom_equipe.setCellValueFactory(new PropertyValueFactory<Equipe,String>("nom_equipe"));
        //id_coach.setCellValueFactory(new PropertyValueFactory<Equipe,Integer>("id_coach"));
          nom_coach.setCellValueFactory(new PropertyValueFactory<Equipe,String>("nom_coach"));

          TableView.getItems().clear();
       //$.add(listecoach);
       TableView.setItems(Liste);
        // TODO
        
        
    }*/



    @FXML
    private void AjouterEquipe(ActionEvent event) {
          Equipe e=new Equipe();
        e.setNom_equipe(tfNomEquipe.getText());
       e.setId_coach(combocoach.getSelectionModel().getSelectedItem());
          EquipeCrud ecd=new EquipeCrud();
       ecd.ajouterEquipe(e);
    }

    @FXML
    private void recupernom(ActionEvent event) {
        System.out.println("sjsjs");
          int choix2= combocoach.getSelectionModel().getSelectedItem();
            System.out.println(choix2);
            try {
                        //Statement pstt;
            String requetee = "SELECT * FROM coach WHERE id_coach = '" + choix2+ "'";

           Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requetee);
            
            
             while (rs.next()) {
                
                 //  Equipe e1= new Equipe();
                 Coach c=new Coach();
               
               
                c.setNom_coach(rs.getString(2));
                c.setPrenom_coach(rs.getString(3));
            tfnomcoach.setText(String.valueOf(rs.getString(2)));
           
prenom.setText(String.valueOf(rs.getString(3)));
                 System.out.println("jsksjsh");
                
                
}
} catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
    }


    @FXML
    private void golisteequipe(ActionEvent event) throws IOException {
        
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("AfficherEquipe.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }

    @FXML
    private void goAjouterJoueur(ActionEvent event) throws IOException {
         Parent home_page_parent = FXMLLoader.load(getClass().getResource("ajoutJoueur.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }
   
    

    
}
