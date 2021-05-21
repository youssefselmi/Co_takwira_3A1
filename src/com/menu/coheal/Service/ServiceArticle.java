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
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;
import com.menu.coheal.Models.Article;
import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author khali
 */
public class ServiceArticle {
    //singleton
    public static ServiceArticle instance = null;
    public static boolean resultOk = true;
    
    //initialisation connection request
    private ConnectionRequest req;
    
    public static ServiceArticle getInstance(){
        if(instance==null)
            instance= new ServiceArticle();
        return instance;
    }
    
    public ServiceArticle(){
        req = new ConnectionRequest();
        
    }
    
    public void ajoutArticle(Article article){
        String url=Statics.BASE_URL+"addArticle?type="+article.getType()+"&titre="+article.getTitre()+"&description="+article.getDescription()+"&url="+article.getUrl();
        
        req.setUrl(url);
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
            System.out.println("data=="+str);
        
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
    
    public ArrayList<Article>affichageArticles(){
        ArrayList<Article> result = new ArrayList<>();
        
        String url = Statics.BASE_URL+"displayArticles";
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
            JSONParser jsonp;
            jsonp = new JSONParser();
            
            try {
            Map<String,Object>mapArticles = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
            List<Map<String,Object>> listOfMaps = (List<Map<String,Object>>) mapArticles.get("root");
            
            for(Map<String,Object> obj : listOfMaps){
                Article ar = new Article();
                
                float id= Float.parseFloat(obj.get("id").toString());
                
                String type = obj.get("type").toString();
                String titre = obj.get("titre").toString();
                String description = obj.get("description").toString();
                String url = obj.get("url").toString();
                
                ar.setId((int)id);
                ar.setType(type);
                ar.setTitre(titre);
                ar.setDescription(description);
                ar.setUrl(url);
                
                String DateConverter = obj.get("date").toString().substring(obj.get("date").toString().indexOf("timestamp") + 10 , obj.get("date").toString().lastIndexOf("}"));
                Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
                
                SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
                String dateString = formatter.format(currentTime);
                ar.setDate(dateString);
                
                result.add(ar);
                
                
            }
            } catch (Exception ex) {
            ex.printStackTrace();

        }            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

            
            
        
        
        
    }
    
    public Article DetailArticle(int id , Article article){
        String url = Statics.BASE_URL+"/detailArticle?"+id;
        req.setUrl(url);
        
        String str = new String(req.getResponseData());
        req.addResponseListener(((evt) -> {
        
            JSONParser jsonp = new JSONParser();
            try{
                Map<String,Object>obj = jsonp.parseJSON(new CharArrayReader(new String(str).toCharArray()));
                
                article.setType(obj.get("type").toString());
                article.setTitre(obj.get("titre").toString());
                article.setDescription(obj.get("description").toString());

            } catch (IOException ex) {
                System.out.println("error related to sql :"+ex.getMessage());
            }
            
            System.out.println("data ==="+str);
            
            
        }));
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return article;
        

        
        
        
        
    }
    
    public boolean deleteArticle(int id){
        String url = Statics.BASE_URL+"deleteArticle?id="+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseCodeListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
        
    }
    
    public boolean modifierArticle(Article article){
        String url=Statics.BASE_URL+"updateArticle?id="+article.getId()+"&type="+article.getType()+"&titre="+article.getTitre()+"&description="+article.getDescription();
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;
                req.removeResponseListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
        
    }
    
}
