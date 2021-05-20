/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.FloatingActionButton;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.RoundBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.service.ServiceMatchs;
import com.gestionMatch.service.ServiceStade;
import java.util.ArrayList;

/**
 *
 * @author esprit
 */
public class ListeStadeForm extends com.menu.coheal.ui.BaseForm {

    public ListeStadeForm() {
    }
    
    
    private Resources theme_n;
    private Resources theme;
    
    public ListeStadeForm(Resources res) {
        initGuiBuilderComponents(res);

        installSidemenu(res);

        getToolbar().addCommandToLeftBar("", theme_n.getImage("toolbar-profile-pic.png"), e -> {
        });

       
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
       /* FloatingActionButton fa = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        FloatingActionButton msg = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);*/

        RoundBorder rb = (RoundBorder) fab.getUnselectedStyle().getBorder();
        rb.uiid(true);
        fab.bindFabToContainer(getContentPane());
        fab.addActionListener(e -> {

            new AddStadeForm(res,this).show();
           
        });
        
        
        ArrayList<Stade> list = new ArrayList<>();

        list = ServiceStade.getInstance().affichageStade();
        System.out.println(list.size());
        for (Stade s : list) {

           String urlImage = "back-logo.png";
            Image placeHolder = Image.createImage(120, 90);
            EncodedImage enc = EncodedImage.createFromImage(placeHolder, false);
            //URLImage urlm = URLImage.createToStorage(enc, urlImage, urlImage, URLImage.RESIZE_SCALE);
Image urlm = theme_n.getImage("ball.jpg");
            TextField nom = new TextField("", s.getNomStade());
            nom.setUIID("TextFieldBlack");

         
           addButton(urlm, s.getIdStade(), s.getNomStade(), s.getAdresse(), s.getVille(), s.getCapacite(), s,theme_n);

        
            Container containerImg = new Container();
       

        }
        
    }
       private void addButton(Image img,int idStade, String nomStade, String adresse, String ville, int capacite, Stade s, Resources res) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(11.5f);
    Button image = new Button(img.fill(width, height));
      image.setUIID("Label");

        Container cnt = BorderLayout.west(image);

        TextArea ta = new TextArea("Nom Stade :  " + nomStade);
        ta.setUIID("NewsTopLine2");
        ta.setEditable(false);

        TextArea a = new TextArea("Adresse :     " + adresse);
        a.setUIID("NewsTopLine2");
        a.setEditable(false);

        TextArea v = new TextArea("Ville   :     " + ville);
        v.setUIID("NewsTopLine2");
        v.setEditable(false);

        TextArea c = new TextArea(String.valueOf("Capacite :  " + capacite));
        c.setUIID("NewsTopLine2");
        c.setEditable(false);


        Label lSup = new Label(" ");
        lSup.setUIID("NewsTopLine");
        Style supprimerStyle = new Style(lSup.getUnselectedStyle());
        supprimerStyle.setFgColor(0xf21f1f);

        FontImage supprimerImage = FontImage.createMaterial(FontImage.MATERIAL_DELETE, supprimerStyle);
        lSup.setIcon(supprimerImage);
        lSup.setTextPosition(RIGHT);

        lSup.addPointerPressedListener(l -> {
            Dialog dig = new Dialog("Supression");
            if (dig.show("Supression", "voulez vous supprimer ?", "Annuler", "oui")) {
                dig.dispose();
            } else {
                dig.dispose();
                if (ServiceStade.getInstance().deleteStade(s.getIdStade())) {
                             new ListeStadeForm(res).show();
                }
            }
            });

       Label lMod = new Label(" ");
        lMod.setUIID("NewsTopLine");
        Style modStyle = new Style(lMod.getUnselectedStyle());
        modStyle.setFgColor(0xf7ad02);

        FontImage modifImage = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT, modStyle);
        lMod.setIcon(modifImage);
        lMod.setTextPosition(LEFT);

        lMod.addPointerPressedListener(l -> {
            Dialog dig = new Dialog("Modification");
          new UpdateStadeForm(res,s,this).show();
            });
        cnt.add(BorderLayout.CENTER, BoxLayout.encloseY(BoxLayout.encloseX(ta),
                BoxLayout.encloseX(a), BoxLayout.encloseX(v), 
                BoxLayout.encloseX(c), /*BoxLayout.encloseX(f),*/
                BoxLayout.encloseX(lMod,lSup)
                ));

        add(cnt);
    }
     Container gui_Container_1 = new Container(new BorderLayout());
    Container gui_Container_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_1 = new com.codename1.ui.Label();
    Container gui_Container_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_4 = new com.codename1.ui.Label();
    Container gui_Container_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    Label gui_Label_3 = new com.codename1.ui.Label();
    Label gui_Label_2 = new com.codename1.ui.Label();
    TextArea gui_Text_Area_1 = new com.codename1.ui.TextArea();
    Label gui_Label_6 = new com.codename1.ui.Label();
    Container gui_Container_1_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    Container gui_Container_2_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_1_1 = new com.codename1.ui.Label();
    Container gui_Container_4_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_4_1 = new com.codename1.ui.Label();
    Container gui_Container_3_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    Label gui_Label_3_1 = new com.codename1.ui.Label();
    Label gui_Label_2_1 = new com.codename1.ui.Label();
    TextArea gui_Text_Area_1_1 = new com.codename1.ui.TextArea();
    Label gui_Label_7 = new com.codename1.ui.Label();
    Container gui_Container_1_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    Container gui_Container_2_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_1_2 = new com.codename1.ui.Label();
    Container gui_Container_4_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    Label gui_Label_4_2 = new com.codename1.ui.Label();
    Container gui_Container_3_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    Label gui_Label_3_2 = new com.codename1.ui.Label();
    Label gui_Label_2_2 = new com.codename1.ui.Label();
    TextArea gui_Text_Area_1_2 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_8 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_1_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());

// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void initGuiBuilderComponents(Resources res) {
        setLayout(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
        setTitle("Liste des Stades");
        setName("InboxForm");

        ArrayList<Matchs> list = new ArrayList<>();
        list = ServiceMatchs.getInstance().affichageMatch();
        System.out.println(list.size());
        addComponent(gui_Container_1);

        FloatingActionButton ch = FloatingActionButton.createFAB(FontImage.MATERIAL_IMAGE_SEARCH);

        RoundBorder rc = (RoundBorder) ch.getUnselectedStyle().getBorder();
        rc.uiid(true);

        ch.addActionListener(e -> {

           // new StatsMatchsForm(theme).show();
           new SearchStadeForm(res,this).show();
        });
      
        gui_Container_1.setName("Container_1");
        gui_Container_1.addComponent(com.codename1.ui.layouts.BorderLayout.EAST, gui_Container_2);
        gui_Container_2.setName("Container_2");
        //
       // gui_Container_2.addComponent(0, vt);
        gui_Container_2.addComponent(0, ch);
      //  gui_Container_2.addComponent(2, inv);
        gui_Label_1.setText("11:31 AM");
        gui_Label_1.setUIID("SmallFontLabel");
        gui_Label_1.setName("Label_1");
        gui_Container_1.addComponent(com.codename1.ui.layouts.BorderLayout.WEST, gui_Container_4);
        gui_Container_4.setName("Container_4");
        ((com.codename1.ui.layouts.FlowLayout) gui_Container_4.getLayout()).setAlign(com.codename1.ui.Component.CENTER);
        gui_Container_4.addComponent(gui_Label_4);
        gui_Label_4.setUIID("Padding2");
        gui_Label_4.setName("Label_4");
        gui_Label_4.setIcon(res.getImage("label_round.png"));
        gui_Container_1.addComponent(com.codename1.ui.layouts.BorderLayout.CENTER, gui_Container_3);
        gui_Container_3.setName("Container_3");
        theme_n = UIManager.initFirstTheme("/theme_n");

        

    }
}
