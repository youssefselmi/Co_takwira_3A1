/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.entities;

/**
 *
 * @author ASUS
 */
public class Joueur {
    
    private int id_joueur;
    private String adresse_mail;
    private int id_equipe;

    public Joueur(int id_joueur, String adresse_mail,int id_equipe) {
        this.id_joueur = id_joueur;
        this.adresse_mail = adresse_mail;
        this.id_equipe = id_equipe;
    }

    public Joueur() {
    }
    
    
    
    
    

    public String getAdresse_mail() {
        return adresse_mail;
    }

    public int getId_joueur() {
        return id_joueur;
    }

    public void setAdresse_mail(String adresse_mail) {
        this.adresse_mail = adresse_mail;
    }

    public void setId_joueur(int id_joueur) {
        this.id_joueur = id_joueur;
    }

    public int getId_equipe() {
        return id_equipe;
    }

    public void setId_equipe(int id_equipe) {
        this.id_equipe = id_equipe;
    }
    
    
    
    
    
    
}
