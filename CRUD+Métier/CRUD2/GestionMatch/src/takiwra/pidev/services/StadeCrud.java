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
import java.util.logging.Level;
import java.util.logging.Logger;
import takwira.pidev.entities.Stade;
import takwira.pidev.interfaces.IStade;
import takwira.pidev.tools.MyConnection;

/**
 *
 * @author esprit
 */
public class StadeCrud implements IStade<Stade> {

    @Override
    public void ajouterStade(Stade t) {
        try {
            String requete
                    = "INSERT INTO `stade` (`id_stade`, `nom_stade`, `ville`, `adresse`, `capacite`, `dispo`) VALUES (?, ?, ?, ?,?,?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setInt(1, t.getId_stade());
            pst.setString(2, t.getNom_stade());

            pst.setString(3, t.getVille());
            pst.setString(4, t.getAdresse());
            pst.setInt(5, t.getCapacite());
            pst.setInt(6, t.getDispo());

            pst.executeUpdate();
            System.out.println("Stade ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void supprimerStade(Stade t) {
        try {
            String requete = "DELETE FROM `stade` where nom_stade=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_stade());
            pst.executeUpdate();
            System.out.println("Stade supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void updateStade(Stade t) {
        try {
            String requete = "UPDATE `stade` SET dispo=? WHERE id_stade=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getDispo());
            pst.setInt(2, t.getId_stade());
            pst.executeUpdate();
            System.out.println("Stade modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<Stade> displayStades() {
        List<Stade> ListStade = new ArrayList<>();
        try {

            String requete = "SELECT * FROM `stade` WHERE 1";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                Stade p = new Stade();

                p.setId_stade(rs.getInt("id_stade"));
                p.setNom_stade(rs.getString("nom_stade"));
                p.setVille(rs.getString("ville"));
                p.setAdresse(rs.getString("adresse"));
                p.setCapacite(rs.getInt("capacite"));
                p.setDispo(rs.getInt("dispo"));
                ListStade.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return ListStade;
    }

    public List<Stade> chercherStadeParVille(String v)
    {
         List<Stade> ListStade = new ArrayList<>();
        try {

            String requete = "SELECT * FROM `stade` WHERE ville='"+v+"'";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = st.executeQuery(requete);
            while (rs.next()) {
                Stade p = new Stade();

                p.setId_stade(rs.getInt("id_stade"));
                p.setNom_stade(rs.getString("nom_stade"));
                p.setVille(rs.getString("ville"));
                p.setAdresse(rs.getString("adresse"));
                p.setCapacite(rs.getInt("capacite"));
                p.setDispo(rs.getInt("dispo"));
                ListStade.add(p);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return ListStade;
    }
    
    public int OccurenceStade(Stade std)
    {
        int total = 0;
        int idd = std.getId_stade();
        
        String requete = "select count(*) from `match`  where id_stade = " + idd;

        Statement st;
        try {
            st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            if (rs.next()) {
                String chaine = String.valueOf(rs.getString(1));
                total = Integer.parseInt(chaine);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return total;
    
    }

}
