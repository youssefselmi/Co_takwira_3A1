/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Views;

import com.codename1.ui.Button;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BoxLayout;
import com.menu.coheal.Models.Stocks;
import com.menu.coheal.Service.ServiceStocks;

/**
 *
 * @author narug
 */
public class AddStocksForm extends Form{
    
    
    public AddStocksForm(){
        this.setTitle("Add Stocks");
        this.setLayout(BoxLayout.y());
        
        TextField tfStocksid = new TextField("", "inserte id");
        TextField tfNom_Produit = new TextField("", " input Name");
        TextField tfQuantite=new TextField("","Quantite");
        TextField tfPrix_Unite=new TextField("","Prix");
        
        Button submitStocksBtn = new Button("Submit");
        submitStocksBtn.addActionListener((evt) -> {
            
            if ( tfNom_Produit.getText().length()==0 || tfQuantite.getText().length()==0 || tfQuantite.getText().length()==0 ) {
                Dialog.show("Alert", "Textfields cannot be empty.",null, "OK");
            }else {
                
                try {
                    
                Stocks r= new Stocks();
                r.setIdProduit(Integer.parseInt(tfStocksid.getText()));
                r.setNomProduit(tfNom_Produit.getText());
                r.setQuantite(Integer.parseInt(tfQuantite.getText()));
                r.setPrixUnite(Integer.parseInt(tfPrix_Unite.getText()));
              
                    if (ServiceStocks.getInstance().addStocksAction(r)) {
                        Dialog.show("Success", "Product added successfully.",null, "OK");
                    }
                    
                } catch (NumberFormatException e) {
                    Dialog.show("Alert", "Product's status must be a number.",null, "OK");
                }
                
                
                
            }
            
            
            
        });
        
        
        this.addAll( tfStocksid,tfNom_Produit,tfQuantite,tfPrix_Unite, submitStocksBtn);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, ev-> new HomeStocks().showBack());
        
        
    }
    
    public AddStocksForm(int id){
        this.setTitle("Modify Stocks");
        this.setLayout(BoxLayout.y());
        
        Label ied = new Label("ID: " + id);
        TextField tfNom_Produit = new TextField("", " input Name");
        TextField tfQuantite=new TextField("","Quantite");
        TextField tfPrix_Unite=new TextField("","Prix");
        
        Button submitReportBtn = new Button("Submit");
        submitReportBtn.addActionListener((evt) -> {
            
            if (tfNom_Produit.getText().length()==0 || tfQuantite.getText().length()==0 || tfPrix_Unite.getText().length()==0 ) {
                Dialog.show("Alert", "Textfields cannot be empty.",null, "OK");
            }else {
                
                try {
                    
                Stocks r= new Stocks();
                r.setIdProduit(id);
                r.setNomProduit(tfNom_Produit.getText());
                r.setQuantite(Integer.parseInt(tfQuantite.getText()));
                r.setPrixUnite(Integer.parseInt(tfPrix_Unite.getText()));
                   ServiceStocks.getInstance().modifyNow(r);
                        Dialog.show("Success", "Report modified successfully.",null, "OK");
                    
                    
                } catch (NumberFormatException e) {
                    Dialog.show("Alert", "Report's status must be a number.",null, "OK");
                }
                
                
                
            }
            
            
            
        });
        
        
        this.addAll(ied , tfNom_Produit,tfQuantite, submitReportBtn);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, ev-> new HomeStocks().showBack());
        
    }

    
}
