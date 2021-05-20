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
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;
import com.gestionMatch.entities.Equipe;

import com.gestionMatch.entities.Matchs;
import com.gestionMatch.entities.Stade;
import com.gestionMatch.entities.Vote;


import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 *
 * @author esprit
 */
public class ServiceMatchs {

    public static ServiceMatchs instance = null;
    public static boolean resultOk = true;
    private ConnectionRequest req;

    public static ServiceMatchs getInstance() {
        if (instance == null) {
            instance = new ServiceMatchs();
        }
        return instance;

    }

    public ServiceMatchs() {
        req = new ConnectionRequest();
    }
    

    public void addMatch(Matchs t) {
        String url = Statics.BASE_URL + "/addM?id_stade=" + t.getIdStade() + "&id_equipe1=" + t.getIdEquipe1() + "&id_equipe2=" + t.getIdEquipe2()
                + "&date=" + t.getDate() + "&nb=" + t.getNbSpectateur() + "&heure_deb=" + t.getHeureDeb()
                + "&heure_fin=" + t.getHeureFin() + "&description=" + t.getDescription() + "&status=" + t.getStatus() + "&score=" + t.getScore() + "&id_org=" + t.getIdOrg();
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
            System.out.println("data == " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    public ArrayList<Stade> getMesStades() {

        ArrayList<Stade> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/listeStades";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapStades = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapStades.get("root");

                    for (Map<String, Object> obj : list) {

                        Stade t = new Stade();
                        int id = (int) Float.parseFloat(obj.get("idStade").toString());

                        String nom = obj.get("nomStade").toString();
                        //  System.out.println(nom +"************");

                        t.setIdStade(id);
                        t.setNomStade(nom);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    }

    public ArrayList<Equipe> getMesEquipe() {

        ArrayList<Equipe> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/listeEq";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapEquipe = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapEquipe.get("root");

                    for (Map<String, Object> obj : list) {

                        Equipe t = new Equipe();
                        int idE = (int) Float.parseFloat(obj.get("idE").toString());

                        String nom = obj.get("nomEquipe").toString();

                        t.setIdE(idE);
                        t.setNomEquipe(nom);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    }

    public ArrayList<Stade> getS(String nom) {
        Stade s = new Stade();
        ArrayList<Stade> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/s/" + nom;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapStades = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapStades.get("root");

                    for (Map<String, Object> obj : list) {

                        Stade t = new Stade();
                        int id = (int) Float.parseFloat(obj.get("idStade").toString());

                        String nom = obj.get("nomStade").toString();

                        t.setIdStade(id);
                        t.setNomStade(nom);

                        result.add(t);
                        System.out.println("I'm here" + t.getIdStade());
                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }

    public ArrayList<Equipe> getE(String nom) {
        Equipe s = new Equipe();
        ArrayList<Equipe> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/e/" + nom;
        req.setUrl(url);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapEqp = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapEqp.get("root");

                    for (Map<String, Object> obj : list) {

                        Equipe t = new Equipe();
                        int idE = (int) Float.parseFloat(obj.get("idE").toString());

                        String nom = obj.get("nomEquipe").toString();

                        t.setIdE(idE);
                        t.setNomEquipe(nom);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }

    public ArrayList<Matchs> affichageMatch() {

        ArrayList<Matchs> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/listeM";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapM = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapM.get("root");

                    for (Map<String, Object> obj : list) {

                        Matchs t = new Matchs();

                        int id = (int) Float.parseFloat(obj.get("idMatch").toString());

                        String hd = obj.get("heureDeb").toString();
                        String hf = obj.get("heureFin").toString();
                        String sc = obj.get("score").toString();
                        String st = obj.get("status").toString();
                        String desc = obj.get("description").toString();
                        int nb = (int) Float.parseFloat(obj.get("nbSpectateur").toString());

                        Map<String, Object> idd = null;
                        idd = (Map<String, Object>) obj.get("idStade");

                        int iS = (int) Float.parseFloat(idd.get("idStade").toString());
                        String nS = idd.get("nomStade").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe1");
                        int iE1 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE1 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe2");
                        int iE2 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE2 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idOrg");
                        //  
                        ;
                        int iU = (int) Float.parseFloat(idd.get("id").toString());
                       
                        String date = obj.get("date").toString();
                       
                        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

                        String dateString = format.format(new Date());
                        Date d = format.parse(date);
                        

                        t = new Matchs(id, iS, iE1, iE2, d, nb, hd, hf, desc, st, sc, iU);
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

    public ArrayList<Equipe> findE(int id) {
        Equipe s = new Equipe();
        ArrayList<Equipe> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findE/" + id;
        req.setUrl(url);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapEqp = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapEqp.get("root");

                    for (Map<String, Object> obj : list) {

                        Equipe t = new Equipe();
                        int idE = (int) Float.parseFloat(obj.get("idE").toString());

                        String nom = obj.get("nomEquipe").toString();

                        t.setIdE(idE);
                        t.setNomEquipe(nom);

                        result.add(t);

                    }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }

    public ArrayList<Stade> findS(int id) {
        
     
        ArrayList<Stade> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findS/" + id;
        req.setUrl(url);
        req.setPost(false);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapEqp = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapEqp.get("root");
 
                    for (Map<String, Object> obj : list) {
               // Map<String, Object>  obj = list.get(0);
                       
                        Stade t = new Stade();
                        int idE = (int) Float.parseFloat(obj.get("idStade").toString());

                        String nom = obj.get("nomStade").toString();
                       
                        t.setIdStade(idE);
                        t.setNomStade(nom);

                        result.add(t);

                   }

                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }
     public ArrayList<Matchs> findM(int id) {
        
     
        ArrayList<Matchs> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findM/" + id;
        req.setUrl(url);
        req.setPost(false);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                 
                try {
                    Map<String, Object> mapEqp = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapEqp.get("root");
                   // System.out.println("iiii"+list.get(0).get("idMatch"));
                    for (Map<String, Object> obj : list) {
                       //  System.out.println("pppppiiii");
                         
                Matchs t = new Matchs();

                        int id = (int) Float.parseFloat(obj.get("idMatch").toString());
 
                        String hd = obj.get("heureDeb").toString();
                        String hf = obj.get("heureFin").toString();
                        String sc = obj.get("score").toString();
                        String st = obj.get("status").toString();
                        String desc = obj.get("description").toString();
                        int nb = (int) Float.parseFloat(obj.get("nbSpectateur").toString());

                        Map<String, Object> idd = null;
                        idd = (Map<String, Object>) obj.get("idStade");

                        int iS = (int) Float.parseFloat(idd.get("idStade").toString());
                        String nS = idd.get("nomStade").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe1");
                        int iE1 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE1 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe2");
                        int iE2 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE2 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idOrg");
                      
                        ;
                        int iU = (int) Float.parseFloat(idd.get("id").toString());
                      
                     
                        String date = obj.get("date").toString();
                      
                        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

                        String dateString = format.format(new Date());
                        Date d = format.parse(date);
                      

                        t = new Matchs(id, iS, iE1, iE2, d, nb, hd, hf, desc, st, sc, iU);
                        result.add(t);
                        

                   }
                 
                } catch (Exception ex) {
                    ex.getMessage();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;
    }
public ArrayList<Matchs>affichageMatchTermine(){
    
    
   ArrayList<Matchs> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findMatchT";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapM = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapM.get("root");

                    for (Map<String, Object> obj : list) {

                        Matchs t = new Matchs();

                        int id = (int) Float.parseFloat(obj.get("idMatch").toString());

                        String hd = obj.get("heureDeb").toString();
                        String hf = obj.get("heureFin").toString();
                        String sc = obj.get("score").toString();
                        String st = obj.get("status").toString();
                        String desc = obj.get("description").toString();
                        int nb = (int) Float.parseFloat(obj.get("nbSpectateur").toString());

                        Map<String, Object> idd = null;
                        idd = (Map<String, Object>) obj.get("idStade");

                        int iS = (int) Float.parseFloat(idd.get("idStade").toString());
                        String nS = idd.get("nomStade").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe1");
                        int iE1 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE1 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe2");
                        int iE2 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE2 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idOrg");
                        //  
                        ;
                        int iU = (int) Float.parseFloat(idd.get("id").toString());
                        //  String nU = idd.get("nom").toString();
                        System.out.println("taaaaaa");
                        String date = obj.get("date").toString();
                        System.out.println("dataaate " + date);
                        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

                        String dateString = format.format(new Date());
                        Date d = format.parse(date);
                        System.out.println("date" + d);

                        t = new Matchs(id, iS, iE1, iE2, d, nb, hd, hf, desc, st, sc, iU);
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

public ArrayList<Matchs>affichageMatchOrg(){
    
    
   ArrayList<Matchs> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findMatchO";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapM = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapM.get("root");

                    for (Map<String, Object> obj : list) {

                        Matchs t = new Matchs();

                        int id = (int) Float.parseFloat(obj.get("idMatch").toString());

                        String hd = obj.get("heureDeb").toString();
                        String hf = obj.get("heureFin").toString();
                        String sc = obj.get("score").toString();
                        String st = obj.get("status").toString();
                        String desc = obj.get("description").toString();
                        int nb = (int) Float.parseFloat(obj.get("nbSpectateur").toString());

                        Map<String, Object> idd = null;
                        idd = (Map<String, Object>) obj.get("idStade");

                        int iS = (int) Float.parseFloat(idd.get("idStade").toString());
                        String nS = idd.get("nomStade").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe1");
                        int iE1 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE1 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe2");
                        int iE2 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE2 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idOrg");
                        //  
                        ;
                        int iU = (int) Float.parseFloat(idd.get("id").toString());
                        //  String nU = idd.get("nom").toString();
                        System.out.println("taaaaaa");
                        String date = obj.get("date").toString();
                        System.out.println("dataaate " + date);
                        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

                        String dateString = format.format(new Date());
                        Date d = format.parse(date);
                        System.out.println("date" + d);

                        t = new Matchs(id, iS, iE1, iE2, d, nb, hd, hf, desc, st, sc, iU);
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
    public boolean deleteMatch(int id) {

        String url = Statics.BASE_URL + "/deleteM/" + id;
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
    
    public void addVote(Vote t) {
        String url = Statics.BASE_URL +"/addV?idMatch="+t.getIdMatch()+"&idUser="+t.getIdUser()+"&vote="+t.getVote();
        req.setUrl(url);
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
            System.out.println("data == " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }
    
       public Map<String,Double> getVote(/*int id*/)
    {
    
        Map<String,Double> listM = new HashMap<>();
      
       // String url = Statics.BASE_URL +"/Vote/"+ id;
       String url = Statics.BASE_URL +"/mv";
        req.setUrl(url); 

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               
                JSONParser jsonp = new JSONParser();
                try {
                    System.out.println((new String(req.getResponseData()).toCharArray())); 
                    
                    Map<String, Object> note = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list =  (List<Map<String, Object>>) note.get("root");

                    for (Map<String, Object> obj : list) {
                    double vote = Double.parseDouble(obj.get("total").toString()); 
int v = (int)vote;

                    String s =   obj.get("idM").toString();
                 
                    listM.put(s,vote);
                    }
                }catch (IOException ex) {
                    System.out.println("erreur parse");
                }
                }
               
            });
        

        NetworkManager.getInstance().addToQueueAndWait(req);
        return listM;
    }
       
    public ArrayList<Matchs>affichageMatchParStade(String d){
    
    
   ArrayList<Matchs> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/findMb/"+d;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j;
                j = new JSONParser();
                try {
                    Map<String, Object> mapM = j.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) mapM.get("root");

                    for (Map<String, Object> obj : list) {

                        Matchs t = new Matchs();

                        int id = (int) Float.parseFloat(obj.get("idMatch").toString());

                        String hd = obj.get("heureDeb").toString();
                        String hf = obj.get("heureFin").toString();
                        String sc = obj.get("score").toString();
                        String st = obj.get("status").toString();
                        String desc = obj.get("description").toString();
                        int nb = (int) Float.parseFloat(obj.get("nbSpectateur").toString());

                        Map<String, Object> idd = null;
                        idd = (Map<String, Object>) obj.get("idStade");

                        int iS = (int) Float.parseFloat(idd.get("idStade").toString());
                        String nS = idd.get("nomStade").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe1");
                        int iE1 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE1 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idEquipe2");
                        int iE2 = (int) Float.parseFloat(idd.get("idE").toString());
                        String nE2 = idd.get("nomEquipe").toString();

                        idd = (Map<String, Object>) obj.get("idOrg");
                        //  
                        ;
                        int iU = (int) Float.parseFloat(idd.get("id").toString());
                        //  String nU = idd.get("nom").toString();
                        System.out.println("taaaaaa");
                        String date = obj.get("date").toString();
                        System.out.println("dataaate " + date);
                        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

                        String dateString = format.format(new Date());
                        Date d = format.parse(date);
                        System.out.println("date" + d);

                        t = new Matchs(id, iS, iE1, iE2, d, nb, hd, hf, desc, st, sc, iU);
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

    /*  
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

    }*/
}
