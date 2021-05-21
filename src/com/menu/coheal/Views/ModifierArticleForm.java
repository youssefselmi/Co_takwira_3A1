/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.menu.coheal.Models.Article;
import com.menu.coheal.Service.ServiceArticle;
/**
 *
 * @author khali
 */
public class ModifierArticleForm extends BaseForm {
    Form current;
    
    public ModifierArticleForm(Resources res, Article a){
        super("Newsfeed",BoxLayout.y());
        
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout Article");
        getContentPane().setScrollVisible(false);
        
        super.addSideMenu(res);
        
        TextField type= new TextField(a.getType(),"Type",20,TextField.ANY);
        TextField titre= new TextField(a.getTitre(),"Titre",20,TextField.ANY);
        TextField description= new TextField(a.getDescription(),"Description",20,TextField.ANY);
        
        type.setUIID("NewsTopLine");
        titre.setUIID("NewsTopLine");
        description.setUIID("NewsTopLine");
        
        type.setSingleLineTextArea(true);
        titre.setSingleLineTextArea(true);
        description.setSingleLineTextArea(true);
        
        Button btnModifier = new Button("Modifier");
        btnModifier.setUIID("Button");
        
        btnModifier.addPointerPressedListener(l -> {
            a.setType(type.getText());
            a.setTitre(titre.getText());
            a.setDescription(description.getText());
        
        
        if(ServiceArticle.getInstance().modifierArticle(a)){
            new ListArticleForm(res).show();
        }
        });
        Button btnAnnuler = new Button("Annuler");
        btnAnnuler.addActionListener(l -> {
            new ListArticleForm(res).show();
        });
        
        Label l2 = new Label("");
        Label l3 = new Label("");
        Label l4 = new Label("");
        Label l5 = new Label("");
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1,l2,
                new FloatingHint(type),
                createLineSeparator(),
                new FloatingHint(titre),
                createLineSeparator(),
                new FloatingHint(description),
                createLineSeparator(),
                l4,l5,
                btnModifier,
                btnAnnuler

        );
        
        add(content);
        show();
        
        
    }
    
}
