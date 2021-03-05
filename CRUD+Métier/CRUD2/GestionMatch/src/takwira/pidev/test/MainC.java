/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.test;

import java.util.Date;
import takiwra.pidev.services.MatchCrud;
import takiwra.pidev.services.RatingCrud;
import takiwra.pidev.services.StadeCrud;
import takwira.pidev.tools.MyConnection;
import takwira.pidev.entities.Match;
import takwira.pidev.entities.Rating;
import takwira.pidev.entities.Stade;

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

        Match m = new Match(10, 1, 2, 1, d, "6-3", 11);
        Match matchU = new Match(1, "7-3");
        Match m2 = new Match(11, 1, 2, 1, d, "0-0", 13);
        // Match m2 = new Match(58, 89, d, "10-14", 10);
        MatchCrud matchC = new MatchCrud();
        //matchC.ajouterMatch(m);
        // matchC.ajouterMatch(m2);
        //  matchC.supprimerMatch(m2);
        // matchC.updateMatch(matchU);
        System.out.println(matchC.displayMatchs().toString());
        /**
         * *********************** Stade ***************************
         */
        System.out.println("==================== Stade ===============");
        Stade s1 = new Stade("chedli zwiten", "Marsa", "Tunis", 1000, 1);
        Stade s2 = new Stade("stade tunisien", "tunis", "tunis", 1000, 1);
        Stade s4 = new Stade("Stade Radès", "Radès", "Ben Arous", 1000, 1);
        Stade s3 = new Stade(27, 0);
        StadeCrud stade = new StadeCrud();
        // stade.ajouterStade(s1);
      //   stade.ajouterStade(s4);

        // stade.updateStade(s2);
        //  stade.supprimerStade(s2);
        //  System.out.println(stade.displayStades().toString());;
        /**
         * ************************* Rating *****************************
         */
        // matchC.ajouterMatch(mt);
        /*    Match mb = new Match(5,24, 24, d, "5-5", 23);
         matchC.ajouterMatch(mb);*/
        Rating r1 = new Rating(1, 2);
        RatingCrud rc = new RatingCrud();
        // rc.ajouterRating(r1);
        int t = rc.CalculerTotal(matchU);
        System.out.println(t);
        System.out.println(rc.CalculerRating(matchU));
        //  System.out.println(rc.CalculerRating(mb));

        /**
         * ************************ Date *****************************
         */
        System.out.println(" =================== Date ============= ");
        matchC.TrieMatchParDate();
        System.out.println(matchC.NbJoursRestants(2));

        /**
         * ***************************Select Equipe
         * ****************************
         */
        System.out.println(" =================== Select Equipe============= ");
        //System.out.println(rc.CalculerRating(m2));

        System.out.println("Equipe1: \t" + matchC.SelectEquipe1() + "\t Equipe2: \t" + matchC.SelectEquipe2());
        System.out.println("Equipe1: \t" + matchC.SelectEquipe1() + "\t Equipe2: \t" + matchC.SelectEquipe2());

        System.out.println("Equipe1: \t" + matchC.SelectEquipe1() + "\t Equipe2: \t" + matchC.SelectEquipe2());

        System.out.println("Equipe1: \t" + matchC.SelectEquipe1() + "\t Equipe2: \t" + matchC.SelectEquipe2());

        System.out.println("Equipe1: \t" + matchC.SelectEquipe1() + "\tEquipe2: \t" + matchC.SelectEquipe2());
        System.out.println(" =================== Select Equipe(méthode2)============= ");
        int id1;
        int id2;
        id1 = matchC.SelectEquipe1();
        id2 = matchC.SelectEquipe2();
        
        while(id1==id2){
           id2 = matchC.SelectEquipe2(); 
        }
        System.out.println("id1\t" + id1 + "\t id2\t" + id2);
        Match mv = new Match(27,4, d, "4-3", 23);
        matchC.ajouterMatchEquipeAleatoire(mv);
            System.out.println(" =================== Stade ============= ");
            Stade s5 = new Stade(10, 0);
        System.out.println(stade.chercherStadeParVille("Rades"));
          System.out.println(" =================== Classement Top Stade ============= ");
        System.out.println(stade.OccurenceStade(s3));
         System.out.println(stade.OccurenceStade(s5));
         
    }

}
