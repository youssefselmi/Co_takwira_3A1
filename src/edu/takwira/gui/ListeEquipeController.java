/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Equipe;
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
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class ListeEquipeController implements Initializable {

    @FXML
    private TableColumn<Equipe,Integer> id_e;
    @FXML
    private TableColumn<Equipe, String> nom_equipe;
    @FXML
    private TableColumn<Equipe, Integer> id_coach;
    @FXML
    private TableView<Equipe> TableView;
    @FXML
    private TableColumn<Equipe, String> nom_coach;
    @FXML
    private TextField nvide;
    @FXML
    private ComboBox<String> nvidc;
    @FXML
    private TextField nvnome;
    @FXML
    private Button update;
    
    
    static Equipe seletionedEquipe;
    //java.util.timstam = null;
    @FXML
    private Button supprimer;
 EquipeCrud service = new EquipeCrud();
    /**
     * Initializes the controller class.
     */
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
    private void updateequipe(ActionEvent event) {
      // int id_equipe=Integer.parseInt(valueOf(ListeEquipeController.seletionedEquipe.getId_equipe())); 
//        System.out.println(id_coach);

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
    private void setOnMouseClicked(MouseEvent event) {
        
        seletionedEquipe = TableView.getSelectionModel().getSelectedItem();
        nvide.setText(String.valueOf(ListeEquipeController.seletionedEquipe.getId_equipe()));
        nvnome.setText(ListeEquipeController.seletionedEquipe.getNom_equipe());
      //    nvidc.setText(ListeEquipeController.seletionedEquipe.getNom_equipe());
        
        nvidc.setValue(String.valueOf(ListeEquipeController.seletionedEquipe.getNom_coach()));

      //  nvnomc.setText(ListeEquipeController.seletionedEquipe.getNom_coach());
    }

  //  @FXML
  /*  private void remplirnomcoach(ActionEvent event) {
        
        
         String choix2= nvidc.getSelectionModel().getSelectedItem();
     
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
            nvnomc.setText(String.valueOf(rs.getString(2)));
                
                
}
} catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
        
        
    }*/

    @FXML
    private void supprimerequipe(ActionEvent event) {
        
         Integer id_equipe=Integer.parseInt(nvide.getText());

        String nom_equipe=nvnome.getText();
        int id_coach=Integer.parseInt(valueOf(ListeEquipeController.seletionedEquipe.getId_coach()));
       // Integer id_coach=Integer.parseInt(nvidc.getText());
       // String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
        
       Equipe e = new Equipe(nom_equipe,id_coach);
       EquipeCrud ee = new EquipeCrud();
       ee.supprimerEquipe(id_equipe);
       refreche ();
        
    }

    @FXML
    private void remplirnomcoach(ActionEvent event) {
    }
    
}
