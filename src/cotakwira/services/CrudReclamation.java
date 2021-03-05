/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.services;

import cotakwira.entities.Reclamation;
import cotakwira.interfraces.IReclamation;
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
public class CrudReclamation implements IReclamation<Reclamation> {

    @Override
    public void ajouterReclamation(Reclamation t) {
        try {
            String requete = "INSERT INTO reclamation(idRec,idJoueur,SujetRec,DescriptionRec,PrioriteRec,StatusRec,DateRec,DateTraitement,idCoach,NomJoueur,PrenomJoueur,EmailJoueur,TlJoueur)"
                    + "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            ///////////////////////controle valeur idJoueur/////
            String requetee = "SELECT * FROM joueur WHERE id_joueur = '" + t.getIdJoueur() + "'";
            Statement pstt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pstt.executeQuery(requetee);
            while (rs.next()) {
                pst.setInt(2, rs.getInt(1));  
                pst.setString(10, rs.getString(2));//NomJoueur
                pst.setString(11, rs.getString(3));//PrenomJoueur
                pst.setString(12, rs.getString(6));//EmailJoueur
                pst.setString(13, rs.getString(5));//TlJoueur
                
                break;
            }
            /////////////////////controle reclam coach///////////////////////
            if((t.getSujetRec()).equals("Coach"))
            {
            String requeteee = "SELECT * FROM coach WHERE id_coach = '" + t.getIdCoach()+ "'";
            Statement psttt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rss = psttt.executeQuery(requeteee);
            while (rss.next()) {
                pst.setInt(9,rss.getInt(1));
                break;
            } 
            }
            else
            {
            pst.setNull(9,Types.INTEGER);
            }
                              
            pst.setInt(1, t.getIdRec());
            //pst.setInt(2, t.getIdJoueur());            
            if((t.getSujetRec()).equals("Coach")||(t.getSujetRec()).equals("Stade")||(t.getSujetRec()).equals("Application"))
            {
            pst.setString(3, t.getSujetRec());    
            }
            
            pst.setString(5,"Medium");
            
            pst.setString(4, t.getDescriptionRec());
            pst.setString(6,"non traite"); 
            
            long millis = System.currentTimeMillis();
            java.sql.Date DateRec = new java.sql.Date(millis);            
            pst.setDate(7, DateRec);
            
            Date DateNonTraiter= null;
            pst.setDate(8, DateNonTraiter);                     
            //pst.setInt(9, t.getIdCoach());
            pst.executeUpdate();
            System.out.println("Reclamation ajouté!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void supprimerReclamation(Reclamation t) {
            try {
            String requete = "DELETE FROM reclamation where idRec=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getIdRec());
            pst.executeUpdate();
            System.out.println("Reclamation supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

//    SujetRec,DescriptionRec,idCoach
            
    @Override
    public void updateReclamation(Reclamation t) {
                try {
            String requete = "UPDATE reclamation SET SujetRec=?,DescriptionRec=?,idCoach=? WHERE idRec=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(4, t.getIdRec());
            pst.setString(2, t.getDescriptionRec());
            if((t.getSujetRec()).equals("Coach")||(t.getSujetRec()).equals("Stade")||(t.getSujetRec()).equals("Application"))
            {
            pst.setString(1, t.getSujetRec());
            }
            if((t.getSujetRec()).equals("Coach"))
            {          
            String requeteee = "SELECT * FROM coach WHERE id_coach = '" + t.getIdCoach()+ "'";
            Statement psttt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rss = psttt.executeQuery(requeteee);
            while (rss.next()) {
                pst.setInt(3,rss.getInt(1));
                break;
            }
            }
            else
            {
            pst.setNull(3,Types.INTEGER);
            }
            
            pst.executeUpdate();
            System.out.println("Reclamation modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public List<Reclamation> displayReclamation() {
                List<Reclamation> ReclamationList = new ArrayList<>();
        try {
            String requete = "SELECT idRec,SujetRec,DescriptionRec,StatusRec,DateRec FROM reclamation";
            Statement pst = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs = pst.executeQuery(requete);
            while (rs.next()) {
                Reclamation r = new Reclamation();
                r.setIdRec(rs.getInt(1));
                r.setSujetRec(rs.getString(2));
                r.setDescriptionRec(rs.getString(3));
                r.setDateRec(rs.getDate(5));
                r.setStatusRec(rs.getString(4));
                ReclamationList.add(r);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return ReclamationList;
    }

}
