/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.InfiniteProgress;
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
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.service.ServiceStade;

/**
 *
 * @author esprit
 */
public class AddStadeForm  extends com.menu.coheal.ui.BaseForm  {

    private Resources theme_n;
    private Resources theme;
    public AddStadeForm() {
    }
     public AddStadeForm(Resources res,Form  previous) {
         
        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Ajouter un nouveau Stade ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
 getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); 
        installSidemenu(res);
        
        
        /*************************************************************************/
         
        TextField nom = new TextField("", " nom Stade !!");
        nom.setUIID("TextFieldBlack");
        addStringValue("nomStade", nom);

        TextField ad = new TextField("", " Adresse");
        ad.setUIID("TextFieldBlack");
        addStringValue("Adresse", ad);

        TextField ville = new TextField("", " ville!!");
        ville.setUIID("TextFieldBlack");
        addStringValue("ville", ville);

        TextField c = new TextField("", "Capacite");
        c.setUIID("TextFieldBlack");
        addStringValue("capacite", c);

        Button btnAjouter = new Button("Ajouter");
        addStringValue("", btnAjouter);

        btnAjouter.addActionListener((e) -> {

            try {
                if ((nom.getText().length() == 0) || (ad.getText().length() == 0) || (ville.getText().length() == 0) || (c.getText().length() == 0)) {
                   Dialog.show("Veuillez vérifier les données","","Annuler","OK");
                  

                }
                else{
                    InfiniteProgress ip = new InfiniteProgress();
                    final Dialog iDialog = ip.showInfiniteBlocking();
                    Stade st = new Stade(1,String.valueOf(nom.getText()).toString()
                            , String.valueOf(ville.getText()).toString(),
                            String.valueOf(ad.getText()).toString()
                            ,(int) Integer.parseInt(c.getText()));
                    System.out.println("data stade"+st);
                    
                    ServiceStade.getInstance().addStade(st);
                    iDialog.dispose();
                    new ListeStadeForm(res).show();
                    refreshTheme();
                }
            }catch(Exception ex){
                ex.printStackTrace();
            }

        }
        );

    }
     
      private void addStringValue(String s, Component v) {

        add(BorderLayout.west(new Label(s, "PadddedLabel"))
                .add(BorderLayout.CENTER, v));
       

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
