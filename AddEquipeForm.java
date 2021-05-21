/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.Views;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.Models.Equipe;
import com.mycompany.Services.Service_Equipe;
import java.io.IOException;


/**
 *
 * @author USER-PC
 */
public class AddEquipeForm extends Form{
    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ASUS
 */
      String file ;
      Resources theme;
    
     public AddEquipeForm(Form previous) throws IOException {
                super("Equipes", BoxLayout.y());
            theme = UIManager.initFirstTheme("/theme");
     this.getToolbar().setUIID("tb");
   
    
 
        this.getToolbar().addCommandToOverflowMenu("Add Equipe", null, ev->{
        Form addEquipe = new Form("Ajouter Equipe",BoxLayout.y());
Label AJOUT = new Label("ADD Equipe");
     
            addEquipe.add(AJOUT);
        TextField nom_equipe = new TextField("", "nom Equipe", 20, TextArea.TEXT_CURSOR);
          
TextField IdCoach=new TextField();     
Button save = new Button("Ajouter");
        addEquipe.add("Nom Equipe : ").add(nom_equipe);
        addEquipe.add("idCoach : ").add(IdCoach);
      
        addEquipe.add(save);
       
    
        save.addActionListener(l
                                -> {

                            if (nom_equipe.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de Nom equipe ", "OK", null);

                            }  else if (IdCoach.getText().equals("")) {
                                Dialog.show("Erreur", "Champ vide de id Coach ", "OK", null);

                           
                                    Equipe e = new Equipe(nom_equipe.getText(),Integer.valueOf(IdCoach.getText()));

        new Service_Equipe().AddEquipe(e);
                                        Dialog.show("Ajout", " Erreur d'ajout ", "OK", null);
                                    
                                } 

                            

                        }
                        );
 addEquipe.getToolbar().addCommandToLeftBar(null, theme.getImage("back.png"), evx -> {
                this.showBack();
            });
 
        
        
        addEquipe.show();
 });
          
  
     
        
           
                            

      
     
     }
       
     

    
}
