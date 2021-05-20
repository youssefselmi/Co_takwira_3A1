/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.gui;

import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.gestionMatch.entities.Equipe;
import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.entities.Vote;
import com.gestionMatch.service.ServiceMatchs;
import java.util.ArrayList;

/**
 *
 * @author esprit
 */
public class VoteMatchForm extends com.menu.coheal.ui.BaseForm {

    public final Resources theme = UIManager.initFirstTheme("/themeCoHeal");

    public VoteMatchForm(Resources res,Form p) {

        initGuiBuilderComponents(res);

        getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        new Label("Add a new Match ", "Title"),
                        new Label("", "InboxNumber")
                )
        );
getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> p.showBack());
        installSidemenu(res);
        
        /****************************************************/
         ArrayList<Matchs> list = new ArrayList<>();

        list = ServiceMatchs.getInstance().affichageMatchTermine();
       // System.out.println(list.size());
    Resources   theme_n = UIManager.initFirstTheme("/theme_n");
        for (Matchs m : list) {
/*** iniit stars ***/
           Image placeHolder = Image.createImage(120, 90);
            EncodedImage enc = EncodedImage.createFromImage(placeHolder, false);

            Image urlm = theme_n.getImage("ball.jpg");
         
            addButton(urlm, m,theme_n);;
 /*--------------------------------------------------------------*/
  Container container = new Container(new FlowLayout());
                    Label LB = new Label("Nom");
                    Container de = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    de.add(LB);
                    Container detailsContainer = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    detailsContainer.add(new Label("Voter "));
                  
                   
                 
                    container.add(detailsContainer);
                    Container ra = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    
                        ra.addComponent(FlowLayout.encloseCenter(createStarRankSlider("nawres",m.getIdMatch(),1)));


                        container.add(ra);
                  add(container);
 
 
          
            Container containerImg = new Container();
           

        }

    }
 private void addTab(Tabs swipe, Label spacer, Image image, String string, String text, Resources res) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (image.getHeight() < size) {
            image = image.scaledHeight(size);
        }
        if (image.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            image = image.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel imageScale = new ScaleImageLabel(image);
        imageScale.setUIID("Container");
        imageScale.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overLay = new Label("", "ImageOverlay");

        Container page1 = LayeredLayout.encloseIn(
                LayeredLayout.encloseIn(
                        imageScale, overLay, BorderLayout.south(
                                BoxLayout.encloseY(new SpanLabel(text, "LargeWhiteText"), spacer)
                        )
                )
        );
        swipe.addTab("", res.getImage("dog.jpg"), page1);

    }

    public void bindButtonSelection(Button btn, Label l) {
        btn.addActionListener(e -> {
            if (btn.isSelected()) {
                updateArrowPosition(btn, l);
            }
        });
    }

    private void updateArrowPosition(Button btn, Label l) {

        l.getUnselectedStyle().setMargin(LEFT, btn.getX() + btn.getWidth() / 2 - l.getWidth() / 2);
        l.getParent().repaint();
    }

    private void addButton(Image img, Matchs s, Resources res) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(11.5f);
        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        String nn = "";
        ArrayList<Stade> listeS = new ArrayList<>();
       
        listeS = ServiceMatchs.getInstance().findS(s.getIdStade());
        //  System.out.println("aaaaaaaaaaaa"+s.getIdStade());
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

        TextArea im = new TextArea("Id Matchs :  " + s.getIdMatch());
        im.setUIID("NewsTopLine2");
        im.setEditable(false);
      
        TextArea st = new TextArea("Stade:     " + s.getIdStade());
        st.setUIID("NewsTopLine2");
        st.setEditable(false);

        TextArea eq1 = new TextArea("Equipe1   :     " +n1);
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
            //new updateStadeForm(res,s).show();
        });
        cnt.add(BorderLayout.CENTER, BoxLayout.encloseY(BoxLayout.encloseX(im),
                BoxLayout.encloseX(st), BoxLayout.encloseX(eq1),
                BoxLayout.encloseX(eq2), BoxLayout.encloseX(desc),
                BoxLayout.encloseX(d), BoxLayout.encloseX(hd),
                BoxLayout.encloseX(hf), BoxLayout.encloseX(stt),
                BoxLayout.encloseX(sc), BoxLayout.encloseX(nb), BoxLayout.encloseX(lMod, lSup)/*,BoxLayout.encloseX(btnVoter)*/, BoxLayout.encloseX(x)
        ));

        add(cnt);
        
    }  
    
      private void initStarRankStyle(Style s, Image star) {
    s.setBackgroundType(Style.BACKGROUND_IMAGE_TILE_BOTH);
    s.setBorder(Border.createEmpty());
    s.setBgImage(star);
    s.setBgTransparency(0);} 
private Slider createStarRankSlider(String sa ,int idM, int id) {
    Slider starRank = new Slider();
    starRank.setEditable(true);
    starRank.setMinValue(0);
    starRank.setIncrements(1);
    starRank.setMaxValue(5);
    Font fnt = Font.createTrueTypeFont("native:MainLight", "native:MainLight").
            derive(Display.getInstance().convertToPixels(5, true), Font.STYLE_PLAIN);
    Style s = new Style(0xffff33, 0, fnt, (byte)0);
    Image fullStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
    s.setOpacity(100);
    s.setFgColor(0);
    Image emptyStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
    initStarRankStyle(starRank.getSliderEmptySelectedStyle(), emptyStar);
    initStarRankStyle(starRank.getSliderEmptyUnselectedStyle(), emptyStar);
    initStarRankStyle(starRank.getSliderFullSelectedStyle(), fullStar);
    initStarRankStyle(starRank.getSliderFullUnselectedStyle(), fullStar);
    starRank.setPreferredSize(new Dimension(fullStar.getWidth() * 5, fullStar.getHeight()));
                                               starRank.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                        Dialog.show(sa, String.valueOf(starRank.getProgress()), "OK", "cancel");
                        int vte =(int) Double.parseDouble(String.valueOf(starRank.getProgress()));
                        System.out.println(starRank.getProgress());
                       
                        System.out.println(vte);
      ServiceMatchs sv = new  ServiceMatchs();
      Vote v = new Vote(idM,1,vte);
      sv.addVote(v);
                        
                    }
                                
                   
                }); 
    return starRank;}

/*********************************************************/
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
