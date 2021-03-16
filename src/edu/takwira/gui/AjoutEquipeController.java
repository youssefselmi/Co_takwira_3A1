/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Equipe;
import edu.takwira.services.EquipeCrud;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author pc_dell
 */
public class AjoutEquipeController implements Initializable {

    @FXML
    private Button btnAjouter;
    @FXML
    private TextField tfNomEquipe;
    @FXML
    private ComboBox<Integer> combocoach;
    @FXML
    private TextField tfnomcoach;
    @FXML
    private TextField prenom;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        // TODO
        Integer choix = combocoach.getSelectionModel().getSelectedItem();
       // System.out.println(choix);
                  // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
            try {
            String requete = "SELECT * FROM coach";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while (rs.next()) {
                combocoach.getItems().addAll(rs.getInt(1));                
            }
            } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
                  
    }
    @FXML
    private void AjouterEquipe(ActionEvent event) {
        Equipe e=new Equipe();
        e.setNom_equipe(tfNomEquipe.getText());
       e.setId_coach(combocoach.getSelectionModel().getSelectedItem());
      

            
            
            
            
            
            
            
       EquipeCrud ecd=new EquipeCrud();
       ecd.ajouterEquipe(e);
        
        //Equipe e=new Equipe(nom_equipe,)
        
        
        
        
    }

    @FXML
    private void recupernom(ActionEvent event) {
         int choix2= combocoach.getSelectionModel().getSelectedItem();
            System.out.println(choix2);
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
                c.setPrenom_coach(rs.getString(3));
            tfnomcoach.setText(String.valueOf(rs.getString(2)));
prenom.setText(String.valueOf(rs.getString(3)));
                
                
}
} catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
    }
    
    
}
