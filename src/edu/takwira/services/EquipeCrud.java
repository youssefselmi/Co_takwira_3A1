/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.services;

import edu.takwira.entities.Equipe;
import java.util.List;
import edu.takwira.interfaces.IEquipe;
import edu.takwira.tools.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

/**
 *
 * @author pc_dell
 */
public class EquipeCrud implements IEquipe<Equipe> {

    @Override
    public void ajouterEquipe(Equipe t) {
   
        try {
            String requete= "INSERT INTO equipe(nom_equipe,id_coach)"
                    + "VALUES (?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_equipe());
            pst.setInt(2, t.getId_coach());
            pst.executeUpdate();
            System.out.println("Equipe inserée");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }    

    @Override
    public void supprimerEquipe(Equipe t) {
 try {
            String requete = "DELETE FROM equipe where id_e=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, t.getId_equipe());
            pst.executeUpdate();
            System.out.println("equipe supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            }

    @Override
    public void updateEquipe(Equipe t) {
    try {
            String requete = "UPDATE equipe SET nom_equipe=? WHERE id_e=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_equipe());
            pst.setInt(2, t.getId_equipe());
            pst.executeUpdate();
            System.out.println("Equipe modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }    }

    @Override
    public List<Equipe> afficherEquipe() {
           List<Equipe> equipeList = new ArrayList<>();
        try {
            String requete = "SELECT * FROM equipe";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Equipe e = new Equipe();
                e.setId_equipe(rs.getInt(1));
                e.setNom_equipe(rs.getString(2));
                e.setId_coach(rs.getInt(3));
                equipeList.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return equipeList;
    }
  /*public List<Equipe> getEquipeparID() {
           List<Equipe> equipeList = new ArrayList<>();
        try {
            String requete = "SELECT equipe.id_equipe, nom_equipe, coach.nom_coach FROM equipe, coach WHERE equipe.id_coach = coach.id_coach";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Equipe e = new Equipe();
                e.setId_equipe(rs.getInt(1));
                e.setNom_equipe(rs.getString(2));
                //e.setId_coach(rs.getInt(3));
                equipeList.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return equipeList;
    }*/

   
}
