/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.entities;

import java.sql.Date;

/**
 *
 * @author pc_dell
 */
public class Coach {
    
    private int id_coach;
    private String nom_coach;
    private String prenom_coach;
    private Date date_naissance;
    private String grade;
    private Date date_fin_contrat;
    private String adresse_mail;
    private float salaire;
    
        public Coach() {
    }
        
        
    
        public Coach(int id_coach,String nom_coach,String prenom_coach,Date date_naissance,String grade,Date date_fin_contrat,String adresse_mail,float salaire)
        {
        this.id_coach=id_coach;
        this.nom_coach=nom_coach;
        this.prenom_coach=prenom_coach;
        this.date_naissance=date_naissance;
        this.grade=grade;
        this.date_fin_contrat=date_fin_contrat;
        this.adresse_mail=adresse_mail;
        this.salaire=salaire;
        
        }

    public Coach(int id_coach, String nom_coach, String prenom_coach, String date_naissance, String grade, String date_fin_contrat, String mail, float salaire) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   

 

    public int getId_coach() {
        return id_coach;
    }

    public String getNom_coach() {
        return nom_coach;
    }

    public String getPrenom_coach() {
        return prenom_coach;
    }

    public Date getDate_naissance() {
        return date_naissance;
    }


    

    public Date getDate_fin_contrat() {
        return date_fin_contrat;
    }

    public String getGrade() {
        return grade;
    }

    public String getAdresse_mail() {
        return adresse_mail;
    }

    public float getSalaire() {
        return salaire;
    }
    
    
    
    
    

    @Override
    public String toString() {
        return "Coach Details==>" + "id_coach:  "+id_coach+", nom:  " + nom_coach + ", prenom:  " + prenom_coach+"Age_coach:  "+date_naissance + "Grade:  "+grade+"Date_fin_contrat:  "+date_fin_contrat+ "Adresse mail "+adresse_mail+ "  Salaire"+salaire+ '}'+"\n";
    }

    public void setDate_fin_contrat(Date date_fin_contrat) {
        this.date_fin_contrat = date_fin_contrat;
    }

    public void setDate_naissance(Date date_naissance) {
        this.date_naissance = date_naissance;
    }


    

    public void setGrade(String grade) {
        this.grade = grade;
    }

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    public void setNom_coach(String nom_coach) {
        this.nom_coach = nom_coach;
    }

    public void setPrenom_coach(String prenom_coach) {
        this.prenom_coach = prenom_coach;
    }

    public void setAdresse_mail(String adresse_mail) {
        this.adresse_mail = adresse_mail;
    }

    public void setSalaire(float salaire) {
        this.salaire = salaire;
    
}
}