/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.Views;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.Models.Coach;
import com.mycompany.Models.Equipe;
import com.mycompany.Services.Service_Equipe;
import com.mycompany.Services.Service_Joueur;
import com.mycompany.myapp.MyApplication;
import java.io.IOException;


/**
 *
 * @author USER-PC
 */
public class EquipeForm extends Form{
    Resources theme = UIManager.initFirstTheme("/theme");

    public EquipeForm(Form previous)
    {
           super("Categories",BoxLayout.y());
          
             for (Equipe c : new Service_Equipe().findAll()) {

            this.add(addItem_Categorie(c));

        }
           
                     
               this.getToolbar().addCommandToOverflowMenu("back", null, ev -> {
           new MyApplication().start();
        });
               
    }
    
     public Container addItem_Categorie(Equipe c) {
//  String url = "http://127.0.0.1:8000/" + c.getIm();
//            ImageViewer image_coach;
//            Image imge;
//            EncodedImage enc;
//            enc = EncodedImage.createFromImage(theme.getImage("round.png"), false);
//            imge = URLImage.createToStorage(enc, url, url);
//                 image_coach = new ImageViewer(imge);
//        
        Container cn1 = new Container(new BorderLayout());
        Container cn2 = new Container(BoxLayout.y());
         Label id_equipe = new Label("id Equipe : "+String.valueOf(c.getId_e()));

        
        Label nom_equipe = new Label("Nom Equipe : "+c.getNom_equipe());
        
    
    //   Label id_coach = new Label("Id coach : "+String.valueOf(c.getId_coach()));
    Label nom_coach = new Label(" coach : "+c.getNom_coach()+" "+c.getPrenom_coach());
       // Label prenom_coach = new Label("Prenom coach : "+c.getPrenom_coach());


 
       

           
        Button btn_junior = new Button("junior");
                Button btn_sunior = new Button("Senior");

  
    btn_sunior .addActionListener(e -> {
    
       new JoueurFormSenior(this, c).show();
       

        });
       btn_junior.addActionListener(e -> {
    
      new JoueurForm(this, c).show();
       

        });
      

      
        cn2.add(id_equipe).add(nom_equipe).add(nom_coach).add( btn_junior ).add( btn_sunior );
        cn1.add(BorderLayout.WEST, cn2);
   
        


   
      
         /*for (int i = 0; i < c.getQuestionnaires().size(); i++) {
              Container cnq = new Container(new BorderLayout());
        Container cnq2 = new Container(BoxLayout.y());
       
   
      
        

        cnq2.add(c.getQuestionnaires().get(i));
        cnq.add(BorderLayout.WEST, cn2);
      
       
         }*/
        //(String) c.getQuestionnaires().get("username");




                //cn1.setLeadComponent(btn2);

        
        return cn1;

    }
     
     
     
        
}

