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
import java.util.List;

/**
 *
 * @author yassin
 */
public class CrudReclamation implements IReclamation<Reclamation> {

    @Override
    public void ajouterReclamation(Reclamation t) {
        try {
            String requete = "INSERT INTO reclamation(idRec,idJoueur,SujetRec,DescriptionRec,PrioriteRec,StatusRec,DateRec,DateTraitement,idCoach)"
                    + "VALUES (?,?,?,?,?,?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            ///////////////////////controle valeur idJoueur/////
            String requetee = "SELECT * FROM joueur WHERE id_joueur = '" + t.getIdJoueur() + "'";
            Statement pstt = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = pstt.executeQuery(requetee);
            while (rs.next()) {
                pst.setInt(2, rs.getInt(1));   
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
            
            if((t.getSujetRec()).equals("Stade"))
            {
             pst.setString(5,"Low");   
            }
            if((t.getSujetRec()).equals("Coach"))
            {
             pst.setString(5,"Medium");   
            }
            if((t.getSujetRec()).equals("Application"))
            {
             pst.setString(5,"High");   
            }
            
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

    }

    @Override
    public void updateReclamation(Reclamation t) {

    }

    @Override
    public List<Reclamation> displayReclamation() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
