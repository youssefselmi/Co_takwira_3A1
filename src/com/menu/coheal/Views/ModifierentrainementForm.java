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
import com.menu.coheal.Models.Entrainement;
import com.mycompany.entites.Reclamation;
import com.menu.coheal.Service.ServiceReclamation;
import com.menu.coheal.Service.Service_Entrainement;

/**
 *
 * @author yassin
 */
public class ModifierentrainementForm extends BaseForm {

    Form current;

    public ModifierentrainementForm(Resources res, Entrainement rec) {
        super("Newsfeed", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("container");
        setTitle("Ajouter Entrainement");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);
        //TextField Sujetrec = new TextField(rec.getSujetRec(), "Sujet", 20, TextField.ANY);
        TextField DescriptionRec = new TextField(rec.getType(), "Type", 20, TextField.ANY);
        TextField Sujetrec = new TextField(String.valueOf(rec.getDuree()), "Duree", 20, TextField.ANY);

        ///Combobox
        System.out.println("eeee"+rec.getDuree());

        Sujetrec.setUIID("NewsTopLine");
        Sujetrec.setSingleLineTextArea(true);
        DescriptionRec.setUIID("NewsTopLine");
        DescriptionRec.setSingleLineTextArea(true);

        Button btnModifier = new Button("Modifier");

        //Evenet onClick btnModifier
        btnModifier.addPointerPressedListener(l -> {
           // rec.setSujetRec(Sujetrec.getText());
            rec.setType(DescriptionRec.getText());
            rec.setDuree(Integer.parseInt(Sujetrec.getText()));

            if (Service_Entrainement.getInstance().ModifierEntrainement(rec)) {
                new ListEntrainementForm(res).show();
            }

        });

        Button btnAnnuler = new Button("Annuler");
        btnAnnuler.addActionListener(l -> {
            new ListEntrainementForm(res).show();
        });

        Label l1 = new Label();
        Label l2 = new Label();
        Label l3 = new Label();
        Label l4 = new Label();
        Label l5 = new Label();

        Container content = BoxLayout.encloseY(
                l1, l2,
                DescriptionRec,
                createLineSeparator(),
                Sujetrec,
                createLineSeparator(),

                btnModifier,
                btnAnnuler
        );
        add(content);
        show();

    }

}
