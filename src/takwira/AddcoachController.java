/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.Email;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import static java.lang.String.valueOf;
import java.net.URL;
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
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import static javafx.scene.control.ButtonBar.ButtonData.LEFT;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.DragEvent;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.input.TransferMode;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import javax.swing.JFileChooser;
import javafx.scene.layout.HBox;
import javax.management.Notification;
import org.controlsfx.control.Notifications;


/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class AddcoachController implements Initializable {

    @FXML
    private Pane PutReclamationCard;
    @FXML
    private JFXButton btn_update;
    @FXML
    private JFXTextField tftnom;
    @FXML
    private JFXTextField tftprenom;
    @FXML
    private JFXTextField tftsalaire;
    @FXML
    private JFXDatePicker tftdatenaissance;
    @FXML
    private JFXDatePicker tftdatefincontrat;
    @FXML
    private JFXTextField tftmail;
    private JFXComboBox<String> tftgrade;
    @FXML
    private JFXButton goliste;
    @FXML
    private JFXButton goliste1;
    @FXML
    private JFXTextField nbtr1;
    @FXML
    private JFXTextField nbtr2;
    @FXML
    private JFXComboBox<String> formation_coach;
    @FXML
    private ImageView imageview;
        private String nomImage = "";
    @FXML
    private TextField tfImagecoach;
    @FXML
    private ImageView imageview2;
    @FXML
    private JFXTextField tfImagecoach2;
    @FXML
    private JFXButton goliste2;
    @FXML
    private JFXTextField txtfieldage;
    
    static Integer agee=0;

//    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        //  ObservableList<String> List = FXCollections.observableArrayList("BBE","BBEF");
//              tftgrade.setItems(List);

         formation_coach.getItems().add("442 Offensif");
         formation_coach.getItems().add("442 Deffensif");
         formation_coach.getItems().add("433 Deffensif");
         formation_coach.getItems().add("433 Deffensif");


         
    }    

    @FXML
    private void addcoach(ActionEvent event) {
        
            
       String mdp=""; 
            
            
//        int id_coach=Integer.parseInt(tftid_coach.getText());
String nom_coach=tftnom.getText();
String prenom_coach=tftprenom.getText();
String mail=tftmail.getText();
//String date_naissance=tftdatefincontrat.getTypeSelector();
//String =tftdatefincontrat.getTypeSelector();
//  String grade=(String) tftgrade.getSelectionModel().getSelectedItem();

float salaire=Float.parseFloat(tftsalaire.getText());
Date date_naissance = new java.sql.Date(new Date(tftdatenaissance.getEditor().getText()).getTime());

Date date_fin_contrat = new java.sql.Date(new Date(tftdatefincontrat.getEditor().getText()).getTime());

int nbtr1=Integer.parseInt(this.nbtr1.getText());
int nbtr2=Integer.parseInt(this.nbtr2.getText());
String s = formation_coach.getSelectionModel().getSelectedItem();
String image_coach=tfImagecoach.getText();
String image_formation=tfImagecoach2.getText();




////////////////////////////////////////////////////////////
Date date = new Date();
int year = Integer.valueOf(String.format("%1$tY",date));
System.out.println(year);

int year1 = Integer.valueOf(String.format("%1$tY",date_naissance));
System.out.println(year1-1);
// static Integer age=0;
 
int age;
age=year-year1;
System.out.println(year-year1);

//agee=age;



////////////////////////////////////////////////////////////////////////

int err=0;
if (mail.equals(""))
{
    Notifications.create()
            .title("Erreur Ajout Coach")
            .text("Verifier le champs Email")
            
            .darkStyle().position(Pos.TOP_LEFT).showWarning();
    err++;
}

//if(err==0)
//{
    
    
    Coach c = new Coach(nom_coach, prenom_coach, (java.sql.Date) date_naissance,"b0", (java.sql.Date) date_fin_contrat, mail, salaire , nbtr1, nbtr2, s,image_formation,image_coach,age,"aa");
    CoachCrud cc = new CoachCrud();
    cc.ajouterCoach(c);
    
   
//    Notifications.create()
//            .title(" Ajout Coach")
//            .text("Coach Ajouté Avec Succes")
//            
//            .darkStyle().position(Pos.TOP_LEFT).showWarning();
//}
// else
//     Notifications.create()
//         .title("Erreur Ajout Coach")
//         .text("Verifier les Champs")
//         
//         .darkStyle().position(Pos.TOP_LEFT).showWarning();


String Sujet="Bienvenue Mr "+nom_coach+" "+prenom_coach+" Dans Co_Takwira \n   Votre Contrat avec Co_Takwira expire en   "+date_fin_contrat+ "\n Cordialment" ;
try {
    Email.sendmail(mail, Sujet,"Bienvenue Dnas Co_Takwira");
} catch (Exception ex) {
    Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
}



    
        
        
    }

    @FXML
    private void golistecoach(ActionEvent event) throws IOException {
         Parent home_page_parent = FXMLLoader.load(getClass().getResource("affichagecoach.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
        
    }
    

    @FXML
    private void goentrainement(ActionEvent event) throws IOException {
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("addentrainement.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }

    
    
    
//    @FXML
//    private void handleDragOver(DragEvent event) {
//        if (event.getDragboard().hasFiles()) {
//            event.acceptTransferModes(TransferMode.ANY);
//        }
//    }
//
//    @FXML
//    private void handleDrop(DragEvent event) throws FileNotFoundException {
//        List<File> files = event.getDragboard().getFiles();
//        Image img = new Image(new FileInputStream(files.get(0)));
//        imageview.setImage(img);
//        nomImage = files.get(0).getName();
//    }
//    
    

    @FXML
    private void addImageButton(ActionEvent event) {
         try {
            JFileChooser chooser = new JFileChooser();
            chooser.showOpenDialog(null);
            File f = chooser.getSelectedFile();
            String filname = f.getAbsolutePath();
            tfImagecoach.setText(filname);
            Image getAbsolutePath=null;  
             
             Image image = new Image(new FileInputStream(filname));
             
             
             imageview.setImage(image);
             imageview.setPreserveRatio(true);
             
        } catch (FileNotFoundException ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void addImage_formationButton(ActionEvent event) {
        try {
            JFileChooser chooser = new JFileChooser();
            chooser.showOpenDialog(null);
            File f = chooser.getSelectedFile();
            String filname = f.getAbsolutePath();
            tfImagecoach2.setText(filname);
            Image getAbsolutePath=null;  
            Image image = new Image(new FileInputStream(filname));
             
             
             imageview2.setImage(image);
             imageview2.setPreserveRatio(true);
             
        } catch (FileNotFoundException ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void golistecoachdetails(ActionEvent event) throws IOException {
        
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("CoachDetailsFront.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
    }

    @FXML
    private void calculeageee(MouseEvent event) {   
                 
                 
  Date date_naissance = new java.sql.Date(new Date(tftdatenaissance.getEditor().getText()).getTime());

       Date date = new Date();
int year = Integer.valueOf(String.format("%1$tY",date));
       // System.out.println(year);

int year1 = Integer.valueOf(String.format("%1$tY",date_naissance));
 //System.out.println(year1-1);
    // static Integer age=0;
 
int age;
age=year-year1;
System.out.println(year-year1);
 
 agee=age+1;
txtfieldage.setText(String.valueOf(agee));


    }


 

  
    
 
 
    
    
    
    
    
    
    
    
    
    
    
    
}
