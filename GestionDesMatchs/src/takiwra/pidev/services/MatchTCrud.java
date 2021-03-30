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
import java.util.ArrayList;
import java.util.List;
import takwira.pidev.entities.Match;
import takwira.pidev.entities.MatchTermine;
import takwira.pidev.interfaces.IMatchTermine;
import takwira.pidev.tools.MyConnection;

/**
 *
 * @author esprit
 */
public class MatchTCrud implements IMatchTermine<MatchTermine> {

    @Override
    public void ajouterMatchTermine(MatchTermine t) {

        try {

            String requete = "INSERT INTO `match_termine`(`id_match`, `score`, `duree`, `image`) "
                    + " VALUES (?, ?, ?, ?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setInt(1, t.getId_match());
            pst.setString(2, t.getScore());
            pst.setInt(3, t.getDuree());
            pst.setString(4, t.getImage());

            pst.executeUpdate();
            System.out.println("Match terminé Ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    // @Override
    public void supprimerMatchTermine(int id) {

        try {
            String requete = "DELETE FROM `match` where id_match=" + id;
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.executeUpdate();
            System.out.println("Match supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void updateMatchTermine(MatchTermine t) {

        try {

            String requete = "  UPDATE `match_termine` SET `id_match`=?,`score`=?,`duree`=?,`image`=?";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setInt(1, t.getId_match());
            pst.setString(2,t.getScore());
            pst.setInt(3, t.getDuree());

            pst.setString(4,t.getImage());

            pst.executeUpdate();
            System.out.println("Match Terminé modifiée");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<MatchTermine> displayMatchs() {
        List<MatchTermine> ListMatchs = new ArrayList<>();
        try {

            String requete = "SELECT * FROM `match_termine` WHERE 1";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                MatchTermine p = new MatchTermine();

                p.setId_match(rs.getInt("id_match"));
                p.setScore(rs.getString("score"));
                p.setDuree(rs.getInt("duree"));
               p.setImage(rs.getString("image"));
               
               ListMatchs.add(p);
            
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return ListMatchs;

    }
    
     public MatchTermine getMatchParId(int idd) {
        MatchTermine p = new MatchTermine();
        try {

            String requete = "SELECT * FROM `match_termine` WHERE id_match = " + idd;
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {

                p.setId_match(rs.getInt("id_match"));
                p.setScore(rs.getString("score"));
                p.setDuree(rs.getInt("duree"));
                p.setImage(rs.getString("image"));
               

            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return p;

    }


}
