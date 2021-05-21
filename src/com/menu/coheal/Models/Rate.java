/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entites;

import com.codename1.ui.TextField;



/**
 *
 * @author yassin
 */
public class Rate {

    public Rate(int idCoach, String DateRate, String NomPrenomCoach, String NomEquipe,int Rate) {
        this.idCoach = idCoach;
        this.DateRate = DateRate;
        this.Rate = Rate;
        this.NomPrenomCoach = NomPrenomCoach;
        this.NomEquipe = NomEquipe;
    }

    private int idRate, idCoach;
    String DateRate;
    private int Rate;
    private String NomPrenomCoach, NomEquipe;

    public Rate() {
    }

    public Rate(int idRate, int idCoach, int Rate, String NomEquipe) {
        this.idRate = idRate;
        this.idCoach = idCoach;
        this.Rate = Rate;
        this.NomEquipe = NomEquipe;
    }

    
    public Rate(int idRate) {
        this.idRate = idRate;
    }

   

    public int getIdRate() {
        return idRate;
    }

    public void setIdRate(int idRate) {
        this.idRate = idRate;
    }

    public int getIdCoach() {
        return idCoach;
    }

    public void setIdCoach(int idCoach) {
        this.idCoach = idCoach;
    }

    public String getDateRate() {
        return DateRate;
    }

    public void setDateRate(String DateRate) {
        this.DateRate = DateRate;
    }

    public int getRate() {
        return Rate;
    }

    public void setRate(int Rate) {
        this.Rate = Rate;
    }

    public String getNomPrenomCoach() {
        return NomPrenomCoach;
    }

    public void setNomPrenomCoach(String NomPrenomCoach) {
        this.NomPrenomCoach = NomPrenomCoach;
    }

    public String getNomEquipe() {
        return NomEquipe;
    }

    public void setNomEquipe(String NomEquipe) {
        this.NomEquipe = NomEquipe;
    }

    @Override
    public String toString() {
        return "Rate{" + "idRate=" + idRate + ", idCoach=" + idCoach + ", DateRate=" + DateRate + ", Rate=" + Rate + ", NomPrenomCoach=" + NomPrenomCoach + ", NomEquipe=" + NomEquipe + '}';
    }

}