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
public class Equipe {

    private int idE;
    private String nomEquipe;

    
    private int idCoach;

    @Override
    public String toString() {
        return "Equipe{" + "idE=" + idE + ", nomEquipe=" + nomEquipe + ", idCoach=" + idCoach + '}';
    }
    public Equipe(int idE, String nomEquipe) {
        this.idE = idE;
        this.nomEquipe = nomEquipe;
    }

    public int getIdE() {
        return idE;
    }

    public void setIdE(int idE) {
        this.idE = idE;
    }

    public String getNomEquipe() {
        return nomEquipe;
    }

    public void setNomEquipe(String nomEquipe) {
        this.nomEquipe = nomEquipe;
    }

    public int getIdCoach() {
        return idCoach;
    }

    public void setIdCoach(int idCoach) {
        this.idCoach = idCoach;
    }

    public Equipe(int idE, String nomEquipe, int idCoach) {
        this.idE = idE;
        this.nomEquipe = nomEquipe;
        this.idCoach = idCoach;
    }

    public Equipe() {
    }
}
