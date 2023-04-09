/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.services;

import cotakwira.entities.Avis;
import cotakwira.interfraces.IAvis;
import cotakwira.tools.MyConnection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Types;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author yassin
 */
public class CrudAvis implements IAvis<Avis> {

    @Override
    public void ajouterAvis(Avis t) {
        try {
            String requete = "INSERT INTO avis(idAvis,idCoach,idJoueur,rate,description)"
                    + "VALUES (?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getidAvis());
            pst.setInt(2, t.getidCoach());
            pst.setInt(3, t.getidJoueur());
            pst.setString(4, t.getRate());
            pst.setString(5, t.getDescription());
            pst.executeUpdate();
            System.out.println("Avis inserée");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public void supprimerAvis(Avis t) {
        try {
            String requete = "DELETE FROM avis where idAvis=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getidAvis());
            pst.executeUpdate();
            System.out.println("Avis supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    public void updateAvis(Avis t) {
        try {
            String requete = "UPDATE avis SET idCoach=?,idJoueur=?,rate=?,description=? WHERE idAvis=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getidCoach());
            pst.setInt(2, t.getidJoueur());
            pst.setString(3, t.getRate());
            pst.setString(4, t.getDescription());
            pst.setInt(5, t.getidAvis());
            pst.executeUpdate();
            System.out.println("Avis modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<Avis> displayAvis() {
        List<Avis> AvisList = new ArrayList<>();
        try {
            String requete = "SELECT * FROM avis";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                Avis p = new Avis();
                p.setidAvis(rs.getInt(1));
                p.setidCoach(rs.getInt(2));
                    p.setidJoueur(rs.getInt(3));
                p.setRate(rs.getString(4));
                p.setDescription(rs.getString(5));
                AvisList.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return AvisList;
    }

}
