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
public class Entrainement {
    
    private int id_entrainement;
    private Date date_entrainement;
    private int duree;
    private int id_coach;
    private int id_terrain;
    private int id_joueur;
    
    
    
    
    public Entrainement()
    {}
    
    
    public Entrainement(int id_entrainement,Date date_entrainement,int duree,int id_coach,int id_terrain,int id_joueur)
    {
    
        this.id_entrainement=id_entrainement;
        this.date_entrainement=date_entrainement;
        this.duree=duree;
        this.id_coach=id_coach;
        this.id_terrain=id_terrain;
        this.id_joueur=id_joueur;
        
    }

    public Date getDate_entrainement() {
        return date_entrainement;
    }

    public int getDuree() {
        return duree;
    }

    public int getId_coach() {
        return id_coach;
    }

    public int getId_entrainement() {
        return id_entrainement;
    }

    public int getId_joueur() {
        return id_joueur;
    }

    public int getId_terrain() {
        return id_terrain;
    }

    
    
  @Override
    public String toString() {
        return "Entrainement Details==>" + "id_entrainement:  "+id_entrainement+"   Date:  " + date_entrainement + "    duree:  " + duree+" minutes  "+"   Id_coach:  "+id_coach + "   id_terrain:  "+id_terrain+"    Id_joueur:  "+id_joueur+'}';
    }

    
    
    public void setDate_entrainement(Date date_entrainement) {
        this.date_entrainement = date_entrainement;
    }

    public void setDuree(int duree) {
        this.duree = duree;
    }

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    public void setId_entrainement(int id_entrainement) {
        this.id_entrainement = id_entrainement;
    }

    public void setId_joueur(int id_joueur) {
        this.id_joueur = id_joueur;
    }

    public void setId_terrain(int id_terrain) {
        this.id_terrain = id_terrain;
    }
    
    
    
    
    
    
    
    
    
    
}
