/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.entities;

import java.sql.Date;

/**
 *
 * @author ASUS
 */
public class All
{
    
    private String nom_coach;
    private String prenom_coach;
   private Date date_entrainement;
   private String nom_equipe;
   private String nom_stade;

    public Date getDate_entrainement() {
        return date_entrainement;
    }

    public String getNom_coach() {
        return nom_coach;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

    public String getNom_stade() {
        return nom_stade;
    }

    public String getPrenom_coach() {
        return prenom_coach;
    }

    public void setDate_entrainement(Date date_entrainement) {
        this.date_entrainement = date_entrainement;
    }

    public void setNom_coach(String nom_coach) {
        this.nom_coach = nom_coach;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

    public void setNom_stade(String nom_stade) {
        this.nom_stade = nom_stade;
    }

    public void setPrenom_coach(String prenom_coach) {
        this.prenom_coach = prenom_coach;
    }


                
                
                
                

    
    
    
}
