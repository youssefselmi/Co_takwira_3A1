/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXColorPicker;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.StackPane;
import javafx.scene.shape.Rectangle;
import javafx.scene.text.Text;

/**
 * FXML Controller class
 *
 * @author yassin
 */
public class HomeReclamationController implements Initializable {

    @FXML
    private StackPane stckReclam;
    @FXML
    private AnchorPane rootEquipe;
    @FXML
    private Pane PaneEquipe;
    @FXML
    private TableView<?> TableView;
    @FXML
    private TableColumn<?, ?> id_e;
    @FXML
    private TableColumn<?, ?> nom_equipe;
    @FXML
    private TableColumn<?, ?> nom_coach;
    @FXML
    private TableColumn<?, ?> prenom_coach;
    @FXML
    private TableColumn<?, ?> col_NomPrenomCoach1;
    @FXML
    private Pane sidebar;
    @FXML
    private JFXButton btnNewRec;
    @FXML
    private Pane Navicons;
    @FXML
    private AnchorPane containerAddEquipe;
    @FXML
    private JFXComboBox<?> ComboCoachRec;
    @FXML
    private Text textRec;
    @FXML
    private JFXButton btnAjouterEquipe;
    @FXML
    private JFXButton btnCancelAddRec;
    @FXML
    private JFXButton btnModifierEquipe;
    @FXML
    private JFXTextField tfNomEquipe;
    @FXML
    private JFXComboBox<?> combocoach;
    @FXML
    private ImageView Imageview;
    @FXML
    private Rectangle rec1;
    @FXML
    private Rectangle rec2;
    @FXML
    private JFXColorPicker colorpicker;
    @FXML
    private AnchorPane ContainerDeleteEquipe;
    @FXML
    private JFXButton supprimer;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void setOnMouseClicked(MouseEvent event) {
    }

    @FXML
    private void handleShowTableRec(Event event) {
    }

    @FXML
    private void sidebar(MouseEvent event) {
    }

    @FXML
    private void showDialogAddRec(MouseEvent event) {
    }

    @FXML
    private void Navicons(MouseEvent event) {
    }

    @FXML
    private void SelectCoachRec(ActionEvent event) {
    }

    @FXML
    private void AjouterEquipe(ActionEvent event) {
    }

    @FXML
    private void closeDialogAddEquipe(MouseEvent event) {
    }

    @FXML
    private void closeDialogAddequipe(MouseEvent event) {
    }

    @FXML
    private void updateequipe(ActionEvent event) {
    }

    @FXML
    private void hideDialogDeleteEquipe(MouseEvent event) {
    }

    @FXML
    private void supprimerequipe(ActionEvent event) {
    }

    @FXML
    private void hideDialogDeleteReclam(MouseEvent event) {
    }
    
}
