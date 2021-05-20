package com.gestionMatch.gui;

import com.codename1.components.FloatingActionButton;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.TextArea;
import com.codename1.ui.animations.CommonTransitions;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Rectangle;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.RoundBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Equipe;
import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;

import com.gestionMatch.service.ServiceMatchs;
import com.menu.coheal.ui.BaseForm;

import java.util.ArrayList;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author esprit
 */
public class ListeMatchForm extends com.menu.coheal.ui.BaseForm {

    public ListeMatchForm() {

    }

    private Resources theme_n;
    private Resources theme;

    public ListeMatchForm(Resources res) {
        theme = UIManager.initFirstTheme("/theme_n");
        initGuiBuilderComponents(res);

        /**
         * ** button *
         */
        /*  
        getToolbar().setTitleComponent(
                FlowLayout.encloseRight(
                   
                 
                )
        );*/
        installSidemenu(res);

        getToolbar().addCommandToLeftBar("", theme_n.getImage("toolbar-profile-pic.png"), e -> {
        });

        /**
         * ********************* add ******************
         */
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        FloatingActionButton fa = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        FloatingActionButton msg = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);

        /*RoundBorder rm = (RoundBorder) msg.getUnselectedStyle().getBorder();
        rm.uiid(true);
        msg.bindFabToContainer(getContentPane());
        msg.addActionListener(e -> {

            //new AddMatchForm(theme).show();

        });*/
        RoundBorder rb = (RoundBorder) fab.getUnselectedStyle().getBorder();
        rb.uiid(true);
        fab.bindFabToContainer(getContentPane());
        fab.addActionListener(e -> {

            new AddMatchForm(theme,this).show();
            /*fab.setUIID("FloatingActionButtonClose");
            Image oldImage = fab.getIcon();
            FontImage image = FontImage.createMaterial(FontImage.MATERIAL_CLOSE, "FloatingActionButton", 3.8f);
            fab.setIcon(image);
            Dialog popup = new Dialog();
            popup.setDialogUIID("Container");
            popup.setLayout(new LayeredLayout());
            Button c1 =fa;
            Button c2 =msg;
            c1.setUIID("Container");
            c2.setUIID("Container");
              Button trans = new Button(" ");
            trans.setUIID("Container");
            Style c1s = c1.getAllStyles();
            Style c2s = c2.getAllStyles();
             c1s.setMarginUnit(Style.UNIT_TYPE_DIPS);
            c2s.setMarginUnit(Style.UNIT_TYPE_DIPS);
            c1s.setMarginBottom(16);
            c1s.setMarginLeft(12);
            c1s.setMarginRight(3);

            c2s.setMarginLeft(4);
            c2s.setMarginTop(5);
            c2s.setMarginBottom(10);
            c1s.setMarginBottom(16);
            c1s.setMarginLeft(12);
            c1s.setMarginRight(3);

           popup.add(trans).
                    add(FlowLayout.encloseIn(c1)).
                    add(FlowLayout.encloseIn(c2));
            ActionListener a = ee -> popup.dispose();
            
            trans.addActionListener(a);
            c1.addActionListener(a);
            c2.addActionListener(a);
             
            popup.setTransitionInAnimator(CommonTransitions.createEmpty());
            popup.setTransitionOutAnimator(CommonTransitions.createEmpty());
            popup.setDisposeWhenPointerOutOfBounds(true);
            int t = ListeMatchForm.this.getTintColor();
            ListeMatchForm.this.setTintColor(0);
            popup.showPopupDialog(new Rectangle(ListeMatchForm.this.getWidth() - 10, ListeMatchForm.this.getHeight() - 10, 10, 10));
            ListeMatchForm.this.setTintColor(t);
            fab.setUIID("FloatingActionButton");
            fab.setIcon(oldImage);
           
             */
        });

    }
    /**
     * ********************** fin button *****************************
     */
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
        setTitle("Liste des matchs");
        setName("InboxForm");

        ArrayList<Matchs> list = new ArrayList<>();
        list = ServiceMatchs.getInstance().affichageMatch();
        System.out.println(list.size());
        addComponent(gui_Container_1);

        FloatingActionButton vt = FloatingActionButton.createFAB(FontImage.MATERIAL_HOW_TO_VOTE);

        RoundBorder rb = (RoundBorder) vt.getUnselectedStyle().getBorder();
        rb.uiid(true);
        
        vt.addActionListener(e -> {

            new VoteMatchForm(res,this).show();
        });

        FloatingActionButton ch = FloatingActionButton.createFAB(FontImage.MATERIAL_IMAGE_SEARCH);

        RoundBorder rc = (RoundBorder) ch.getUnselectedStyle().getBorder();
        rc.uiid(true);

        ch.addActionListener(e -> {

            new StatsMatchsForm(theme,this).show();
        });
        FloatingActionButton inv = FloatingActionButton.createFAB(FontImage.MATERIAL_MAIL);

        RoundBorder rv = (RoundBorder) inv.getUnselectedStyle().getBorder();
        rv.uiid(true);

        inv.addActionListener(e -> {

           new SendMessageForm(res,this).show();
        });

        /*addComponent(gui_Container_1);*/
        gui_Container_1.setName("Container_1");
        gui_Container_1.addComponent(com.codename1.ui.layouts.BorderLayout.EAST, gui_Container_2);
        gui_Container_2.setName("Container_2");
        //
        gui_Container_2.addComponent(0, vt);
        gui_Container_2.addComponent(1, ch);
        gui_Container_2.addComponent(2, inv);
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

        for (Matchs s : list) {

            Image placeHolder = Image.createImage(120, 90);
            EncodedImage enc = EncodedImage.createFromImage(placeHolder, false);

            Image urlm = theme_n.getImage("ball.jpg");
            addButton(urlm, s, theme_n);
        }

    }

    private void addButton(Image img, Matchs s, Resources res) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(11.5f);
        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        ArrayList<Stade> listeS = new ArrayList<>();

        listeS = ServiceMatchs.getInstance().findS(s.getIdStade());
        //  System.out.println("aaaaaaaaaaaa"+s.getIdStade());
        System.out.println("eeeeeeee");
        String nn = "";
        for (Stade ss : listeS) {
            nn = ss.getNomStade();

        }

        String n1 = "";
        String n2 = "";
        ArrayList<Equipe> listeE = new ArrayList<>();

        listeE = ServiceMatchs.getInstance().findE(s.getIdEquipe1());
        for (Equipe s1 : listeE) {
            n1 = s1.getNomEquipe();
        }

        listeE = ServiceMatchs.getInstance().findE(s.getIdEquipe2());
        for (Equipe s2 : listeE) {
            n2 = s2.getNomEquipe();
        }

        Container cnt = BorderLayout.west(image);
//Container cnt = new Container();
        TextArea im = new TextArea("Id Matchs :  " + s.getIdMatch());
        im.setUIID("NewsTopLine2");
        im.setEditable(false);

        TextArea st = new TextArea("Stade:     " + s.getIdStade());
        st.setUIID("NewsTopLine2");
        st.setEditable(false);

        TextArea eq1 = new TextArea("Equipe1   :     " + n1);
        eq1.setUIID("NewsTopLine2");
        eq1.setEditable(false);

        TextArea eq2 = new TextArea("Equipe2   :     " + n2);
        eq2.setUIID("NewsTopLine2");
        eq2.setEditable(false);

        TextArea desc = new TextArea(String.valueOf("Description :  " + s.getDescription()));
        desc.setUIID("NewsTopLine2");
        desc.setEditable(false);

        TextArea d = new TextArea(String.valueOf("Date :  " + s.getDate()));
        d.setUIID("NewsTopLine2");
        d.setEditable(false);

        TextArea hd = new TextArea(String.valueOf("Heure Début :  " + s.getHeureDeb()));
        hd.setUIID("NewsTopLine2");
        hd.setEditable(false);

        TextArea hf = new TextArea(String.valueOf("Heure Fin :  " + s.getHeureFin()));
        hf.setUIID("NewsTopLine2");
        hf.setEditable(false);

        TextArea stt = new TextArea(String.valueOf("status :  " + s.getStatus()));
        stt.setUIID("NewsTopLine2");
        stt.setEditable(false);

        TextArea sc = new TextArea(String.valueOf("score :  " + s.getScore()));
        sc.setUIID("NewsTopLine2");
        sc.setEditable(false);

        TextArea nb = new TextArea(String.valueOf("nb Spectateur :  " + s.getNbSpectateur()));
        nb.setUIID("NewsTopLine2");
        nb.setEditable(false);

        TextArea x = new TextArea(String.valueOf("============================"));
        x.setUIID("NewsTopLine2");
        x.setEditable(false);

        //  createLineSeparator();
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
                if (ServiceMatchs.getInstance().deleteMatch(s.getIdMatch())) {
                    new ListeMatchForm(res).show();
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
          // new UpdateStadeForm(res,s).show();
        });
        cnt.add(BorderLayout.CENTER, BoxLayout.encloseY(BoxLayout.encloseX(im),
                BoxLayout.encloseX(st), BoxLayout.encloseX(eq1),
                BoxLayout.encloseX(eq2), BoxLayout.encloseX(desc),
                BoxLayout.encloseX(d), BoxLayout.encloseX(hd),
                BoxLayout.encloseX(hf), BoxLayout.encloseX(stt),
                BoxLayout.encloseX(sc), BoxLayout.encloseX(nb), BoxLayout.encloseX(lMod, lSup), BoxLayout.encloseX(x)
        ));

        add(cnt);

    }
}
