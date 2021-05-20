/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Equipe;
import com.menu.coheal.ui.BaseForm;

import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.service.ServiceMatchs;
import java.util.ArrayList;

/**
 *
 * @author esprit
 */
public class AddMatchForm extends BaseForm {

   /* public AddMatchForm() {
    }*/
    public static int idS, idE1, idE2;
    Form current;

    public AddMatchForm(Resources res,Form p) {

        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Add a new Match ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> p.showBack());

        installSidemenu(res);

       /* getToolbar().addCommandToRightBar("", res2.getImage("toolbar-profile-pic.png"), e -> {
        });*/
       
        ArrayList<Stade> list = new ArrayList<>();

        list = ServiceMatchs.getInstance().getMesStades();
        ComboBox Cs = new ComboBox();
        for (Stade st : list) {

            Cs.addItem(st.getNomStade());

        }
        Cs.setUIID("ComboBox");
        addStringValue("Stade", Cs);
        
        ArrayList<Equipe> le = new ArrayList<>();
        le = ServiceMatchs.getInstance().getMesEquipe();
        ComboBox Ce1 = new ComboBox();
        for (Equipe e : le) {

            Ce1.addItem(e.getNomEquipe());

        }
          Ce1.setUIID("ComboBox");
        addStringValue("Equipe1", Ce1);
        ComboBox Ce2 = new ComboBox();
        for (Equipe e : le) {

            Ce2.addItem(e.getNomEquipe());

        }
          Ce2.setUIID("ComboBox");
        addStringValue("Equipe2", Ce2);

        Picker datePicker = new Picker();
        datePicker.setType(Display.PICKER_TYPE_DATE);
        datePicker.setUIID("TextFieldBlack");
        addStringValue("Date du match", datePicker);

        /*----------------------------------------*/
        TextField nb = new TextField("", " nbSpectateur");
        nb.setUIID("TextFieldBlack");
        addStringValue("Nombre de Spectateur", nb);
        /*----------------------------------------*/
        TextField hd = new TextField("", "heureDeb");
        hd.setUIID("TextFieldBlack");
        addStringValue("Heure début du match", hd);
        /*----------------------------------------*/
        TextField hf = new TextField("", "heureFin");
        hf.setUIID("TextFieldBlack");
        addStringValue("Heure Fin du match", hf);
        /*----------------------------------------*/
        TextField des = new TextField("", "description");
        des.setUIID("TextFieldBlack");
        addStringValue("Description", des);
        /*----------------------------------------*/

 /*  TextField stt = new TextField("", "status");
        stt.setUIID("TextFieldBlack");
        addStringValue("status", stt);*/
        ComboBox stt = new ComboBox("En Cours ", "En Programme", "Termine");
        stt.setUIID("ComboBox");
        addStringValue("Statut", stt);
        /*----------------------------------------*/

        ComboBox sc = new ComboBox("0-0");
        sc.setUIID("ComboBox");
        addStringValue("Score", sc);
        /*----------------------------------------*/
 /* TextField idO = new TextField("", " idOrg");
        idO.setUIID("TextFieldBlack");
        addStringValue("idOrg", idO);*/

        Button btnAjouter = new Button("Ajouter");
        addStringValue("", btnAjouter);

        btnAjouter.addActionListener((e) -> {

            try {
                if ((des.getText().length() == 0) || /*(stt.getText().length() == 0) ||(sc.getText().length() == 0) ||*/ (nb.getText().length() == 0)) {
                    Dialog.show("Veuillez vérifier les données", "", "Annuler", "OK");

                } else {

                    ArrayList<Stade> la = new ArrayList<>();
                    la = ServiceMatchs.getInstance().getS(Cs.getSelectedItem().toString());
                    for (Stade st : la) {
                        idS = st.getIdStade();

                    }
                    ArrayList<Equipe> le1 = new ArrayList<>();
                    le1 = ServiceMatchs.getInstance().getE(Ce1.getSelectedItem().toString());
                    for (Equipe st : le1) {
                        idE1 = st.getIdE();

                    }

                    ArrayList<Equipe> le2 = new ArrayList<>();
                    le2 = ServiceMatchs.getInstance().getE(Ce1.getSelectedItem().toString());
                    for (Equipe st : le2) {
                        idE2 = st.getIdE();

                    }

                    InfiniteProgress ip = new InfiniteProgress();
                    final Dialog iDialog = ip.showInfiniteBlocking();
                    SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
                    format.format(datePicker.getDate());
                    Matchs mt = new Matchs(idS,
                            idE1,
                            idE2,
                            datePicker.getDate(),
                            (int) Integer.parseInt(nb.getText()),
                            String.valueOf(hd.getText()).toString(),
                            String.valueOf(hf.getText()).toString(),
                            String.valueOf(des.getText()).toString(),
                            String.valueOf(stt.getSelectedItem()).toString(),
                            String.valueOf(sc.getSelectedItem()).toString(),
                            1);

                    // 
                    System.out.println("data stade" + mt.getDate());

                    ServiceMatchs.getInstance().addMatch(mt);
                    iDialog.dispose();
                    //  show();
                    new ListeMatchForm(res).show();
                    refreshTheme();
                }
            } catch (Exception ex) {
                ex.printStackTrace();
            }

        }
        );

        Label l1 = new Label("");
        Label l2 = new Label("");
        Label l3 = new Label("Date");
        Label l4 = new Label("");
        Label l5 = new Label("");
        Container content = BoxLayout.encloseY(l1, l2
        
        );
        add(content);

        show();

    }

    private void addStringValue(String s, Component v) {

        add(BorderLayout.west(new Label(s, "PadddedLabel"))
                .add(BorderLayout.CENTER, v));
        // add(createLineSeparator(0xeeeeee));

    }

    private void addTab(Tabs swipe, Label spacer, Image image, String string, String text, Resources res) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (image.getHeight() < size) {
            image = image.scaledHeight(size);
        }
        if (image.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            image = image.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel imageScale = new ScaleImageLabel(image);
        imageScale.setUIID("Container");
        imageScale.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overLay = new Label("", "ImageOverlay");

        Container page1 = LayeredLayout.encloseIn(
                LayeredLayout.encloseIn(
                        imageScale, overLay, BorderLayout.south(
                                BoxLayout.encloseY(new SpanLabel(text, "LargeWhiteText"), spacer)
                        )
                )
        );
        swipe.addTab("", res.getImage("stade-1.jpg"), page1);

    }

    public void bindButtonSelection(Button btn, Label l) {
        btn.addActionListener(e -> {
            if (btn.isSelected()) {
                updateArrowPosition(btn, l);
            }
        });
    }

    private void updateArrowPosition(Button btn, Label l) {

        l.getUnselectedStyle().setMargin(LEFT, btn.getX() + btn.getWidth() / 2 - l.getWidth() / 2);
        l.getParent().repaint();
    }
    /**
     * *************************************************************
     */

    Container gui_Container_1 = new Container(new BorderLayout());
    Container gui_Container_2 = new com.codename1.ui.Container(new FlowLayout());
    Label gui_Label_1 = new com.codename1.ui.Label();
    Container gui_Container_4 = new com.codename1.ui.Container(new FlowLayout());
    Label gui_Label_4 = new com.codename1.ui.Label();
    Container gui_Container_3 = new com.codename1.ui.Container(new BoxLayout(BoxLayout.Y_AXIS));

    private Label gui_Label_8 = new Label();
    private Container gui_Container_1_3 = new Container(new BorderLayout());
    private Container gui_Container_2_3 = new Container(new FlowLayout());

    private void initGuiBuilderComponents(Resources res) {
        setLayout(new BoxLayout(BoxLayout.Y_AXIS));
        setTitle("Add Match");
        setName("AddMatch");

        addComponent(gui_Container_1);
        /**
         * ************* Start Coontainer *******************
         */
        gui_Container_1.setName("Container_1");
        gui_Container_1.addComponent(BorderLayout.EAST, gui_Container_2);
        gui_Container_2.setName("Container_2");
        gui_Container_2.addComponent(gui_Label_1);

        gui_Container_4.setName("Container_4");
        ((FlowLayout) gui_Container_4.getLayout()).setAlign(Component.CENTER);
        gui_Container_4.addComponent(gui_Label_4);
        gui_Label_4.setUIID("Padding2");
        gui_Label_4.setName("Label_4");
        gui_Label_4.setIcon(res.getImage("label_round.png"));
        gui_Container_1.addComponent(BorderLayout.CENTER, gui_Container_3);
        gui_Container_3.setName("Container_3");
        /**
         * ************* End Coontainer *******************
         */

    }

}
