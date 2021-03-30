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
import takwira.pidev.entities.Vote;
import takwira.pidev.interfaces.IVote;
import takwira.pidev.tools.MyConnection;

/**
 *
 * @author esprit
 */
public class VoteCrud implements IVote<Vote> {

    @Override
    public void ajouterVote(Vote t) {
        try {
            String requete = "INSERT INTO vote (id_match,id_user, vote)  VALUES (?,?,?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setInt(1, t.getId_match());
            pst.setInt(2, t.getId_user());
            pst.setInt(3, t.getVote());

            pst.executeUpdate();
            System.out.println("Vote ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    
    public void supprimerVote( int id_user) {
        
         try {
            String requete = "DELETE FROM `vote` where id_user=" +id_user;
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
          
            pst.executeUpdate();
            System.out.println("Vote supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

   
    public void updateVote(int id_user,int id_vote,int vote) {
        
        try {
            String requete = "UPDATE `vote` SET vote=? WHERE id_vote='" +id_vote+ "'AND id_user='" + id_user + "'" ;
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1,vote);
           /* pst.setInt(2,id_user);*/
            pst.executeUpdate();
            System.out.println("Vote modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }

    public int CalculerTotal(int idd) {
        int total = 0;
        // int idd = m.getId_match();
        String requete = "select count(*) from `vote`  where id_match = " + idd;

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
            ex.getMessage();
        }
        return total;
    }

    public float CalculerVote(int idd) {
        int sum = 0;
        //int idd = m.getId_match();
        System.out.println(idd);
        float vote = 0;
        int total = CalculerTotal(idd);
        String chaine;
        String requete = "select sum(vote) from `vote`  where id_match = " + idd;

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
                    vote = (float) sum / total;
                }

            }

        } catch (SQLException ex) {
            System.out.println("ex.getMessage()");
        }

        return vote;
    }

}
