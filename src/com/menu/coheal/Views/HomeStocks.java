/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author narug
 */
public class HomeStocks extends Form {
    
    
    public HomeStocks(){
      this.setTitle("Home Report");
        this.setLayout(BoxLayout.y());
        
        Button addReportBtn = new Button("Add Report");
        Button listReportsBtn = new Button("Reports List");
        
        addReportBtn.addActionListener(e -> new AddStocksForm().show());
        listReportsBtn.addActionListener(x-> new ListStocksForm().show());
        
        this.addAll(addReportBtn, listReportsBtn);
       // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, ev-> new HomeForAll().showBack());
    }
}
