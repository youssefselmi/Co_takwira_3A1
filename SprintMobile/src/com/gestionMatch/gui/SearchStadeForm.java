/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
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
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.gestionMatch.service.ServiceStade;

/**
 *
 * @author esprit
 */
public class SearchStadeForm extends com.menu.coheal.ui.BaseForm {

    public final Resources theme = UIManager.initFirstTheme("/themeCoHeal");

    Button btnrech;
    TextField rtitre;
    SpanLabel lb;
    Button btnaff;

    public SearchStadeForm() {
    }

    public SearchStadeForm(Resources res,Form p) {

        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Chercher un stade ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
 getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> p.showBack()); 
        installSidemenu(res);

        /**
         * *************************************************
         */
        btnrech = new Button("Search");
        rtitre = new TextField("", "Nom");
        rtitre.setUIID("TextFieldBlack");
        lb = new SpanLabel("");
        SpanLabel lb2 = new SpanLabel("");
         btnaff = new Button("show list");

        // this.addComponent(rtitre);
        this.add(rtitre);

        this.add(btnrech);
         
        this.add(lb);
        this.add(btnaff);
        this.add(lb2);

        btnrech.addActionListener((e) -> {

            if (rtitre.getText().equalsIgnoreCase("")) {
                //

                Dialog.show("alert", "Please, try to fill the text field title !!", "ok", null);
                ;
            } else {
                ServiceStade ser = new ServiceStade();

                lb.setText(ser.Recherche(rtitre.getText()).toString());
            }
        });
        btnaff.addActionListener((e) -> {

            
                ServiceStade ser = new ServiceStade();

                lb2.setText(ser.affichageStade().toString());
            
        });
        
        

    }

    /**
     * ******************************************************
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
