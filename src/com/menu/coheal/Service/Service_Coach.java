/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//package com.mycompany.Services;
package com.menu.coheal.Service;


import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;


import com.menu.coheal.Models.Coach;



import com.menu.coheal.utils.Statics;



import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ASUS
 */
public class Service_Coach {
        public ArrayList<Coach> Coachs;
    public static Service_Coach instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
    public Service_Coach() {
        req = new ConnectionRequest();
    }

     
    public static Service_Coach getInstance() {
        if (instance == null) {
            instance = new Service_Coach();
        }
        return instance;
    }
    
    
  
    
    
        public ArrayList<Coach> parseCoach(String jsonText) {
        try {
            Coachs = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> ReclamationListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) ReclamationListJson.get("root");

            for (Map<String, Object> obj : list) {
                Coach coach = new Coach();
               float id = Float.parseFloat(obj.get("idCoach").toString());
                coach.setId_coach((int) id);

                float nbTropheInternationaux = Float.parseFloat(obj.get("nbTropheInternationaux").toString());
                coach.setNb_trophe_internationaux((int) nbTropheInternationaux);
                
                
                
                float nbTropheLocaux = Float.parseFloat(obj.get("nbTropheInternationaux").toString());
                coach.setNb_trophe_locaux((int) nbTropheLocaux);
                
                
                
                    
                float age = Float.parseFloat(obj.get("age").toString());
                coach.setAge((int) age);
                
                
                  float salaire = Float.parseFloat(obj.get("salaire").toString());
                coach.setSalaire((int) salaire);
            
               coach.setNom_coach(obj.get("nomCoach").toString());
               coach.setPrenom_coach(obj.get("prenomCoach").toString());
               coach.setDate_naissance(obj.get("dateNaissance").toString());
               coach.setGrade(obj.get("grade").toString());
               coach.setDate_fin_contrat(obj.get("dateFinContrat").toString());
               coach.setAdresse_mail(obj.get("adresseMail").toString());
               coach.setFormation_prefere(obj.get("formationPrefere").toString());
               coach.setImage_formation(obj.get("imageFormation").toString());
               coach.setImage_coach(obj.get("imageCoach").toString());
               coach.setDate_fin_contrat(obj.get("mdpCoach").toString());
               
               
               


                
                // questionnaire q =new questionnaire();
                // q.setDescription_cat_qst((String) map.get("description_cat_qst"));
             
                Coachs.add(coach);
            }

        } catch (IOException ex) {
            System.out.println("Exception in parsing reclamations ");
        }

        return Coachs;
    }

        
        
        
        
        
    public ArrayList<Coach> findAll() {
        String url = Statics.BASE_URL + "coach_mobile";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Coachs = parseCoach(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Coachs;
    }
    
    
    
    
    
    
    
public void AddCoach(Coach c) {
        String url = Statics.BASE_URL + "newcoach_mobile/"+ c.getNom_coach() + "/" + c.getPrenom_coach() + "/" +c.getDate_naissance() + "/" + c.getGrade() + "/" +c.getDate_fin_contrat() + "/" +c.getAdresse_mail() + "/" +c.getSalaire() + "/" +c.getNb_trophe_locaux() + "/" +c.getNb_trophe_internationaux() + "/" +c.getFormation_prefere() + "/" +c.getFormation_prefere() + "/"  +c.getImage_coach() + "/" +c.getAge() + "/" +c.getMdp_coach(); //création de l'URL
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
            // Coachs = parseCoach(new String(req.getResponseData()));
              //  System.out.println("coachs"+Coachs);
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
   
    }








public ArrayList<Coach> getStat() {
        String url = Statics.BASE_URL + "coach_mobile_stat";

        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               Coachs = parseStat(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        return Coachs;
    }








      public ArrayList<Coach> parseStat(String jsonText) {
        
        try {
            Coachs = new ArrayList<>();

            JSONParser jp = new JSONParser();
            Map<String, Object> tasksListJson = jp.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) 
            {           
          
             
            String LibC = obj.get("nom_coach").toString();     
          
      

            float quantite = Float.parseFloat(obj.get("salaire").toString());
            
    
            Coach ab = new Coach();
            ab.setSalaire(quantite);
            ab.setNom_coach(LibC);
            Coachs.add(ab);
            }
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }

        return Coachs;
    }

















}
