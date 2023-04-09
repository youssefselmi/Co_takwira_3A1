/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.gui;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXMasonryPane;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import cotakwira.alerts.AlertType;
import cotakwira.alerts.AlertsBuilder;
import cotakwira.animation.Animations;
import cotakwira.entities.Reclamation;
import cotakwira.services.CrudReclamation;
import cotakwira.tools.MyConnection;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import de.jensd.fx.glyphs.fontawesome.FontAwesomeIcon;
import de.jensd.fx.glyphs.fontawesome.FontAwesomeIconView;
import javafx.scene.control.TableCell;
import javafx.scene.layout.HBox;
import javafx.util.Callback;
import javafx.geometry.Insets;
import javafx.scene.control.ScrollPane;
import javafx.scene.image.Image;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.StackPane;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import cotakwira.notifications.NotificationType;
import cotakwira.notifications.NotificationsBuilder;
import cotakwira.resources.Constants;
import cotakwira.util.JFXDialogTool;
import de.jensd.fx.glyphs.materialdesignicons.MaterialDesignIcon;
import de.jensd.fx.glyphs.materialdesignicons.MaterialDesignIconView;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStream;
import java.sql.PreparedStatement;
import java.util.Collections;
import java.util.Observable;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.InvalidationListener;
import javafx.beans.property.DoubleProperty;
import javafx.beans.property.SimpleDoubleProperty;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.ContentDisplay;
import javafx.scene.control.ContextMenu;
import javafx.scene.control.Label;
import javafx.scene.control.MenuItem;
import javafx.scene.control.TabPane;
import javafx.scene.control.TablePosition;
import javafx.scene.input.DragEvent;
import javafx.scene.input.MouseButton;
import javafx.scene.input.ScrollEvent;
import javafx.scene.input.TransferMode;
import javafx.scene.layout.Background;
import javafx.scene.layout.BackgroundFill;
import javafx.scene.layout.BackgroundImage;
import javafx.scene.layout.BackgroundPosition;
import javafx.scene.layout.BackgroundRepeat;
import javafx.scene.layout.BackgroundSize;
import javafx.scene.layout.CornerRadii;
import javafx.scene.layout.FlowPane;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.StageStyle;
import javax.swing.JOptionPane;
import org.controlsfx.control.PropertySheet.Item;

/**
 * FXML Controller class
 *
 * @author yassin
 */
public class HomeReclamationController implements Initializable {

    @FXML
    private TableView<Reclamation> TableViewReclamation;
    @FXML
    private TableColumn<Reclamation, Integer> col_idRec;
    @FXML
    private TableColumn<Reclamation, String> col_SujetRec;
    @FXML
    private TableColumn<Reclamation, String> col_DescriptionRec;
    @FXML
    private TableColumn<Reclamation, String> col_StatusRec;
    @FXML
    private TableColumn<Reclamation, String> col_NomPrenomCoach;
    @FXML
    private TableColumn<Reclamation, Date> col_DateRec;
    @FXML
    private TableColumn<Reclamation, Date> col_DateTraitement;

    static Reclamation selectionedReclamation;
    @FXML
    private TableColumn<Reclamation, String> ActionRec;
    Reclamation Reclamation = null;

    ObservableList<Reclamation> ReclamationList = FXCollections.observableArrayList();
    @FXML
    private Pane sidebar;
    @FXML
    private Pane Navicons;

    public static int idRecsupp = 0;

    @FXML
    private ScrollPane scrollPane;

    /**
     * Initializes the controller class.
     *
     * @param url
     * @param rb
     */
    private final JFXMasonryPane mansoryPane = new JFXMasonryPane();
    private AnchorPane HomeRec;
    @FXML
    private AnchorPane containerAddRec;
    @FXML
    private JFXTextField tfNomRec;
    @FXML
    private JFXTextField tfPrenomRec;
    @FXML
    private JFXTextField tfEmailRec;
    @FXML
    private JFXTextField tfTlRec;
    @FXML
    private JFXComboBox<String> ComboSujetRec;
    @FXML
    private JFXComboBox<String> ComboCoachRec;
    @FXML
    private JFXTextArea tfDescriptionRec;
    @FXML
    private Text textRec;
    @FXML
    private JFXButton btnCancelAddRec;
    private ImageView imageViewCard;

    private JFXDialogTool dialogAddRec;
    private JFXDialogTool dialogDeleteRec;
    private static final Stage stage = new Stage();
    @FXML
    private StackPane stckReclam;
    @FXML
    private AnchorPane rootRec;
    @FXML
    private Pane PaneRec;
    @FXML
    private JFXButton btnNewRec;
    @FXML
    private JFXButton btnSaveReclam;
    @FXML
    private JFXButton btnUpdateReclam;
    @FXML
    private AnchorPane ContainerDeleteRec;

    @FXML
    private ImageView DragimgRec;
    @FXML
    private TableColumn<Reclamation, ImageView> col_imgRec;
    private String path = "";
    String ImagePath = "";
    @FXML
    private TabPane TabPaneRec;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        CrudReclamation xx = new CrudReclamation();
        xx.PrioriteRec();
        LoadTableReclamation();
        sidebar.setVisible(false);

        mansoryPane.setPadding(new Insets(15, 15, 15, 15));
        mansoryPane.setVSpacing(25);
        mansoryPane.setHSpacing(25);
        scrollPane.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        scrollPane.setVbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        scrollPane.setFitToWidth(true);
        scrollPane.setContent(mansoryPane);

        remplirComboCoach();

    }

    private void remplirComboCoach() {

        ComboSujetRec.getItems().addAll("Coach", "Application", "Autre");
        try {
            Reclamation t = new Reclamation();
            t.setIdJoueur(69);
            System.out.println(t.getIdJoueur());
            Connection cnx = MyConnection.getInstance().getCnx();
            String requetee = "SELECT * FROM joueur WHERE id_joueur = '" + t.getIdJoueur() + "'";
            Statement pstt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pstt.executeQuery(requetee);
            while (rs.next()) {
                tfNomRec.setText(rs.getString(2));
                tfPrenomRec.setText(rs.getString(3));
                tfEmailRec.setText(rs.getString(7));
                tfTlRec.setText(rs.getString(6));

                System.out.println(tfNomRec);
                break;
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    private void LoadTableReclamation() {

        CrudReclamation xx = new CrudReclamation();
        xx.PrioriteRec();

        CrudReclamation pcd = new CrudReclamation();

        List<Reclamation> listeRec = new ArrayList<>();

        Reclamation rec = new Reclamation();

        rec.setIdJoueur(69);

        listeRec = pcd.displayReclamation(rec);

        ObservableList<Reclamation> Liste = FXCollections.observableArrayList(listeRec);

        col_idRec.setCellValueFactory(new PropertyValueFactory<Reclamation, Integer>("idRec"));
        col_SujetRec.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("SujetRec"));
        col_DescriptionRec.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("DescriptionRec"));
        col_StatusRec.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("StatusRec"));
        col_NomPrenomCoach.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("NomPrenomCoach"));
        col_DateRec.setCellValueFactory(new PropertyValueFactory<Reclamation, Date>("DateRec"));
        col_DateTraitement.setCellValueFactory(new PropertyValueFactory<Reclamation, Date>("DateTraitement"));
        col_imgRec.setCellValueFactory(new PropertyValueFactory<Reclamation, ImageView>("imgReclamation"));

        TableViewReclamation.setItems(Liste);

        //add cell of button edit 
        Callback<TableColumn<Reclamation, String>, TableCell<Reclamation, String>> cellFoctory = (TableColumn<Reclamation, String> param) -> {
            //make cell containing buttons

            final TableCell<Reclamation, String> cell = new TableCell<Reclamation, String>() {

                @Override
                public void updateItem(String item, boolean empty) {
                    super.updateItem(item, empty);
                    // that cell created only on non-empty rows
                    if (empty) {
                        setGraphic(null);
                    } else {

                        FontAwesomeIconView deleteIcon = new FontAwesomeIconView(FontAwesomeIcon.TRASH);
                        FontAwesomeIconView editIcon = new FontAwesomeIconView(FontAwesomeIcon.PENCIL_SQUARE);

                        deleteIcon.setStyle(
                                " -fx-cursor: hand ;"
                                + "-glyph-size:28px;"
                                + "-fx-fill:#ff1744;"
                        );
                        editIcon.setStyle(
                                " -fx-cursor: hand ;"
                                + "-glyph-size:28px;"
                                + "-fx-fill:#00E676;"
                        );
                        deleteIcon.setOnMouseClicked((MouseEvent event) -> {
                            System.out.println("icon delete is pressed !");

                            int idRec = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
                            CrudReclamation day = new CrudReclamation();
                            if (day.contraintModifier24h(idRec) < 1) {
                                showDialogDeleteReclam();
                            } else {
                                AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_24h);
                            }

                        });
                        editIcon.setOnMouseClicked((MouseEvent event) -> {
                            System.out.println("icon edit is pressed !");

                            int idRec = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
                            ComboSujetRec.setValue(TableViewReclamation.getSelectionModel().getSelectedItem().getSujetRec());
                            tfDescriptionRec.setText(TableViewReclamation.getSelectionModel().getSelectedItem().getDescriptionRec());
                            ComboCoachRec.setValue(TableViewReclamation.getSelectionModel().getSelectedItem().getNomPrenomCoach());
                            //btnUpdateReclam.toFront();
                            textRec.setText("Modifier La Reclamation");

                            try {
                                String requeteee = "SELECT imgRec FROM reclamation WHERE idRec  = '" + idRec + "'";
                                Statement psttt = MyConnection.getInstance().getCnx().createStatement();
                                ResultSet rss = psttt.executeQuery(requeteee);
                                while (rss.next()) {
                                    ImagePath = rss.getString(1);//bech najmt njyb mnha nom de 
                                    Image img = new Image(new FileInputStream(ImagePath));
                                    System.out.println("Pathimage fel update" + ImagePath);
                                    DragimgRec.setImage(img);
                                }

                            } catch (SQLException ex) {
                                System.out.println(ex.getMessage());
                            } catch (FileNotFoundException ex) {
                                DragimgRec.setImage(new Image(getClass().getResource("/resources/media/drag-drop.gif").toExternalForm()));
                            }

                            //Image imagee = new Image(new FileInputStream (ImagePath));
                            CrudReclamation day = new CrudReclamation();
                            if (day.contraintModifier24h(idRec) < 1) {

                                showDialogAddRec();
                                btnUpdateReclam.toFront();
                            } else {
                                AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_24h);
                            }

                        });

                        HBox managebtn = new HBox(editIcon, deleteIcon);
                        managebtn.setStyle("-fx-alignment:center");
                        HBox.setMargin(deleteIcon, new Insets(2, 2, 0, 3));
                        HBox.setMargin(editIcon, new Insets(2, 3, 0, 2));
                        setGraphic(managebtn);

                    }

                }

            };

            return cell;
        };

        ActionRec.setCellFactory(cellFoctory);

        TableViewReclamation.setOnMouseClicked(ev -> {
            int idRecc = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
            System.out.println("Tab : idRec selectioned is == " + idRecc);
            if (ev.getButton().equals(MouseButton.PRIMARY) && ev.getClickCount() == 2) {
                try {
                    String requeteee2 = "SELECT imgRec FROM reclamation WHERE idRec  = '" + idRecc + "'";
                    Statement psttt2 = MyConnection.getInstance().getCnx().createStatement();
                    ResultSet rss2 = psttt2.executeQuery(requeteee2);
                    while (rss2.next()) {
                        Image img2 = new Image(new FileInputStream(rss2.getString("imgRec")));

                        Stage window = new Stage();
                        window.setTitle("Reclamation ID : " + String.valueOf(idRecc));
                        window.setMinWidth(250);
                        ImageView imagevPOPUP = new ImageView();
                        imagevPOPUP.setImage(img2);
                        imagevPOPUP.setFitHeight(576);
                        imagevPOPUP.setFitWidth(1024);

                        VBox layout = new VBox(10);
                        layout.getChildren().addAll(imagevPOPUP);
                        layout.setAlignment(Pos.CENTER);

                        //Display window and wait for it to be closed before returning
                        Scene scene = new Scene(layout);
                        window.setScene(scene);
                        window.show();

                        final DoubleProperty zoomProperty = new SimpleDoubleProperty(200);

                        zoomProperty.addListener(new InvalidationListener() {

                            @Override
                            public void invalidated(javafx.beans.Observable arg0) {
                                imagevPOPUP.setFitWidth(zoomProperty.get() * 4);
                                imagevPOPUP.setFitHeight(zoomProperty.get() * 3);
                            }

                        });

                        imagevPOPUP.addEventFilter(ScrollEvent.ANY, new EventHandler<ScrollEvent>() {
                            @Override
                            public void handle(ScrollEvent event) {
                                if (event.getDeltaY() > 0) {
                                    zoomProperty.set(zoomProperty.get() * 1.1);
                                } else if (event.getDeltaY() < 0) {
                                    zoomProperty.set(zoomProperty.get() / 1.1);
                                }
                            }
                        });

                    }

                } catch (SQLException ex) {
                    System.out.println(ex.getMessage());
                } catch (FileNotFoundException ex) {
                    AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, mansoryPane, "Sorry it doesn't contain any image !");
                }

            }
        });

    }

    @FXML

    private void TableRecClicked(MouseEvent event) {

////        selectionedReclamation = TableViewReclamation.getSelectionModel().getSelectedItem();
////        //ComboSujetRec.setText(HomeController.selectionedReclamation.getSujetRec());
////        //ComboCoachRec.setText(HomeController.selectionedReclamation.getNomPrenomCoach());
        // tfDescriptionRec.setText(HomeController.selectionedReclamation.getDescriptionRec());
        //int idRec = Integer.valueOf((HomeController.selectionedReclamation.getIdRec()));
        //int idRec = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
        // System.out.println("idRec clicked is !! ==  "+idRec);
////        //tfDescriptionRec.setText(String.valueOf(HomeController.selectionedReclamation.getSujetRec()));
////        //tfDescriptionRec.setText(HomeController.selectionedReclamation.getSujetRec());
////        //tftmailupdate.setText(HomeController.selectionedReclamation.getAdresse_mail());
////        //tftdatenaissanceupdate.setValue(HomeController.selectionedReclamation.getDate_naissance().toLocalDate());
////        //tftdatefincontratupdate.setValue(HomeController.selectionedReclamation.getDate_fin_contrat().toLocalDate()); 
    }

    @FXML
    private void sidebar(MouseEvent event) {
        sidebar.setVisible(false);
    }

    @FXML
    private void Navicons(MouseEvent event) {
        sidebar.setVisible(true);

    }

    private void openEditRec(int idRec) {

    }

//    private void openDeleteDialog(int idRec) {
//        System.out.println(idRec);
//        idRecsupp = idRec;
//        showDialogDeleteReclam();
//    }
    @FXML
    private void handleShowCards(Event event) throws FileNotFoundException {
        loadCarte();

        Animations.fadeInUp(TabPaneRec);
        Animations.fadeInUp(TableViewReclamation);
    }

    @FXML
    private void handleShowTableRec(Event event) throws FileNotFoundException {
        LoadTableReclamation();
        Animations.fadeInUp(TabPaneRec);
        Animations.fadeInUp(TableViewReclamation);
    }

    @FXML
    private void showDialogAddRec() {

        if (ImagePath == "") {
            DragimgRec.setImage(new Image(getClass().getResource("/resources/media/drag-drop.gif").toExternalForm()));
        }

        rootRec.setEffect(Constants.BOX_BLUR_EFFECT);
        textRec.setText("Ajouter une Reclamation");
        //imageContainer.toFront();
        containerAddRec.setVisible(true);
        btnSaveReclam.setDisable(false);
        btnUpdateReclam.setVisible(true);
        btnSaveReclam.toFront();

        dialogAddRec = new JFXDialogTool(containerAddRec, stckReclam);
        dialogAddRec.show();
        dialogAddRec.setOnDialogOpened(ev -> {
            tfDescriptionRec.requestFocus();
        });

        dialogAddRec.setOnDialogClosed(ev -> {
            closeStage();
            TableViewReclamation.setDisable(false);
            rootRec.setEffect(null);
            containerAddRec.setVisible(false);
            LoadTableReclamation();
        });

    }

    public static void closeStage() {
        if (stage != null) {
            stage.hide();
        }
    }

    @FXML
    private void SelectSujetRec(ActionEvent event) {
        String choix = ComboSujetRec.getSelectionModel().getSelectedItem();
        System.out.println(choix);
        if (choix.equals("Coach")) {
            ComboCoachRec.setVisible(true);
            Connection cnx = MyConnection.getInstance().getCnx();
            try {
                String requeteee = "SELECT * FROM Coach ";
                Statement psttt = MyConnection.getInstance().getCnx().createStatement();
                ResultSet rss = psttt.executeQuery(requeteee);
                while (rss.next()) {
                    ComboCoachRec.getItems().addAll(rss.getString("nom_coach") + " " + rss.getString("prenom_coach"));
                }
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }

        } else {
            ComboCoachRec.setVisible(false);
            ComboCoachRec.getItems().clear();
        }
    }

    @FXML
    private void SelectCoachRec(ActionEvent event) {
        String choix = ComboCoachRec.getSelectionModel().getSelectedItem();
        System.out.println("Vous Avez selectione" + choix);
    }

    @FXML
    private void closeDialogAddrec() {
        if (dialogAddRec != null) {
            dialogAddRec.close();
            ImagePath = "";
            ComboSujetRec.setDisable(false);
            ComboCoachRec.setDisable(false);
            tfDescriptionRec.setDisable(false);
            textRec.setVisible(true);
            btnSaveReclam.setVisible(true);
            btnUpdateReclam.setVisible(true);
            btnCancelAddRec.setVisible(true);

        }

        tfDescriptionRec.clear();
    }

    @FXML
    private void closeDialogAddRec(MouseEvent event) {
        if (dialogAddRec != null) {
            dialogAddRec.close();
            ImagePath = "";
            ComboSujetRec.setDisable(false);
            ComboCoachRec.setDisable(false);
            tfDescriptionRec.setDisable(false);
            textRec.setVisible(true);
            btnSaveReclam.setVisible(true);
            btnUpdateReclam.setVisible(true);
            btnCancelAddRec.setVisible(true);
        }

        tfDescriptionRec.clear();
    }

    @FXML
    private void newReclam(MouseEvent event) throws FileNotFoundException {

        String DescriptionRec = tfDescriptionRec.getText().trim(); // trim ala retour a la ligne
        String SujetRec = ComboSujetRec.getSelectionModel().getSelectedItem();
        String NomPrenomCoach = ComboCoachRec.getSelectionModel().getSelectedItem();

        if (DescriptionRec.isEmpty()) {
            //  tfDescriptionRec.requestFocus();
            Animations.shake(tfDescriptionRec);
            return;
        }
        if ((SujetRec == "Coach") && (NomPrenomCoach == null)) {
            Animations.shake(ComboCoachRec);
            return;
        }
        if (SujetRec == null) {
            Animations.shake(ComboSujetRec);
            return;
        }

        Reclamation rec = new Reclamation();
        rec.setIdJoueur(Integer.parseInt("69"));
        rec.setSujetRec(ComboSujetRec.getSelectionModel().getSelectedItem());
        rec.setNomPrenomCoach(ComboCoachRec.getSelectionModel().getSelectedItem());
        rec.setDescriptionRec(tfDescriptionRec.getText());
        rec.setImgRec(path);
        CrudReclamation work = new CrudReclamation();
        //work.ajouterReclamation(rec);

        DragimgRec.setImage(new Image(getClass().getResource("/resources/media/drag-drop.gif").toExternalForm()));
        path = "";
        ImagePath = "";

        boolean result = work.ajouterReclamation(rec);
        System.out.println(result);
        closeDialogAddrec();

        if (result) {
            closeDialogAddrec();
            AlertsBuilder.create(AlertType.SUCCES, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_ADDED);
            LoadTableReclamation();
            loadCarte();
        } else {
            NotificationsBuilder.create(NotificationType.ERROR, Constants.MESSAGE_ERROR_CONNECTION_MYSQL);
        }
        tfDescriptionRec.clear();
    }

    @FXML
    private void updateReclam(MouseEvent event) throws FileNotFoundException {
        int idRec = 0;
        if (TableViewReclamation.getSelectionModel().getSelectedItem() != null) {//Modifier mel tableau
            idRec = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
            System.out.println("idRec mel Tableau" + idRec);
        } else if (TableViewReclamation.getSelectionModel().getSelectedItem() == null && idRecsupp != 0) {//Modifier mel card
            idRec = idRecsupp;
            System.out.println("idRec mel card" + idRecsupp);
        }

        //  int idRec = Integer.valueOf((TableViewReclamation.getSelectionModel().getSelectedItem().getIdRec()));
        String DescriptionRec = tfDescriptionRec.getText();
        String SujetRec = ComboSujetRec.getSelectionModel().getSelectedItem();
        String NomPrenomCoach = ComboCoachRec.getSelectionModel().getSelectedItem();

        if (DescriptionRec.isEmpty()) {
            //  tfDescriptionRec.requestFocus();
            Animations.shake(tfDescriptionRec);
            return;
        }
        if ((SujetRec == "Coach") && (NomPrenomCoach == null)) {
            Animations.shake(ComboCoachRec);
            return;
        }

        closeDialogAddrec();

        Reclamation rec = new Reclamation(SujetRec, DescriptionRec, NomPrenomCoach, idRec, path);

        CrudReclamation updateRec = new CrudReclamation();

        Boolean result = updateRec.updateReclamation(rec);

        System.out.println("Path image fel Update " + path);

        closeDialogAddrec();
        DragimgRec.setImage(new Image(getClass().getResource("/resources/media/drag-drop.gif").toExternalForm()));
        path = "";
        ImagePath = "";

        if (result) {
            tfDescriptionRec.clear();
            closeDialogAddrec();
            AlertsBuilder.create(AlertType.SUCCES, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_UPDATED);
        } else {
            NotificationsBuilder.create(NotificationType.ERROR, Constants.MESSAGE_ERROR_CONNECTION_MYSQL);
        }
        tfDescriptionRec.clear();
        loadCarte();
    }

    @FXML
    private void hideDialogDeleteReclam() {
        if (dialogDeleteRec != null) {
            dialogDeleteRec.close();
        }
    }

    private void showDialogDeleteReclam() {
        rootRec.setEffect(Constants.BOX_BLUR_EFFECT);
        ContainerDeleteRec.setVisible(true);

        dialogDeleteRec = new JFXDialogTool(ContainerDeleteRec, stckReclam);
        dialogDeleteRec.show();

        dialogDeleteRec.setOnDialogClosed(ev -> {
            TableViewReclamation.setDisable(false);
            rootRec.setEffect(null);
            ContainerDeleteRec.setVisible(false);
            LoadTableReclamation();

            try {
                loadCarte();
            } catch (FileNotFoundException ex) {
                Logger.getLogger(HomeReclamationController.class.getName()).log(Level.SEVERE, null, ex);
            }

        });

    }

    private void hideDialogDeleteRec() {

    }

    @FXML
    private void deleteReclam() {
        if (TableViewReclamation.getSelectionModel().getSelectedItem() != null) {//supprimer mel tableau
            Reclamation rec = TableViewReclamation.getSelectionModel().getSelectedItem();
            CrudReclamation okay = new CrudReclamation();
            Boolean result = okay.supprimerReclamation(rec.getIdRec());
            if (result) {
                hideDialogDeleteReclam();
                AlertsBuilder.create(AlertType.SUCCES, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_DELETED);
            } else {
                NotificationsBuilder.create(NotificationType.ERROR, Constants.MESSAGE_ERROR_CONNECTION_MYSQL);
            }
        } else if (TableViewReclamation.getSelectionModel().getSelectedItem() == null && idRecsupp != 0) {//supprimer mel card
            CrudReclamation okayy = new CrudReclamation();
            Boolean result = okayy.supprimerReclamation(idRecsupp);
            System.out.println("idRec mel card" + idRecsupp);
            if (result) {
                hideDialogDeleteReclam();
                AlertsBuilder.create(AlertType.SUCCES, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_DELETED);
            } else {
                NotificationsBuilder.create(NotificationType.ERROR, Constants.MESSAGE_ERROR_CONNECTION_MYSQL);
            }
        }

    }

    @FXML
    private void handleDragOver_reclamation(DragEvent event) {
        if (event.getDragboard().hasFiles()) {
            event.acceptTransferModes(TransferMode.ANY);
        }
    }

    @FXML
    private void handleDrop_reclamation(DragEvent event) throws FileNotFoundException {
        List<File> files = event.getDragboard().getFiles();
        Image img = new Image(new FileInputStream(files.get(0)));
        DragimgRec.setImage(img);
        path = files.get(0).getAbsolutePath();
        System.out.println(path);
    }

    private void loadCarte() throws FileNotFoundException {

        mansoryPane.getChildren().clear();

        Reclamation t = new Reclamation();
        t.setIdJoueur(69);

        try {
            String requete = "SELECT * FROM reclamation WHERE idJoueur = '" + t.getIdJoueur() + "'";
            Statement pstt = MyConnection.getInstance().getCnx().createStatement();
            Connection cnx = MyConnection.getInstance().getCnx();
            ResultSet rs = pstt.executeQuery(requete);
            while (rs.next()) {
                VBox root = new VBox();
                ImageView imageViewCard = new ImageView();
                imageViewCard.setFitWidth(80);
                imageViewCard.setFitHeight(80);
                imageViewCard.setPreserveRatio(true);
                imageViewCard.setSmooth(true);
                imageViewCard.setCache(true);

                MaterialDesignIcon ICON_EDIT = MaterialDesignIcon.TABLE_EDIT;
                MaterialDesignIcon ICON_DELETE = MaterialDesignIcon.DELETE_VARIANT;
                MaterialDesignIcon ICON_DETAILS = MaterialDesignIcon.INFORMATION_OUTLINE;

                MenuItem consulter = new MenuItem("Consulter");
                MenuItem delete = new MenuItem("Delete");
                MenuItem update = new MenuItem("Update");
                

                update.setGraphic(new MaterialDesignIconView(ICON_EDIT));
                delete.setGraphic(new MaterialDesignIconView(ICON_DELETE));
                consulter.setGraphic(new MaterialDesignIconView(ICON_DETAILS));
                
                
                ContextMenu menu = new ContextMenu(delete, update, consulter);
                menu.setAutoHide(true);
                menu.setAutoFix(true);
                menu.setConsumeAutoHidingEvents(true);
                menu.setHideOnEscape(true);

                root.setPrefSize(imageViewCard.getFitWidth(), imageViewCard.getFitHeight());

                if (rs.getString("imgRec").equals("")) {
                    root.setStyle("-fx-background-color: #fff; -fx-background-radius: 15px;-fx-effect:dropshadow(three-pass-box, gray, 10, 0, 0, 0);");
                    imageViewCard.setImage(new Image(getClass().getResource("/resources/media/empty-image.jpg").toString()));
                } else {
                    Image img = new Image(new FileInputStream(rs.getString("imgRec")));
                    imageViewCard.setImage(img);
                }
                root.setPadding(new Insets(7, 7, 7, 7));

                root.setSpacing(10);
                if (rs.getString("StatusRec").equals("traite")) {
                    root.getChildren().addAll(imageViewCard, new Label("id: " + rs.getInt("idRec") + "\nSujet: " + rs.getString("SujetRec") + "\nDateRec: " + rs.getString("DateRec") + "\ntraite: " + rs.getDate("DateTraitement")));
                    root.setStyle("-fx-background-color: #fff; -fx-background-radius: 15px; -fx-effect:dropshadow(three-pass-box, gray, 10, 0, 0, 0);");
                    root.setAlignment(Pos.CENTER);
                }
                if (rs.getString("StatusRec").equals("non traite")) {
                    root.getChildren().addAll(imageViewCard, new Label("id: " + rs.getInt("idRec") + "\nSujet: " + rs.getString("SujetRec") + "\nDateRec: " + rs.getDate("DateRec")));
                    root.setStyle("-fx-background-color: #fff; -fx-background-radius: 15px; -fx-effect:dropshadow(three-pass-box, gray, 10, 0, 0, 0);");
                    root.setAlignment(Pos.CENTER);
                }
                int id = rs.getInt("idRec");
                root.setOnContextMenuRequested(ev -> {
                    menu.show(root, ev.getScreenX(), ev.getScreenY());
                    System.out.println("Carte id Selectioned is ! ====  " + id);
                    idRecsupp = id;
                    System.out.println(idRecsupp);
                });

                update.setOnAction(ev -> {
                    CrudReclamation day = new CrudReclamation();
                    if (day.contraintModifier24h(idRecsupp) < 1) {

                        try {
                            Connection cnxx = MyConnection.getInstance().getCnx();
                            String requeteee = "SELECT idRec,SujetRec,DescriptionRec,StatusRec,NomPrenomCoach,DateRec,DateTraitement,imgRec FROM reclamation WHERE idRec = '" + idRecsupp + "'";
                            Statement psttt = MyConnection.getInstance().getCnx().createStatement();
                            ResultSet rsss = psttt.executeQuery(requeteee);
                            while (rsss.next()) {

                                ComboSujetRec.setValue(rsss.getString(2));
                                tfDescriptionRec.setText(rsss.getString(3));
                                ComboCoachRec.setValue(rsss.getString(5));

                                try {
                                    String requeteee2 = "SELECT imgRec FROM reclamation WHERE idRec  = '" + idRecsupp + "'";
                                    Statement psttt2 = MyConnection.getInstance().getCnx().createStatement();
                                    ResultSet rss2 = psttt2.executeQuery(requeteee2);
                                    while (rss2.next()) {
                                        ImagePath = rss2.getString(1);//bech najmt njyb mnha nom de 
                                        Image imgg = new Image(new FileInputStream(ImagePath));
                                        DragimgRec.setImage(imgg);
                                    }

                                } catch (SQLException ex) {
                                    System.out.println(ex.getMessage());
                                } catch (FileNotFoundException ex) {
                                    DragimgRec.setImage(new Image(getClass().getResource("/resources/media/drag-drop.gif").toExternalForm()));
                                }

                                break;
                            }

                            showDialogAddRec();
                            btnUpdateReclam.toFront();
                        } catch (SQLException ex) {
                            System.out.println(ex.getMessage());
                        }

                    } else {
                        AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_24h);
                    }

                });

                delete.setOnAction(ev -> {

                    CrudReclamation day = new CrudReclamation();
                    if (day.contraintModifier24h(idRecsupp) < 1) {
                        showDialogDeleteReclam();
                    } else {
                        AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, TableViewReclamation, Constants.MESSAGE_24h);
                    }

                });

                consulter.setOnAction(ev -> {
                    try {

                        Connection cnxx = MyConnection.getInstance().getCnx();
                        String requeteee = "SELECT idRec,SujetRec,DescriptionRec,StatusRec,NomPrenomCoach,DateRec,DateTraitement,imgRec FROM reclamation WHERE idRec = '" + idRecsupp + "'";
                        Statement psttt = MyConnection.getInstance().getCnx().createStatement();
                        ResultSet rsss = psttt.executeQuery(requeteee);
                        while (rsss.next()) {

                            ComboSujetRec.setValue(rsss.getString(2));
                            tfDescriptionRec.setText(rsss.getString(3));
                            ComboCoachRec.setValue(rsss.getString(5));

                            ComboSujetRec.setDisable(true);
                            ComboCoachRec.setDisable(true);
                            tfDescriptionRec.setDisable(true);
                            textRec.setVisible(false);

                            showDialogAddRec();

                            btnSaveReclam.setVisible(false);
                            btnUpdateReclam.setVisible(false);
                            btnCancelAddRec.setVisible(false);

                            ImagePath = rsss.getString(8);
                            if (ImagePath != "") {
                                Image img = new Image(new FileInputStream(ImagePath));
                                DragimgRec.setImage(img);

                            }

                            break;
                        }

                        // showDialogAddRec();
                    } catch (SQLException ex) {
                        Logger.getLogger(HomeReclamationController.class.getName()).log(Level.SEVERE, null, ex);
                    } catch (FileNotFoundException ex) {
                        DragimgRec.setImage(new Image(getClass().getResource("/resources/media/empty-image.jpg").toString()));
                    }

                });

                imageViewCard.setOnMouseClicked(ev -> {
                    idRecsupp = id;
                    System.out.println(idRecsupp);
                    if (ev.getButton().equals(MouseButton.PRIMARY) && ev.getClickCount() == 2) {
                        try {
                            String requeteee2 = "SELECT imgRec FROM reclamation WHERE idRec  = '" + idRecsupp + "'";
                            Statement psttt2 = MyConnection.getInstance().getCnx().createStatement();
                            ResultSet rss2 = psttt2.executeQuery(requeteee2);
                            while (rss2.next()) {
                                Image img2 = new Image(new FileInputStream(rss2.getString("imgRec")));

                                Stage window = new Stage();
                                window.setTitle("Reclamation ID : " + String.valueOf(idRecsupp));
                                window.setMinWidth(250);
                                ImageView imagevPOPUP = new ImageView();
                                imagevPOPUP.setImage(img2);
                                imagevPOPUP.setFitHeight(576);
                                imagevPOPUP.setFitWidth(1024);

                                VBox layout = new VBox(10);
                                layout.getChildren().addAll(imagevPOPUP);
                                layout.setAlignment(Pos.CENTER);

                                //Display window and wait for it to be closed before returning
                                Scene scene = new Scene(layout);
                                window.setScene(scene);
                                window.show();

                                final DoubleProperty zoomProperty = new SimpleDoubleProperty(200);

                                zoomProperty.addListener(new InvalidationListener() {

                                    @Override
                                    public void invalidated(javafx.beans.Observable arg0) {
                                        imagevPOPUP.setFitWidth(zoomProperty.get() * 4);
                                        imagevPOPUP.setFitHeight(zoomProperty.get() * 3);
                                    }

                                });

                                imagevPOPUP.addEventFilter(ScrollEvent.ANY, new EventHandler<ScrollEvent>() {
                                    @Override
                                    public void handle(ScrollEvent event) {
                                        if (event.getDeltaY() > 0) {
                                            zoomProperty.set(zoomProperty.get() * 1.1);
                                        } else if (event.getDeltaY() < 0) {
                                            zoomProperty.set(zoomProperty.get() / 1.1);
                                        }
                                    }
                                });

                            }

                        } catch (SQLException ex) {
                            System.out.println(ex.getMessage());
                        } catch (FileNotFoundException ex) {
                            AlertsBuilder.create(AlertType.ERROR, stckReclam, rootRec, mansoryPane, "Sorry it doesn't contain any image !");
                        }

                    }
                });

                mansoryPane.getChildren().addAll(root);

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

}
