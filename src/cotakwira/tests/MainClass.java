/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.tests;

import cotakwira.entities.Avis;
import cotakwira.entities.Reclamation;
import cotakwira.services.CrudAvis;
import cotakwira.services.CrudReclamation;
import cotakwira.tools.MyConnection;
import java.sql.Date;
import java.util.Calendar;

/**
 *
 * @author yassin
 */
public class MainClass {

    public static void main(String[] argv) {

//        long millis = System.currentTimeMillis();
//        java.sql.Date DateRec = new java.sql.Date(millis);
//        System.out.println(DateRec);
//        String str = "2021-03-15";
//        Date DateTraitement = Date.valueOf(str);
        //Date DateNonTraiter= null;
        CrudReclamation go = new CrudReclamation();
        Reclamation rec = new Reclamation(4,2,"Coach","bad!!!",22);        
        //go.ajouterReclamation(rec);
        //go.supprimerReclamation(rec);
        //Reclamation rec2 = new Reclamation(3,"Coach","good!!",21);
        //go.updateReclamation(rec2);
        //System.out.println(go.displayReclamation());
        //go.PrioriteRec(); 
/////////////////////////////////Avis//////////////////////////////
        CrudAvis work = new CrudAvis();
       Avis av = new Avis(1,21,2 ,"999", "vv");
//        work.ajouterAvis(av);
//        System.out.println(work.displayAvis());
//        work.supprimerAvis(av);
//        Avis avv = new Avis(1,21,1,"good Player!", "iii");
//       work.updateAvis(avv);
//        System.out.println(work.displayAvis());
/////////////////////////////////////////////////////////////////////

    }
}