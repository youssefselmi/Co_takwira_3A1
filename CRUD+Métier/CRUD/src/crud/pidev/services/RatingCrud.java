/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crud.pidev.services;

import crud.pidev.entities.Match;
import crud.pidev.entities.Rating;
import crud.pidev.tools.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author esprit
 */
public class RatingCrud {

    public void ajouterRating(Rating t) {

        try {
            String requete
                    = "INSERT INTO rating (id_match, rate)  VALUES (?,?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            //  pst.setInt(1, t.getRating());
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
        String requete = "select count(*) from `rating`  where id_match = "+idd;

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
    
    public float CalculerRating(Match m)
    {
        int sum = 0;
        int idd = m.getIdMacth();
        System.out.println(idd);
        float rate =0;
        int total =CalculerTotal(m); 
        String requete = "select sum(rate) from `rating`  where id_match = "+idd;

        Statement st;
        try {
            st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            if (rs.next()) {
                String chaine = String.valueOf(rs.getString(1));
                sum = Integer.parseInt(chaine);
             
            }

        } catch (SQLException ex) {
            System.out.println("ex.getMessage()");
        }
        rate =(float) sum / total;
        return rate;
    }

}
