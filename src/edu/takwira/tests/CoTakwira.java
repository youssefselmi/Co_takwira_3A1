    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.tests;

import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import edu.takwira.services.EquipeCrud;
import edu.takwira.services.JoueurCrud;
import edu.takwira.tools.Connection;
import java.text.DateFormat;
import java.sql.Date;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;

/**
 *
 * @author pc_dell
 */
public class CoTakwira {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Connection mc = Connection.getInstance();
        Connection mc2 = Connection.getInstance();
        System.out.println(mc.hashCode()+"--"+mc2.hashCode());
        Equipe e4 = new Equipe("bayern",17);
        Equipe e = new Equipe(7,"realMadrid", 3);
          Equipe e1 = new Equipe(7,"realMadrid", 20);
       EquipeCrud ecd = new EquipeCrud();
       JoueurCrud jc=new JoueurCrud();
   // Date aujourdhui = new Date();
     String datejoueur="2004-03-11";
    Date Datenaissance=Date.valueOf(datejoueur);
   
 Joueur j4=new Joueur("aaa","selmi",Datenaissance,0,13,"babababa","Tunis","","attaque",7,"","");
 
  

        Calendar cal = Calendar.getInstance();
cal.setTime(Datenaissance);



 Calendar now = Calendar.getInstance();
Calendar dob = Calendar.getInstance();
int year_date_naissence = cal.get(cal.YEAR);
int month_date_naissence = cal.get(cal.MONTH);
int day_date_naissence = cal.get(cal.DAY_OF_MONTH);
   
dob.set(year_date_naissence, month_date_naissence, day_date_naissence);
if (dob.after(now)) {
  throw new IllegalArgumentException("Can't be born in the future");
}
int year1 = now.get(Calendar.YEAR);
int year2 = dob.get(Calendar.YEAR);
int age = year1 - year2;
int month1 = now.get(Calendar.MONTH);
int month2 = dob.get(Calendar.MONTH);
if (month2 > month1) {
  age--;
} else if (month1 == month2) {
  int day1 = now.get(Calendar.DAY_OF_MONTH);
  int day2 = dob.get(Calendar.DAY_OF_MONTH);
  if (day2 < day1) {
    age--;
  }
}
        System.out.println("age : "+age);
/*
        j4.setAge_joueur(age);
 if(age<18)
 {
     j4.setCategorie("junior");
 }
 else {     j4.setCategorie("sunior");
}*/

       // System.out.println(age);
      //  jc.miseajour();
        
 jc.ajouterJoueur(j4);
   
     /* Joueur j1=new Joueur(3,"yassine","dabboussi",29,13,"yassinedaboussi","Tunis",2);
      Joueur j2=new Joueur(4,"maher","guerfali",28,13,"maherguerfli@gmail.com","Tunis",8);

     Joueur j3=new Joueur(5,"firas","salah",30,29886485,"firasalah@gmail.com","nabeul",7);*/
     

// jc.ajouterJoueur(j3);
   //jc.ajouterJoueur(j3);

//jc.supprimerJoueur(j1);
      
 // jc.updateJoueur(j4);
 
      //  System.out.println(jc.afficherJoueur());
        //................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................System.out.println(jc.afficherEquipeJoueur());


   //ecd.ajouterEquipe(e4);
    
      //ecd.supprimerEquipe(e);
//ecd.updateEquipe(18,e4);
//ecd.afficherEquipe();
     //  Joueur j = new Joueur(1,"Gargouri","Karray",,1234,"hahaj","korba",3);

      // System.out.println(ecd.afficherEquipe());
       // System.out.println(jc.afficherJoueur());
   /*  List<Joueur> yasmine=new ArrayList<>();
  yasmine=jc.afficherJoueur();
     
        //System.out.println(yasmine);
        float average = (float) yasmine.stream()
                
//                .mapToDouble(c->c.getAge_joueur()).average().getAsDouble();
        
		          System.out.println("l'age moyen des joueurs est="+average);
                       long nbr1= yasmine.stream().count();   
                          
                         long nbr= yasmine.stream().filter(c->c.getAge_joueur()>25).count();
                        // System.out.println(nbr);
                         float x;
                         
                         x=nbr*100/nbr1;
                        // System.out.println(x+"%");*/
//    jc.afficherEquipeJoueur();
//System.out.println(jc.afficherJoueur());
      // System.out.println(ecd.recupereridCoach("yassine"));
                         
                         
    }
    
}