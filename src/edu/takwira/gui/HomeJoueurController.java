/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import static edu.takwira.gui.AjoutJoueurController.sendmail;
import static edu.takwira.gui.HomeEquipeController.closeStage;
import static edu.takwira.gui.HomeEquipeController.conaitre_id_equipe;
import static edu.takwira.gui.HomeEquipeController.conaitre_type_joueur;
import edu.takwira.ressources.Constants;
import edu.takwira.services.JoueurCrud;
import edu.takwira.util.JFXDialogTool;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.DateCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.DragEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.input.TransferMode;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.StackPane;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 * FXML Controller class
 *
 * @author yassin
 */
public class HomeJoueurController implements Initializable {

    @FXML
    private StackPane stckJoueur;
    @FXML
    private AnchorPane rootJoueur;
    @FXML
    private Pane PaneEquipe;
    //private TableView<Joueur> TableView;
    //private TableColumn<Joueur,Integer > id_joueur;
    @FXML
    private TableColumn<Joueur, String> nom_joueur;
    @FXML
    private TableColumn<Joueur, String> prenom_joueur;

    @FXML
    private TableColumn<Joueur, Date> date_naissance;
    @FXML
    private TableColumn<Joueur, String> mail;
    @FXML
    private TableColumn<Joueur, String> ville;
    @FXML
    private TableColumn<Joueur, String> position;
    @FXML
    private TableColumn<Joueur, Integer> numero;
    @FXML
    private TableColumn<Joueur, Integer> id_equipe;
    @FXML
    private Pane sidebar;
    @FXML
    private JFXButton btnAjouterJoueur;
    @FXML
    private Pane Navicons;
    @FXML
    private AnchorPane containerAddJoueur;
    @FXML
    private Text textRec;
    @FXML
    private JFXButton btnCancelAddJoueur;
    @FXML
    private JFXButton btnModifierJoueur;
    @FXML
    private AnchorPane ContainerDeleteJoueur;
    @FXML
    private JFXButton supprimer;

    @FXML
    private TableColumn<Joueur, String> categorie;
    @FXML
    private TableColumn<Joueur, ImageView> image_joueur;
    JoueurCrud jcd = new JoueurCrud();

     //   String categ= HomeEquipeController.seletionedEquipee.getCateg();
//dddd

    private JFXDialogTool dialogAddJoueur;
    private JFXDialogTool dialogDeleteJoueur;
    private String password = "";
    private static final Stage stage = new Stage();
    @FXML
    private JFXTextField tfPrenomJoueur;
    @FXML
    private JFXTextField tfMailJoueur;
    @FXML
    private JFXComboBox<String> comboPosition;
    @FXML
    private JFXTextField tfNomJoueur;
    @FXML
    private JFXTextField tfNumJoueur;
    @FXML
    private JFXTextField tfvilleJoueur;
    @FXML
    private JFXDatePicker date_naissanceJoueur;
    @FXML
    private JFXTextField tfageJoueur;
    @FXML
    private ImageView imageview_joueur;
    @FXML
    private JFXComboBox<String> Comboid_equipe;
    private String nomImage_Joueur = "";
    @FXML
    private TableView<Joueur> TableViewjoueur;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        sidebar.setVisible(false);
        Joueur j;
        jcd.miseajour();

        // TODO
        ObservableList<String> List = FXCollections.observableArrayList("Attaque", "Deffense", "Milieu", "Goal");

        System.out.println(password);

        comboPosition.setItems(List);
        LocalDate minDate = LocalDate.of(1980, 1, 1);
        LocalDate maxDate = LocalDate.of(2011, 1, 1);
        date_naissanceJoueur.setDayCellFactory(d
                -> new DateCell() {
            @Override
            public void updateItem(LocalDate item, boolean empty) {
                super.updateItem(item, empty);
                setDisable(item.isAfter(maxDate) || item.isBefore(minDate));
            }
        });

        // TODO
      /*  String choix = Comboid_equipe.getSelectionModel().getSelectedItem();
        // System.out.println(choix);
        // Connection cnx = edu.takwira.tools.Connection.getInstance().getCnx();
        try {
            String requete = "SELECT * FROM equipe";
            Statement st = edu.takwira.tools.Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                Comboid_equipe.getItems().addAll(rs.getString(2));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/

        refreshJoueur();

    }

    public void refreshJoueur() {
        System.out.println("cc" +conaitre_type_joueur);
  
        List<Joueur> ListJoueur = new ArrayList<>();

     
              
        if (conaitre_type_joueur == 1)
        {
           ListJoueur = jcd.afficherJoueur(conaitre_id_equipe,"sunior");    
        }
        else 
        {
                 ListJoueur = jcd.afficherJoueur(conaitre_id_equipe,"junior");    
        }
        String nom=jcd.recuperernomEquipe(conaitre_id_equipe);
        System.out.println(nom);

        ObservableList<Joueur> Liste = FXCollections.observableArrayList(ListJoueur);

        //id_joueur.setCellValueFactory(new PropertyValueFactory<Joueur,Integer>("id_joueur"));
        nom_joueur.setCellValueFactory(new PropertyValueFactory<Joueur, String>("nom_joueur"));
        prenom_joueur.setCellValueFactory(new PropertyValueFactory<Joueur, String>("prenom_joueur"));
        date_naissance.setCellValueFactory(new PropertyValueFactory<Joueur, Date>("dateNaissance"));
        numero.setCellValueFactory(new PropertyValueFactory<Joueur, Integer>("numero"));
        mail.setCellValueFactory(new PropertyValueFactory<Joueur, String>("adresse_mail"));
        ville.setCellValueFactory(new PropertyValueFactory<Joueur, String>("ville"));

        position.setCellValueFactory(new PropertyValueFactory<Joueur, String>("position"));

        id_equipe.setCellValueFactory(new PropertyValueFactory<Joueur, Integer>("id_equipe"));
        image_joueur.setCellValueFactory(new PropertyValueFactory<>("image"));
  

        TableViewjoueur.setItems(Liste);
    }

    @FXML
    private void setOnMouseClicked(MouseEvent event) {
    }

    @FXML
    private void handleShowTableRec(Event event) {
    }

    @FXML
    private void sidebar(MouseEvent event) {
        sidebar.setVisible(false);
    }

    @FXML
    private void showDialogAddJoueur(MouseEvent event) {

        rootJoueur.setEffect(Constants.BOX_BLUR_EFFECT);

        textRec.setText("Ajouter une Joueur");
        //imageContainer.toFront();
        containerAddJoueur.setVisible(true);
        btnAjouterJoueur.setDisable(false);
        btnModifierJoueur.setVisible(true);
        btnAjouterJoueur.toFront();

        dialogAddJoueur = new JFXDialogTool(containerAddJoueur, stckJoueur);
        dialogAddJoueur.show();

        dialogAddJoueur.setOnDialogClosed(ev -> {
            closeStage();
            TableViewjoueur.setDisable(false);
            rootJoueur.setEffect(null);
            containerAddJoueur.setVisible(false);
            refreshJoueur();
        });

    }

    @FXML
    private void Navicons(MouseEvent event) {
        sidebar.setVisible(true);
    }

    @FXML
    private void closeDialogAddJoueur() {
        if (dialogAddJoueur != null) {
            dialogAddJoueur.close();
        }
        System.out.println("Exit popup joueur");
    }

    @FXML
    private void updateJoueur(ActionEvent event) {
    }

    @FXML
    private void hideDialogDeleteJoueur(MouseEvent event) {
    }

    @FXML
    private void supprimereJoueur(ActionEvent event) {
    }

    @FXML
    private void AjouterJoueur(ActionEvent event) throws MessagingException {

        password = Randompassword.makePassword(8);

        // int id_j=Integer.parseInt(this.id_joueur.getText());
        String nom_j = tfNomJoueur.getText();
        String prenom_j = tfPrenomJoueur.getText();

        java.util.Date date_n = new java.sql.Date(new java.util.Date(date_naissanceJoueur.getEditor().getText()).getTime());
        int age = Integer.parseInt(this.tfageJoueur.getText());

        String adresse_mail = this.tfMailJoueur.getText();
        String ville = this.ville.getText();

        int numero = Integer.parseInt(this.tfNumJoueur.getText());
        String position = this.comboPosition.getSelectionModel().getSelectedItem();
        String nom=jcd.recuperernomEquipe(conaitre_id_equipe);

 Comboid_equipe.getItems().add("aaa");
       //   Comboid_equipe.setValue(nom.);

        int id_equipe=jcd.recupereridEquipe(nom);
       
        //Integer   age=Integer.parseInt(this.age.getText());
        sendmail(adresse_mail, nom_j, prenom_j, password);

        Joueur j = new Joueur(nom_j, prenom_j, (java.sql.Date) date_n, age, numero, adresse_mail, ville, "jjj", position, id_equipe, nomImage_Joueur, password);

        //  j.setPassword(password);
        JoueurCrud ecd = new JoueurCrud();
        if (age <= 18) {
            j.setCategorie("junior");
        } else {
            j.setCategorie("sunior");
        }

        System.out.println(age);

        ecd.ajouterJoueur(j);

        //Equipe e=new Equipe(nom_equipe,)
        InputStream inStream = null;
        OutputStream outStream = null;

        try {
            // InputStream inStream = null;

            File afile = new File("./src/images/" + nomImage_Joueur);
            File bfile = new File("C:/wamp64/www/images/" + nomImage_Joueur);

            inStream = new FileInputStream(afile);
            outStream = new FileOutputStream(bfile);

            byte[] buffer = new byte[1024];

            int length;
            //copy the file content in bytes
            while ((length = inStream.read(buffer)) > 0) {

                outStream.write(buffer, 0, length);

            }

            inStream.close();
            outStream.close();

            System.out.println("File is copied successful!");

        } catch (IOException e) {
            e.printStackTrace();
        }
        
        closeDialogAddJoueur();
        refreshJoueur();

    }

    @FXML
    private void CalculerAge(ActionEvent event) {
        // LocalDate ld=date_naissance.getValue();
        // LocalDate date_n=(date_naissance.getValue());
        java.sql.Date date_n = java.sql.Date.valueOf(date_naissanceJoueur.getValue());

        System.out.println(date_n);

        Calendar cal = Calendar.getInstance();
        cal.setTime(date_n);

        Calendar now = Calendar.getInstance();
        Calendar dob = Calendar.getInstance();
        int year_date_naissence = cal.get(cal.YEAR);
        int month_date_naissence = cal.get(cal.MONTH);
        int day_date_naissence = cal.get(cal.DAY_OF_MONTH);

        dob.set(year_date_naissence, month_date_naissence, day_date_naissence);
        if (dob.after(now)) {
            throw new IllegalArgumentException("Can't be born in the future");
        }
        int year1 = now.get(Calendar.YEAR);
        int year2 = dob.get(Calendar.YEAR);
        int age1 = year1 - year2;
        int month1 = now.get(Calendar.MONTH);
        int month2 = dob.get(Calendar.MONTH);
        if (month2 > month1) {
            age1--;
        } else if (month1 == month2) {
            int day1 = now.get(Calendar.DAY_OF_MONTH);
            int day2 = dob.get(Calendar.DAY_OF_MONTH);
            if (day2 < day1) {
                age1--;
            }
            System.out.println(age1);

            // age.setText(age1.toInt());
            //  Integer.parseInt(age.setText(age1));
            tfageJoueur.setText(String.valueOf(age1));

            // age.setText(age1.getindex().toString());// try this
            // System.out.println(date_n);*/
        }
    }

    public static void closeStage() {
        if (stage != null) {
            stage.hide();
        }
    }

    @FXML
    private void handleDragOver_joueur(DragEvent event) {
        if (event.getDragboard().hasFiles()) {
            event.acceptTransferModes(TransferMode.ANY);
        }
    }

    @FXML
    private void handleDrop_joueur(DragEvent event) throws FileNotFoundException {
        List<File> files = event.getDragboard().getFiles();
        Image img = new Image(new FileInputStream(files.get(0)));
        imageview_joueur.setImage(img);
        nomImage_Joueur = files.get(0).getName();
    }

    public static void sendmail(String recepient, String nom, String prenom, String Password_joueur) throws MessagingException {
        System.out.println("preparing");
        Properties properties = new Properties();

        System.out.println("Preparing to send");

        properties.put("mail.smtp.auth", "true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "587");

        String myAccountEmail = "co.takwira.tunisie@gmail.com";
        String password = "limitless2021";

        Session session = Session.getInstance(properties, new javax.mail.Authenticator() {
            @Override
            protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                return new javax.mail.PasswordAuthentication(myAccountEmail, password);
            }

        });

        Message message = prepareMessage(session, myAccountEmail, recepient, nom, prenom, Password_joueur);
        Transport.send(message);
        System.out.println("send secsussefully");
    }

    private static Message prepareMessage(Session session, String myAccountEmail, String recepient, String nom, String prenom, String Password_joueur) {
        try {
            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(myAccountEmail));
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(recepient));
            String body = "Vous etes le bienvenue à notre application Co-takwira Mr " + nom + " " + prenom + "\n" + "Votre mot de passe sera " + Password_joueur;
            message.setSubject("Inscription effectuée avec succées");
            message.setText(body);
            return message;

        } catch (Exception ex) {
            Logger.getLogger(AjoutJoueurController.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;

    }

}
