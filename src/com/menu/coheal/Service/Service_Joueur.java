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
import com.codename1.ui.events.ActionListener;
import com.mycompany.Models.Equipe;
import com.mycompany.Models.Joueur;
import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author USER-PC
 */
public class Service_Joueur {
      public ArrayList<Joueur >Joueurs;
    public static Service_Joueur instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
     public Service_Joueur() {
        req = new ConnectionRequest();
    }
     
     

    public static Service_Joueur getInstance() {
        if (instance == null) {
            instance = new Service_Joueur();
        }
        return instance;
    }
        public ArrayList<Joueur> parseJoueur(String jsonText) {
        try {
            Joueurs = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> ReclamationListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) ReclamationListJson.get("root");

            for (Map<String, Object> obj : list) {
                Joueur joueur=new Joueur();
               float id = Float.parseFloat(obj.get("idJoueur").toString());
                joueur.setId_joueur((int) id);

                
                
                
               
     
                   
                
                
                
            
                
                

           
                 joueur.setNom_joueur(obj.get("nomJoueur").toString());
                                  joueur.setPrenom_joueur(obj.get("prenomJoueur").toString());
               joueur.setDateNaissance(obj.get("dateNaissance").toString());                       float age= Float.parseFloat(obj.get("ageJoueur").toString());

                joueur.setAge_joueur((int) age);
                                 joueur.setAdresse_mail(obj.get("adresseMail").toString());
                                 joueur.setVille(obj.get("ville").toString());
                          joueur.setPosition(obj.get("position").toString());
                          joueur.setCategorie(obj.get("categorie").toString());
                       float num= Float.parseFloat(obj.get("numero").toString());
                joueur.setNumero((int) num);
                joueur.setImage(obj.get("image").toString());
                joueur.setPassword("aaaa");
                




   Map<String, Object> map1 = ((Map<String, Object>) obj.get("idEquipe"));
                for (Map.Entry<String, Object> entry : map1.entrySet()) {
                    String key = entry.getKey();
                    Object value = entry.getValue();
                    
                    if(key.equals("idEquipe"))
                    {
                       float idEquipe = Float.parseFloat(value.toString());
                joueur.setId_equipe((int) idEquipe);  
                    }
                     if(key.equals("nomEquipe"))
                    {
                      joueur.setNom_equipe(value.toString());  
                    }
                   
                }
                // questionnaire q =new questionnaire();
                // q.setDescription_cat_qst((String) map.get("description_cat_qst"));
             
                Joueurs.add(joueur);
            }

        } catch (IOException ex) {
            System.out.println("Exception in parsing joueurs ");
        }

        return Joueurs;
    }

    public ArrayList<Joueur> findAll(int ide) {
        String url = Statics.BASE_URL +ide+"/listJoueur";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Joueurs = parseJoueur(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Joueurs;
    }
    
     public ArrayList<Joueur> findsenior(int ide) {
        String url = Statics.BASE_URL +ide+"/listJoueure";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Joueurs = parseJoueur(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Joueurs;
    }
    
    
    
    public void AddJoueur(Joueur c) {
        String url = Statics.BASE_URL + "newjoueur_mobile/"+ c.getNom_joueur()+ "/" + c.getPrenom_joueur()+ "/" +c.getDateNaissance()+ "/" +c.getNumero()+"/"+c.getAdresse_mail() + "/" +c.getVille() + "/" +c.getPosition()+ "/" +c.getId_equipe()+ "/" +c.getImage()+ "/"  +c.getPassword(); //création de l'URL
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               // Coachs = parseCoach(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
   
    }
    
    
    
    
    
    
    
    
    
    
    public ArrayList<Joueur> getStat() {
        String url = Statics.BASE_URL + "joueur_mobile_stat";

        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               Joueurs = parseStat(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        return Joueurs;
    }








      public ArrayList<Joueur> parseStat(String jsonText) {
        
        try {
            Joueurs = new ArrayList<>();

            JSONParser jp = new JSONParser();
            Map<String, Object> tasksListJson = jp.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) 
            {           
          
             
            String LibC = obj.get("nom_joueur").toString();     
          
      

            float quantite = Integer.parseInt(obj.get("age_joueur").toString());
            
    
            Joueur ab = new Joueur();
            ab.setAge_joueur((int) quantite);
            ab.setNom_joueur(LibC);
            Joueurs.add(ab);
            }
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }

        return Joueurs;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
