/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXColorPicker;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Equipe;
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
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.scene.shape.Rectangle;
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
    private JFXComboBox<String> combocoach;
    @FXML
    private Pane titreEquipe;
    @FXML
    private JFXButton btnAjouter1;
    @FXML
    private JFXButton btnAjouter2;
EquipeCrud ee=new EquipeCrud();
    @FXML
    private ImageView Imageview;
    @FXML
    private Rectangle rec1;
    @FXML
    private Rectangle rec2;
    @FXML
    private JFXColorPicker colorpicker;
    @FXML
    private JFXTextField nome;
    /**
     * Initializes the controller class.
     */


    @Override
    public void initialize(URL url, ResourceBundle rb) {
  
        // TODO
        String choix = combocoach.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
          String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                combocoach.getItems().addAll(rs.getString(2)+" "+rs.getString(3));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           colorpicker.setOnAction(new EventHandler<ActionEvent>() {
             @Override
             public void handle(ActionEvent event) {
rec1.setFill(colorpicker.getValue());  
             rec2.setFill(colorpicker.getValue()); 
             
           String a=tfNomEquipe.getText();
nome.setText(a);

             }

         } );
             
    }     
        // TODO
      


    @FXML
    private void AjouterEquipe(ActionEvent event) {
            String nom_equipe=tfNomEquipe.getText();
       // int id_coach=Integer.parseInt(valueOf(ListeEquipeController.seletionedEquipe.getId_coach()));
       String nom_coach=combocoach.getSelectionModel().getSelectedItem();
            
 
            
      int idc= ee.recupereridCoach(nom_coach);
       Equipe e=new Equipe(nom_equipe,idc,"sunior");
       Equipe e2=new Equipe(nom_equipe,idc,"junior");

              EquipeCrud ecd=new EquipeCrud();

       ecd.ajouterEquipe(e);
              ecd.ajouterEquipe(e2);

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
