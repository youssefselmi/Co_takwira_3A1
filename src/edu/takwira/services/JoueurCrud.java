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
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import static jdk.nashorn.internal.objects.NativeArray.map;

/**  String requete= "INSERT INTO joueur( nom_joueur,prenom_joueur,date_naissance,numero,adresse_mail,ville,id_equipe)"
                    + "VALUES (?,?)";
 *
 * @author pc_dell
 */
public class JoueurCrud implements IJoueur<Joueur> {
    
  /*  @Override
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
            j.setDateNaissance(rs.getDate(4));
           j.setAge_joueur(rs.getInt(5));

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
    }*/

 
    //@Override
    public List afficherJoueur(int id, String categorie) {
              List<Joueur> joueurList = new ArrayList<>();

        try {
            String requete = "SELECT * FROM joueur where (id_equipe='"+id+"' and categorie='"+categorie+"')";
            
            
            System.out.println(requete);
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Joueur j = new Joueur();
                
                                ImageView img = new ImageView();

           String ImageUrl = "http://localhost/images/";
     
            Image image = new Image(ImageUrl + j.getImage());
        
            img.setImage(image);
                j.setId_joueur(rs.getInt(1));
                j.setNom_joueur(rs.getString(2));
                j.setPrenom_joueur(rs.getString(3));
               j.setDateNaissance(rs.getDate(4));
                        j.setAge_joueur(rs.getInt(5));


           
            j.setNumero(rs.getInt(6));
                        j.setAdresse_mail(rs.getString(7));


            j.setVille(rs.getString(8));
                        j.setCategorie(rs.getString(9));

           j.setPosition(rs.getString(10));

            j.setId_equipe(rs.getInt(11));
            j.setImage(rs.getString(12));
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
            String requete= "INSERT INTO joueur( nom_joueur,prenom_joueur,date_naissance,age_joueur,numero,adresse_mail,ville,categorie,position,id_equipe,image,password)"
                    + "VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_joueur());
            pst.setString(2, t.getPrenom_joueur());
            pst.setDate(3, t.getDateNaissance());
             pst.setInt(4, t.getAge_joueur());

            pst.setInt(5, t.getNumero());
            pst.setString(6, t.getAdresse_mail());
            pst.setString(7, t.getVille());
             pst.setString(8, t.getCategorie());
             pst.setString(9, t.getPosition());


            pst.setInt(10, t.getId_equipe());
            pst.setString(11, t.getImage());
            pst.setString(12, t.getPassword());
           // pst.setString(12, t.getPassword());
            
            pst.executeUpdate();
            System.out.println("Joueur inserée");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }     }

    @Override
    public void supprimerJoueur(int idj) {
try {
            String requete = "DELETE FROM joueur where id_joueur="+idj+"";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
           // pst.setInt(1, t.getId_joueur());
            pst.executeUpdate();
            System.out.println("joueur supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }    }

    @Override
    public void updateJoueur(int idj,Joueur t) {
          try {
            String requete = "UPDATE joueur SET nom_joueur=?, prenom_joueur=?, age_joueur=?, numero=?, adresse_mail=?, ville=?, id_equipe=?  WHERE id_joueur="+idj+"";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, t.getNom_joueur());
           pst.setString(2, t.getPrenom_joueur());
           pst.setInt(3, t.getAge_joueur());
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
    public void miseajour()
    {
       
        try {
            String requete = "SELECT * FROM joueur";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next())
            {
                Date datenai=rs.getDate("date_naissance");
                
        Calendar cal = Calendar.getInstance();
cal.setTime(datenai);



 Calendar now = Calendar.getInstance();
Calendar dob = Calendar.getInstance();
int year_date_naissence = cal.get(cal.YEAR);
int month_date_naissence = cal.get(cal.MONTH);
int day_date_naissence = cal.get(cal.DAY_OF_MONTH);
   
dob.set(year_date_naissence, month_date_naissence, day_date_naissence);
if (dob.after(now)) {
  throw new IllegalArgumentException("Can't be born in the future");
}
int year1 = now.get(Calendar.YEAR);
int year2 = dob.get(Calendar.YEAR);
int agenew = year1 - year2;
int month1 = now.get(Calendar.MONTH);
int month2 = dob.get(Calendar.MONTH);
if (month2 > month1) {
  agenew--;
} else if (month1 == month2) {
  int day1 = now.get(Calendar.DAY_OF_MONTH);
  int day2 = dob.get(Calendar.DAY_OF_MONTH);
  if (day2 < day1) {
    agenew--;
  }
  
}
if (agenew > rs.getInt("age_joueur"))
{
    
            String requete1 = "UPDATE joueur SET age_joueur='"+agenew+"' where id_joueur= '"+rs.getInt("id_joueur")+"' ";
            System.out.println(requete1);
            PreparedStatement pst = Connection.getInstance().getCnx().prepareStatement(requete1);
                        pst.executeUpdate();

}

if(rs.getString("categorie").equals("junior"))
{
    if(agenew>18)
    {
        
            String requete2 = "UPDATE joueur SET categorie='sunior' where id_joueur= '"+rs.getInt("id_joueur")+"'  ";
            System.out.println(requete2);
            PreparedStatement pst = Connection.getInstance().getCnx().prepareStatement(requete2);
                        pst.executeUpdate();

    }
}


           
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }


 public List afficherJoueur1() {
              List<Joueur> joueurList = new ArrayList<>();

        try {
            String requete = "SELECT * FROM joueur ";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Joueur j = new Joueur();
                
                                ImageView img = new ImageView();

           String ImageUrl = "http://localhost/images/";
     
            Image image = new Image(ImageUrl + j.getImage());
        
            img.setImage(image);
                j.setId_joueur(rs.getInt(1));
                j.setNom_joueur(rs.getString(2));
                j.setPrenom_joueur(rs.getString(3));
               j.setDateNaissance(rs.getDate(4));
                        j.setAge_joueur(rs.getInt(5));


           
            j.setNumero(rs.getInt(6));
                        j.setAdresse_mail(rs.getString(7));


            j.setVille(rs.getString(8));
                        j.setCategorie(rs.getString(9));

           j.setPosition(rs.getString(10));

            j.setId_equipe(rs.getInt(11));
            j.setImage(rs.getString(12));
                joueurList.add(j);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return joueurList;
    }
        


/*if (rs.get('cat') != 's')
if (agenew > 18)
{
	update cat
}

	
}




-> 
int agenew = ?


*/
       public int recupereridEquipe(String nom_equipe)
      {
          int id=0;
                   String req="select *  from equipe where nom_equipe = '"+nom_equipe+"'";

           try {
          
           
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(req);
            
     while(rs.next())
     {
            id=rs.getInt(1);
     }
           }
          catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           return id;
      }
 public String recuperernomEquipe(int id_equipe)
      {
          String nom="";
                   String req="select *  from equipe where id_e = '"+id_equipe+"'";

           try {
          
           
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(req);
            
     while(rs.next())
     {
            nom=rs.getString(2);
     }
           }
          catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           return nom;
      }
public List recupererpositionEquipe(int id_equipe)
      {
          List<String> positionjoueur=new ArrayList<>();
         String pos="";
                   String req="select *  from joueur where id_equipe = '"+id_equipe+"'";

           try {
          
           
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(req);
            
     while(rs.next())
     {
            pos=rs.getString(10);
     }
     positionjoueur.add(pos);
     
           }
          catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           return positionjoueur;
      }


    }

