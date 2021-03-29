/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;

import com.jfoenix.controls.JFXButton;
import edu.takwira.entities.All;
import edu.takwira.entities.Coach;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.EntrainementCrud;
import java.io.IOException;
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
 * @author ASUS
 */
public class CalendrierentrainementController implements Initializable {

    @FXML
    private JFXButton goliste;
    @FXML
    private TableView<All> tabview;
    @FXML
    private TableColumn<All, String> nom_coach;
    @FXML
    private TableColumn<All, String> prenom_coach;
    @FXML
    private TableColumn<All, Date> date_entrainement;
    @FXML
    private TableColumn<All, String> nom_equipe;
    @FXML
    private TableColumn<All, String> nom_stade;
    @FXML
    private Pane PutReclamationCard;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
         EntrainementCrud pcd = new EntrainementCrud();
                   List<All> listecoach = new ArrayList<>();
             
                   listecoach=pcd.detailentrainement();

                   ObservableList<All> Liste = FXCollections.observableArrayList(listecoach);
                   
       // .setCellValueFactory(new PropertyValueFactory<Coach,Integer>("id_coach"));
        nom_coach.setCellValueFactory(new PropertyValueFactory<All,String>("nom_coach"));
        prenom_coach.setCellValueFactory(new PropertyValueFactory<All,String>("prenom_coach"));
        date_entrainement.setCellValueFactory(new PropertyValueFactory<All,Date>("date_entrainement"));
        //grade.setCellValueFactory(new PropertyValueFactory<Coach,String>("grade"));
        //date_fin_contrat.setCellValueFactory(new PropertyValueFactory<Coach,java.util.Date>("date_fin_contrat"));
        nom_equipe.setCellValueFactory(new PropertyValueFactory<All,String>("nom_equipe"));
        nom_stade.setCellValueFactory(new PropertyValueFactory<All,String>("nom_stade"));
        //Liste.add(listecoach);
        tabview.setItems(Liste);
        
        
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
    private void setOnMouseClicked(MouseEvent event) {
    }
    
}
