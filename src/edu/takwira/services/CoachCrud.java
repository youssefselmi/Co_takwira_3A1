/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.services;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.interfaces.ICoach;
import esu.takwira.tools.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors;
import java.util.stream.Stream;

/**
 *
 * @author ASUS
 */
public class CoachCrud implements ICoach<Coach>{

    @Override
    
    
    
    public void ajouterCoach(Coach c) {

try {
            String requete= "INSERT INTO coach(nom_coach, prenom_coach, date_naissance, grade, date_fin_contrat, adresse_mail, salaire)"
                    + "VALUES (?,?,?,?,?,?,?)";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
          //  pst.setInt(1, c.getId_coach());
            pst.setString(1, c.getNom_coach());
            pst.setString(2, c.getPrenom_coach());
            pst.setDate(3, c.getDate_naissance());
            pst.setString(4, c.getGrade());
            pst.setDate(5, (Date) c.getDate_fin_contrat());
            pst.setString(6, c.getAdresse_mail());
            pst.setFloat(7, c.getSalaire());


            
            
            pst.executeUpdate();
            System.out.println("Coach ajouté");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }





    }

    @Override
    public void supprimerCoach(Coach c) {

try {
            String requete = "DELETE FROM coach where id_coach=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setInt(1, c.getId_coach());
            pst.executeUpdate();
            System.out.println("Coach supprimée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }


    }

    @Override
    public void updateCoach(Coach c) {
        
         try {
            String requete = "UPDATE coach SET nom_coach=?, prenom_coach=?, date_naissance=?, grade=?, date_fin_contrat=?, adresse_mail=?, salaire=? WHERE id_coach=?";
            PreparedStatement pst = Connection.getInstance().getCnx()
                    .prepareStatement(requete);
            pst.setString(1, c.getNom_coach());
            pst.setString(2, c.getPrenom_coach());
            pst.setDate(3, c.getDate_naissance());
            pst.setString(4, c.getGrade());
            pst.setDate(5,c.getDate_fin_contrat());
            pst.setString(6, c.getAdresse_mail());
            pst.setFloat(7, c.getSalaire());
            pst.setInt(8, c.getId_coach());



            
            pst.executeUpdate();
            System.out.println("Coach modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    
    
    
    
    @Override
    public List<Coach> afficherCoachs() {



 List<Coach> coachList = new ArrayList<>();
 
 
 
 
 
        try {
            String requete = "SELECT * FROM coach";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Coach c = new Coach();
                c.setId_coach(rs.getInt(1));
                c.setNom_coach(rs.getString(2));
                c.setPrenom_coach(rs.getString(3));
                c.setDate_naissance(rs.getDate(4));
                c.setGrade(rs.getString(5));
                c.setDate_fin_contrat(rs.getDate(6));
                c.setAdresse_mail(rs.getString(7));
                c.setSalaire(rs.getFloat(8));


                coachList.add(c);
                
                
                
                
                
                
                
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return coachList;
    }

   // @Override
    public void supprimerCoach_fin_contrat() {
                
     // Date now = new Date();
   
       long millis = System.currentTimeMillis();
        java.sql.Date date = new java.sql.Date(millis);
        System.err.println(date);
     
        try {
            String requete = "DELETE FROM coach where date_fin_contrat <= '"+date+"' ";
            
            
            
//           PreparedStatement pst = Connection.getInstance().getCnx()
//                    .prepareStatement(requete);
//           pst.setDate(1, date);
//            pst.executeUpdate();
            
             Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            st.executeUpdate(requete);
            
            
            
            
            System.out.println("Coach supprimée");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        
        
        
        
        
        
    }

    

    
    public void miseajourCoach() {
        
   
        
 List<Coach> coachList = new ArrayList<>();
 
        try {
            String requete = "SELECT * FROM coach";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Coach c = new Coach();
                c.setId_coach(rs.getInt(1));
                c.setNom_coach(rs.getString(2));
                c.setPrenom_coach(rs.getString(3));
                c.setDate_naissance(rs.getDate(4));
                c.setGrade(rs.getString(5));
                c.setDate_fin_contrat(rs.getDate(6));
                c.setAdresse_mail(rs.getString(7));
                c.setSalaire(rs.getFloat(8));
                coachList.add(c);
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
//            float x=0;
//                for(int i=0;i<coachList.size();i++)
//                {
//                x=x+coachList.get(i).getSalaire();
//                    
//                }
//        int nbr;
//            nbr = (int) coachList.stream().count();
//        
//        return nbr;
        
//               float average = (float) coachList.stream()
//                
//               .mapToDouble(e->e.getSalaire()).average().getAsDouble();
//        
//		 System.out.println(average);
//                          
//                return average
         
       

String s;
        double salaire_max,salaire_min,total_salaire;
            s = Stream.of(coachList.stream().count(),
                    salaire_max= coachList.stream().mapToDouble(e ->e.getSalaire()).max().getAsDouble(),
                    salaire_min=coachList.stream().mapToDouble(e -> e.getSalaire()).min().getAsDouble(),
                    total_salaire=coachList.stream().mapToDouble(e -> e.getSalaire()).sum())
                    
                    .map(Object::toString) .collect(Collectors.joining("==="));
                                     
            
                         System.out.println(s);

                         for(int i=0;i<coachList.size();i++)
                         {
                         if(coachList.get(i).getSalaire()==salaire_max)
                         
                         {
                             System.out.println("Le coach qui a le salaire le plus elevé est  "+coachList.get(i).getNom_coach()+" "+coachList.get(i).getPrenom_coach()+"====>"+salaire_max+" DT");
                         }
                         
                         if(coachList.get(i).getSalaire()==salaire_min)
                         
                         {
                             System.out.println("Le coach qui a le salaire minimale est  "+coachList.get(i).getNom_coach()+" "+coachList.get(i).getPrenom_coach()+"====>"+salaire_min+" DT");
                         }
                         
                         
                         }
                         System.out.println("Le totale des salire des coach est  "+total_salaire+" DT");
                          
                          
                          
                          
    }

    @Override
    public void supprimerCoach_fin_contrat(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void miseajourCoach(Coach t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
    
    
    public void affichierCoachEntrainement() {



 List<Coach> coachList = new ArrayList<>();
 
        try {
            String requete = "SELECT * FROM coach";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Coach c = new Coach();
                c.setId_coach(rs.getInt(1));
                c.setNom_coach(rs.getString(2));
                c.setPrenom_coach(rs.getString(3));
                c.setDate_naissance(rs.getDate(4));
                c.setGrade(rs.getString(5));
                c.setDate_fin_contrat(rs.getDate(6));
                c.setAdresse_mail(rs.getString(7));
                c.setSalaire(rs.getFloat(8));
                coachList.add(c);
                
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }



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
        
        
        int x;
        
        for(int j=0;j<entrainementtab.size();j++)
        {
        
        
        
        for(int i=0;i<coachList.size();i++)
        {
            if(coachList.get(i).getId_coach()==entrainementtab.get(j).getId_coach())
            
            System.out.println("Le coach"+coachList.get(i).getNom_coach()+"Afefcte a l'entrainement qui se dreoule Date Entrainement"+entrainementtab.get(j).getDate_entrainement()+"\n");
        }
       
        }








    }

  
    
    
    

   
    
    
    
    
    
    
    
    
    

 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
}
