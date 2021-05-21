/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.Models;

/**
 *
 * @author USER-PC
 */
public class Equipe {
    
    
    private int id_e;
    private String nom_equipe;
    private int id_coach;
    private String nom_coach;
    private String prenom_coach;

    public String getNom_coach() {
        return nom_coach;
    }

    public void setNom_coach(String nom_coach) {
        this.nom_coach = nom_coach;
    }

    public String getPrenom_coach() {
        return prenom_coach;
    }

    public void setPrenom_coach(String prenom_coach) {
        this.prenom_coach = prenom_coach;
    }

    public Equipe(int id_e, String nom_equipe, int id_coach) {
        this.id_e = id_e;
        this.nom_equipe = nom_equipe;
        this.id_coach = id_coach;
    }

    public Equipe(String nom_equipe, int id_coach) {
        this.nom_equipe = nom_equipe;
        this.id_coach = id_coach;
    }

    public Equipe() {
    }
    

    public int getId_e() {
        return id_e;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

    public int getId_coach() {
        return id_coach;
    }

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    @Override
    public String toString() {
        return "Equipe{" + "id_e=" + id_e + ", nom_equipe=" + nom_equipe + ", id_coach=" + id_coach + ", nom_coach=" + nom_coach + ", prenom_coach=" + prenom_coach + '}';
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
