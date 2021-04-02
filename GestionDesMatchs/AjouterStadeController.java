/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.gui3;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextField;
import java.io.BufferedReader;
import java.io.File;
import java.io.IOException;
import java.io.InputStreamReader;
import static java.lang.Integer.parseInt;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.swing.DefaultListModel;
import org.json.simple.JSONArray;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;
import takiwra.pidev.services.StadeCrud;
import takiwra.pidev.services.mail;
import takwira.pidev.entities.Stade;
import takwira.pidev.gui.LoginController;

/**
 * FXML Controller class
 *
 * @author esprit
 */
public class AjouterStadeController implements Initializable {

    @FXML
    private Label lbl_prog;
    @FXML
    private Label lbl_enCours;
    @FXML
    private JFXButton BtnMatchs;
    @FXML
    private JFXButton BtnStade;
    @FXML
    private JFXButton BtnStat;
    @FXML
    private JFXButton BtnVote;
    @FXML
    private JFXButton actualiser;
    @FXML
    private Label LabelD;
    @FXML
    private Label LabelD2;
    @FXML
    private JFXTextField t_nom;
    @FXML
    private Label lab_nom;
    @FXML
    private JFXTextField t_ville;
    @FXML
    private Label lab_ville;
    @FXML
    private JFXTextField t_adresse;
    @FXML
    private Label lab_adresse;
    @FXML
    private JFXTextField t_capacite;
    @FXML
    private Label lab_capa;
    @FXML
    private JFXButton BtnAjouter;
    private Label labelforpath;
    
    String path;
 int id_org = LoginController.idLogin;
  double xOffset, yOffset;
    @FXML
    private JFXTextField SId;
    @FXML
    private ListView<String> list = new ListView();
    private DefaultListModel mod;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
      
        
    }    
 @FXML
    private void AjouterStade(ActionEvent event) {
        int test =0;
        
     
       
       if(t_adresse.getText().trim().length()==0)
       {
           test=0;
           lab_adresse.setText("adresse  vide");
           lab_adresse.setStyle("-fx-text-fill:red;");
       }
       else{
           test =1;
       }
        if(t_nom.getText().trim().length()==0)
       {test=0;
           lab_nom.setText("nom  vide");
           lab_nom.setStyle("-fx-text-fill:red;");
       }
        else{
            test =1;
        }
         if(t_ville.getText().trim().length()==0)
       {test =0;
           lab_ville.setText("ville  vide");
           lab_ville.setStyle("-fx-text-fill:red;");
       }
         else{
             test =1;
         }
        if(t_capacite.getText().trim().length()==0)
        {
            test =0;
            lab_capa.setText(" capacite vide");
            lab_capa.setStyle("-fx-text-fill:red;");
        }
        else{
            test =1;
        }
         boolean isNumeric =  t_capacite.getText().matches("[+-]?\\d*(\\.\\d+)?");
         
         if(isNumeric == false )
         {test =0;
             lab_capa.setText(" input non valide");
            lab_capa.setStyle("-fx-text-fill:red;");
         }
         else{
             lab_capa.setText(" input valide");
            lab_capa.setStyle("-fx-text-fill:green;");
             test=1;
         }
       StadeCrud sc = new StadeCrud();
       mail m = new mail();
       if(test==1){
       String adrr= t_adresse.getText();
       String nom= t_nom.getText();
       String ville= t_ville.getText();
       Integer cap= Integer.parseInt(t_capacite.getText());
       Stade s = new Stade(id_org,nom,ville,adrr,cap);
       sc.ajouterStade(s);
       m.notificationS("Ajout Stade","Stade Ajouté avec succé");
       }
       else{
             m.notificationF("Ajout Stade","Erreur !!Stade non Ajouté");
       }
        
        
        
        
        
    }
    @FXML
    private void handleButtonAction(MouseEvent event) {
    }

    @FXML
    private void OnClickBtnConsulterMatchs(ActionEvent event) {
    }

    @FXML
    private void OnClickBtnConsulterStade(ActionEvent event) {
    }

    @FXML
    private void OnClickBtnStatMatch(ActionEvent event) {
    }

    @FXML
    private void OnClickBtnVote(ActionEvent event) {
    }

    @FXML
    private void ActualiserInformations(ActionEvent event) {
    }

    private void UploadImage(ActionEvent event) {
        
         FileChooser fc = new FileChooser();
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("images", "*.jpg"));
        File f = fc.showOpenDialog(null);

        if (f != null) {
            labelforpath.setText("L'image Sélectionné : " + f.getAbsolutePath());
        }

        path = f.getAbsolutePath();
        System.out.println("path"+path);
    }

    @FXML
    private void deconnexion(ActionEvent event) {
        
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/takwira/pidev/gui/Login.fxml"));
            Scene newScene = new Scene(root);
            root.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    xOffset = event.getSceneX();
                    yOffset = event.getSceneY();
                }
            });

            Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
             
            root.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    window.setX(event.getScreenX() - xOffset);
                    window.setY(event.getScreenY() - yOffset);
                }
            });
           
            window.setScene(newScene);
           // window.initStyle(StageStyle.TRANSPARENT);
            window.show();
        } catch (IOException ex) {
            ex.getMessage();
        }
    }

    @FXML
    private void back(ActionEvent event) {
            try {
            Parent root = FXMLLoader.load(getClass().getResource("/takwira/pidev/gui3/AfficherLStade.fxml"));
            Scene newScene = new Scene(root);
            root.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    xOffset = event.getSceneX();
                    yOffset = event.getSceneY();
                }
            });

            Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
            root.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    window.setX(event.getScreenX() - xOffset);
                    window.setY(event.getScreenY() - yOffset);
                }
            });
            //Stage window = (Stage) ((Node) event.getSource()).getScene().getWindow();
            window.setScene(newScene);
            window.show();
        } catch (IOException ex) {
            ex.getMessage();
        }
    }
  

    @FXML
    private void exit(ActionEvent event) {
 System.exit(0);
    }

    @FXML
    private void txtKeyReleased(KeyEvent event) {
         String search = SId.getText().trim();
        SId.getHeight();

        if (!search.equals("")) {
            try {
                // TextFields.bindAutoCompletion(SId,serachSuggestion(search) );
                // list.getItems().clear();
                //TextFields.bindAutoCompletion(SId,serachSuggestion(search) );
                list.getItems().clear();
                // list.getItems().addAll(serachSuggestion(search));
                for (String item : serachSuggestion(search)) {
                    list.getItems().add(item.toString());

                }

            } catch (IOException ex) {

                ex.getMessage();
            } catch (ParseException ex) {

                ex.getMessage();
            }
        }

    }
    
    
    public String[] serachSuggestion(String search) throws MalformedURLException, IOException, ParseException {
        JSONParser parser = new JSONParser();
        search = search.replace(" ", "+");
        // URL oracle = new URL("http://suggestqueries.google.com/complete/search?q=" + search);

        //  URL oracle = new URL( "http://suggestqueries.google.com/complete/search?q="+search+"&client=toolbar");
        //    URL oracle = new URL("http://suggestqueries.google.com/complete/search?q=" + search + "&client=firefox&hl=fr");
        URL oracle = new URL("http://suggestqueries.google.com/complete/search?q=" + search + "&client=firefox&");
//URL oracle = new URL("https://maps.googleapis.com/maps/api/place/autocomplete/json?input=1600+Amphitheatre&key=<API_KEY>&sessiontoken=1234567890");
        URLConnection yc = oracle.openConnection();
        BufferedReader in = new BufferedReader(new InputStreamReader(yc.getInputStream()));
        String inputLine;
        String val = "";
        while ((inputLine = in.readLine()) != null) {
            JSONArray a = (JSONArray) parser.parse(inputLine);
            for (Object o : a) {
                val = o.toString();
            }

        }
        in.close();
        String v[] = val.replace("[", "").replace("]", "").replace("\"", "").split(",");
        if (v.length == 1 && v[0].equals("")) {
            return new String[0];
        } else {
            return v;
        }

    }
   
    
}
