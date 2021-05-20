/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.entities;

/**
 *
 * @author esprit
 */
public class Stade {
    private int idStade;
    private int idUser;
    private String nomStade;
    private String ville;
    private String adresse;
    private int capacite;

    public Stade() {
    }

    public Stade(int idStade, String nomStade) {
        this.idStade = idStade;
        this.nomStade = nomStade;
    }

    public Stade(int idUser, String nomStade, String ville, String adresse, int capacite) {
        this.idUser = idUser;
        this.nomStade = nomStade;
        this.ville = ville;
        this.adresse = adresse;
        this.capacite = capacite;
    }

    public Stade(int idStade, int idUser, String nomStade, String ville, String adresse, int capacite) {
        this.idStade = idStade;
        this.idUser = idUser;
        this.nomStade = nomStade;
        this.ville = ville;
        this.adresse = adresse;
        this.capacite = capacite;
    }

    public int getIdStade() {
        return idStade;
    }

    public void setIdStade(int idStade) {
        this.idStade = idStade;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    public String getNomStade() {
        return nomStade;
    }

    public void setNomStade(String nomStade) {
        this.nomStade = nomStade;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public int getCapacite() {
        return capacite;
    }

    public void setCapacite(int capacite) {
        this.capacite = capacite;
    }

    @Override
    public String toString() {
        return "Stade{" + "idStade=" + idStade + ", idUser=" + idUser + ", nomStade=" + nomStade + ", ville=" + ville + ", adresse=" + adresse + ", capacite=" + capacite + '}';
    }
    
    
    
}
