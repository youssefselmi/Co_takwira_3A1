/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Equipe;
import static edu.takwira.gui.ListeEquipeController.seletionedEquipe;
import edu.takwira.services.EquipeCrud;
import static java.lang.String.valueOf;
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
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class AfficherEquipeController implements Initializable {

    @FXML
    private Pane titreEquipe;
    @FXML
    private TableView<Equipe> TableView;
    @FXML
    private TableColumn<Equipe, Integer> id_e;
    @FXML
    private TableColumn<Equipe, String> nom_equipe;
    @FXML
    private TableColumn<Equipe, String> nom_coach;
   /* @FXML
    private TableColumn<Equipe, ?> col_StatusRec;
    @FXML
    private TableColumn<?, ?> col_NomPrenomCoach;*/

    
    // * Initializes the controller class.
    
     EquipeCrud service = new EquipeCrud();
         static Equipe seletionedEquipe;
  
    @FXML
    private JFXTextField nvide;
    @FXML
    private JFXComboBox<String> nvidc;
    @FXML
    private JFXTextField nvnome;
    @FXML
    private JFXButton btnAjouter;
    @FXML
    private JFXButton supprimer;
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
                       refreche ();
                   
        
       
       // nvidc -> list des noms coach , modifier -> (fct -> (nom_coach) -> id_coach  / ..... ) 
        
         try {
            String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                nvidc.getItems().addAll(rs.getString(2));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        // TODO
    }    
     private void refreche ()
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
        
        
    }

    @FXML
    private void setOnMouseClicked(MouseEvent event) {
        
        
        seletionedEquipe = TableView.getSelectionModel().getSelectedItem();
        nvide.setText(String.valueOf(AfficherEquipeController.seletionedEquipe.getId_equipe()));
        nvnome.setText(AfficherEquipeController.seletionedEquipe.getNom_equipe());
      //    nvidc.setText(ListeEquipeController.seletionedEquipe.getNom_equipe());
        
        nvidc.setValue(String.valueOf(AfficherEquipeController.seletionedEquipe.getNom_coach()));

    }

    @FXML
    private void remplirnomcoach(ActionEvent event) {
    }

    @FXML
    private void updateequipe(ActionEvent event) {
      
        Integer id_equipe=Integer.parseInt(nvide.getText());

        String nom_equipe=nvnome.getText();
       // int id_coach=Integer.parseInt(valueOf(ListeEquipeController.seletionedEquipe.getId_coach()));
       String nom_coach=nvidc.getSelectionModel().getSelectedItem();
       int id=service.recupereridCoach(nom_coach);
       // Integer id_coach=Integer.parseInt(nvidc.getText());
             // setId_coach(nvidc.getSelectionModel().getSelectedItem());

       Equipe e = new Equipe(nom_equipe,id);
       EquipeCrud ee = new EquipeCrud();
              ee.updateEquipe(id_equipe, e);
    
     
       
       refreche();
        
    }

    @FXML
    private void supprimerequipe(ActionEvent event) {
             Integer id_equipe=Integer.parseInt(nvide.getText());

        String nom_equipe=nvnome.getText();
        int id_coach=Integer.parseInt(valueOf(AfficherEquipeController.seletionedEquipe.getId_coach()));
       // Integer id_coach=Integer.parseInt(nvidc.getText());
       // String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
        
       Equipe e = new Equipe(nom_equipe,id_coach);
       EquipeCrud ee = new EquipeCrud();
       ee.supprimerEquipe(id_equipe);
       refreche ();
        
        
    }

    
}
