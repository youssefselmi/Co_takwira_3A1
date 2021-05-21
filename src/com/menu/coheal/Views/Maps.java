/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.io.Storage;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.menu.coheal.ui.HomeForm;

/**
 *
 * @author Mahdi
 */
public class Maps extends Form{
    Resources res1;
    public Maps(){
        setTitle("Co takwira");
    setLayout(new BorderLayout());
    BrowserComponent browser = new BrowserComponent();
    res1 = UIManager.initFirstTheme("/theme");
    
    

    browser = new BrowserComponent();
    browser.setURL("https://www.youtube.com/watch?v=96O_A_yU62I&t=4s");
    this.addComponent(BorderLayout.CENTER, browser);
    this.show();
    
    
    
    
        
           this.getToolbar().addCommandToLeftSideMenu("Back", null, ev -> {
               try {
                   new HomeForm(res1).showBack();
               } catch (Exception ex) {
            
               }
               
               
               
        });
    
    
    
    
            
            
    }
}
