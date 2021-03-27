/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.services;

import cotakwira.entities.Reclamation;
import cotakwira.gui.HomeReclamationController;
import cotakwira.interfraces.IReclamation;
import cotakwira.tools.MyConnection;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Types;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

/**
 *
 * @author yassin
 */
public class CrudReclamation implements IReclamation<Reclamation> {

    @Override
    public boolean ajouterReclamation(Reclamation t) {
        try {
            String requete = "INSERT INTO reclamation(idRec,idJoueur,SujetRec,DescriptionRec,PrioriteRec,StatusRec,DateRec,DateTraitement,NomPrenomCoach,NomJoueur,PrenomJoueur,EmailJoueur,TlJoueur,imgRec)"
                    + "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            ///////////////////////controle valeur idJoueur/////
            String requetee = "SELECT * FROM joueur WHERE id_joueur = '" + t.getIdJoueur() + "'";
            Statement pstt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pstt.executeQuery(requetee);
            System.out.println("id Jouer === " + t.getIdJoueur());
            while (rs.next()) {
                pst.setInt(2, rs.getInt(1));
                pst.setString(10, rs.getString(2));//NomJoueur
                pst.setString(11, rs.getString(3));//PrenomJoueur
                pst.setString(12, rs.getString(7));//EmailJoueur
                pst.setString(13, rs.getString(6));//TlJoueur
                break;
            }
            /////////////////////controle reclam coach///////////////////////
            //pst.setString(9, t.getNomPrenomCoach());
            if ((t.getSujetRec()).equals("Coach") && (!(t.getNomPrenomCoach()).equals("")))//NomPrenomCoach
            {
                pst.setString(9, t.getNomPrenomCoach());
            } else {
                pst.setNull(9, Types.INTEGER);
            }

            pst.setInt(1, t.getIdRec());
            pst.setString(3, t.getSujetRec());
            pst.setString(4, t.getDescriptionRec());
            pst.setString(5, "Medium");
            pst.setString(6, "non traite");
            pst.setString(14, t.getImgRec());

            long millis = System.currentTimeMillis();
            java.sql.Date DateRec = new java.sql.Date(millis);
            pst.setDate(7, DateRec);

            Date DateNonTraiter = null;
            pst.setDate(8, DateNonTraiter);
            //pst.setInt(9, t.getIdCoach());
            pst.executeUpdate();
            System.out.println("Reclamation ajouté!");

            return true;

        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }
        return false;
    }

    @Override
    public boolean supprimerReclamation(int idRec) {
        try {
            String requete = "DELETE FROM reclamation where idRec=" + String.valueOf(idRec) + "";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.execute(requete);
            System.out.println("Reclamation supprimée");

            return true;

        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }
        return false;
    }

//    SujetRec,DescriptionRec,idCoach
    @Override
    public boolean updateReclamation(Reclamation t) {
        try {
            String requete = "UPDATE reclamation SET SujetRec=?,DescriptionRec=?,NomPrenomCoach=?,imgRec=? WHERE idRec=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(5, t.getIdRec());
            pst.setString(2, t.getDescriptionRec());

            pst.setString(1, t.getSujetRec());

            if ((t.getSujetRec()).equals("Coach")) {
                pst.setString(3, t.getNomPrenomCoach());
            } else {
                pst.setNull(3, Types.INTEGER);
            }

            pst.setString(4, t.getImgRec());

            pst.executeUpdate();
            System.out.println("Reclamation modifiée");

            return true;

        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }
        return false;
    }

    @Override
    public List<Reclamation> displayReclamation(Reclamation t) {
        List<Reclamation> ReclamationList = new ArrayList<>();
        try {
            String requete = "SELECT idRec,SujetRec,DescriptionRec,StatusRec,NomPrenomCoach,DateRec,DateTraitement,imgRec FROM reclamation WHERE idJoueur = '" + t.getIdJoueur() + "'  ORDER BY DateRec DESC";
            Statement pst = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = pst.executeQuery(requete);
            while (rs.next()) {
                Reclamation r = new Reclamation();

                ImageView img = new ImageView();

                Image image;

                try {
                    image = new Image(new FileInputStream((rs.getString("imgRec"))));
                    img.setImage(image);
                    img.setPreserveRatio(true);
                    img.setFitWidth(50);
                    img.setFitHeight(50);

                } catch (FileNotFoundException ex) {
                    System.out.println(ex.getMessage());
                }

                r.setIdRec(rs.getInt(1));
                r.setSujetRec(rs.getString(2));
                r.setDescriptionRec(rs.getString(3));
                r.setStatusRec(rs.getString(4));
                r.setDateRec(rs.getDate(6));
                r.setNomPrenomCoach(rs.getString(5));
                r.setDateTraitement(rs.getDate(7));
                //r.setImgRec(rs.getString(8));
                r.setImgReclamation(img);
                ReclamationList.add(r);
            }
        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }
        return ReclamationList;
    }

    @Override
    public void PrioriteRec() {

        int heure;
        int difference = 0;
        long millis = System.currentTimeMillis();
        java.sql.Date Datelyoum = new java.sql.Date(millis);
        int nherleyoum = Integer.valueOf(String.format("%1$td", Datelyoum));

        try {
            String requete = "SELECT idRec,DateRec,PrioriteRec,StatusRec FROM reclamation WHERE PrioriteRec = 'Medium' ";
            Statement pst = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pst.executeQuery(requete);

            while (rs.next()) {

                //heure = rs.getDate(1);
                heure = Integer.valueOf(String.format("%1$td", rs.getDate(2)));
                //System.out.println("day mel base de données "+heure);
                difference = nherleyoum - heure;
                //System.out.println("id = "+rs.getInt(1)+" Day = "+difference+"");
                if (difference >= 7) {
                    String requetee = "UPDATE reclamation SET PrioriteRec=? where idRec = '" + rs.getInt(1) + "' ";
                    PreparedStatement pstt = MyConnection.getInstance().getCnx().prepareStatement(requetee);
                    System.out.println("id = " + rs.getInt(1) + " Day = " + difference + "");
                    pstt.setString(1, "High");

                    pstt.executeUpdate();

                }
            }
        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }

    }

    @Override
    public int contraintModifier24h(int idRec) {
        int heure;
        int difference = 0;
        long millis = System.currentTimeMillis();
        java.sql.Date Datelyoum = new java.sql.Date(millis);

        int nherleyoum = Integer.valueOf(String.format("%1$td", Datelyoum));
        // System.out.println("day lyou me system "+nherleyoum);

        try {
            String requete = "SELECT DateRec FROM reclamation WHERE idRec = " + String.valueOf(idRec) + "";
            Statement pst = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pst.executeQuery(requete);
            while (rs.next()) {
                //heure = rs.getDate(1);
                heure = Integer.valueOf(String.format("%1$td", rs.getDate(1)));
                //System.out.println("day mel base de données "+heure);
                difference = nherleyoum - heure;
                System.out.println("Id " + idRec + " Day = " + difference + " Jour");
            }
        } catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLSTATE: " + ex.getSQLState());
            System.out.println("VnedorError: " + ex.getErrorCode());
        }
        //heure=nherleyoum-heure;
        return difference;
    }



}
