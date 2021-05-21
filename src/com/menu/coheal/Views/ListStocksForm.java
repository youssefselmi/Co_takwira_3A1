/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import com.menu.coheal.Models.Stocks;
import com.menu.coheal.Service.ServiceStocks;
import java.util.ArrayList;

/**
 *
 * @author narug
 */
public class ListStocksForm extends Form {

    public ListStocksForm() {
        
        this.setTitle("Products List");
        this.setLayout(BoxLayout.y());
        
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, ev-> new HomeStocks().showBack());
        
        ArrayList<Stocks> ar = ServiceStocks.getInstance().getStocks();
        Resources theme = UIManager.initFirstTheme("/storeui");
        //UIBuilder.registerCustomComponent("ImageViewer",  com.codename1.components.ImageViewer.class);
        UIBuilder ui = new UIBuilder();
        
        for(Stocks c : ar){
            Container cont = ui.createContainer(theme, "stocgks");
            Container inside = (Container) cont.getComponentAt(0);
            Label l = (Label)inside.getComponentAt(0);
            l.setText(c.getIdProduit()+ "");
            Label l1 = (Label)inside.getComponentAt(1);
            l1.setText(c.getNomProduit());
            Label l3 = (Label)inside.getComponentAt(2);
            l3.setText(Integer.toString(c.getQuantite()));
            Label l4 = (Label)inside.getComponentAt(3);
            l4.setText(c.getPrixUnite()+ "");
            Container cce = (Container)cont.getComponentAt(1);
            Button bb = (Button) cce.getComponentAt(0);
            bb.addActionListener((e) -> {
                ServiceStocks.getInstance().delete(c.getIdProduit());
                                        Dialog.show("Success", "Deleted successfully!",null, "OK");

            });
            Button b3b = (Button) cce.getComponentAt(1);
            b3b.addActionListener((e) -> {
                System.out.println("pass");
               // ServiceStocks.getInstance().modify(c.getIdProduit());

            });
            this.add(cont);
        }
    }
    
    public static void redirect(int id){
        new AddStocksForm(id).show();
    }
    
    
    
    
}
