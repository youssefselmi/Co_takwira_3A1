/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import edu.takwira.entities.Joueur;
import edu.takwira.services.JoueurCrud;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.stream.Collectors;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.effect.DropShadow;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.paint.Color;
import javafx.scene.paint.ImagePattern;
import javafx.scene.shape.Circle;

/**
 * FXML Controller class
 *
 * @author USER-PC
 */
public class AfficherjoueurController implements Initializable {

    @FXML
    private ImageView stade;
    @FXML
    private Label nomEquipe;
    @FXML
    private Label goal;
    
    private int id_equipe;
    public String categ;
    private String nom_equipe;
    private JoueurCrud jcd = new JoueurCrud();
    @FXML
    private Label attaque2;
    @FXML
    private Label attaque1;
    @FXML
    private Circle cerclegoal;
    @FXML
    private Label milieu1;
    @FXML
    private Label milieu3;
    @FXML
    private Circle cerclegoal1;
    @FXML
    private Circle cerclegoal2;
    @FXML
    private Label def1;
    @FXML
    private Label milieu2;
    @FXML
    private Circle cerclegoal11;
    @FXML
    private Circle cerclegoal13;
    @FXML
    private Circle cerclegoal14;
    @FXML
    private Circle cerclegoal15;
    @FXML
    private Circle cerclegoal131;
    @FXML
    private Circle cerclegoal132;
    @FXML
    private Circle cerclegoal1311;
    @FXML
    private Circle cerclegoal13111;
    @FXML
    private Label def2;
    @FXML
    private Label déf3;
    @FXML
    private Label def4;
    @FXML
    private Label milieu4;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
cerclegoal.setStroke(Color.SEAGREEN);
//Image img=new Image("./src/images/Maillot_blanc.png" ,false);
javafx.scene.image.Image img = new javafx.scene.image.Image(getClass().getResource("ghhaylen.jpg").toExternalForm());

cerclegoal.setFill(new ImagePattern(img));
cerclegoal.setEffect(new DropShadow(+25d, 0d, +2d, Color.DARKGREEN));
    }   
    
    public void initData( int id,String nom_equipe,String categorie )
            
    {
        id_equipe=id;
                categ=categorie;

        this.nom_equipe=nom_equipe;
        nomEquipe.setText(nom_equipe);
        List<Joueur> ListJoueur = new ArrayList<>();
//int a=ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(0).getId_joueur();
        ListJoueur = jcd.afficherJoueur(id,categorie);
                  Joueur goalJoueur = new Joueur();
                  goalJoueur= ListJoueur.stream().filter(e->e.getPosition().equals("Goal")).collect(Collectors.toList()).get(0);
                  
                  int a=ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(0).getId_joueur();
                  int b=ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(1).getId_joueur();
               
        


        goal.setText(goalJoueur.getNom_joueur());
              goal.setOnMouseClicked((MouseEvent event) -> {
        
                            // controller.initData(goal);
                         System.out.println("ABC");
                            


                        });
              
                  int verif=0;
        attaque1.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Attaque")).collect(Collectors.toList()).get(0).getNom_joueur());
        attaque2.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Attaque")).collect(Collectors.toList()).get(1).getNom_joueur());
        milieu1.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Milieu")).collect(Collectors.toList()).get(0).getNom_joueur());
        milieu2.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Milieu")).collect(Collectors.toList()).get(1).getNom_joueur());
        milieu3.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Milieu")).collect(Collectors.toList()).get(2).getNom_joueur());
        milieu4.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Milieu")).collect(Collectors.toList()).get(3).getNom_joueur());
           if(ListJoueur.stream().anyMatch(c->c.getPosition().equals("Deffense")))
           {
                          def1.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(0).getNom_joueur());
                          
                           System.out.println("hhh");
                           try{
                                                     def2.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(1).getNom_joueur());
                                    
                                       déf3.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(2).getNom_joueur());
                           }    catch(Exception ex)  {System.out.println("haahah");}
                                      
                                  

           }
      


               /*    if(ListJoueur.stream().anyMatch(c->c.getPosition().equals("Deffense")))
                   { 
                       if(ListJoueur.stream().anyMatch(c->c.getId_joueur()!=a))
                       {

                          def2.setText(ListJoueur.stream().filter(e->e.getPosition().equals("Deffense")).collect(Collectors.toList()).get(1).getNom_joueur());}
                       else {System.out.println("nrml");}
        
                   }
                                          else {System.out.println("nrml");}*/



        ObservableList<Joueur> Liste = FXCollections.observableArrayList(ListJoueur);
        
    }
    
    public void afficherDetailsJoueur()
    {
        
    }
    
}
