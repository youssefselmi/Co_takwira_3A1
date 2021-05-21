/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Service;

import com.codename1.components.ToastBar;
import com.codename1.io.ConnectionRequest;
import java.util.ArrayList;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.io.Storage;
import com.codename1.io.Util;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.media.Media;
import com.codename1.ui.FontImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import com.menu.coheal.utils.Statics;
import com.mycompany.entites.Reclamation;
import java.io.InputStream;
import java.util.Date;

/**
 *
 * @author yassin
 */
public class ServiceReclamation {

    public static ServiceReclamation instance = null;
    public static boolean resultOk = true;

    private ConnectionRequest req;

    public static ServiceReclamation getInstance() {
        if (instance == null) {
            instance = new ServiceReclamation();
        }
        return instance;
    }

    public ServiceReclamation() {
        req = new ConnectionRequest();
    }

    //Ajout
    public void addReclamation(Reclamation reclamation) throws Exception {

        String url = Statics.BASE_URL + "reclamation/addReclamation?idJoueur=" + reclamation.getIdJoueur()
                + "&SujetRec=" + reclamation.getSujetRec()
                + "&DescriptionRec=" + reclamation.getDescriptionRec()
                + "&StatusRec=" + reclamation.getStatusRec()
                + "&DateRec=" + reclamation.getDateRec()
                + "&NomJoueur=" + reclamation.getNomJoueur()
                + "&PrenomJoueur=" + reclamation.getPrenomJoueur()
                + "&EmailJoueur=" + reclamation.getEmailJoueur()
                + "&TlJoueur=" + reclamation.getTlJoueur();
        //Na9esa el DateTraitement,NomPrenomCoach,imgRec
        System.out.println(url);
        req.setUrl(url);
        req.addResponseListener(e -> {
            String str = new String(req.getResponseData());//reponse jason 
            System.out.println("data ==> " + str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
    }

    //Affichage
    public ArrayList<Reclamation> AffichageReclamation() {
        ArrayList<Reclamation> result = new ArrayList<>();
        String url = Statics.BASE_URL + "reclamation/AffichageReclamation";
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
                        Reclamation re = new Reclamation();

                        int idRec = (int) Float.parseFloat(obj.get("idrec").toString());
//                        int IdJoueur = (int) Float.parseFloat(obj.get("idjoueur").toString());
//                        String NomPrenomCoach = obj.get("nomprenomcoach").toString();
                        String SujetRec = obj.get("sujetrec").toString();
                        String DescriptionRec = obj.get("descriptionrec").toString();
                        String StatusRec = obj.get("statusrec").toString();
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
                        String date = obj.get("daterec").toString();
                        SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");
                        String dateString = formatter.format(date);
                        re.setDateRec(dateString);
                        /////////////////////////////://////////////////:///////:Lel Date tawww //////////////////://////////////////://////////////////:                       
                        re.setIdRec((int) idRec);
//                        re.setIdJoueur((int) IdJoueur);
                      //  re.setNomPrenomCoach(NomPrenomCoach);
                        re.setSujetRec(SujetRec);
                        re.setDescriptionRec(DescriptionRec);
                        re.setStatusRec(StatusRec);
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

    //Delete Reclamation
    public boolean deleteReclamation(int id) {
        String url = Statics.BASE_URL + "reclamation/SupprimerReclamation?idRec=" + id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
        return resultOk;
    }

    //Modifier Reclamation
    public boolean ModifierReclamation(Reclamation reclamation) {
        String url = Statics.BASE_URL + "reclamation/updateReclamation?idRec=" + reclamation.getIdRec() + "&SujetRec=" + reclamation.getSujetRec() + "&DescriptionRec=" + reclamation.getDescriptionRec();
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

//        public boolean Excele() {
//        String url = Statics.BASE_URL + "/reclamation/updateReclamation?idRec=" + reclamation.getIdRec() + "&SujetRec=" + reclamation.getSujetRec() + "&DescriptionRec=" + reclamation.getDescriptionRec();
//        req.setUrl(url);
//        req.addResponseListener(new ActionListener<NetworkEvent>() {
//            @Override
//            public void actionPerformed(NetworkEvent evt) {
//                resultOk = req.getResponseCode() == 200; //code success  http 200 ok
//                req.removeResponseListener(this);
//            }
//        });
//        NetworkManager.getInstance().addToQueueAndWait(req);//execution te3 request
//        System.out.println("data ==> " + req);
//        return resultOk;
//
//    }
    public void Exporterpdf() {
            // System.out.println("Hello Update !");
            String file = "reclam.pdf";
            Util.downloadUrlToStorage("http://127.0.0.1:8000/reclamation/pdf/" + file, file, true);
            try {
                InputStream is = Storage.getInstance().createInputStream(file);
             //   ToastBar.showMessage("Pdf ete Exporter", FontImage.MATERIAL_ACCESS_TIME);
            } catch (IOException ex) {
                ex.getStackTrace();
               // ToastBar.showMessage("Verifier Le server Run !!", FontImage.MATERIAL_ACCESS_TIME);
            }
    }

    public void ExporteExcel() {
            // System.out.println("Hello Update !");
            String file = "";
            Util.downloadUrlToStorage("http://127.0.0.1:8000/reclamation/excel/export", file, true);
            try {
                InputStream is = Storage.getInstance().createInputStream(file);
               // ToastBar.showMessage("Excel ete Exporter", FontImage.MATERIAL_ACCESS_TIME);
            } catch (IOException ex) {
                ex.getStackTrace();
               // ToastBar.showMessage("Verifier Le server Run !!", FontImage.MATERIAL_ACCESS_TIME);
            }
    }

}
