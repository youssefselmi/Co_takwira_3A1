/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;
import static com.sun.org.apache.xalan.internal.lib.ExsltDatetime.date;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import edu.takwira.entities.Stade;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.Email;
import edu.takwira.services.EntrainementCrud;
import edu.takwira.tools.Connection;
import java.io.IOException;
import static java.lang.String.valueOf;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Date;
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
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import static org.bouncycastle.crypto.modes.kgcm.KGCMUtil_128.x;
import static org.bouncycastle.crypto.modes.kgcm.KGCMUtil_256.x;
import static org.bouncycastle.crypto.modes.kgcm.KGCMUtil_512.x;
import static takwira.AfficheentrainementController.selectionedEntrainement;
import static takwira.TestController.selectionedCoach;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class AddentrainementController implements Initializable {

    @FXML
    private JFXButton goliste;
    @FXML
    private JFXButton btn_update;
    @FXML
    private JFXTextField tftid;
    @FXML
    private JFXDatePicker tftdate;
    @FXML
    private JFXComboBox<Integer> tftidequipe;
    @FXML
    private JFXComboBox<Integer> tftidstade;
    @FXML
    private JFXComboBox<Integer> tftidcoach;
    @FXML
    private JFXTextField tftduree;
    
    static Entrainement selectionedEntrainement;
     static Stade selectionedStade;
     
          static Coach selectionedCoachh;
          static Equipe selectionedEquipe;



    java.sql.Timestamp timestamp = null;
    @FXML
    private TableView<Stade> tabviewstade;
    @FXML
    private TableColumn<Stade, Integer> id;
    @FXML
    private TableColumn<Stade, String> nom_stade;
    
    
    @FXML
    private TableView<Equipe> tabviewstade1;
    @FXML
    private TableColumn<Equipe, Integer> id1;
    @FXML
    private TableColumn<Equipe, String> nom_coach1;
    
    
    @FXML
    private TableColumn<Coach, String> nom_coach2;
    @FXML
    private TableColumn<Coach, String> prenom_coach2;
    @FXML
    private TableView<Coach> tabviewcoach;
    @FXML
    private TableColumn<Coach, Integer> idcoach;
    @FXML
    private Pane PutReclamationCard;
    @FXML
    private JFXButton goliste1;
    @FXML
    private JFXButton goliste11;
    private JFXTextField nom_equipee;
    @FXML
    private JFXTextField txtfield_nom_coach;
    @FXML
    private JFXTextField txtfield_nom_equipe;
    @FXML
    private JFXTextField txtfield_nom_stade;
    @FXML
    private JFXComboBox<String> tfttype;
    @FXML
    private JFXComboBox<String> tftheure;
    
//public stri
    /**
     * Initializes the controller class.
     */
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        
         tftheure.getItems().addAll("9:00","9:30","10:00","10:30","11:00","11:30","12:00","12:30","13:00","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00","21:30","22:00","22:30","23:00");
        
        
          CoachCrud ec = new CoachCrud();
            List<Stade> Entrainementliste = new ArrayList<>();
           Entrainementliste=ec.afficherstade();
           ObservableList<Stade> Liste = FXCollections.observableArrayList(Entrainementliste);
                   
        id.setCellValueFactory(new PropertyValueFactory<Stade,Integer>("id_stade"));
        nom_stade.setCellValueFactory(new PropertyValueFactory<Stade,String>("nom_stade"));
       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
        tabviewstade.setItems(Liste);
        
        
        
        
      
      
         
            CoachCrud ec1 = new CoachCrud();
            List<Coach> coachlisteee = new ArrayList<>();
           coachlisteee=ec1.afficherCoachs();
           ObservableList<Coach> Listee = FXCollections.observableArrayList(coachlisteee);
                   
                idcoach.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("id_coach"));
                nom_coach2.setCellValueFactory(new PropertyValueFactory<Coach,String>("nom_coach"));
                prenom_coach2.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));

       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
      tabviewcoach.setItems(Listee);
      
      
      
      
      
            CoachCrud ec2 = new CoachCrud();
            List<Equipe> equipelisteee = new ArrayList<>();
           equipelisteee=ec2.afficherequipe();
           ObservableList<Equipe> Listeee = FXCollections.observableArrayList(equipelisteee);
                   
        id1.setCellValueFactory(new PropertyValueFactory<Equipe,Integer>("id_equipe"));
        nom_coach1.setCellValueFactory(new PropertyValueFactory<Equipe,String>("nom_equipe"));
               // prenom_coach2.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));

       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
        tabviewstade1.setItems(Listeee);
        
        
        
        // TODO
        //////////////////////////////////////////////////////////////////
        Integer choix = tftidcoach.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidcoach.getItems().addAll(rs.getInt(1));                
            }
            
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
        /////////////////////////////////////////////////////////////////////
         Integer choix2 = tftidstade.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM stade";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidstade.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            /////////////////////////////////////////////////////////////////////
             Integer choix3 = tftidequipe.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM equipe";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                tftidequipe.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            /////////////////////////////////////////////////////////////////////
        
        
             tfttype.getItems().add("Attaque");
             tfttype.getItems().add("Deffence");
             tfttype.getItems().add("Milieu");

            
            
            
        
    }    


    @FXML
    private void addentrainement(ActionEvent event) {
        
         int id_entrainement=Integer.parseInt(tftid.getText());
         int duree=Integer.parseInt(tftduree.getText());
           //int id_coach=Integer.parseInt(valueOf(AddentrainementController.selectionedEntrainement.getId_coach())); 
          // int id_stade=Integer.parseInt(valueOf(AddentrainementController.selectionedEntrainement.getId_Stade())); 
           
          Integer id_coach=(Integer) tftidcoach.getSelectionModel().getSelectedItem();
          Integer id_stade=(Integer) tftidstade.getSelectionModel().getSelectedItem();
          Integer id_equipe=(Integer) tftidequipe.getSelectionModel().getSelectedItem();



        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
        
        Date date_entrainement = new java.sql.Date(new Date(tftdate.getEditor().getText()).getTime());

          //  Date date_fin_contrat = new java.sql.Date(new Date(tftdatefincontrat.getEditor().getText()).getTime());
    
                    String type = tfttype.getSelectionModel().getSelectedItem();
                    
                    String heure = tftheure.getSelectionModel().getSelectedItem();


          
          
               
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////  
                   String cq ="";

            try {
            String requete = "SELECT nom_equipe FROM equipe where id_equipe= '"+id_equipe+ "' ";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                
                 Equipe c = new Equipe();
//               
              cq=rs.getString("nom_equipe");
              c.setNom_equipe(rs.getString("nom_equipe"));
               c.setId_equipe(rs.getInt(2));
               nom_equipee.setText(String.valueOf(rs.getString(1)));

              
                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
 /////////////////////////////////////////////////////////////////////////////////////////////                 
           
               String cq2 ="";

            try {
            String requete = "SELECT nom_coach FROM coach where id_coach= '"+id_coach+ "' ";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                
                 Coach cc = new Coach();
//               
              cq2=rs.getString("nom_coach");
              cc.setNom_coach(rs.getString("nom_coach"));
               cc.setId_coach(rs.getInt(2));
              // nom_equipee.setText(String.valueOf(rs.getString(1)));

              
                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
   //////////////////////////////////////////////////////////////////////////////
     String cq3 ="";

            try {
            String requete = "SELECT nom_stade FROM stade where id_stade= '"+id_stade+ "' ";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                
                 Stade cc = new Stade();
//               
               cq3=rs.getString("nom_stade");
               cc.setNom_stade(rs.getString("nom_stade"));
               cc.setId_stade(rs.getInt(2));
              // nom_equipee.setText(String.valueOf(rs.getString(1)));

              
                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
            
    ///////////////////////////////////////////////////////////////////////////////////////////////////////        
            
          int err=0;  
            
            
             List<Entrainement> entrainementtab = new ArrayList<>();
        try {
            String requete = "SELECT * FROM entrainement";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Entrainement e = new Entrainement();
                e.setId_entrainement(rs.getInt(1));
                e.setDuree(rs.getInt(2));

                e.setDate_entrainement(rs.getDate(3));
                e.setHeure(rs.getString(4));

                e.setId_equipe(rs.getInt(7));
                e.setId_coach(rs.getInt(5));
                e.setId_stade(rs.getInt(6));
                 e.setNom_equipee(rs.getString(8));
                 e.setNom_stadee(rs.getString(9));
                 e.setNom_coache(rs.getString(10));
                 e.setType(rs.getString(11));





                entrainementtab.add(e);
            
                  }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
        
        for(int i=0;i<entrainementtab.size();i++)
        {
           if(id_coach==entrainementtab.get(i).getId_coach()  && entrainementtab.get(i).getDate_entrainement().compareTo(date_entrainement)==0)
           {System.out.println("coach deja a une entrainement dans cette date");
           
  err++;           }
        }
            
            
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////           
            
            
          if(err==0)  
            
          { 
              Entrainement e = new Entrainement(id_entrainement,(java.sql.Date) date_entrainement,heure,duree, id_coach, id_stade,id_equipe,cq,cq3,cq2,type);

        EntrainementCrud ec = new EntrainementCrud();
        ec.ajouterEntrainement(e);
        
                String Sujet="Bonjour Mr "+cq2+"Vous avez une entrainement de type "+type+" planifié a stade "+cq3+" dans la date  "+date_entrainement+" avev l'equipe  "+cq+"     \n Cordialment" ;
            try {
            Email.sendmail("youssefselmi99@gmail.com", Sujet,"Nouvelle Entrainement");
            } catch (Exception ex) {
            Logger.getLogger(AddentrainementController.class.getName()).log(Level.SEVERE, null, ex);
        }
          
            
            
            
            
            
               List<Joueur> joueurtab = new ArrayList<>();

         try {
            String requete = "SELECT * FROM joueur ";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                
                 Joueur j = new Joueur();
                 
                j.setId_joueur(rs.getInt("id_joueur"));
                j.setAdresse_mail(rs.getString("adresse_mail"));
                j.setId_equipe(rs.getInt("id_equipe"));
                joueurtab.add(j);
                
                
                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
         
         for(int k=0;k<joueurtab.size();k++)
         {
         if(joueurtab.get(k).getId_equipe()==id_equipe)
             
         {
         
             System.out.println(id_equipe);
          String Sujettt="Bonjour Mr votre entrainement sera dans  avec l equipe "+cq+"   \n Cordialment" ;
            try {
            Email.sendmail(joueurtab.get(k).getAdresse_mail(), Sujettt,"Nouvelle Entrainement");
            } catch (Exception ex) {
            Logger.getLogger(AddentrainementController.class.getName()).log(Level.SEVERE, null, ex);
        }
         }
         
         }
          
        
            
            
            
            
            
            
            
 
          }
          else {
              System.out.println("verifier les champs");
          }
        
        
   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////     
              
          
   
        
        
    }

   

   

    @FXML
    private void golisteentrainement(ActionEvent event) throws IOException {
            Parent home_page_parent = FXMLLoader.load(getClass().getResource("afficheentrainement.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }


    
    @FXML
    private void gocoach(ActionEvent event) throws IOException {
         Parent home_page_parent = FXMLLoader.load(getClass().getResource("addcoach.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }

    @FXML
    private void calendrierentrainement(ActionEvent event) throws IOException {
        
         Parent home_page_parent = FXMLLoader.load(getClass().getResource("calendrierentrainement.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
    }

    
    
//    private void gomedia(ActionEvent event) throws IOException {
//         Parent home_page_parent = FXMLLoader.load(getClass().getResource("Diffense.fxml"));
//        Scene home_page_scene = new Scene (home_page_parent);
//        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
//        app_stage.setScene(home_page_scene);
//        app_stage.show();
//    }

    @FXML
    private void setOnMouseClicked1(MouseEvent event) {
        selectionedStade = tabviewstade.getSelectionModel().getSelectedItem();
        tftidstade.setValue(AddentrainementController.selectionedStade.getId_stade());
       txtfield_nom_stade.setText(AddentrainementController.selectionedStade.getNom_stade());

        
         
    }

    @FXML
    private void setOnMouseClickedCoach(MouseEvent event) {
         selectionedCoachh = tabviewcoach.getSelectionModel().getSelectedItem();
        tftidcoach.setValue(AddentrainementController.selectionedCoachh.getId_coach());
         txtfield_nom_coach.setText(AddentrainementController.selectionedCoachh.getNom_coach());

         
        
    }

    @FXML
    private void setOnMouseClickedequipe(MouseEvent event) {
         selectionedEquipe = tabviewstade1.getSelectionModel().getSelectedItem();
        tftidequipe.setValue(AddentrainementController.selectionedEquipe.getId_equipe());
        txtfield_nom_equipe.setText(AddentrainementController.selectionedEquipe.getNom_equipe());

    }


    

  
    
    
    
}
