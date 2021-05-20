/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.service;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.entities.User;

import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author esprit
 */
public class ServiceStade {

    public static ServiceStade instance = null;
    public static boolean resultOk = true;
    private ConnectionRequest req;

    public static ServiceStade getInstance() {
        if (instance == null) {
            instance = new ServiceStade();
        }
        return instance;

    }

    public ServiceStade() {
        req = new ConnectionRequest();
    }

    public void addStade(Stade t) {
        String url = Statics.BASE_URL + "/addS?adresse=" + t.getAdresse() + "&nomStade=" + t.getNomStade()
                + "&ville=" + t.getVille() + "&capacite=" + t.getCapacite() + "&idUser=" + t.getIdUser();
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
            System.out.println("data == " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    public ArrayList<Stade> affichageStade() {

        ArrayList<Stade> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/listeStade";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapStade = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapStade.get("root");
                    //  System.out.println("======="+list.size());

                 
                    for (Map<String, Object> obj : list) {
                        //Création des tâches et récupération de leurs données
                        //System.out.println("******");
                        Stade t = new Stade();
                        float id = Float.parseFloat(obj.get("idStade").toString());

                        String adresse = obj.get("adresse").toString();
                        String ville = obj.get("ville").toString();
                        String nom = obj.get("nomStade").toString();
                        float cap = Float.parseFloat(obj.get("capacite").toString());

                      
                    Map<String, Object> idd = null;
                       idd= (Map<String, Object>) obj.get("idUser");
                   //     System.out.println("aaaaaaaaa"+idd);
                         float i = Float.parseFloat(idd.get("id").toString());
                         String n = idd.get("nom").toString();
                       //  System.out.println("//////"+i+"------"+n);
                        
                        t.setAdresse(adresse);
                        t.setNomStade(nom);
                        t.setVille(ville);
                        t.setIdStade((int) id);
                        t.setCapacite((int) cap);

                        //  t.setIdUser((int)idd);
                        t.setIdUser(1);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    }

   public Stade DetailStade(int id, Stade s) {
   //  public Stade DetailStade(String nom, Stade s) {
     String url = Statics.BASE_URL + "/findS/?" + id;
     
        req.setUrl(url);
        String str = new String(req.getResponseData());
        req.addResponseListener(((evt) -> {
            JSONParser j = new JSONParser();
            try {
                Map<String, Object> map = j.parseJSON(new CharArrayReader(new String(str).toCharArray()));

                s.setAdresse(map.get("adresse").toString());
                s.setNomStade(map.get("nomStade").toString());
                s.setVille(map.get("ville").toString());
                s.setCapacite(((int) Integer.parseInt(map.get("capacite").toString())));
                s.setIdUser(((int) Integer.parseInt(map.get("idUser").toString())));
                s.setIdStade(Integer.parseInt(map.get("idStade").toString()));

            } catch (Exception ex) {
                System.out.println("error related to sql!! ");
            }
            System.out.println("data" + str);
        }));
        NetworkManager.getInstance().addToQueueAndWait(req);
        return s;
    }

    public boolean deleteStade(int id) {

        String url = Statics.BASE_URL + "/deleteS/" + id;
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
    
     public boolean modifierStade(Stade s){
String url = Statics.BASE_URL+"/updateS/"+s.getIdStade()+"?adresse="+s.getAdresse()+"&nomStade="+s.getNomStade()+"&ville="+s.getVille()+"&capacite="+s.getCapacite()+"&idUser="+s.getIdUser();//Statics.BASE_URL+"/updateS/"+s.getIdStade()+"?"+"adresse="+s.getAdresse()+"&nomStade="+s.getNomStade()+"&ville="+s.getVille()+"&capacite="+s.getCapacite()+"&idUser="+s.getIdUser();
req.setUrl(url);
req.addResponseListener(new ActionListener<NetworkEvent>() {
    @Override
    public void actionPerformed(NetworkEvent evt) {
resultOk = req.getResponseCode()==200;
req.removeResponseListener(this);

    }
});
NetworkManager.getInstance().addToQueueAndWait(req);
return resultOk;
}
     
      public ArrayList<User> getUsers() {

        ArrayList<User> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/listeUsers";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapUsers = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapUsers.get("root");
                    //  System.out.println("======="+list.size());

                 
                    for (Map<String, Object> obj : list) {
                        //Création des tâches et récupération de leurs données
                        //System.out.println("******");
                        User t = new User();
                        int id = (int)Float.parseFloat(obj.get("id").toString());

                        String nom = obj.get("nom").toString();
                      
                      t.setId(id);
                      t.setNom(nom);
                   
                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    }
      
       public ArrayList<Stade> Recherche(String nomStade){
           
        ArrayList<Stade> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findStade/"+nomStade;
         req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapStade = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapStade.get("root");
                   
                    for (Map<String, Object> obj : list) {
                        Stade t = new Stade();
                        float id = Float.parseFloat(obj.get("idStade").toString());

                        String adresse = obj.get("adresse").toString();
                        String ville = obj.get("ville").toString();
                        String nom = obj.get("nomStade").toString();
                        float cap = Float.parseFloat(obj.get("capacite").toString());

                      
                    Map<String, Object> idd = null;
                       idd= (Map<String, Object>) obj.get("idUser");
                   
                         float i = Float.parseFloat(idd.get("id").toString());
                         String n = idd.get("nom").toString();
                      
                        
                        t.setAdresse(adresse);
                        t.setNomStade(nom);
                        t.setVille(ville);
                        t.setIdStade((int) id);
                        t.setCapacite((int) cap);

                      
                        t.setIdUser(1);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    } 

}


