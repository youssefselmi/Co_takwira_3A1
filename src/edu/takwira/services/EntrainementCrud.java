/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.services;

import edu.takwira.entities.All;
import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.entities.Equipe;
import edu.takwira.entities.Stade;
import edu.takwira.interfaces.IEntrainement;
import edu.takwira.tools.Connection;
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
            String requete= "INSERT INTO entrainement(date_entrainement, duree, id_coach, id_stade, id_equipe ,nom_equipee ,nom_coache ,nom_stadee ,type ,heure)"
                    + "VALUES (?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
          // pst.setInt(1, e.getId_coach());
            pst.setDate(1, e.getDate_entrainement());
            pst.setInt(2, e.getDuree());
            pst.setInt(3, e.getId_coach());
            pst.setInt(4, e.getId_stade());
             pst.setInt(5, e.getId_equipe());
           pst.setString(6,e.getNom_equipee());
           pst.setString(7,e.getNom_coache());
           pst.setString(8,e.getNom_stadee());
           pst.setString(9,e.getType());
           pst.setString(10, e.getHeure());





            
            
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
            String requete = "UPDATE entrainement SET duree=?, date_entrainement=?, heure=?, id_coach=?, id_stade=?, id_equipe=?, nom_equipee=?, nom_stadee=?, nom_coache=?, type=? WHERE id_entrainement=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, e.getDuree());
            pst.setDate(2, e.getDate_entrainement());
            pst.setString(3, e.getHeure());
            pst.setInt(4, e.getId_coach());
            pst.setInt(5, e.getId_stade());
            pst.setInt(6,e.getId_equipe());
            pst.setString(7, e.getNom_equipee());
            pst.setString(8, e.getNom_stadee());
            pst.setString(9, e.getNom_coache());
            pst.setString(10, e.getType());

             pst.setInt(11, e.getId_entrainement());






            
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
                e.setDuree(rs.getInt(2));

                e.setDate_entrainement(rs.getDate(3));
                e.setHeure(rs.getString(4));

                e.setId_equipe(rs.getInt(7));
                e.setId_coach(rs.getInt(5));
                e.setId_stade(rs.getInt(6));
                 e.setNom_equipee(rs.getString(8));
                 e.setNom_stadee(rs.getString(9));
                 e.setNom_coache(rs.getString(10));
                 e.setType(rs.getString(11));





                entrainementtab.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return entrainementtab;
    }

    @Override
    public List<Entrainement> coachplusentraine() {



 List<Entrainement> entrainementtab = new ArrayList<>();
        try {
            String requete = "SELECT * FROM entrainement \n" +
"WHERE id_coach IN ( \n" +
"SELECT id_coach FROM entrainement  \n" +
"GROUP BY id_coach  \n" +
"HAVING count(id_coach)>1 \n" +
")\n" ;//+
//"ORDER BY id_coach  ";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Entrainement e = new Entrainement();
                e.setId_entrainement(rs.getInt(1));
                e.setDate_entrainement(rs.getDate(3));
                e.setDuree(rs.getInt(2));
                e.setId_equipe(rs.getInt(6));
                e.setId_coach(rs.getInt(4));
                e.setId_stade(rs.getInt(5));



                entrainementtab.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return entrainementtab;
        
    }
        
    
    public List<All> detailentrainement() {

          List<All> coachListt = new ArrayList<>();
 
 
        try {
            String requete = "SELECT nom_coach,prenom_coach,nom_equipe,date_entrainement,nom_stade from coach c join entrainement e  on c.id_coach=e.id_coach  join equipe x   on x.id_equipe=e.id_equipe  join stade s on s.id_stade=e.id_stade";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                All c = new All();
       
                
//                c.setNom_coach(rs.getString(1));
//                
//                c.setPrenom_coach(rs.getString(3));
//                
//                x.setNom_equipe(rs.getString(2));
//                
//                e.setDate_entrainement(rs.getDate(4));
//                
//                s.setNom_stade(rs.getString(5));
//                
//                c.setId_coach(rs.getInt(6));
//               e.setId_coach(rs.getInt(7));
//               
//               x.setId_equipe(rs.getInt(8));
//               e.setId_equipe(rs.getInt(9));
//               
//               s.setId_stade(rs.getInt(10));
//               e.setId_stade(rs.getInt(11));

               
                c.setNom_coach(rs.getString(1));
                
                c.setPrenom_coach(rs.getString(2));
                
                c.setNom_equipe(rs.getString(3));
                
                c.setDate_entrainement(rs.getDate(4));
                
                c.setNom_stade(rs.getString(5));
                coachListt.add(c);
               
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return coachListt;   
            

       
}
    
 
    
}