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
import static com.menu.coheal.Service.Service_Entrainement.resultOk;
import com.mycompany.Models.Equipe;
import com.menu.coheal.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Map.Entry;
import java.util.Set;

/**
 *ddd
 * @author USER-PC
 */
public class Service_Equipe {
        public ArrayList<Equipe >Equipes;
    public static Service_Equipe instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
     public Service_Equipe() {
        req = new ConnectionRequest();
    }

    public static Service_Equipe getInstance() {
        if (instance == null) {
            instance = new Service_Equipe();
        }
        return instance;
    }
    
    
    
    //Affichage
    public ArrayList<Equipe> AffichageEquipe() {
        ArrayList<Equipe> result = new ArrayList<>();
        String url = Statics.BASE_URL + "equipe_mobile";
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
                        Equipe re = new Equipe();

                        int id_e = (int) Float.parseFloat(obj.get("idE").toString());
//                        int IdJoueur = (int) Float.parseFloat(obj.get("idjoueur").toString());
//                        String NomPrenomCoach = obj.get("nomprenomcoach").toString();
                        String nom_equipe = obj.get("nomEquipe").toString();
                        
                         Map<String, Object> map1 = ((Map<String, Object>) obj.get("idCoach"));
                for (Entry<String, Object> entry : map1.entrySet()) {
                    String key = entry.getKey();
                    Object value = entry.getValue();
                    
                    if(key.equals("idCoach"))
                    {
                       float idCoach = Float.parseFloat(value.toString());
                re.setId_coach((int) idCoach);  
                    }
                     if(key.equals("nomCoach"))
                    {
                      re.setNom_coach(value.toString());  
                    }
                      if(key.equals("prenomCoach"))
                    {
                          re.setPrenom_coach(value.toString());     
                    }
                    
                }
           
                       // String id_coach = obj.get("id_coach").toString();
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
                        re.setId_e((int) id_e);
//                        re.setIdJoueur((int) IdJoueur);
//                        re.setNomPrenomCoach(NomPrenomCoach);
                        re.setNom_equipe(nom_equipe);
                       // re.setType(type);
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

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        public ArrayList<Equipe> parseEquipe(String jsonText) {
        try {
            Equipes = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> ReclamationListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) ReclamationListJson.get("root");

            for (Map<String, Object> obj : list) {
                Equipe equipe=new Equipe();
               float id = Float.parseFloat(obj.get("idE").toString());
                equipe.setId_e((int) id);

                
                
                
               
     
                   
                
                
                
            
                
                

           
                 equipe.setNom_equipe(obj.get("nomEquipe").toString());

   Map<String, Object> map1 = ((Map<String, Object>) obj.get("idCoach"));
                for (Entry<String, Object> entry : map1.entrySet()) {
                    String key = entry.getKey();
                    Object value = entry.getValue();
                    
                    if(key.equals("idCoach"))
                    {
                       float idCoach = Float.parseFloat(value.toString());
                equipe.setId_coach((int) idCoach);  
                    }
                     if(key.equals("nomCoach"))
                    {
                      equipe.setNom_coach(value.toString());  
                    }
                      if(key.equals("prenomCoach"))
                    {
                          equipe.setPrenom_coach(value.toString());     
                    }
                    
                }
                // questionnaire q =new questionnaire();
                // q.setDescription_cat_qst((String) map.get("description_cat_qst"));
             
                Equipes.add(equipe);
            }

        } catch (IOException ex) {
            System.out.println("Exception in parsing reclamations ");
        }

        return Equipes;
    }

    public ArrayList<Equipe> findAll() {
        String url = Statics.BASE_URL + "equipe/jsonequipe";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Equipes = parseEquipe(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Equipes;
    }
    
    
    
public void AddEquipe(Equipe e) {
       String url = Statics.BASE_URL + "newjson/"+ e.getNom_equipe() + "/" + e.getId_coach(); //création de l'URL
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





public int  get_Categorie(String nom)
      {
          for( Equipe u :AffichageEquipe()  )
          {
              if (u.getNom_equipe().equals(nom))
              {
                  return u.getId_e();
              }
          }
          return 1;
  
      }






    
    public boolean deleteReclamation(int id) {
        String url = Statics.BASE_URL + "SupprimerEquipe?idE=" + id;
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



}

