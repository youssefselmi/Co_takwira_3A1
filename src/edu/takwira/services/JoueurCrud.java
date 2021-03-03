/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.services;

import edu.takwira.entities.Equipe;
import edu.takwira.entities.Joueur;
import edu.takwira.interfaces.IJoueur;
import edu.takwira.tools.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import static jdk.nashorn.internal.objects.NativeArray.map;

/**  String requete= "INSERT INTO joueur( nom_joueur,prenom_joueur,date_naissance,numero,adresse_mail,ville,id_equipe)"
                    + "VALUES (?,?)";
 *
 * @author pc_dell
 */
public class JoueurCrud implements IJoueur<Joueur> {

 
    @Override
    public List<Joueur> afficherJoueur(Equipe e) {
             
              
          List<Joueur> joueurList=new ArrayList<>();   
        try {
            System.out.print("Le nom de l'equipe est"+"    "+e.getNom_equipe()+"\n");
            
            String requete = "SELECT * FROM joueur where id_equipe="+e.getId_equipe()+"";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Joueur j = new Joueur();
                j.setId_joueur(rs.getInt(1));
                j.setNom_joueur(rs.getString(2));
                j.setPrenom_joueur(rs.getString(3));
            j.setDate_naissance(rs.getDate(4));
            j.setNumero(rs.getInt(5));
                        j.setAdresse_mail(rs.getString(6));

            j.setVille(rs.getString(7));
            j.setId_equipe(rs.getInt(8));
           
         
                joueurList.add(j);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return joueurList;
    }

    @Override
    public void ajouterJoueur(Joueur t) {
        
           
        
        
 try {
     int n=0;
         String requete2="SELECT * from joueur where id_equipe = "+t.getId_equipe()+"";
Statement st2 = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs2 =  st2.executeQuery(requete2);
     while(rs2.next())
     {
      n++;   
     }
     
     if( n < 11)
     {
            String requete= "INSERT INTO joueur( nom_joueur,prenom_joueur,date_naissance,numero,adresse_mail,ville,id_equipe)"
                    + "VALUES (?,?,?,?,?,?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_joueur());
            pst.setString(2, t.getPrenom_joueur());
            pst.setDate(3, t.getDate_naissance());
            pst.setInt(4, t.getNumero());
            pst.setString(5, t.getAdresse_mail());
            pst.setString(6, t.getVille());
            pst.setInt(7, t.getId_equipe());
            
            pst.executeUpdate();
            System.out.println("Joueur inserée");
     }
            else 
            {
                    
               System.out.println("Le nombre maximale a été atteint !!");
                    }
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }     }

    @Override
    public void supprimerJoueur(Joueur t) {
try {
            String requete = "DELETE FROM joueur where id_joueur=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getId_joueur());
            pst.executeUpdate();
            System.out.println("joueur supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }    }

    @Override
    public void updateJoueur(Joueur t) {
          try {
            String requete = "UPDATE joueur SET nom_joueur=?, prenom_joueur=?, age_joueur=?, numero=?, adresse_mail=?, ville=?, id_equipe=?  WHERE id_joueur=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_joueur());
           pst.setString(2, t.getPrenom_joueur());
           pst.setDate(3, t.getDate_naissance());
           pst.setInt(4, t.getNumero());
           pst.setString(5, t.getAdresse_mail());
           pst.setString(6, t.getVille());
           pst.setInt(7,t.getId_equipe());
           pst.setInt(8,t.getId_joueur());




            pst.executeUpdate();
            System.out.println("Joueur modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }
/* public List afficherEquipeJoueur() {
         List<Joueur> joueurEquipe= new ArrayList<>();
        try {
            String requete = "SELECT joueur.nom_joueur, joueur.prenom_joueur FROM joueur,equipe WHERE equipe.id_equipe = joueur.id_equipe";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Joueur j = new Joueur();
              //  Equipe e = new Equipe();
                j.setNom_joueur(rs.getString(1));
               j.setPrenom_joueur(rs.getString(2));


               // e.setId_equipe(rs.getInt(3));
                j.setId_equipe(rs.getInt(4));


               //j.setId_joueur(rs.getInt(1));
                  // e.setNom_equipe(rs.getString(4));

                joueurEquipe.add(j);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return joueurEquipe;
    }
    */
       public List afficheragejoueur() {
              List<Joueur> joueurList = new ArrayList<>();
        try {
            String requete = "SELECT nom_joueur,prenom_joueur, EXTRACT(YEAR FROM SYSDATE())- EXTRACT(YEAR FROM date_naissance) FROM joueur" ;
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
             while(rs.next()){
                Joueur j = new Joueur();
                //j.setId_joueur(rs.getInt(1));
                j.setNom_joueur(rs.getString(1));
                j.setPrenom_joueur(rs.getString(2));
           
                 j.setAge_joueur(rs.getFloat(3));

           
                joueurList.add(j);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return joueurList;
}
    /* public List afficherJoueurequipe() {
              List<Joueur> joueurList = new ArrayList<>();
        try {
            String requete = "SELECT joueur.nom_joueur,joueur.prenom_joueur,equipe.nom_equipe FROM joueur INNER JOIN equipe ON (joueur.id_equipe=equipe.id_e)";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Joueur j = new Joueur();
               // j.setId_joueur(rs.getInt(1));
                j.setNom_joueur(rs.getString(1));
                j.setPrenom_joueur(rs.getString(2));
             j.setNom_equipe(rs.getString(3));
                joueurList.add(j);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return joueurList;
    }  */
       
}