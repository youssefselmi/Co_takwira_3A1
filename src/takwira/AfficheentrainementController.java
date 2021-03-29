/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;
import java.util.Date;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.EntrainementCrud;
import java.io.IOException;
import static java.lang.String.valueOf;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import javafx.util.Callback;
//import static takwira.AfficherCoachController.selectionedCoach;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class AfficheentrainementController implements Initializable {

    @FXML
    private JFXButton goliste;
    @FXML
    private JFXButton btn_update1;
    @FXML
    private TableView<Entrainement> tabview;
    @FXML
    private TableColumn<Entrainement, Integer> id;
    @FXML
    private TableColumn<Entrainement, Integer> duree;
    @FXML
    private TableColumn<Entrainement, Date> date_entrainement;
    @FXML
    private TableColumn<Entrainement, Integer> id_coach;
    @FXML
    private TableColumn<Entrainement, Integer> id_stade;
    @FXML
    private TableColumn<Entrainement, Integer> id_equipe;
    @FXML
    private Pane PutReclamationCard;
    @FXML
    private JFXButton btn_update11;
    static Entrainement selectionedEntrainement;
    @FXML
    private JFXDatePicker tftdateupdate;
   @FXML
    private JFXComboBox<Integer> tftidequipeupdate;
    @FXML
    private JFXComboBox<Integer> tftidstadeupdate;
    @FXML
    private JFXComboBox<Integer> tftidcoachupdate;
    @FXML
    private JFXTextField tftdureeupdate;
    @FXML
    private JFXComboBox<Integer> tftidentrainementupdate;
    @FXML
    private JFXButton btn_update111;
    @FXML
    private TableColumn<Entrainement, String> nom_equipe;
    @FXML
    private TableColumn<Entrainement, String> nom_stade;
    @FXML
    private TableColumn<Entrainement, String> nom_coach;
    @FXML
    private JFXTextField tftnomequipee;
    @FXML
    private JFXTextField tftnomcoache;
    @FXML
    private JFXTextField tftnomstadee;
    @FXML
    private TableColumn<Entrainement, String> ajouterCol;
    @FXML
    private TableColumn<Entrainement, String> Typee;
    @FXML
    private JFXComboBox<String> tfttypeupdate;
    @FXML
    private TableColumn<Entrainement, String> heureentrainement;
    @FXML
    private JFXComboBox<String> tftheureupdate;
 

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
       tftheureupdate.getItems().addAll("9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","13:00","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00","22:30","23:00");

        EntrainementCrud ec = new EntrainementCrud();
       List<Entrainement> Entrainementliste = new ArrayList<>();
       Entrainementliste=ec.afficherEntrainement();
       ObservableList<Entrainement> Liste = FXCollections.observableArrayList(Entrainementliste);
                   
        id.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_entrainement"));
        duree.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("duree"));
       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
        date_entrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,java.util.Date>("date_entrainement"));
        //grade.setCellValueFactory(new PropertyValueFactory<Coach,String>("grade"));
       // date_entrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,java.util.Date>("date_entrainement"));
        //adresse_mail.setCellValueFactory(new PropertyValueFactory<Coach,String>("adresse_mail"));
        
        id_coach.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_coach"));
        id_stade.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_stade"));
        id_equipe.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_equipe"));
        
                nom_equipe.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_equipee"));
                 nom_stade.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_stadee"));
                 nom_coach.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_coache"));
                         Typee.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("type"));
          heureentrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("heure"));





        

        //Liste.add(listecoach);
        
        
         Callback<TableColumn<Entrainement, String>, TableCell<Entrainement, String>> cellFoctory = (TableColumn<Entrainement, String> param) -> {
            // make cell containing buttons
            
            final TableCell<Entrainement, String> cell = new TableCell<Entrainement, String>() {
                @Override
                public void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty);
                    //that cell created only on non-empty rows
                    if (empty) {
                        setGraphic(null);
                        setText(null);

                    } else {

                        Button ajouterPanierButton = new Button(); 
                        ajouterPanierButton.setText("Type entrainement");
                    ajouterPanierButton.setStyle("-fx-background-color:#4CAF50;-fx-background-radius: 5em;\n");

                           ajouterPanierButton.setOnMouseClicked((MouseEvent event) -> {
                        
                           
                                                   String type_entrainement=(String) tfttypeupdate.getSelectionModel().getSelectedItem();
                                                   if(type_entrainement.equals("Attaque"))
                                                   {
                                                             //System.out.println("Entraainement d'attaque");
                                                           Parent home_page_parent;
                                                           try {
                                                           home_page_parent = FXMLLoader.load(getClass().getResource("Attaque.fxml"));
                                                           Scene home_page_scene = new Scene (home_page_parent);
                                                           Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                                                           app_stage.setScene(home_page_scene);
                                                           app_stage.show();
                                                           } catch (IOException ex) {
                                                           Logger.getLogger(AfficheentrainementController.class.getName()).log(Level.SEVERE, null, ex);
                                                               }
                                             
                                                   }
                                                   else if (type_entrainement.equals("Deffence"))
                                                   {  System.out.println("Entraainement de déffence");
                                                    Parent home_page_parent;
                                            try {
                                               home_page_parent = FXMLLoader.load(getClass().getResource("Diffense.fxml"));
                                               Scene home_page_scene = new Scene (home_page_parent);
                                                    Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                                                     app_stage.setScene(home_page_scene);
                                                      app_stage.show();
                                           } catch (IOException ex) {
                                                Logger.getLogger(AfficheentrainementController.class.getName()).log(Level.SEVERE, null, ex);
                                          }
                                                   }
                                                   
                                                   
                                                   else 
                                                       System.out.println("Entraainement de milieu");
                                                    Parent home_page_parent;
                                            try {
                                               home_page_parent = FXMLLoader.load(getClass().getResource("milieu.fxml"));
                                               Scene home_page_scene = new Scene (home_page_parent);
                                                    Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
                                                     app_stage.setScene(home_page_scene);
                                                      app_stage.show();
                                           } catch (IOException ex) {
                                                Logger.getLogger(AfficheentrainementController.class.getName()).log(Level.SEVERE, null, ex);
                                          }
                                                       

                                                       

                           


                           
                       });
                           
                     

                        HBox managebtn = new HBox(ajouterPanierButton);
                        managebtn.setStyle("-fx-alignment:center");
                        HBox.setMargin(ajouterPanierButton, new Insets(2, 2, 0, 3));
                     

                        setGraphic(managebtn);

                        setText(null);

                    }
                }

            };

            return cell;
        };
         ajouterCol.setCellFactory(cellFoctory);

        tabview.setItems(Liste);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
       
       
         Integer choix3 = tftidentrainementupdate.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM entrainement";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidentrainementupdate.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
////////////////////////////////////////////////////////////////////////////////////            
            
         Integer choix2 = tftidcoachupdate.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidcoachupdate.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
            
     /////////////////////////////////////////////////////////////////////////////////////       
         Integer choix4 = tftidstadeupdate.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM stade";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidstadeupdate.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
            
     /////////////////////////////////////////////////////////////////////////////////////       
      Integer choix5 = tftidequipeupdate.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM equipe";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidequipeupdate.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
            
     /////////////////////////////////////////////////////////////////////////////////////       
        
             tfttypeupdate.getItems().add("Attaque");
             tfttypeupdate.getItems().add("Deffence");
             tfttypeupdate.getItems().add("Milieu");
             
            
      
     
        
    }   
    
    
    
    
    
    
    
    
    public String retournom(int id)
    {
    
    String nom="";
     
    //int choix= tftidcoachupdate.getSelectionModel().getSelectedItem();
         //  System.out.println(choix);
//            
        try {

            String requetee = "SELECT nom_coach FROM coach WHERE id_coach = '" + id + "'";

           Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requetee);
            
            
             while (rs.next()) {
                
              // Coach c = new Coach();
               
                nom=rs.getString("nom_coach");
              //  c.setId_coach(rs.getInt(2));
               // tftnomcoache.setText(String.valueOf(rs.getString(1)));

            }
        
        
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
      
    
    return nom;
    
    
    }
    
    
    
     public String retournomstade(int idd)
    {
    
    String nom_stade="";
     
    //int choix= tftidcoachupdate.getSelectionModel().getSelectedItem();
         //  System.out.println(choix);
//            
        try {

            String requetee = "SELECT nom_stade FROM stade WHERE id_stade = '" + idd + "'";

           Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requetee);
            
            
             while (rs.next()) {
                
              // Coach c = new Coach();
               
                nom_stade=rs.getString("nom_stade");
              //  c.setId_coach(rs.getInt(2));
               // tftnomcoache.setText(String.valueOf(rs.getString(1)));

            }
        
        
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
      
    
    return nom_stade;
    
    
    }
    
    
    
     
     
     
     
     
     
       public String retournomequipe(int idequipe)
    {
    
    String nom_equipe="";
     
    //int choix= tftidcoachupdate.getSelectionModel().getSelectedItem();
         //  System.out.println(choix);
//            
        try {

            String requetee = "SELECT nom_equipe FROM equipe WHERE id_equipe = '" + idequipe + "'";

           Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requetee);
            
            
             while (rs.next()) {
                
              // Coach c = new Coach();
               
                nom_equipe=rs.getString("nom_equipe");
              //  c.setId_coach(rs.getInt(2));
               // tftnomcoache.setText(String.valueOf(rs.getString(1)));

            }
        
        
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
      
    
    return nom_equipe;
    
    
    }
     
     
    
    
    
    

    @FXML
    private void goliste(ActionEvent event) throws IOException {
        
         Parent home_page_parent = FXMLLoader.load(getClass().getResource("addentrainement.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
     
    }

    @FXML
    private void deletecoach(ActionEvent event) {
        
        
    }

    @FXML
    private void setOnMouseClicked(MouseEvent event){
        selectionedEntrainement = tabview.getSelectionModel().getSelectedItem();
        //tftdureeupdate.setText(AfficheentrainementController.selectionedEntrainement.getDuree());
        //tftprenomupdate.setText(AfficheentrainementController.selectionedEntrainement.getPrenom_coach());
        tftdureeupdate.setText(String.valueOf(AfficheentrainementController.selectionedEntrainement.getDuree()));
        //tftmailupdate.setText(AfficheentrainementController.selectionedEntrainement.getAdresse_mail());
        tftidcoachupdate.setValue(AfficheentrainementController.selectionedEntrainement.getId_coach());
        tftdateupdate.setValue(AfficheentrainementController.selectionedEntrainement.getDate_entrainement().toLocalDate());  
       tftidequipeupdate.setValue(AfficheentrainementController.selectionedEntrainement.getId_equipe());
       tftidstadeupdate.setValue(AfficheentrainementController.selectionedEntrainement.getId_stade());
       tftidentrainementupdate.setValue(AfficheentrainementController.selectionedEntrainement.getId_entrainement());
      tftnomequipee.setText(AfficheentrainementController.selectionedEntrainement.getNom_equipee());
      tftnomstadee.setText(AfficheentrainementController.selectionedEntrainement.getNom_stadee());
       tftnomcoache.setText(AfficheentrainementController.selectionedEntrainement.getNom_coache());
        tfttypeupdate.setValue(AfficheentrainementController.selectionedEntrainement.getType());
        tftheureupdate.setValue(AfficheentrainementController.selectionedEntrainement.getHeure());

//      



    }
    
    
    
    
    
    
    

    @FXML
    private void deleteentrainement(ActionEvent event) {
        
        int id_entrainement=Integer.parseInt(valueOf(AfficheentrainementController.selectionedEntrainement.getId_entrainement())); 
        System.out.println(id_entrainement);
        //int duree=tftdureeupdate.getText();
       int duree=Integer.parseInt(tftdureeupdate.getText());

       //String id_equipe=tftidequipeupdate.getText();

        //String nom_coach=tftnomupdate.getText();
        //String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
       int coach = (int) tftidcoachupdate.getSelectionModel().getSelectedItem();
       int stade = (int) tftidstadeupdate.getSelectionModel().getSelectedItem();
       int equipe=(int) tftidequipeupdate.getSelectionModel().getSelectedItem();
       
       


        //float salaire=Float.parseFloat(tftsalaireupdate.getText());
        java.util.Date dtae_entrainement = new java.sql.Date(new java.util.Date(tftdateupdate.getEditor().getText()).getTime());
        //java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
        Entrainement e = new Entrainement(id_entrainement, (java.sql.Date) dtae_entrainement,"", duree, coach, stade, equipe,"","","","");
        EntrainementCrud ec = new EntrainementCrud();
        ec.supprimerEntrainement(e); 
        
        refresh();

    }
    
   
    

    
    
    
    
    
    
    
    
    
    
    

    @FXML
    private void updateentrainement(ActionEvent event) {
        
        
      
        
          int id_entrainement=Integer.parseInt(valueOf(AfficheentrainementController.selectionedEntrainement.getId_entrainement())); 
        System.out.println(id_entrainement);
        //int duree=tftdureeupdate.getText();
                int duree=Integer.parseInt(tftdureeupdate.getText());
                
           String type=(String) tfttypeupdate.getSelectionModel().getSelectedItem();
            String heure=(String) tftheureupdate.getSelectionModel().getSelectedItem();



       //String id_equipe=tftidequipeupdate.getText();

        //String nom_coach=tftnomupdate.getText();
        //String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
       String nom_equipee=tftnomequipee.getText();
       String nom_stadee=tftnomstadee.getText();
       String nom_coache=tftnomcoache.getText();

        int coach=(int) tftidcoachupdate.getSelectionModel()  .  getSelectedItem();
        int stade=(int) tftidstadeupdate.getSelectionModel()  .  getSelectedItem();
        int equipe=(int) tftidequipeupdate.getSelectionModel().  getSelectedItem();
        
        
        
        
        //float salaire=Float.parseFloat(tftsalaireupdate.getText());
        java.util.Date dtae_entrainement = new java.sql.Date(new java.util.Date(tftdateupdate.getEditor().getText()).getTime());
        //java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
        Entrainement e = new Entrainement(id_entrainement, (java.sql.Date) dtae_entrainement,heure, duree, coach, stade, equipe,nom_equipee,nom_stadee,nom_coache,type);
        EntrainementCrud ec = new EntrainementCrud();
        ec.updateEntrainement(e); 
        refresh();
        
        
        
        
        
        
        
        
          
    }

    
    private void refresh()
    {
     EntrainementCrud ec = new EntrainementCrud();
             
    List<Entrainement> Entrainementliste = new ArrayList<>();
             
    Entrainementliste=ec.afficherEntrainement();

    ObservableList<Entrainement> Liste = FXCollections.observableArrayList(Entrainementliste);
                   
        id.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_entrainement"));
        duree.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("duree"));
       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
        date_entrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,java.util.Date>("date_entrainement"));
        //grade.setCellValueFactory(new PropertyValueFactory<Coach,String>("grade"));
       // date_entrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,java.util.Date>("date_entrainement"));
        //adresse_mail.setCellValueFactory(new PropertyValueFactory<Coach,String>("adresse_mail"));
        
        id_coach.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_coach"));
                id_stade.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_stade"));
        id_equipe.setCellValueFactory(new PropertyValueFactory<Entrainement,Integer>("id_equipe"));
        
        nom_equipe.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_equipee"));
        nom_stade.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_stadee"));
        nom_coach.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("nom_coache"));
        Typee.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("type"));
                  heureentrainement.setCellValueFactory(new PropertyValueFactory<Entrainement,String>("heure"));




        //Liste.add(listecoach);
        tabview.setItems(Liste);
    
    }

    @FXML
    private void retournomcoach(ActionEvent event) {
                int coach=(int) tftidcoachupdate.getSelectionModel().getSelectedItem();
                String ch = retournom(coach);
                tftnomcoache.setText(ch);
          
    }

    @FXML
    private void retournomstade(ActionEvent event) {
                int stade=(int) tftidstadeupdate.getSelectionModel().getSelectedItem();
                String ch = retournomstade(stade);
                tftnomstadee.setText(ch);
    }

    @FXML
    private void retournomequipe(ActionEvent event) {
        int equipe=(int) tftidequipeupdate.getSelectionModel().getSelectedItem();
                String ch = retournomequipe(equipe);
                tftnomequipee.setText(ch);
    }
    
    
    
    
        
}
