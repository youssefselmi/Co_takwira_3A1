/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;




import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Coach;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.Email;
import edu.takwira.tools.Connection;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import static java.lang.String.valueOf;
import java.net.URL;
import java.sql.PreparedStatement;
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
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.stage.Stage;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
//import static takwira.AfficherCoachController.selectionedCoach;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class TestController implements Initializable {

    @FXML
    private TableView<Coach> tabview;
    @FXML
    private TableColumn<Coach, Integer> id;
    @FXML
    private TableColumn<Coach, String> nom_coach;
    @FXML
    private TableColumn<Coach, String> prenom_coach;
    @FXML
    private TableColumn<Coach, java.util.Date> date_naissance;
    @FXML
    private TableColumn<Coach, String> grade;
    @FXML
    private TableColumn<Coach, java.util.Date> date_fin_contrat;
    @FXML
    private TableColumn<Coach, String> adresse_mail;
    @FXML
    private TableColumn<Coach, Float> salaire;
    @FXML
    private JFXButton btn_update;
    @FXML
    private JFXTextField tftnomupdate;
    @FXML
    private JFXTextField tftprenomupdate;
    @FXML
    private JFXTextField tftmailupdate;
    @FXML
    private JFXTextField tftsalaireupdate;
    @FXML
    private JFXDatePicker tftdatenaissanceupdate;
    @FXML
    private JFXDatePicker tftdatefincontratupdate;
    @FXML
    private JFXComboBox<Integer> tftidcoachupdate;
    @FXML
    private Pane PutReclamationCard;
    @FXML
    private JFXComboBox<String> tftgrade;
    @FXML
    private JFXButton btn_update1;
    
     static Coach selectionedCoach;
    java.sql.Timestamp timestamp = null;
    @FXML
    private JFXButton goliste;
    @FXML
    private JFXTextField nbtrlocaux;
    @FXML
    private JFXTextField nbtrinternationaux;
    @FXML
    private JFXComboBox<String> formation;
    @FXML
    private TableColumn<Coach, Integer> nb1;
    @FXML
    private TableColumn<Coach, Integer> nb2;
    @FXML
    private TableColumn<Coach, String> Formation;
    @FXML
    private TableColumn<Coach, ImageView> imageCol;
    @FXML
    private TableColumn<Coach, ImageView> imageformationCol;
    @FXML
    private JFXButton gostat;
    

    /**
     * Initializes the controller class.
     */
    public void initialize(URL url, ResourceBundle rb) {
        

 long millis = System.currentTimeMillis();
//        java.sql.Date date = new java.sql.Date(millis);
//        
//        try {
//            String requete = "DELETE FROM coach where date_fin_contrat <= '"+date+"' ";
//            
//           
//             Statement st = Connection.getInstance().getCnx()
//                    .createStatement();
//            st.executeUpdate(requete);
//            
//            
//            System.out.println("Tableau coaxh a ete mis a jour");
//            
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }


        
        

// TODO
        
      //  tftgrade.getItems().addAll("BBEE", "BBEEF", "BBEEFF");
      
        tftgrade.getItems().add("b0");
        tftgrade.getItems().add("b1");
        tftgrade.getItems().add("b2");
        tftgrade.getItems().add("b3");
        
         formation.getItems().add("442 Offensif");
         formation.getItems().add("442 Deffensif");
         formation.getItems().add("433 Deffensif");
         formation.getItems().add("433 Deffensif");
       
                
        

        
        
                   CoachCrud pcd = new CoachCrud();
                   List<Coach> listecoach = new ArrayList<>();
             
                   listecoach=pcd.afficherCoachs();

                   ObservableList<Coach> Liste = FXCollections.observableArrayList(listecoach);
                   
        id.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("id_coach"));
        nom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("nom_coach"));
       // prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
       
        prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));

        date_naissance.setCellValueFactory(new PropertyValueFactory<Coach,java.util.Date>("date_naissance"));
        grade.setCellValueFactory(new PropertyValueFactory<Coach,String>("grade"));
        date_fin_contrat.setCellValueFactory(new PropertyValueFactory<Coach,java.util.Date>("date_fin_contrat"));
        adresse_mail.setCellValueFactory(new PropertyValueFactory<Coach,String>("adresse_mail"));
        salaire.setCellValueFactory(new PropertyValueFactory<Coach,Float>("salaire"));
        nb1.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("nb_trophe_locaux"));
        nb2.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("nb_trophe_internationaux"));
        Formation.setCellValueFactory(new PropertyValueFactory<Coach,String>("formation_prefere"));
        
        
        imageCol.setCellValueFactory(new PropertyValueFactory<>("imagedisplay"));
        imageformationCol.setCellValueFactory(new PropertyValueFactory<>("imagedisplayformation"));





        //Liste.add(listecoach);
        tabview.setItems(Liste);
                
     
        ////////////////////////////////////////////////////////////////////////////////////
        
             Integer choix = tftidcoachupdate.getSelectionModel().getSelectedItem();
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
        /////////////////////////////////////////////////////////////////////////////////////////////
        
        
        
        
          
     
    

        
        
    }    

    @FXML
    private void updatecoach(ActionEvent event) {
        
       
        
       // initialize(url, rb);
        
        // int id_coach=Integer.parseInt(valueOf(TestController.selectionedCoach.getId_coach())); 
                int id_coach=(int) tftidcoachupdate.getSelectionModel().getSelectedItem();

        System.out.println(id_coach);
        String prenom_coach=tftprenomupdate.getText();
        String nom_coach=tftnomupdate.getText();
        String mail=tftmailupdate.getText();
        //String date_naissance=tftdatefincontrat.getTypeSelector();
        //String =tftdatefincontrat.getTypeSelector();
        String grade=(String) tftgrade.getSelectionModel().getSelectedItem();
        
        float salaire=Float.parseFloat(tftsalaireupdate.getText());
        java.util.Date date_naissance = new java.sql.Date(new java.util.Date(tftdatenaissanceupdate.getEditor().getText()).getTime());
        java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
        
        int nb1=Integer.parseInt(nbtrlocaux.getText());
        int nb2=Integer.parseInt(nbtrinternationaux.getText());
        String s = formation.getSelectionModel().getSelectedItem();
       // System.out.println(nb1);
           
       //System.out.println(nb2);
       
        float salairefinal=salaire;

              int xx=0;
        if(grade.equals("b1"))
        {
          //tftgrade.getItems().remove("b0");

           salaire=salaire+200; 
           
           
           
            String Sujet="Bonjour Mr "+nom_coach+" "+prenom_coach+ " Felicitation votre salaire a ete augmenté suite a votre nouvelle grade b0 est devenu  "+salaire+"    \n Cordialment" ;
        try {
            Email.sendmail("youssefselmi99@gmail.com", Sujet,"Augmentation Slaire");
            } catch (Exception ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }

          // xx++;
        }
        if(grade.equals("b2"))
        {
            
          salaire=salaire+700; 
          // xx++;
           //salaire=salairefinal+2500; 
           
              String Sujet="Bonjour Mr "+nom_coach+" "+prenom_coach+ " Felicitation votre salaire a ete augmenté suite a votre nouvelle grade b2 est devenu  "+salaire+"    \n Cordialment" ;
        try {
            Email.sendmail("youssefselmi99@gmail.com", Sujet,"Augmentation Slaire");
            } catch (Exception ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        }
        if(grade.equals("b3") /*&& xx==2*/)
        {
         salaire=salaire+1000; 
  
           // salaire=salaire+1500; 
            //xx++;
            
            
                  String Sujet="Bonjour Mr "+nom_coach+" "+prenom_coach+ " Felicitation votre salaire a ete augmenté suite a votre nouvelle grade b3 est devenu  "+salaire+"    \n Cordialment" ;
        try {
            Email.sendmail("youssefselmi99@gmail.com", Sujet,"Augmentation Slaire");
            } catch (Exception ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }
            
         }
        
        /// 1900
//        if(grade.equals("b3") && xx==1)
//        {
//           
//            salaire=salairefinal+3500; 
//            
//        }
        
        
        
         String gradee=(String) tftgrade.getSelectionModel().getSelectedItem();
 
       if(gradee.equals("b1"))
        {
          tftgrade.getItems().remove("b1");
          tftgrade.getItems().remove("b0");


        }
     if(gradee.equals("b2"))
        {
          tftgrade.getItems().remove("b2");
          tftgrade.getItems().remove("b1");
          tftgrade.getItems().remove("b0");

        }
       if(gradee.equals("b3"))
        {
          tftgrade.getItems().remove("b1");
          tftgrade.getItems().remove("b2");
          tftgrade.getItems().remove("b0");

         //tftgrade.getItems().remove("b3");
        }
    

        

        
        
        Coach c = new Coach(id_coach, nom_coach, prenom_coach, (java.sql.Date) date_naissance, grade, (java.sql.Date) date_fin_contrat, mail, salaire, nb1, nb2,s);
        CoachCrud cc = new CoachCrud();
        cc.updateCoach(c);
        refresh();
    }

    @FXML
    private void setOnMouseClicked(MouseEvent event) {
       selectionedCoach = tabview.getSelectionModel().getSelectedItem();
       tftnomupdate.setText(TestController.selectionedCoach.getNom_coach());
       tftprenomupdate.setText(TestController.selectionedCoach.getPrenom_coach());
       tftprenomupdate.setText(TestController.selectionedCoach.getNom_coach());
       tftsalaireupdate.setText(String.valueOf(TestController.selectionedCoach.getSalaire()));
       tftmailupdate.setText(TestController.selectionedCoach.getAdresse_mail());
       tftdatenaissanceupdate.setValue(TestController.selectionedCoach.getDate_naissance().toLocalDate());
       tftdatefincontratupdate.setValue(TestController.selectionedCoach.getDate_fin_contrat().toLocalDate());   
       tftidcoachupdate.setValue(TestController.selectionedCoach.getId_coach());
       tftgrade.setValue(TestController.selectionedCoach.getGrade());
       nbtrlocaux.setText(String.valueOf(TestController.selectionedCoach.getNb_trophe_locaux()));
       nbtrinternationaux.setText(String.valueOf(TestController.selectionedCoach.getNb_trophe_internationaux()));
       formation.setValue(TestController.selectionedCoach.getFormation_prefere());  
       
//                  String gradee=(String) tftgrade.getSelectionModel().getSelectedItem();
// 
//       if(gradee.equals("b1"))
//        {
//          tftgrade.getItems().remove("b1");
//          tftgrade.getItems().remove("b0");
//
//
//        }
//     if(gradee.equals("b2"))
//        {
//          tftgrade.getItems().remove("b2");
//          tftgrade.getItems().remove("b1");
//          tftgrade.getItems().remove("b0");
//
//        }
//       if(gradee.equals("b3"))
//        {
//          tftgrade.getItems().remove("b1");
//          tftgrade.getItems().remove("b2");
//          tftgrade.getItems().remove("b0");
//
//         //tftgrade.getItems().remove("b3");
//        }
        
    }
    
    
    private void refresh()
    {
     CoachCrud pcd = new CoachCrud();
                   List<Coach> listecoach = new ArrayList<>();
             
                   listecoach=pcd.afficherCoachs();

                   ObservableList<Coach> Liste = FXCollections.observableArrayList(listecoach);
                   
        id.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("id_coach"));
        nom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("nom_coach"));
        prenom_coach.setCellValueFactory(new PropertyValueFactory<Coach,String>("prenom_coach"));
        date_naissance.setCellValueFactory(new PropertyValueFactory<Coach,java.util.Date>("date_naissance"));
        grade.setCellValueFactory(new PropertyValueFactory<Coach,String>("grade"));
        date_fin_contrat.setCellValueFactory(new PropertyValueFactory<Coach,java.util.Date>("date_fin_contrat"));
        adresse_mail.setCellValueFactory(new PropertyValueFactory<Coach,String>("adresse_mail"));
        salaire.setCellValueFactory(new PropertyValueFactory<Coach,Float>("salaire"));
        nb1.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("nb_trophe_locaux"));
        nb2.setCellValueFactory(new PropertyValueFactory<Coach,Integer>("nb_trophe_internationaux"));
        Formation.setCellValueFactory(new PropertyValueFactory<Coach,String>("formation_prefere"));

        //Liste.add(listecoach);
        tabview.setItems(Liste);
    
    
    }

    @FXML
    private void deletecoach(ActionEvent event) {
        
       // int id_coach=Integer.parseInt(valueOf(TestController.selectionedCoach.getId_coach())); 
//        System.out.println(id_coach);
//        String prenom_coach=tftprenomupdate.getText();
//        String nom_coach=tftnomupdate.getText();
//        String mail=tftmailupdate.getText();
//        //String date_naissance=tftdatefincontrat.getTypeSelector();
//        //String =tftdatefincontrat.getTypeSelector();
//        String grade=(String) tftgrade.getSelectionModel().getSelectedItem();
//        float salaire=Float.parseFloat(tftsalaireupdate.getText());
//        java.util.Date date_naissance = new java.sql.Date(new java.util.Date(tftdatenaissanceupdate.getEditor().getText()).getTime());
//        java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
     //   Coach c = new Coach(id_coach, nom_coach, prenom_coach, (java.sql.Date) date_naissance, grade, (java.sql.Date) date_fin_contrat, mail, salaire);
     int id_coach=Integer.parseInt(valueOf(TestController.selectionedCoach.getId_coach())); 
     Coach c= new Coach(id_coach);
        CoachCrud cc = new CoachCrud();
        cc.supprimerCoach(c); 
        refresh();
    }
//
//    private void miseajourcoach(ActionEvent event) {
//      int id_coach=Integer.parseInt(valueOf(AfficherCoachController.selectionedCoach.getId_coach())); 
//        System.out.println(id_coach);
//        String prenom_coach=tftprenomupdate.getText();
//        String nom_coach=tftnomupdate.getText();
//        String mail=tftmailupdate.getText();
//        //String date_naissance=tftdatefincontrat.getTypeSelector();
//        //String =tftdatefincontrat.getTypeSelector();
//        String grade=(String) tftgrade.getSelectionModel().getSelectedItem();
//        float salaire=Float.parseFloat(tftsalaireupdate.getText());
//        java.util.Date date_naissance = new java.sql.Date(new java.util.Date(tftdatenaissanceupdate.getEditor().getText()).getTime());
//        java.util.Date date_fin_contrat = new java.sql.Date(new java.util.Date(tftdatefincontratupdate.getEditor().getText()).getTime());
//        Coach c = new Coach(id_coach, nom_coach, prenom_coach, (java.sql.Date) date_naissance, grade, (java.sql.Date) date_fin_contrat, mail, salaire);
//        CoachCrud cc = new CoachCrud();
//        cc.supprimerCoach_fin_contrat();  
//        refresh();
//    }

    @FXML
    private void miseajourcoachee(ActionEvent event) {
        
        
       
 

List<Coach> suppresioncoach = new ArrayList<>();

        long millis = System.currentTimeMillis();
        java.sql.Date date = new java.sql.Date(millis);
       
            try {
            String requete = "SELECT * FROM coach where date_fin_contrat <= '"+date+"' ";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
              //  tftidcoachupdate.getItems().addAll(rs.getInt(1));  
               Coach c = new Coach();
                c.setId_coach(rs.getInt(1));
                c.setNom_coach(rs.getString(2));
                c.setPrenom_coach(rs.getString(3));
                c.setDate_naissance(rs.getDate(4));
                c.setGrade(rs.getString(5));
                c.setDate_fin_contrat(rs.getDate(6));
                c.setAdresse_mail(rs.getString(7));
                c.setSalaire(rs.getFloat(8));
                c.setNb_trophe_locaux(rs.getInt(9));
                c.setNb_trophe_internationaux(rs.getInt(10));
                c.setFormation_prefere(rs.getString(11));
                
               
                
                suppresioncoach.add(c);
                
                
                
                
                
                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
         for(int i=0 ;i<suppresioncoach.size();i++)
         {
        
            String Sujet="Contrat expiré "+suppresioncoach.get(i).getNom_coach()+" "+suppresioncoach.get(i).getPrenom_coach()+/*" Dans Co_Takwira \n   Votre Contrat avec Co_Takwira expire en   "+date_fin_contrat+*/"\n Cordialment" ;
            try {
            Email.sendmail(suppresioncoach.get(i).getAdresse_mail(), Sujet,"Contrat Experé");
            } catch (Exception ex) {
            Logger.getLogger(AddcoachController.class.getName()).log(Level.SEVERE, null, ex);
        }
            
         }






        CoachCrud cc = new CoachCrud();
        cc.supprimerCoach_fin_contrat();  
        refresh();
        
       //////////////////////////////////////////////////////////////////////////////////////////////////// 
        
        
         
         
    }

    @FXML
    private void goliste(ActionEvent event) throws IOException {
        
        
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("addcoach.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
        
        
    }

    @FXML
    private void goExcel(ActionEvent event) {
        
         try {
            String query = "SELECT * from coach";
            PreparedStatement pst = edu.takwira.tools.Connection.getInstance().getCnx().prepareStatement(query);
            ResultSet rs = pst.executeQuery();

            XSSFWorkbook wb = new XSSFWorkbook();
            XSSFSheet sheet = wb.createSheet("Exercices Infos");
            XSSFRow header = sheet.createRow(0);
            header.createCell(0).setCellValue("id_coach");
            header.createCell(1).setCellValue("nom_coach");
            header.createCell(2).setCellValue("prenom_coach");
            header.createCell(3).setCellValue("date_naissance");
            header.createCell(4).setCellValue("grade");
             header.createCell(5).setCellValue("date_fin_contrat");
            header.createCell(6).setCellValue("adresse_mail");
            header.createCell(7).setCellValue("salaire");
            //header.createCell(8).setCellValue("level");
            //header.createCell(9).setCellValue("price");
           // sheet.autoSizeColumn(0);

            sheet.autoSizeColumn(1);
            sheet.autoSizeColumn(2);
            sheet.autoSizeColumn(3);
            sheet.autoSizeColumn(4);
            sheet.autoSizeColumn(5);
            sheet.autoSizeColumn(6);
            sheet.autoSizeColumn(7);
            //sheet.autoSizeColumn(8);
            //sheet.autoSizeColumn(9);
            sheet.setColumnWidth(3, 256 * 25);
            sheet.setZoom(150);
            
            int index = 1;
            while (rs.next()) {
                XSSFRow row = sheet.createRow(index);
                row.createCell(0).setCellValue(rs.getInt("id_coach"));
                row.createCell(1).setCellValue(rs.getString("nom_coach"));
                row.createCell(2).setCellValue(rs.getString("prenom_coach"));
                row.createCell(3).setCellValue(rs.getDate("date_naissance"));
                row.createCell(4).setCellValue(rs.getString("grade"));
                row.createCell(5).setCellValue(rs.getDate("date_fin_contrat"));
                row.createCell(6).setCellValue(rs.getString("adresse_mail"));
                row.createCell(7).setCellValue(rs.getFloat("salaire"));
               // row.createCell(8).setCellValue(rs.getString("level"));
                //row.createCell(9).setCellValue(rs.getFloat("price"));
               
                
                index++;
            }

            FileOutputStream fileOut = new FileOutputStream("EListe Coach" + index + ".xlsx");
            index++;
            wb.write(fileOut);
            fileOut.close();

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Inforamtion dialog");
            alert.setHeaderText(null);
            alert.setContentText("Liste Coach Exported in Excel Sheet");
            alert.showAndWait();

            pst.close();
            rs.close();

        } catch (SQLException | FileNotFoundException ex) {
            Logger.getLogger(TestController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(TestController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void gostat(ActionEvent event) throws IOException {
        Parent home_page_parent = FXMLLoader.load(getClass().getResource("statistiquecoach.fxml"));
        Scene home_page_scene = new Scene (home_page_parent);
        Stage app_stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        app_stage.setScene(home_page_scene);
        app_stage.show();
    }
    
    
     
   
    
}
