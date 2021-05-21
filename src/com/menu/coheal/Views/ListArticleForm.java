/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.ImageViewer;
import com.codename1.ui.util.Resources;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.menu.coheal.Models.Article;
import com.menu.coheal.Service.ServiceArticle;
import com.menu.coheal.ui.HomeForm;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
/**
 *
 * @author khali
 */
public class ListArticleForm extends BaseForm{
    
    Form current;
    public ListArticleForm(Resources res){
        
        super("Newsfeed",BoxLayout.y());
        
        Toolbar tb = new Toolbar(true);
        current = this;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout Article");
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
        RadioButton mesListes = RadioButton.createToggle("Les articles", barGroup);
        mesListes.setUIID("SelectBar");
        RadioButton liste = RadioButton.createToggle("Autres", barGroup);
        liste.setUIID("SelectBar");
        RadioButton partage = RadioButton.createToggle("Poster", barGroup);
        partage.setUIID("SelectBar");
        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");


        partage.addActionListener((e) -> {

            
            partage.addPointerPressedListener(l ->{
            
            new AjoutArticleForm(res).show();
        
        });
            
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
        
        
        
        
        mesListes.addActionListener((e) -> {
        InfiniteProgress ip = new InfiniteProgress();
        final Dialog ipDlg = ip.showInifiniteBlocking();
       
        //  ListReclamationForm a = new ListReclamationForm(res);
          //  a.show();
            refreshTheme();
        });
        
        
        
        ArrayList<Article>list = ServiceArticle.getInstance().affichageArticles();
        
        for(Article art:list){
           // String urlImage = "back-logo.jpeg";
            
            String url = "C:\\Users\\khali\\Desktop\\WorkShops-CodenameOne-master\\WorkShops-CodenameOne-master\\src\\images\\" + art.getUrl();
            ImageViewer image_article;
            Image imge;
            EncodedImage enc;
            enc = EncodedImage.createFromImage(res.getImage("round.png"), false);
            imge = URLImage.createToStorage(enc, url, url);
                 image_article = new ImageViewer(imge);
            
            Image placeholder = Image.createImage(120,90);
            //EncodedImage enc = EncodedImage.createFromImage(placeholder, false);
            //URLImage urlim = URLImage.createToStorage(enc,url, url, URLImage.RESIZE_SCALE);
            
            addButton(imge,art,res);
            
            ScaleImageLabel image = new ScaleImageLabel(imge);
            
            Container containerImg = new Container();
            
            image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
                 
           
            
            partage.addPointerPressedListener(l ->{
            
            new AjoutArticleForm(res).show();
        
        });
            
            
        }
        
        
        
        
                
           this.getToolbar().addCommandToLeftSideMenu("Back", null, ev -> {
               try {
                   new HomeForm(res).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
           
        
        
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
        
           this.getToolbar().addCommandToLeftSideMenu("Backk", null, ev -> {
               try {
                   new HomeForm(res).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
        
           
           
    
           
        

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

    private void addButton(Image img, Article art,Resources res) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        
        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);
        

        
        Label titreTxt = new Label("Titre : "+art.getTitre(),"NewsTopLine2");
        Label dateTxt = new Label("Date : "+art.getDate(),"NewsTopLine2");
        
        //supprimer button
        Label lSupprimer = new Label(" ");
        lSupprimer.setUIID("NewsTopLine");
        Style supprimerStyle = new Style(lSupprimer.getUnselectedStyle());
        supprimerStyle.setFgColor(0xf21f1f);
        
        FontImage supprimerImage = FontImage.createMaterial(FontImage.MATERIAL_DELETE, supprimerStyle);
        lSupprimer.setIcon(supprimerImage);
        lSupprimer.setTextPosition(RIGHT);
        
        //click delete icon
        lSupprimer.addPointerPressedListener(l -> {
            Dialog dig = new Dialog("Suppression");
            if(dig.show("Suppression","Vous voulez supprimer cet article ?","Annuler","Oui")){
                dig.dispose();
            }
            else{
                dig.dispose();
                
                if(ServiceArticle.getInstance().deleteArticle(art.getId())){
                    new ListArticleForm(res).show();
                    
                }
            }
        
        
        });
        
        //update icon
        Label lModifier = new Label(" ");
        lModifier.setUIID("NewsTopLine");
        Style modifierStyle = new Style(lModifier.getUnselectedStyle());
        modifierStyle.setFgColor(0xf7ad02);
        
        FontImage mFontImage = FontImage.createMaterial(FontImage.MATERIAL_MODE_EDIT, modifierStyle);
        lModifier.setIcon(mFontImage);
        lModifier.setTextPosition(LEFT);
        
        lModifier.addPointerPressedListener(l ->{
            //System.out.println("");
            new ModifierArticleForm(res,art).show();
        
        });
        
        cnt.add(BorderLayout.CENTER,BoxLayout.encloseY(
                BoxLayout.encloseX(titreTxt),
                BoxLayout.encloseX(dateTxt),
                BoxLayout.encloseX(lModifier,lSupprimer)));
        
        add(cnt);
        
        
        
        
        
        
       
     
        
        
        
    }
    
    
    
}
