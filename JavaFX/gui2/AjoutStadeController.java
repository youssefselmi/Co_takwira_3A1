/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.gui2;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import takiwra.pidev.services.StadeCrud;
import takwira.pidev.entities.Stade;

/**
 * FXML Controller class
 *
 * @author esprit
 */
public class AjoutStadeController implements Initializable {

    @FXML
    private Button btnOrganiser;
    @FXML
    private Button btnConsulter;
    @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
    @FXML
    private JFXButton BAjouter;
    @FXML
    private Label stateLabel;
    @FXML
    private Label x_nomS;
    @FXML
    private Label x_ville;
    @FXML
    private Label x_capacite;
    @FXML
    private JFXTextField tf_adresse;
    @FXML
    private Label x_adresse;
    @FXML
    private JFXTextField tf_capacite;
    @FXML
    private JFXTextField tf_ville;
    @FXML
    private JFXTextField tf_nom;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
    }    
 @FXML
    private void ajouterStade(ActionEvent event) {
        
       String adrr= tf_adresse.getText();
       String nom= tf_nom.getText();
       String ville= tf_ville.getText();
       Integer cap= Integer.parseInt(tf_capacite.getText());
       
       StadeCrud sc = new StadeCrud();
       Stade s = new Stade(nom,ville,adrr,cap);
       sc.ajouterStade(s);
    }
    
    @FXML
    private void OnBtnOrganiserMouseE(MouseEvent event) {
    }

    @FXML
    private void OnBtnOrganiserClicked(ActionEvent event) {
    }

    @FXML
    private void OnBtnOrganiserMouse(MouseEvent event) {
    }

    @FXML
    private void OnBtnConsulterMouseE(MouseEvent event) {
    }

    @FXML
    private void OnBtnConsulterClicked(ActionEvent event) {
    }

    @FXML
    private void OnBtnConsulterMouse(MouseEvent event) {
    }

    @FXML
    private void OnBtnModifierMouseE(MouseEvent event) {
    }

    @FXML
    private void OnBtnModifierClicked(ActionEvent event) {
    }

    @FXML
    private void OnBtnModifierMouse(MouseEvent event) {
    }

    @FXML
    private void OnBtnSupprimerMouseE(MouseEvent event) {
    }

    @FXML
    private void OnBtnSupprimerClicked(ActionEvent event) {
    }

    @FXML
    private void OnBtnSupprimerMouse(MouseEvent event) {
    }

   
}
