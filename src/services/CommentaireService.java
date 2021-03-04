/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.Article;
import entities.Commentaire;
import interfaces.ICommentaireService;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import tools.MyConnection;

/**
 *
 * @author khali
 */
public class CommentaireService implements ICommentaireService<Commentaire> {
    
    public void ajouterCommentaire(Commentaire c) {
         try {
            String requete= "INSERT INTO commentaire (contenu,date,id_article,id_joueur)"
                    + "VALUES (?,?,?,?)";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, c.getContenu());
            pst.setDate(2, (Date) c.getDate());
            pst.setInt(3, c.getId_article());
            pst.setInt(4,c.getId_joueur());
            pst.executeUpdate();
            System.out.println("Commentaire inserée");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    
    }
    
    public void supprimerCommentaire(Commentaire c) {
        try {
            String requete = "DELETE FROM commentaire where id=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, c.getId());
            pst.executeUpdate();
            System.out.println("Commentaire supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
    
    @Override
    public void updateCommentaire(Commentaire c) {
        try {
            String requete = "UPDATE commentaire SET contenu=?,date=?,id_article=?,id_joueur=? WHERE id=?";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, c.getContenu());
            pst.setDate(2, (Date) c.getDate());
            pst.setInt(3, c.getId_article());
            pst.setInt(4,c.getId_joueur());
            pst.setInt(5,c.getId());
            pst.executeUpdate();
            System.out.println("Commentaire modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
    @Override
    public List<Commentaire> displaycommentaires() {
         List<Commentaire> commentairesList = new ArrayList<>();
        try {
            String requete = "SELECT * FROM commentaire";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Commentaire c = new Commentaire();
                c.setId(rs.getInt("id"));
                c.setContenu(rs.getString("contenu"));
                c.setDate(rs.getDate("date"));
                c.setId_article(rs.getInt("id_article"));
                c.setId_joueur(rs.getInt("id_joueur"));
                commentairesList.add(c);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return commentairesList;
    }

    
}
