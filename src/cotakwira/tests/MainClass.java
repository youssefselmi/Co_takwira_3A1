/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.tests;

import cotakwira.entities.Reclamation;
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
        Reclamation rec = new Reclamation(3,2,"Coach","DescriptionRec",21);        
        //go.ajouterReclamation(rec);
        //go.supprimerReclamation(rec);
        //Reclamation rec2 = new Reclamation(3,"Coach","good!!",21);
        //go.updateReclamation(rec2);
        System.out.println(go.displayReclamation());
         
         
    }
}
