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
import com.codename1.ui.util.Resources;
import com.gestionMatch.gui.ListeMatchForm;
import com.gestionMatch.gui.ListeStadeForm;
//import com.menu.coheal.utils.UserSession;

/**
 * Utility methods common to forms e.g. for binding the side menu
 *
 * @author Shai Almog
 */
public class BaseForm extends Form {
    public void installSidemenu(Resources res) {
        Image selection = res.getImage("selection-in-sidemenu.png");
        
        Image homeImage = null;
        if(isCurrentMatches()) homeImage = selection;

        Image taskImage = null;
        if(isCurrentStades()) taskImage = selection;
        
        Image sessionImage = null;
        if(isCurrentSessions()) sessionImage = selection;
        
        Image eventImage = null;
        if(isCurrentEvents()) eventImage = selection;
        
        Image recipeImage = null;
        if(isCurrentRecipes()) recipeImage = selection;
        
        Image bookImage = null;
        if(isCurrentBooks()) bookImage = selection;

 
       getToolbar().addCommandToSideMenu("Joueurs", eventImage, e -> new HomeForm(res).show());
        getToolbar().addCommandToSideMenu("Equipes", recipeImage, e ->new HomeForm(res).show());
        
        getToolbar().addCommandToSideMenu("Articles", bookImage, e -> new HomeForm(res).show());
        getToolbar().addCommandToSideMenu("Matches", bookImage, e ->  new ListeMatchForm(res).show());
        
        getToolbar().addCommandToSideMenu("Stades", bookImage, e -> new ListeStadeForm(res).show());
        getToolbar().addCommandToSideMenu("Reclamation", bookImage, e -> new HomeForm(res).show());
        getToolbar().addCommandToSideMenu("Avis", bookImage, e -> new HomeForm(res).show());



        // spacer
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
       
    }

    protected boolean isCurrentMatches() {
        return false;
    }
        
    protected boolean isCurrentStades() {
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
