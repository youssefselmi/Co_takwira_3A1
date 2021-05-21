package com.menu.coheal.ui;

import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.menu.coheal.Views.CoachForm;
import com.menu.coheal.Views.ListEntrainementForm;


public class HomeForm extends BaseForm {

    String pathToBeStored;
    private Resources theme;
    


    public HomeForm(com.codename1.ui.util.Resources resourceObjectInstance) {
        initGuiBuilderComponents(resourceObjectInstance);
        installSidemenu(resourceObjectInstance);
        getToolbar().addMaterialCommandToRightBar("", FontImage.MATERIAL_HOME, e -> {
        });
        
        
                theme = UIManager.initFirstTheme("/themeCoHeal");

             
        
       Form hi = new Form("projet", BoxLayout.y());
        Button eventsBtn = new Button();
        eventsBtn.addActionListener(e -> new CoachForm(hi).show());
        gui_eventsContainer.setLeadComponent(eventsBtn);
        
                  //new ListEntrainementForm(theme).show();

        Button tasksBtn = new Button();
        tasksBtn.addActionListener(e -> new ListEntrainementForm(theme).show());
        gui_tasksContainer.setLeadComponent(tasksBtn);



//        Button booksBtn = new Button();
//        booksBtn.addActionListener(e -> new BooksForm(resourceObjectInstance).show());
//        gui_booksContainer.setLeadComponent(booksBtn);

        Button recipesBtn = new Button();
       // recipesBtn.addActionListener(e -> new RecipesForm(resourceObjectInstance).show());
       // gui_recipesContainer.setLeadComponent(recipesBtn);

    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-- DON'T EDIT BELOW THIS LINE!!!
    protected com.codename1.ui.Label gui_exploreLabel = new com.codename1.ui.Label();
    protected com.codename1.ui.Container gui_Grid_Layout = new com.codename1.ui.Container(new com.codename1.ui.layouts.GridLayout(2, 2));
    protected com.codename1.ui.Container gui_eventsContainer = new com.codename1.ui.Container(new com.codename1.ui.layouts.LayeredLayout());
    protected com.codename1.components.ScaleImageLabel gui_eventIcon = new com.codename1.components.ScaleImageLabel();
    protected com.codename1.ui.Label gui_eventsLabel = new com.codename1.ui.Label();
    protected com.codename1.ui.Container gui_tasksContainer = new com.codename1.ui.Container(new com.codename1.ui.layouts.LayeredLayout());
    protected com.codename1.components.ScaleImageLabel gui_tasksIcon = new com.codename1.components.ScaleImageLabel();
    protected com.codename1.ui.Label gui_tasksLabel = new com.codename1.ui.Label();
    protected com.codename1.ui.Container gui_booksContainer = new com.codename1.ui.Container(new com.codename1.ui.layouts.LayeredLayout());
    protected com.codename1.components.ScaleImageLabel gui_booksIcon = new com.codename1.components.ScaleImageLabel();
    protected com.codename1.ui.Label gui_booksLabel = new com.codename1.ui.Label();
    protected com.codename1.ui.Container gui_recipesContainer = new com.codename1.ui.Container(new com.codename1.ui.layouts.LayeredLayout());
    protected com.codename1.components.ScaleImageLabel gui_recipesIcon = new com.codename1.components.ScaleImageLabel();
    protected com.codename1.ui.Label gui_recipesLabel = new com.codename1.ui.Label();


// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void initGuiBuilderComponents(com.codename1.ui.util.Resources resourceObjectInstance) {
        setLayout(new com.codename1.ui.layouts.LayeredLayout());
        setInlineStylesTheme(resourceObjectInstance);
        setScrollableY(false);
                setInlineStylesTheme(resourceObjectInstance);
        setTitle("CoHeal");
        setName("HomeForm");
        gui_exploreLabel.setText("Explore");
                gui_exploreLabel.setInlineStylesTheme(resourceObjectInstance);
        gui_exploreLabel.setInlineAllStyles("font:6.0mm native:MainBold native:MainBold;");
        gui_exploreLabel.setName("exploreLabel");
        gui_Grid_Layout.setPreferredSizeStr("89.41799mm 46.296295mm");
                gui_Grid_Layout.setInlineStylesTheme(resourceObjectInstance);
        gui_Grid_Layout.setName("Grid_Layout");
        addComponent(gui_exploreLabel);
        addComponent(gui_Grid_Layout);
        gui_eventsContainer.setPreferredSizeStr("28.571428mm 24.338625mm");
                gui_eventsContainer.setInlineStylesTheme(resourceObjectInstance);
        gui_eventsContainer.setInlineAllStyles("border:roundRect +top-left +top-right +bottom-left +bottom-right 3.0mm; bgColor:7fcbc3; transparency:128; opacity:255; margin:8px 8px 8px 8px;");
        gui_eventsContainer.setName("eventsContainer");
        gui_tasksContainer.setPreferredSizeStr("28.571428mm 24.338625mm");
                gui_tasksContainer.setInlineStylesTheme(resourceObjectInstance);
        gui_tasksContainer.setInlineAllStyles("border:roundRect +top-left +top-right +bottom-left +bottom-right 3.0mm; bgColor:7fcbc3; transparency:128; opacity:255; margin:8px 8px 8px 8px;");
        gui_tasksContainer.setName("tasksContainer");
        gui_booksContainer.setPreferredSizeStr("28.571428mm 24.338625mm");
                gui_booksContainer.setInlineStylesTheme(resourceObjectInstance);
        gui_booksContainer.setInlineAllStyles("border:roundRect +top-left +top-right +bottom-left +bottom-right 3.0mm; bgColor:7fcbc3; transparency:128; opacity:255; margin:8px 8px 8px 8px;");
        gui_booksContainer.setName("booksContainer");
        gui_recipesContainer.setPreferredSizeStr("28.571428mm 24.338625mm");
                gui_recipesContainer.setInlineStylesTheme(resourceObjectInstance);
        gui_recipesContainer.setInlineAllStyles("border:roundRect +top-left +top-right +bottom-left +bottom-right 3.0mm; bgColor:7fcbc3; transparency:128; opacity:255; margin:8px 8px 8px 8px;");
        gui_recipesContainer.setName("recipesContainer");
        gui_Grid_Layout.addComponent(gui_eventsContainer);
        gui_eventIcon.setPreferredSizeStr("11.904762mm 12.433863mm");
                gui_eventIcon.setInlineStylesTheme(resourceObjectInstance);
        gui_eventIcon.setName("eventIcon");
        com.codename1.ui.FontImage.setMaterialIcon(gui_eventIcon,"\ue878".charAt(0));
        gui_eventsLabel.setPreferredSizeStr("27.248678mm inherit");
        gui_eventsLabel.setText("Events");
                gui_eventsLabel.setInlineStylesTheme(resourceObjectInstance);
        gui_eventsLabel.setInlineAllStyles("font:5.0mm native:MainBold native:MainBold; alignment:center;");
        gui_eventsLabel.setName("eventsLabel");
        gui_eventsContainer.addComponent(gui_eventIcon);
        gui_eventsContainer.addComponent(gui_eventsLabel);
        ((com.codename1.ui.layouts.LayeredLayout)gui_eventIcon.getParent().getLayout()).setInsets(gui_eventIcon, "2.9100533mm 8.730159mm 8.994709mm 27.79547%").setReferenceComponents(gui_eventIcon, "-1 -1 -1 -1").setReferencePositions(gui_eventIcon, "0.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_eventsLabel.getParent().getLayout()).setInsets(gui_eventsLabel, "0.0mm 2.3809524mm auto 2.645503mm").setReferenceComponents(gui_eventsLabel, "0 -1 -1 -1").setReferencePositions(gui_eventsLabel, "1.0 0.0 0.0 0.0");
        gui_Grid_Layout.addComponent(gui_tasksContainer);
        gui_tasksIcon.setPreferredSizeStr("11.904762mm 12.433863mm");
                gui_tasksIcon.setInlineStylesTheme(resourceObjectInstance);
        gui_tasksIcon.setName("tasksIcon");
        com.codename1.ui.FontImage.setMaterialIcon(gui_tasksIcon,"\ue85d".charAt(0));
        gui_tasksLabel.setPreferredSizeStr("27.248678mm inherit");
        gui_tasksLabel.setText("Tasks");
                gui_tasksLabel.setInlineStylesTheme(resourceObjectInstance);
        gui_tasksLabel.setInlineAllStyles("font:5.0mm native:MainBold native:MainBold; alignment:center;");
        gui_tasksLabel.setName("tasksLabel");
        gui_tasksContainer.addComponent(gui_tasksIcon);
        gui_tasksContainer.addComponent(gui_tasksLabel);
        ((com.codename1.ui.layouts.LayeredLayout)gui_tasksIcon.getParent().getLayout()).setInsets(gui_tasksIcon, "2.9100533mm 8.730159mm 8.994709mm 27.79547%").setReferenceComponents(gui_tasksIcon, "-1 -1 -1 -1").setReferencePositions(gui_tasksIcon, "0.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_tasksLabel.getParent().getLayout()).setInsets(gui_tasksLabel, "0.0mm 2.3809524mm auto 2.645503mm").setReferenceComponents(gui_tasksLabel, "0 -1 -1 -1").setReferencePositions(gui_tasksLabel, "1.0 0.0 0.0 0.0");
        gui_Grid_Layout.addComponent(gui_booksContainer);
        gui_booksIcon.setPreferredSizeStr("11.904762mm 12.433863mm");
                gui_booksIcon.setInlineStylesTheme(resourceObjectInstance);
        gui_booksIcon.setName("booksIcon");
        com.codename1.ui.FontImage.setMaterialIcon(gui_booksIcon,"\ue865".charAt(0));
        gui_booksLabel.setPreferredSizeStr("27.248678mm inherit");
        gui_booksLabel.setText("Books");
                gui_booksLabel.setInlineStylesTheme(resourceObjectInstance);
        gui_booksLabel.setInlineAllStyles("font:5.0mm native:MainBold native:MainBold; alignment:center;");
        gui_booksLabel.setName("booksLabel");
        gui_booksContainer.addComponent(gui_booksIcon);
        gui_booksContainer.addComponent(gui_booksLabel);
        ((com.codename1.ui.layouts.LayeredLayout)gui_booksIcon.getParent().getLayout()).setInsets(gui_booksIcon, "2.9100533mm 8.730159mm 8.994709mm 27.79547%").setReferenceComponents(gui_booksIcon, "-1 -1 -1 -1").setReferencePositions(gui_booksIcon, "0.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_booksLabel.getParent().getLayout()).setInsets(gui_booksLabel, "0.0mm 2.3809524mm auto 2.645503mm").setReferenceComponents(gui_booksLabel, "0 -1 -1 -1").setReferencePositions(gui_booksLabel, "1.0 0.0 0.0 0.0");
        gui_Grid_Layout.addComponent(gui_recipesContainer);
        gui_recipesIcon.setPreferredSizeStr("11.904762mm 12.433863mm");
                gui_recipesIcon.setInlineStylesTheme(resourceObjectInstance);
        gui_recipesIcon.setName("recipesIcon");
        com.codename1.ui.FontImage.setMaterialIcon(gui_recipesIcon,"\ueb4c".charAt(0));
        gui_recipesLabel.setPreferredSizeStr("27.248678mm inherit");
        gui_recipesLabel.setText("Recipes");
                gui_recipesLabel.setInlineStylesTheme(resourceObjectInstance);
        gui_recipesLabel.setInlineAllStyles("font:5.0mm native:MainBold native:MainBold; alignment:center;");
        gui_recipesLabel.setName("recipesLabel");
        gui_recipesContainer.addComponent(gui_recipesIcon);
        gui_recipesContainer.addComponent(gui_recipesLabel);
        ((com.codename1.ui.layouts.LayeredLayout)gui_recipesIcon.getParent().getLayout()).setInsets(gui_recipesIcon, "2.9100533mm 8.730159mm 8.994709mm 27.79547%").setReferenceComponents(gui_recipesIcon, "-1 -1 -1 -1").setReferencePositions(gui_recipesIcon, "0.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_recipesLabel.getParent().getLayout()).setInsets(gui_recipesLabel, "0.0mm 2.3809524mm auto 2.645503mm").setReferenceComponents(gui_recipesLabel, "0 -1 -1 -1").setReferencePositions(gui_recipesLabel, "1.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_eventsContainer.getLayout()).setPreferredWidthMM((float)28.571428);
        ((com.codename1.ui.layouts.LayeredLayout)gui_eventsContainer.getLayout()).setPreferredHeightMM((float)24.338625);
        ((com.codename1.ui.layouts.LayeredLayout)gui_tasksContainer.getLayout()).setPreferredWidthMM((float)28.571428);
        ((com.codename1.ui.layouts.LayeredLayout)gui_tasksContainer.getLayout()).setPreferredHeightMM((float)24.338625);
        ((com.codename1.ui.layouts.LayeredLayout)gui_booksContainer.getLayout()).setPreferredWidthMM((float)28.571428);
        ((com.codename1.ui.layouts.LayeredLayout)gui_booksContainer.getLayout()).setPreferredHeightMM((float)24.338625);
        ((com.codename1.ui.layouts.LayeredLayout)gui_recipesContainer.getLayout()).setPreferredWidthMM((float)28.571428);
        ((com.codename1.ui.layouts.LayeredLayout)gui_recipesContainer.getLayout()).setPreferredHeightMM((float)24.338625);
        ((com.codename1.ui.layouts.LayeredLayout)gui_exploreLabel.getParent().getLayout()).setInsets(gui_exploreLabel, "2.3809524mm auto auto 3.1746035mm").setReferenceComponents(gui_exploreLabel, "-1 -1 -1 -1").setReferencePositions(gui_exploreLabel, "0.0 0.0 0.0 0.0");
        ((com.codename1.ui.layouts.LayeredLayout)gui_Grid_Layout.getParent().getLayout()).setInsets(gui_Grid_Layout, "2.1164017mm 0.7936508mm auto -0.7936508mm").setReferenceComponents(gui_Grid_Layout, "0 -1 -1 0 ").setReferencePositions(gui_Grid_Layout, "1.0 0.0 0.0 0.0");
    }// </editor-fold>

//-- DON'T EDIT ABOVE THIS LINE!!!
    protected boolean isCurrentHome() {
        return true;
    }

}
