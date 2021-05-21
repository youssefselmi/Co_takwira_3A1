/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Service;


import com.codename1.io.ConnectionRequest;
import java.util.ArrayList;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;



import com.menu.coheal.Models.Entrainement;



import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;



import com.menu.coheal.utils.Statics;



import java.util.Date;

/**
 *
 * @author yassin
 */
public class Service_Entrainement {

public static Service_Entrainement instance = null;
    public static boolean resultOk = true;

    private ConnectionRequest req;

    public static Service_Entrainement getInstance() {
        if (instance == null) {
            instance = new Service_Entrainement();
        }
        return instance;
    }

    public Service_Entrainement() {
        req = new ConnectionRequest();
    }
    
    


    //Affichage
    
    
    public ArrayList<Entrainement> AffichageEntrainement() {
        ArrayList<Entrainement> result = new ArrayList<>();
        String url = Statics.BASE_URL + "entrainement_mobile";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();
                try {
                    Map<String, Object> mapReclamation = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> listofMaps = (List<Map<String, Object>>) mapReclamation.get("root");

                    for (Map<String, Object> obj : listofMaps) {
                        Entrainement re = new Entrainement();

                        int id_entrainement = (int) Float.parseFloat(obj.get("idEntrainement").toString());
//                        int IdJoueur = (int) Float.parseFloat(obj.get("idjoueur").toString());
//                        String NomPrenomCoach = obj.get("nomprenomcoach").toString();
                        String heure = obj.get("heure").toString();
                        String type = obj.get("type").toString();
                        
                     int duree = (int) Float.parseFloat(obj.get("duree").toString());


                        //String StatusRec = obj.get("statusrec").toString();
//                        String NomJoueur = obj.get("nomjoueur").toString();
//                        String PrenomJoueur = obj.get("prenomjoueur").toString();
//                        String EmailJoueur = obj.get("emailjoueur").toString();
//                        int TlJoueur = (int) Float.parseFloat(obj.get("tljoueur").toString());
                        //Na9esa el DateTraitement,imgRec
/////////////////////////////://////////////////:///////:Lel Date tawww //////////////////://////////////////://////////////////:
//                        String DateConvtString = obj.get("DateRec").toString().substring(obj.get("DateRec").toString().indexOf("timestamp") + 10, obj.get("DateRec").toString().lastIndexOf(")"));
//                        Date currentTime = new Date(Double.valueOf(DateConvtString).longValue() * 1000);
//                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
//                        String dateString = formatter.format(currentTime);
//                        re.setDateRec(dateString);
//                        Map<String, Object> datef = (Map<String, Object>) obj.get("DateRec");
//                        float da2 = Float.parseFloat(datef.get("timestamp").toString());
//                        Date d2 = new Date((long) (da2 - 3600) * 1000);
//                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
//                        String dateString = formatter.format(d2);
//                        String date = obj.get("date_entrainement").toString();
//                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
//                        String dateString = formatter.format(date);
//                        re.setDate_entrainement(dateString);
                        /////////////////////////////://////////////////:///////:Lel Date tawww //////////////////://////////////////://////////////////:                       
                        re.setId_entrainement((int) id_entrainement);
//                        re.setIdJoueur((int) IdJoueur);
//                        re.setNomPrenomCoach(NomPrenomCoach);
                        re.setHeure(heure);
                        re.setType(type);
                        re.setDuree(duree);
                        
                           String date = obj.get("dateEntrainement").toString();
                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
                        String dateString = formatter.format(date);
                        re.setDate_entrainement(dateString);
                        
                        
                       // re.setStatusRec(StatusRec);
//                        re.setNomJoueur(NomJoueur);
//                        re.setPrenomJoueur(PrenomJoueur);
//                        re.setEmailJoueur(EmailJoueur);
//                        re.setIdRec((int) TlJoueur);

                        //add date int arraylist result
                        result.add(re);

                    }
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
        return result;
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //{"idEntrainement":19,"duree":15,"dateEntrainement":"2021-10-10T00:00:00+02:00","heure":"20h","idCoach":1,"idStade":1,"idEquipe":1,"type":"attaque"}
        //Ajout
    public void addEntrainement(Entrainement c) throws Exception {

        String url = Statics.BASE_URL + "newentrainement_mobile/"+ c.getDuree() + "/" + c.getHeure()+ "/" +c.getDate_entrainement()+ "/" +c.getType()+ "/" +c.getId_coach()+ "/" +c.getId_stade()+ "/" +c.getId_equipe(); //création de l'URL
               
        //Na9esa el DateTraitement,NomPrenomCoach,imgRec
        System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(e -> {
            String str = new String(req.getResponseData());//reponse jason 
            System.out.println("data ==> " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
    }
    
    
    
    
    
    
    
    
    public boolean deleteReclamation(int id) {
        String url = Statics.BASE_URL + "SupprimerEntrainement?idEntrainement=" + id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseListener(this);
            }
        });
        
        
        System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(e -> {
            String str = new String(req.getResponseData());//reponse jason 
            System.out.println("data ==> " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
        return resultOk;
    }

    
    
    
    
    public boolean ModifierEntrainement(Entrainement reclamation) {
        String url = Statics.BASE_URL + "updateEntrainement?idEntrainement=" + reclamation.getId_entrainement()+ "&duree=" + reclamation.getDuree()+ "&type=" + reclamation.getType();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200; //code success  http 200 ok
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
        System.out.println("data ==> " + req);
        return resultOk;

    }

}



