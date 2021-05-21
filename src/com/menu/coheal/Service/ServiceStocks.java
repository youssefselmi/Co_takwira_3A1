/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Service;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.menu.coheal.Views.ListStocksForm;
import com.menu.coheal.Models.Stocks;
import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;

/**
 *
 * @author narug
 */
public class ServiceStocks {
    
    
     //var
    boolean resultOK;
    ConnectionRequest req;
    static ServiceStocks instance;
    ArrayList<Stocks> stocks = new ArrayList<>();
    
    
    //constructor
    private ServiceStocks() {
        req = new ConnectionRequest();
    }
    
    //SINGLETON
    public static ServiceStocks getInstance(){
        
        if (instance == null) {
            instance = new ServiceStocks();
        }
        
        return instance;
    }
    
    
    
    
    //ADD TASK 
    public boolean addStocksAction(Stocks r){
        
        String url = Statics.BASE_URL+"/stocks/add?id="+r.getIdProduit()+"&nom="+r.getNomProduit()+"&quant="+r.getQuantite()+"&prix="+r.getPrixUnite();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener((evt) -> {
            resultOK = req.getResponseCode()==200;
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
    
    
    
    //PARSE TASKS JSON : convert JSON to java objects
    public ArrayList<Stocks> parseJSONAction(String textJson){
        
        JSONParser j = new JSONParser();
        
        try {
            
            Map<String, Object> stockssListJson = j.parseJSON(new CharArrayReader(textJson.toCharArray()));
            ArrayList<Map<String,Object>> stocksList = (ArrayList<Map<String,Object>>) stockssListJson.get("root");
            
            for (Map<String, Object> obj : stocksList) {
                
                Stocks r = new Stocks();
                    
                r.setIdProduit((int) Double.parseDouble(obj.get("idProduit").toString()));
                r.setNomProduit(obj.get("nomProduit").toString());
               
                r.setQuantite((int)Integer.parseInt(obj.get("quantite").toString()));
                  r.setPrixUnite((int)Integer.parseInt(obj.get("prixUnite").toString()));
                
               
                


                
                stocks.add(r);

            }
            
            
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        
        return stocks;  
    }



    //GET REPORTS
    public ArrayList<Stocks> getStocks(){
        stocks = new ArrayList<>();
         String url = Statics.BASE_URL+"/stocks/get/all";
         ConnectionRequest request = new ConnectionRequest(url);
         request.setPost(false);
         request.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 
             stocks = parseJSONAction(new String(request.getResponseData()));
             
             }
         });
         
        
        
        NetworkManager.getInstance().addToQueueAndWait(request);
        return stocks;
    }
    public void delete(int rep){
        String url = Statics.BASE_URL+"/DeleteS/"+rep;
         ConnectionRequest request = new ConnectionRequest(url);
         request.setPost(false);
         request.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 
                 
             }
         });
         
        
        
        NetworkManager.getInstance().addToQueueAndWait(request);
    }

   /*
    public boolean modify(int stocks_id) {
        System.out.println("enter");
         String url = Statics.BASE_URL+"/updateS/"+stocks_id;
         ConnectionRequest request = new ConnectionRequest(url);
         request.setPost(false);
         final int kk = 0;
         request.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 JSONParser j = new JSONParser();
                 Map<String, Object> stockssListJson;
                 try {
                     System.out.println("hereee" + stocks_id);
                     stockssListJson = j.parseJSON(new CharArrayReader(new String(request.getResponseData()).toCharArray()));
                     ArrayList<Map<String,Object>> stockssList = (ArrayList<Map<String,Object>>) stockssListJson.get("root");
                String val = stockssList.get(0).get("v").toString();
                 System.out.println("val rep : " + val);
                 if(val.equals("valid")){
                     ListStocksForm.redirect(stocks_id);
                 }else{
                     Dialog.show("Success", "Could not edit beacause 24hours expired!",null, "OK");
                 }

                 } catch (IOException ex) {
                 }
                
                 
             }
         });

         
        
     NetworkManager.getInstance().addToQueueAndWait(request);
     return false;
    }
*/
    public void modifyNow(Stocks re){
        String url = Statics.BASE_URL+"/stocksapi/modifynow/"+re.getIdProduit()+"?Nom_Produit="+re.getNomProduit()+"&Quantite="+re.getQuantite()+"&Prix_Unite="+re.getPrixUnite();
         ConnectionRequest request = new ConnectionRequest(url);
         request.setPost(false);
         request.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
                 
                 
             }
         });
         
        
        
        NetworkManager.getInstance().addToQueueAndWait(request);
    }
}
