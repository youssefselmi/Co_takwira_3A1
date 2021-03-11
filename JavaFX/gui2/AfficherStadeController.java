/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.gui2;

import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import takiwra.pidev.services.MatchCrud;
import takiwra.pidev.services.StadeCrud;
import takwira.pidev.entities.Match;
import takwira.pidev.entities.Stade;

/**
 * FXML Controller class
 *
 * @author esprit
 */
public class AfficherStadeController implements Initializable {

    @FXML
    private Button btnOrganiser;
    @FXML
    private Button btnConsulter;
    @FXML
    private Button btnModifier;
    @FXML
    private Button btnSupprimer;
    @FXML
    private Label stateLabel;
    @FXML
    private TableView<Stade> StadeTable;
    @FXML
    private JFXTextField search;
    @FXML
    private TableColumn<Stade, Integer> id_stade;
    @FXML
    private TableColumn<Stade, String> nom_stade;
    @FXML
    private TableColumn<Stade, String> adresse;
    @FXML
    private TableColumn<Stade, String> ville;
    @FXML
    private TableColumn<Stade, Integer> capacite;

    /**
     * Initializes the controller class.
     */
    private ObservableList<Stade> dataList = FXCollections.observableArrayList();

    @Override
    public void initialize(URL url, ResourceBundle rb) {

        id_stade.setCellValueFactory(new PropertyValueFactory<>("id_stade"));
        nom_stade.setCellValueFactory(new PropertyValueFactory<>("nom_stade"));
        adresse.setCellValueFactory(new PropertyValueFactory<>("adresse"));

        ville.setCellValueFactory(new PropertyValueFactory<>("ville"));
        capacite.setCellValueFactory(new PropertyValueFactory<>("capacite"));

        StadeCrud mc = new StadeCrud();
        dataList = mc.getStades();
        StadeTable.getItems().addAll(dataList);

        FilteredList<Stade> filteredData = new FilteredList<>(dataList, b -> true);

        search.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(stade -> {

                if (newValue == null || newValue.isEmpty()) {
                    return true;
                }

                String lowerCaseFilter = newValue.toLowerCase();

                if (stade.getNom_stade().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // filtre sur les noms des stades
                } else if (stade.getVille().toLowerCase().indexOf(lowerCaseFilter) != -1) {
                    return true; // filtre sur les noms des villes
                } else if (String.valueOf(stade.getAdresse()).indexOf(lowerCaseFilter) != -1) {
                    return true;
                } else {
                    return false; // pas de recherche
                }
            });
        });

        SortedList<Stade> sortedData = new SortedList<>(filteredData);
        sortedData.comparatorProperty().bind(StadeTable.comparatorProperty());

        StadeTable.setItems(sortedData);

    }

    @FXML
    private void OnBtnOrganiserMouseE(MouseEvent event) {
                btnOrganiser.setStyle("-fx-background-color:#0598ff");

    }
    @FXML
    private void OnBtnOrganiserMouse(MouseEvent event) {
    }


    @FXML
    private void OnBtnOrganiserClicked(ActionEvent event) {
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
