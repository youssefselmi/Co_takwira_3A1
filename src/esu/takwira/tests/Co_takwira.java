/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package esu.takwira.tests;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.services.CoachCrud;
import edu.takwira.services.EntrainementCrud;
import esu.takwira.tools.Connection;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
//import java.util.Date;


/**
 *
 * @author ASUS
 */
public class Co_takwira {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
 
         Connection mc = Connection.getInstance();
         Connection mc2 = Connection.getInstance();
         System.out.println(mc.hashCode()+"--"+mc2.hashCode());
        
    
          

        
       // Coach c = new Coach(2,"Iheb", "hamma", "10/10/2000", "propro", "10/10/2021");
       // Coach c1 = new Coach(6,"youssef", "sellmi", "10/10/2000", "Amateur", "10/10/2021");
      //  Coach c2 = new Coach(7,"yousseffffff", "sellmi", "10/10/2000", "Amateur", "10/10/2021");
      
      
      String str ="2021-01-31";
      Date datee_fin_contrat=Date.valueOf(str);
      String str3 ="1998-01-31";
      Date naissance_coach=Date.valueOf(str3);
      
      
                // Coach c4 = new Coach(11," ahmed ", "sellmi ",10, "Amateur  ",datee,"ahmed.selmi@esprit.tn");
               // Coach c = new Coach(14," youssefff ","sellmi ",10, "pro19",datee,"ahmed.selmi@esprit.tn");
                Coach c3 = new Coach(32,"yassin ","daboussi ",naissance_coach, "pro",datee_fin_contrat,"rami.jdidi@esprit.tn",960f);
               // Coach c4 = new Coach(28," oussamaaaa ","jdidi ",naissance_coach, "amateur",datee_fin_contrat,"yassin.selmi@esprit.tn",1254);
                //Coach c5 = new Coach(28," ahmed ","iheb ",naissance_coach, "professionel",datee_fin_contrat,"yassin.selmi@esprit.tn",1500);

               
               
                String str2 ="2021-01-31";
                Date datee=Date.valueOf(str2);
                Entrainement e= new Entrainement(3,datee,45,1,1,1);
                Entrainement e1= new Entrainement(4,datee,120,22,2,2);
                
                
                CoachCrud pcd = new CoachCrud();
                EntrainementCrud yes = new EntrainementCrud();
     
                
                
    // yes.ajouterEntrainement(e1);

      //yes.supprimerEntrainement(e);
      
      // yes.updateEntrainement(e1);
      
        //System.out.println(yes.afficherEntrainement());
        
        
        
      // pcd.ajouterCoach(c3);
      // System.out.println(pcd.afficherCoachs());
     ///pcd.supprimerCoach(c4);
      //pcd.updateCoach(c3);
      // System.out.println(pcd.afficherCoachs());
        
       
      
      
      
         
           //pcd.supprimerCoach_fin_contrat();
          //        pcd.miseajourCoach();



           
        
       
       
        

  
          
          
          
          
          
          
          
          
        
        
// System.out.println(date==datee);
//     if(date.compareTo(datee)>0)
//     {
//         System.out.println(date+" superieur  "+datee);
//     
//     }
//     else   System.out.println(date+" inferieur  "+datee);

         
      


        
       

// List<Coach> coachList = new ArrayList<>();
// 
// coachList=pcd.afficherCoachs();
// System.out.println(coachList);
// 

        
//
//       long millis = System.currentTimeMillis();
//       java.sql.Date date = new java.sql.Date(millis);
//       System.err.println(date);
//       System.err.println(millis);
      


pcd.affichierCoachEntrainement();



    }
    
}
