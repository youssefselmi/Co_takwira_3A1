/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crud.pidev.tests;

import crud.pidev.entities.Match;
import crud.pidev.entities.Rating;
import crud.pidev.entities.Stade;
import crud.pidev.services.MatchCrud;
import crud.pidev.services.RatingCrud;
import crud.pidev.services.StadeCrud;
import crud.pidev.tools.MyConnection;
import java.util.Date;

/**
 *
 * @author esprit
 */
public class MainC {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        MyConnection mc = MyConnection.getInstance();
        MyConnection mc2 = MyConnection.getInstance();
        System.out.println(mc.hashCode() + "--" + mc2.hashCode());

        Date d = new Date();

        Match m = new Match(156, 79, d, "6-6", 1);
        Match m2 = new Match(58, 89, d, "10-14", 10);
        MatchCrud matchC = new MatchCrud();
     //   matchC.ajouterMatch(m);
       // matchC.ajouterMatch(m2);
       // matchC.supprimerMatch(m2);
       // matchC.updateMatch(m);
        System.out.println(matchC.displayMatchs().toString());
        /**
         * *********************** Stade ***************************
         */
        System.out.println("==================== Stade ===============");
        Stade s1 = new Stade("chedli zwiten", "Marsa", "Tunis", 1000, 1);
        Stade s2 = new Stade("stade tunisien", "tunis", "Ben Arous", 1000, 1);
        StadeCrud stade = new StadeCrud();
        // stade.ajouterStade(s1);
        //stade.ajouterStade(s2);

      //  stade.updateStade(s2);
        //stade.supprimerStade(s1);
       // System.out.println(stade.displayStades().toString());;

        /**
         * ************************* Rating *****************************
         */
       
       // matchC.ajouterMatch(mt);
        Match mb = new Match(5,24, 24, d, "5-5", 23);
         matchC.ajouterMatch(mb);
        Rating r1 = new Rating(5,3);
        RatingCrud rc = new RatingCrud();
        rc.ajouterRating(r1);
       // int t = rc.CalculerTotal(ma);
        
       // System.out.println(t);
       // System.out.println(rc.CalculerRating(ma));
       
       
        System.out.println(rc.CalculerRating(mb));
        matchC.TrieMatchParDate();
      //  System.out.println(matchC.NbJoursRestants(3));
       //System.out.println(rc.CalculerRating(m2));
    }

}
