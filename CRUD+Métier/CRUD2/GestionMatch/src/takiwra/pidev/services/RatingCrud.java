/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takiwra.pidev.services;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import takwira.pidev.entities.Match;
import takwira.pidev.entities.Rating;
import takwira.pidev.tools.MyConnection;

/**
 *
 * @author esprit
 */
public class RatingCrud {

    public void ajouterRating(Rating t) {

        try {
            String requete = "INSERT INTO rating (id_match, rate)  VALUES (?,?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setInt(1, t.getId_match());

            pst.setInt(2, t.getRating());

            pst.executeUpdate();
            System.out.println("Rate ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public int CalculerTotal(Match m) {
        int total = 0;
        int idd = m.getIdMacth();
        String requete = "select count(*) from `rating`  where id_match = " + idd;

        Statement st;
        try {
            st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            if (rs.next()) {
                String chaine = String.valueOf(rs.getString(1));
                total = Integer.parseInt(chaine);
                System.out.println(total);
            }

        } catch (SQLException ex) {
            Logger.getLogger(RatingCrud.class.getName()).log(Level.SEVERE, null, ex);
        }
        return total;
    }

    public float CalculerRating(Match m) {
        int sum = 0;
        int idd = m.getIdMacth();
        System.out.println(idd);
        float rate = 0;
        int total = CalculerTotal(m);
        String chaine;
        String requete = "select sum(rate) from `rating`  where id_match = " + idd;

        Statement st;
        try {
            st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            if (rs.next()) {
                if (rs.getString(1) == null) {
                    chaine = "0";
                    System.out.println(" Match introuvable !!");
                } else {
                    chaine = String.valueOf(rs.getString(1));
                     sum = Integer.parseInt(chaine);
                    rate = (float) sum / total;
                }

               

            }

        } catch (SQLException ex) {
            System.out.println("ex.getMessage()");
        }
        
        return rate;
    }

}
