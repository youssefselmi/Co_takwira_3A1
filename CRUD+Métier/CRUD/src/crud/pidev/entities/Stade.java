/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crud.pidev.entities;

/**
 *
 * @author esprit
 */
public class Stade {

    private int id_stade;
    private String nom_stade;
    private String ville;
    private String adresse;
    private int capacite;
    private int dispo;

    public Stade() {

    }

    public Stade( String n, String v, String a, int c, int d) {
        //this.id_stade = id;
        this.nom_stade = n;
        this.ville = v;
        this.adresse = a;
        this.capacite = c;
        this.dispo = d;

    }

    /**
     * ********************* Les getteurs ********************
     */
    public int getId_stade() {
        return id_stade;
    }

    public String getNom_stade() {
        return nom_stade;
    }

    public String getVille() {
        return ville;
    }

    public String getAdresse() {
        return adresse;
    }

    public int getCapacite() {
        return capacite;
    }

    public int getDispo() {
        return dispo;
    }

    /**
     * *********************** les setteurs ***************
     */
    public void setId_stade(int id_stade) {
        this.id_stade = id_stade;
    }

    public void setNom_stade(String nom_stade) {
        this.nom_stade = nom_stade;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setCapacite(int capacite) {
        this.capacite = capacite;
    }

    public void setDispo(int dispo) {
        this.dispo = dispo;
    }

    public String toString() {

        return ""
                + "ID Stade" + this.id_stade
                + "Nom Stade" + this.nom_stade
                + "Ville" + this.ville
                + "Adresse" + this.adresse
                + "Capacite" + this.capacite
                + "Disponibilite" + this.dispo;
        
    }

}
