/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.menu.coheal.Models.Coach;
import com.menu.coheal.Models.Entrainement;
import com.menu.coheal.Service.Service_Coach;
import com.menu.coheal.Service.Service_Entrainement;
import com.menu.coheal.Views.BaseForm;
import java.util.Date;

/**
 *
 * @author khali
 */
public class AjoutEntrainementForm extends BaseForm {
    
    Form current;
    public AjoutEntrainementForm(Resources res){
        super("Newsfeed",BoxLayout.y());
        
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout entrainement");
        getContentPane().setScrollVisible(false);
        
        tb.addSearchCommand(e -> {
        
        });
        
        Tabs swipe = new Tabs();
        
        Label s1 = new Label();
        Label s2 = new Label();
        
        addTab(swipe,s1,res.getImage("back-logo.jpeg"),"","",res);
        //
          swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
        swipe.hideTabs();

        ButtonGroup bg = new ButtonGroup();
        int size = Display.getInstance().convertToPixels(1);
        Image unselectedWalkthru = Image.createImage(size, size, 0);
        Graphics g = unselectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAlpha(100);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        Image selectedWalkthru = Image.createImage(size, size, 0);
        g = selectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        RadioButton[] rbs = new RadioButton[swipe.getTabCount()];
        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);
        for (int iter = 0; iter < rbs.length; iter++) {
            rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
            rbs[iter].setPressedIcon(selectedWalkthru);
            rbs[iter].setUIID("Label");
            radioContainer.add(rbs[iter]);
        }

        rbs[0].setSelected(true);
        swipe.addSelectionListener((i, ii) -> {
            if (!rbs[ii].isSelected()) {
                rbs[ii].setSelected(true);
            }
        });

        Component.setSameSize(radioContainer, s1, s2);
        add(LayeredLayout.encloseIn(swipe, radioContainer));

        ButtonGroup barGroup = new ButtonGroup();
        RadioButton mesListes = RadioButton.createToggle("Mes Reclamations", barGroup);
        mesListes.setUIID("SelectBar");
        RadioButton liste = RadioButton.createToggle("Video", barGroup);
        liste.setUIID("SelectBar");
        RadioButton partage = RadioButton.createToggle("Reclamer", barGroup);
        partage.setUIID("SelectBar");
        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");

        
        
        
        
 
        
        

        mesListes.addActionListener((e) -> {
               InfiniteProgress ip = new InfiniteProgress();
        final Dialog ipDlg = ip.showInifiniteBlocking();
        
        //  ListReclamationForm a = new ListReclamationForm(res);
          //  a.show();
            refreshTheme();
        });

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(3, mesListes, liste, partage),
                FlowLayout.encloseBottom(arrow)
        ));

        partage.setSelected(true);
        arrow.setVisible(false);
        addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(partage, arrow);
        });
        bindButtonSelection(mesListes, arrow);
        bindButtonSelection(liste, arrow);
        bindButtonSelection(partage, arrow);
        // special case for rotation
        addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });
        
        

       
        
        //
        
        
        
                
        TextField duree = new TextField("", "Entrer duree : ");
        duree.setUIID("TextFieldBlack");
        addStringValue("duree",duree);
        
        
          
        TextField type = new TextField("", "Entrer type : ");
//        type.setUIID("TextFieldBlack");
//        addStringValue("Type",type);
//        
current.add(type);
        
        System.out.println(type.getText());
        
        
//        
//        
//        TextField titre = new TextField("", "Entrer date entrainement : ");
//        titre.setUIID("TextFieldBlack");
//        addStringValue("Titre",titre);
//        
//        
//        
        
        
        
        
        
        TextField heure = new TextField("", "Entrer heure : ");
        heure.setUIID("TextFieldBlack");
        addStringValue("Description",heure);
        
        
        ComboBox id_coach=new ComboBox();
        for (Coach e : new Service_Coach().findAll()) {
        id_coach.addItem(e.getId_coach());
        }
        current.add(id_coach);
        
//        
//        TextField id_coach = new TextField("", "Entrer id_coach : ");
//        id_coach.setUIID("TextFieldBlack");
//        addStringValue("id_coach",id_coach);
//        
        
        
        
        
        
         
        TextField id_stade = new TextField("", "Entrer id_stade : ");
        id_stade.setUIID("TextFieldBlack");
        addStringValue("id_stade",id_stade);
        
        
        
        
        
        TextField id_equipe = new TextField("", "Entrer id_equipe : ");
        id_equipe.setUIID("TextFieldBlack");
        addStringValue("id_equipe",id_equipe);
        
        
        
      
        
        
        Button btnAjouter = new Button("Ajouter");
        addStringValue("", btnAjouter);
        
        btnAjouter.addActionListener((e) -> {
            try{
                if(type.getText().equals("")||type.getText().equals("")||heure.getText().equals("")){
                    Dialog.show("Veuillez vérifier les données","", "Annuler", "OK");
                    
                }
                else{
                    InfiniteProgress ip = new InfiniteProgress();
                    final Dialog iDialog = ip.showInfiniteBlocking();
                    SimpleDateFormat Format = new SimpleDateFormat("yyyy-MM-dd");
                    
                    Entrainement a = new Entrainement(Format.format(new Date()),
                              (int) Integer.parseInt(duree.getText()),
                            
                             (int) Integer.parseInt(id_coach.getSelectedItem().toString()),
                              (int) Integer.parseInt(id_stade.getText()),
                              (int) Integer.parseInt(id_equipe.getText()),
                            String.valueOf(type.getText()).toString(),"","","",
                            String.valueOf(heure.getText()).toString());
                    
                    
                    System.out.println("data article == "+a);
                    
                    Service_Entrainement.getInstance().addEntrainement(a);
                    
                    iDialog.dispose();
                    
                    new ListEntrainementForm(res).show();
                    
                    refreshTheme();
                    
                }
            }catch(Exception ex){
                ex.printStackTrace();
            }
        
        });
        
        
        
    }
    
    
    
    
    
    
    
    
    
    

    private void addStringValue(String s, Component v) {
        
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));

    }

    private void addTab(Tabs swipe,Label spacer, Image image, String string, String text, Resources res) {
        int size = Math.min(Display.getInstance().getDisplayWidth(),Display.getInstance().getDisplayHeight());
        
        if(image.getHeight() < size){
            image = image.scaledHeight(size);
        }
        
        if(image.getHeight() > Display.getInstance().getDisplayHeight() / 2 ){
            image = image.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
            
        }
        
        ScaleImageLabel imageScale   = new ScaleImageLabel(image);
        imageScale.setUIID("Container");
        imageScale.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        
        Label overLay = new Label("","ImageOverLay");
        
        Container page1 = 
                LayeredLayout.encloseIn(
                imageScale,
                            overLay,
                            BorderLayout.south(
                            BoxLayout.encloseY(
                            new SpanLabel(text,"LargeWhiteText"),
                                    spacer
                                    ))
        );
        
        swipe.addTab("",res.getImage("back-logo.jpeg"),page1);

    }
    
    public void bindButtonSelection(Button btn , Label l){
        
        btn.addActionListener(e->{
            if(btn.isSelected()){
                updateArrowPosition(btn,l);
            }
            });
        
    }

    private void updateArrowPosition(Button btn, Label l) {
        l.getUnselectedStyle().setMargin(LEFT, btn.getX() + btn.getWidth() / 2 - l.getWidth() / 2);
        l.getParent().repaint();
    }
    
}
