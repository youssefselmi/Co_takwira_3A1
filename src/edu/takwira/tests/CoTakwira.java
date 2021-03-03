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
        Equipe e = new Equipe(7,"realMadrid", 3);
          Equipe e1 = new Equipe(7,"realMadrid", 20);
       EquipeCrud ecd = new EquipeCrud();
       JoueurCrud jc=new JoueurCrud();
   // Date aujourdhui = new Date();
      //  System.out.println(aujourdhui);
    String datejoueur="1999-04-28";
    Date hello=Date.valueOf(datejoueur);
    
Joueur j1=new Joueur(8,"yasmine","haffar",hello,14,"bb","cc",4) ; 
Joueur j2=new Joueur(9,"sami","bhh",hello,15,"dd","aaaa",8) ;  

     /* Joueur j1=new Joueur(3,"yassine","dabboussi",29,13,"yassinedaboussi","Tunis",2);
      Joueur j2=new Joueur(4,"maher","guerfali",28,13,"maherguerfli@gmail.com","Tunis",8);

     Joueur j3=new Joueur(5,"firas","salah",30,29886485,"firasalah@gmail.com","mahdia",7);*/

// jc.ajouterJoueur(j3);
  //jc.ajouterJoueur(j2);
  //jc.afficherJoueur();

//jc.supprimerJoueur(j1);
      
  //jc.updateJoueur(j);
 
      //  System.out.println(jc.afficherJoueur());
        //................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................System.out.println(jc.afficherEquipeJoueur());


   //   ecd.ajouterEquipe(e1);
    
      //ecd.supprimerEquipe(e);
//ecd.updateEquipe(e);
//ecd.afficherEquipe();
     //  Joueur j = new Joueur(1,"Gargouri","Karray",,1234,"hahaj","korba",3);

      //  System.out.println(ecd.afficherEquipe());
     List<Joueur> yasmine=new ArrayList<>();
  yasmine=jc.afficherJoueur();
     
        System.out.println(yasmine);
       float average = (float) yasmine.stream()
                
                .mapToDouble(c->c.getAge_joueur()).average().getAsDouble();
        
		          System.out.println("l'age moyen des joueurs est="+average);
                       long nbr= yasmine.stream().count();   
                          
                         long nbr1= yasmine.stream().filter(c->c.getAge_joueur()>25).count();
                         System.out.println(nbr);
                         System.out.println(nbr1);
                    long nbr2= yasmine.stream().filter(c->c.getAge_joueur()<25).count();
                    System.out.println(nbr2);

                         float x;
                         float x1;
                         
                         
                         x=nbr1*100/nbr;
                        x1=nbr2*100/nbr;

                         System.out.println(x+"%");
                         System.out.println(x1+"%");
      //  System.out.println(jc.afficheragejoueur());             
      // System.out.println(jc.afficherJoueur());
                         
    }
    
}