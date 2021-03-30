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
import java.util.logging.Level;
import java.util.logging.Logger;
import takwira.pidev.entities.Match;
import takwira.pidev.entities.User;
import takwira.pidev.tools.MyConnection;

/**
 *
 * @author esprit
 */
public class LoginCrud {

    public void ajouterUser(User t) {

        /*   try {

            String requete = "INSERT INTO `user` (`nom`, `mdp`)"
                    + " VALUES (?, ?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            

            pst.setString(1, t.getName());
            pst.setString(2, t.getMdp());
          

            pst.executeUpdate();
            System.out.println("User ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }*/
        try {

            String requete = "INSERT INTO `user` (`nom`, `mdp`)"
                    + " VALUES (?, ?)";

            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(requete);

            pst.setString(1, t.getName());
            pst.setString(2, t.getMdp());
            pst.executeUpdate();
            System.out.println("User ajouté");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

  public  boolean verifierUser(User u) {
        boolean test;
        test = false;
        try {
            String requete = "SELECT * FROM `user` WHERE nom = '"+u.getName()+"'"+ " and mdp= '"+u.getMdp()+"'" ;
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);
            if (rs.next()) {
                test = true;
            }
        } catch (SQLException ex) {
            Logger.getLogger(LoginCrud.class.getName()).log(Level.SEVERE, null, ex);
        }

        return test;

    }

}
