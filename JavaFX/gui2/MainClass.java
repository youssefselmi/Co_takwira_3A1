/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.gui2;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import takwira.pidev.gui.LoginFx;

/**
 *
 * @author esprit
 */
public class MainClass extends Application {
      private double xOffset = 0;
    private double yOffset = 0;
    @Override
    public void start(Stage primaryStage) {
               
        Parent root;
        try {
         root = FXMLLoader.load(getClass().getResource("afficherStade.fxml"));
         // root = FXMLLoader.load(getClass().getResource("ajoutStade.fxml"));
            
            Scene scene = new Scene(root);
            root.setOnMousePressed((new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    
                    xOffset = event.getSceneX();
                    yOffset = event.getSceneY();
                    
                }
            }));
            root.setOnMouseDragged((new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    
                    primaryStage.setX(event.getScreenX() - xOffset);
                    primaryStage.setY(event.getScreenY() - yOffset);
                }
            }));
            
            primaryStage.setScene(scene);
            
            primaryStage.show();
        } catch (IOException ex) {
            Logger.getLogger(LoginFx.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
