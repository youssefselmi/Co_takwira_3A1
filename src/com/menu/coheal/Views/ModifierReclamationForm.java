/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entites.Reclamation;
import com.menu.coheal.Service.ServiceReclamation;

/**
 *
 * @author yassin
 */
public class ModifierReclamationForm extends BaseForm {

    Form current;

    public ModifierReclamationForm(Resources res, Reclamation rec) {
        super("Newsfeed", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("container");
        setTitle("Ajouter Reclamation");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);
        //TextField Sujetrec = new TextField(rec.getSujetRec(), "Sujet", 20, TextField.ANY);
        TextField DescriptionRec = new TextField(rec.getDescriptionRec(), "Description", 20, TextField.ANY);
        TextField Sujetrec = new TextField(String.valueOf(rec.getSujetRec()), "Sujet", 20, TextField.ANY);

        ///Combobox
        ComboBox SujetCombo = new ComboBox();
        SujetCombo.addItem("Application");
        SujetCombo.addItem("Coach");
        SujetCombo.addItem("Autre");
        
        
        
        
        if(rec.getSujetRec().equals("Application")){SujetCombo.setSelectedIndex(0);}
        if(rec.getSujetRec().equals("Coach")){SujetCombo.setSelectedIndex(1);}
        if(rec.getSujetRec().equals("Autre")){SujetCombo.setSelectedIndex(2);}

        Sujetrec.setUIID("NewsTopLine");
        Sujetrec.setSingleLineTextArea(true);
        DescriptionRec.setUIID("NewsTopLine");
        DescriptionRec.setSingleLineTextArea(true);

        Button btnModifier = new Button("Modifier");

        //Evenet onClick btnModifier
        btnModifier.addPointerPressedListener(l -> {
           // rec.setSujetRec(Sujetrec.getText());
            rec.setSujetRec(SujetCombo.getSelectedItem().toString());
            rec.setDescriptionRec(DescriptionRec.getText());

            if (ServiceReclamation.getInstance().ModifierReclamation(rec)) {
                new ListeReclamationForm(res).show();
            }

        });

        Button btnAnnuler = new Button("Annuler");
        btnAnnuler.addActionListener(l -> {
            new ListeReclamationForm(res).show();
        });

        Label l1 = new Label();
        Label l2 = new Label();
        Label l3 = new Label();
        Label l4 = new Label();
        Label l5 = new Label();

        Container content = BoxLayout.encloseY(
                l1, l2,
                SujetCombo,
                createLineSeparator(),
                new FloatingHint(DescriptionRec),
                createLineSeparator(),
                btnModifier,
                btnAnnuler
        );
        add(content);
        show();

    }

}
