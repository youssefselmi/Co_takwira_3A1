/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.entities;

import java.util.Objects;

/**
 *
 * @author pc_dell
 */
public class Equipe  {
    private int id_equipe;
    private String nom_equipe;
   // int nb_joueurs;
    private int id_coach;

    public Equipe() {
    }
    

    public Equipe(int id_equipe, String nom_equipe, int id_coach) {
       this.id_equipe = id_equipe;
        this.nom_equipe = nom_equipe;
       //this.nb_joueurs = nb_joueurs;
        this.id_coach = id_coach;
    }

    public int getId_equipe() {
        return id_equipe;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

   /* public int getNb_joueurs() {
        return nb_joueurs;
    }*/

    public int getId_coach() {
        return id_coach;
    }

    public void setId_equipe(int id_equipe) {
        this.id_equipe = id_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

 /*   public void setNb_joueurs(int nb_joueurs) {
        this.nb_joueurs = nb_joueurs;
    }*/

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    @Override
    public String toString() {
        return "Equipe{" + "id_equipe=" + id_equipe + ", nom_equipe=" + nom_equipe + ", id_coach=" + id_coach + '}';
    }

    @Override
    public int hashCode() {
        int hash = 5;
        hash = 29 * hash + this.id_equipe;
        hash = 29 * hash + Objects.hashCode(this.nom_equipe);
        hash = 29 * hash + this.id_coach;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Equipe other = (Equipe) obj;
        return true;
    }
    
    
}
