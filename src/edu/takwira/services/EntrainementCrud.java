/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.services;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.interfaces.IEntrainement;
import esu.takwira.tools.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author ASUS
 */
public class EntrainementCrud implements IEntrainement<Entrainement>{

    @Override
    public void ajouterEntrainement(Entrainement e) {

     
        try {
            String requete= "INSERT INTO entrainement(date_entrainement, duree, id_coach, id_terrain, id_joueur)"
                    + "VALUES (?,?,?,?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
          //  pst.setInt(1, c.getId_coach());
            pst.setDate(1, e.getDate_entrainement());
            pst.setInt(2, e.getDuree());
            pst.setInt(3, e.getId_coach());
            pst.setInt(4, e.getId_terrain());
             pst.setInt(5, e.getId_joueur());

            
            
            pst.executeUpdate();
            System.out.println("Entrainement ajouté");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        
        


    }

    
    
    
    
    
    
    
    
    
    
    @Override
    public void supprimerEntrainement(Entrainement e) {


try {
            String requete = "DELETE FROM entrainement where id_entrainement=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, e.getId_entrainement());
            pst.executeUpdate();
            System.out.println("Entrainement supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public void updateEntrainement(Entrainement e) {
        
        
           try {
            String requete = "UPDATE entrainement SET duree=?, date_entrainement=?, id_coach=?, id_terrain=?, id_joueur=? WHERE id_entrainement=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, e.getDuree());
            pst.setDate(2, e.getDate_entrainement());
            pst.setInt(3, e.getId_coach());
            pst.setInt(4, e.getId_terrain());
            pst.setInt(5,e.getId_joueur());
            pst.setInt(6, e.getId_entrainement());


            
            pst.executeUpdate();
            System.out.println("Entrainement modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        
    }
    
    
    
    
    
    
    
    
    
    

    @Override
    public List<Entrainement> afficherEntrainement() {
        
         List<Entrainement> entrainementtab = new ArrayList<>();
        try {
            String requete = "SELECT * FROM entrainement";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Entrainement e = new Entrainement();
                e.setId_entrainement(rs.getInt(1));
                e.setDate_entrainement(rs.getDate(3));
                e.setDuree(rs.getInt(2));
                e.setId_joueur(rs.getInt(6));
                e.setId_coach(rs.getInt(4));
                e.setId_terrain(rs.getInt(5));



                entrainementtab.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return entrainementtab;
    }
        
        
    }

    
    

