/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.SpanLabel;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.service.ServiceMatchs;
import com.gestionMatch.service.ServiceStade;
import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author esprit
 */
public class SendMessageForm extends com.menu.coheal.ui.BaseForm {

    public SendMessageForm() {
    }

    public SendMessageForm(Resources res,Form p) {

        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Envoyer une invitation ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
 getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> p.showBack());
        installSidemenu(res);
        /**
         * ***************************************************************
         */
         ComboBox Cm = new ComboBox();
        SpanLabel lb = new SpanLabel("");

      

        TextArea t = new TextArea();
        TextArea tb = new TextArea();
        
Date D = new Date();
 

     ArrayList<Matchs> mm = new ArrayList<>();
     mm =ServiceMatchs.getInstance().affichageMatchOrg();
      lb.setText(mm.get(0).toString());
     for(Matchs g :mm){
          Cm.addItem(g.getIdMatch());
         
          
          
     }
    
       

        Button btn = new Button("send Email");
        btn.addActionListener(l -> {
         
          
   
            Message m = new Message(tb.getText()+"\nInformations sur les matchs organisées\n"+lb.getText().toString());
            String r = t.getText().toString();
            ArrayList <Matchs> po = new ArrayList<>();
            po = ServiceMatchs.getInstance().findM(Integer.parseInt(Cm.getSelectedItem().toString()));
           
            
 
            Display.getInstance().sendMessage(new String[]{r}, "Invitation Match", m);
        });
        add(new Label("A :"));
        add(t);
        add(new Label("Message :"));

        add(tb);
        add(new Label("Chercher un match par Stade:"));
        add(Cm);
        add(lb);
        add(btn);
        /**
         * ***************************************************************
         */

    }

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
