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
import com.mycompany.entites.Rate;
import com.menu.coheal.utils.Statics;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author yassin
 */
public class ServiceRate {
    
    
    public static ServiceRate instance = null;

    private ConnectionRequest req;

    public static ServiceRate getInstance() {
        if (instance == null) {
            instance = new ServiceRate();
        }
        return instance;
    }

    public ServiceRate() {
        req = new ConnectionRequest();
    }

    //Ajout
    public void addRate(Rate rate) throws Exception {

        String url = Statics.BASE_URL + "rate/addrate?idCoach=" + rate.getIdCoach()+
                "&nomprenomcoach=" + rate.getNomPrenomCoach()+
                "&NomEquipe=" + rate.getNomEquipe()+ 
                "&DateRate=" + rate.getDateRate()+
                "&Rate=" + rate.getRate();
        
        System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(e -> {
            String str = new String(req.getResponseData());//reponse jason 
            System.out.println("data ==> " + str);
        });

        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
    }

    //Affichage
    public ArrayList<Rate> AffichageRate() {
         ArrayList<Rate> result = new ArrayList<>();
        String url = Statics.BASE_URL + "rate/AffichageRate";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();
                try {
                    Map<String, Object> mapRate = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String, Object>> listofMapss = (List<Map<String, Object>>) mapRate.get("root");

                    for (Map<String, Object> obj : listofMapss) {
                        Rate re = new Rate();
//
//                         int idRate = (int) Float.parseFloat(obj.get("idrate").toString());
//                        int idCoach = (int) Float.parseFloat(obj.get("idcoach").toString());
//                        String NomPrenomCoach = obj.get("nomprenomcoach").toString();
                        String NomEquipe = obj.get("nomequipe").toString();
                        int Rate = (int) Float.parseFloat(obj.get("rate").toString());

//                        String date = obj.get("daterate").toString();
//                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
//                        String dateString = formatter.format(date);
//                        re.setDateRate(dateString);
                        /////////////////////////////://////////////////:///////:Lel Date tawww //////////////////://////////////////://////////////////:                       
                       // re.setIdRate((int) idRate);
                      //  re.setIdCoach((int) idCoach);
                        re.setNomEquipe(NomEquipe);
                      //  re.setNomPrenomCoach(NomPrenomCoach);
                        re.setRate(Rate);

                        //add date int arraylist result
                        result.add(re);


                    }
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
        });
                System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(e -> {
            String str = new String(req.getResponseData());//reponse jason 
            System.out.println("data ==> " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
        return result;
    }
    
    
    
    
    
}
