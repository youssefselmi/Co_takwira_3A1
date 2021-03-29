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
public class Equipe {
    
    
     private int id_equipe;
    private String nom_equipe;
    
    
    
    public Equipe()
    {}
    
    
    public Equipe(int id_equipe,String nom_equipe)
    {
    
       this.id_equipe=id_equipe;
       this.nom_equipe=nom_equipe;
        
    }

    public int getId_equipe() {
        return id_equipe;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

    public void setId_equipe(int id_equipe) {
        this.id_equipe = id_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

    @Override
    public String toString() {
        return "Equipe{" + "id_equipe=" + id_equipe + ", nom_equipe=" + nom_equipe + '}';
    }
    
    
    
   
    
    
    
}
