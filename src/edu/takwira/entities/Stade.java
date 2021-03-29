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
public class Stade {
    
    private int id_stade;
    private String nom_stade;

    
    public Stade()
    {}
    
    
    public Stade(int id_stade,String nom_stade)
    {
    
       this.id_stade=id_stade;
       this.nom_stade=nom_stade;
        
    }
    
    
    
    public int getId_stade() {
        return id_stade;
    }

    public String getNom_stade() {
        return nom_stade;
    }

    public void setId_stade(int id_stade) {
        this.id_stade = id_stade;
    }

    public void setNom_stade(String nom_stade) {
        this.nom_stade = nom_stade;
    }

    @Override
    public String toString() {
        return "Stade{" + "id_stade=" + id_stade + ", nom_stade=" + nom_stade + '}';
    }
    
    
}
