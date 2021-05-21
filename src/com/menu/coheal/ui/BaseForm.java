/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.menu.coheal.ui;

//import com.menu.coheal.ui.user.UserProfileForm;
//import com.menu.coheal.ui.recipe.RecipesForm;
//import com.menu.coheal.ui.session.SessionsForm;
//import com.menu.coheal.ui.book.BooksForm;
//import com.menu.coheal.ui.task.TasksForm;
//import com.menu.coheal.ui.event.EventsForm;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.menu.coheal.Service.Service_Coach;
import com.menu.coheal.Views.AjoutRateForm;
import com.menu.coheal.Views.AjoutReclamationForm;
import com.menu.coheal.Views.CoachForm;
import com.menu.coheal.Views.JoueurForm;
import com.menu.coheal.Views.ListEntrainementForm;
import com.menu.coheal.Views.ListEquipeForm;
import com.menu.coheal.Views.ListArticleForm;

import com.menu.coheal.Views.StatCoach;
//import com.menu.coheal.utils.UserSession;

/**
 * Utility methods common to forms e.g. for binding the side menu
 *
 * @author Shai Almog
 */
public class BaseForm extends Form {
    
        private Resources theme;

    public void installSidemenu(Resources res) {
        Image selection = res.getImage("selection-in-sidemenu.png");
        
        Image homeImage = null;
        if(isCurrentHome()) homeImage = selection;

        Image taskImage = null;
        if(isCurrentTasks()) taskImage = selection;
        
        Image sessionImage = null;
        if(isCurrentSessions()) sessionImage = selection;
        
        Image eventImage = null;
        if(isCurrentEvents()) eventImage = selection;
        
        Image recipeImage = null;
        if(isCurrentRecipes()) recipeImage = selection;
        
        Image bookImage = null;
        if(isCurrentBooks()) bookImage = selection;
        
        
        
       Form hi = new Form("projet", BoxLayout.y());
       //Form hii = new Form("projet", BoxLayout.y());

       theme = UIManager.initFirstTheme("/themeCoHeal");
                                                                                                                                                                                                                                            
                                         

        getToolbar().addCommandToSideMenu("Home", homeImage, e -> new HomeForm(res).show());
        
         getToolbar().addCommandToSideMenu("Coachs", taskImage, e ->new CoachForm(hi).show());
       
        getToolbar().addCommandToSideMenu("Entrainement", sessionImage, e ->new ListEntrainementForm(theme).show());
        
        
        getToolbar().addCommandToSideMenu("Equipes", eventImage, e ->new ListEquipeForm(theme).show());
        
        
         getToolbar().addCommandToSideMenu("Reclamation", bookImage, e -> new AjoutReclamationForm(res).show());
         
         
        getToolbar().addCommandToSideMenu("Avis", bookImage, e -> new AjoutRateForm(res).show());

        
        
        
        getToolbar().addCommandToSideMenu("Articles", bookImage, e -> new ListArticleForm(res).show());
        
        getToolbar().addCommandToSideMenu("Stocks", bookImage, e -> new HomeForm(res).show());
        
        getToolbar().addCommandToSideMenu("Factures", bookImage, e -> new HomeForm(res).show());




        

        // spacer
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
       // getToolbar().addCommandToSideMenu(null, res.getImage("mint.png"), e -> new UserProfileForm(res).show());
//        getToolbar().addComponentToSideMenu(new Label(UserSession.getFirst_name()+" "+UserSession.getLast_name(), "SideCommandNoPad"));
//        getToolbar().addComponentToSideMenu(new Label(UserSession.getEmail(), "SideCommandSmall"));
    }

    protected boolean isCurrentHome() {
        return false;
    }
        
    protected boolean isCurrentTasks() {
        return false;
    }
    
    protected boolean isCurrentSessions() {
        return false;
    }

    protected boolean isCurrentEvents() {
        return false;
    }

    protected boolean isCurrentRecipes() {
        return false;
    }
    
    protected boolean isCurrentBooks() {
        return false;
    }
    
    protected boolean isCurrentProfile() {
        return false;
    }
}
