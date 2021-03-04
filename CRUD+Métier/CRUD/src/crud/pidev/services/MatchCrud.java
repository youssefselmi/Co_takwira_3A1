/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crud.pidev.services;

import crud.pidev.entities.Match;
import crud.pidev.interfaces.IMatch;
import crud.pidev.tools.MyConnection;
import java.util.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author esprit
 */
public class MatchCrud implements IMatch<Match> {

    @Override
    public void ajouterMatch(Match t) {

        try {
            String requete
                    = /*"INSERT INTO match  VALUES (?,?,?,?,?)";*/ "INSERT INTO `match` (`id_match`, `id_stade`, `duree`, `date`, `score`, `nb_spectateur`) VALUES (?, ?, ?, ?,?,?)";
            //   "INSERT INTO match (id_match, id_stade, duree, date, score, nb_spectateur) VALUES (?, ?, ?, ?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            java.sql.Date sqlDate = new java.sql.Date(t.getDate().getTime());

            pst.setInt(1, t.getIdMacth());
            pst.setInt(2, t.getIdStade());

            pst.setInt(3, t.getDuree());
            pst.setDate(4, sqlDate);
            pst.setString(5, t.getScore());
            pst.setInt(6, t.getNbSpectateur());

            pst.executeUpdate();
            System.out.println("Match ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public void supprimerMatch(Match t) {
        try {
            String requete = "DELETE FROM `match` where id_stade=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getIdStade());
            pst.executeUpdate();
            System.out.println("Match supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public void updateMatch(Match t) {
        try {
            String requete = "UPDATE `match` SET score=? WHERE id_match=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getScore());
            pst.setInt(2, t.getIdMacth());
            pst.executeUpdate();
            System.out.println("Match modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<Match> displayMatchs() {
        List<Match> ListMatchs = new ArrayList<>();
        try {
            // String requete = "SELECT * FROM match ";
            String requete = "SELECT * FROM `match` WHERE 1";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                Match p = new Match();

                p.setIdMatch(rs.getInt("id_match"));
                p.setScore(rs.getString("score"));
                p.setIdStade(rs.getInt("id_stade"));
                p.setDate(rs.getDate("date"));
                p.setDuree(rs.getInt("duree"));
                p.setNbSpectateur(rs.getInt("nb_spectateur"));
                ListMatchs.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return ListMatchs;
    }

    public void TrieMatchParDate() {

        try {

            String requete = "SELECT * FROM `match` ORDER BY `date`";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                System.out.println("Matchs [ id: " + rs.getInt("id_match") + "Score" + rs.getString("score") + " ID Stade "
                        + rs.getInt("id_stade") + "Date" + rs.getDate("date") + "Duree" + rs.getInt("duree") + "Nb Spectateur" + rs.getInt("nb_spectateur") + "]");

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    public float NbJoursRestants(int id) {
        float res= 0;
        try {
            java.util.Date date = new Date();

            String requete = "SELECT * FROM `match` WHERE id_match = " +id;
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);

            java.util.Date dateApres = rs.getDate("date");

            long diff = dateApres.getTime() - date.getTime();

             res = (diff / (1000 * 60 * 60 * 24));
            System.out.println("Nombre de jours restant est: " + res);

            
        }
        catch (SQLException ex) {
            Logger.getLogger(MatchCrud.class.getName()).log(Level.SEVERE, null, ex);
        }
return res;
    }
}
