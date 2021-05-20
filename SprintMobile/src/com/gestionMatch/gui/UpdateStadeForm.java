/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.entities.User;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.service.ServiceStade;
import java.util.ArrayList;

/**
 *
 * @author esprit
 */
public class UpdateStadeForm extends com.menu.coheal.ui.BaseForm {

    private Resources theme_n;
    private Resources theme;

    public UpdateStadeForm() {
    }

    public UpdateStadeForm(Resources res, Stade s, Form p) {

        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Update Stade ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                 e -> p.showBack());
        installSidemenu(res);

        TextField nom = new TextField(s.getNomStade(), " nom Stade !!", 20, TextField.ANY);
        nom.setUIID("TextFieldBlack");
        nom.setSingleLineTextArea(true);
        

        TextField ad = new TextField(s.getAdresse(), " Adresse", 20, TextField.ANY);
        ad.setUIID("TextFieldBlack");
        ad.setSingleLineTextArea(true);
        // addStringValue("Adresse", ad);

        TextField ville = new TextField(s.getVille(), " ville!!", 20, TextField.ANY);
        ville.setUIID("TextFieldBlack");
        ville.setSingleLineTextArea(true);
        //   addStringValue("ville", ville);

        TextField c = new TextField(String.valueOf(s.getCapacite()), "Capacite", 20, TextField.ANY);
        c.setUIID("TextFieldBlack");
        c.setSingleLineTextArea(true);
        // addStringValue("capacite", c);
        ArrayList<User> list = new ArrayList<>();

        list = ServiceStade.getInstance().getUsers();
        System.out.println(list.size());
        ComboBox Combo = new ComboBox();
        for (User st : list) {

            Combo.addItem(st.getId());
        }

        Button btnModifier = new Button("Modifier");
        btnModifier.setUIID("Button");

        btnModifier.addPointerPressedListener(l -> {

            Dialog dig = new Dialog("Modification");
            if (dig.show("Modification", "voulez vous modifier ?", "Annuler", "oui")) {
                dig.dispose();
            } else {
                dig.dispose();
                s.setAdresse(ad.getText());
                s.setNomStade(nom.getText());

                s.setVille(ville.getText());
                s.setCapacite(Integer.parseInt(c.getText().toString()));

                s.setIdUser(/*Integer.parseInt(Combo.getSelectedItem().toString())*/1);

                if (ServiceStade.getInstance().modifierStade(s)) {
                    new ListeStadeForm(res).show();
                }
            }
        });

       /* Button btnAnnuler = new Button("Annuler");
        btnAnnuler.addActionListener(e -> {
            new ListeStadeForm(res).show();
        });*/

        Label l1 = new Label("");
        Label l2 = new Label("");
        Label l3 = new Label("");
        Label l4 = new Label("");
        Label l5 = new Label("");

        Container content = BoxLayout.encloseY(l1, l2, new FloatingHint(nom),
                new FloatingHint(ad),
                new FloatingHint(ville),
                new FloatingHint(c),
                // Combo,
                l4, l5,
                btnModifier
               // btnAnnuler
        );
        add(content);
    }

    /**
     * ********************************************************************************
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
