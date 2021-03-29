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
import edu.takwira.entities.Joueur;
import edu.takwira.services.EquipeCrud;
import edu.takwira.services.JoueurCrud;
import java.io.IOException;
import static java.lang.String.valueOf;
import static java.lang.System.load;
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
import static javafx.fxml.FXMLLoader.load;
import static javafx.fxml.FXMLLoader.load;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import javafx.util.Callback;

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
      private TableColumn<Equipe, Boolean> actions;
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
    @FXML
    private TableColumn<?, ?> col_NomPrenomCoach;
    @FXML
    private TableColumn<Equipe, String> prenom_coach;
     
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
                nvidc.getItems().addAll(rs.getString(2)+" "+rs.getString(3));  
                 // nvpc.getItems().addAll(rs.getString(3));   

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
         prenom_coach.setCellValueFactory(new PropertyValueFactory<Equipe,String>("prenom_coach"));
          TableColumn actions = new TableColumn("Action");
             actions.setCellValueFactory(new PropertyValueFactory<Equipe,Boolean>("Actions"));
             
               Callback<TableColumn<Equipe, Boolean>, TableCell<Equipe, Boolean>> cellFactory
                = //
                new Callback<TableColumn<Equipe, Boolean>, TableCell<Equipe, Boolean>>() {
            @Override
            public TableCell call(final TableColumn<Equipe, Boolean> param) {
                final TableCell<Equipe, Boolean> cell = new TableCell<Equipe, Boolean>() {

                    final Button btn = new Button("Edit");

                    public void updateItem(String item, boolean empty) {
                            btn.setOnAction(event -> {
                                Equipe equipe = getTableView().getItems().get(getIndex());
                                System.out.println(equipe.toString());
                        });
                    }
                };
                return cell;
            }
        };
               actions.setCellFactory(cellFactory);
               

             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
            TableView.getColumns().add(actions);
         

       //   nom_coach.setCellValueFactory(new PropertyValueFactory<Equipe,String>(FXCollections.concat(nom_coach,prenom_coach)));
//prenom_coach.setCellValueFactory(new PropertyValueFactory<Equipe,String>("prenom_coach"));
          TableView.getItems().clear();
       //$.add(listecoach);
       TableView.setItems(Liste);
        // TODO
        
        
    }

    @FXML
    private void setOnMouseClicked(MouseEvent event)  { // yasssinnnn 1
        JoueurCrud jc=new JoueurCrud();
        
        seletionedEquipe = TableView.getSelectionModel().getSelectedItem();
       int id3= AfficherEquipeController.seletionedEquipe.getId_equipe();
        try {
            FXMLLoader loader=new FXMLLoader(getClass().getResource("affichagejoueurs.fxml"));
            Parent root = (Parent) loader.load();

            AffichagejoueursController secController=loader.getController();
      secController.haha();

               
           // secController.initialize(url, rb);

            Stage stage=new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }

           nvidc.setValue(String.valueOf(AfficherEquipeController.seletionedEquipe.getNom_coach().concat(AfficherEquipeController.seletionedEquipe.getPrenom_coach())));

        nvide.setText(String.valueOf(AfficherEquipeController.seletionedEquipe.getId_equipe()));
        nvnome.setText(AfficherEquipeController.seletionedEquipe.getNom_equipe());
          //AffichgejoueurController ajc=load.getController;
        //  Scene home_page_scene = new Scene (home_page_parent);
       // Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
       // app_stage.setScene(home_page_scene);
       // app_stage.show();
            
      //    nvidc.setText(ListeEquipeController.seletionedEquipe.getNom_equipe());
        

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
       //String prenom_coach=nvpc.getSelectionModel().getSelectedItem();
       int id=service.recupereridCoach(nom_coach);
        System.out.println(id);       // Integer id_coach=Integer.parseInt(nvidc.getText());
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
