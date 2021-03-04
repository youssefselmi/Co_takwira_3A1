/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crud.pidev.entities;

import java.util.Date;

/**
 *
 * @author esprit
 */
public class Match {

    private int id_match;
    private int id_stade;
    private Date date;
    private int duree;
    private String score;
    private int nb_spectateur;

    public Match() {

    }

    public Match(/*int id_m, */int id_s,int duree, Date d, String score, int nb) {

       // this.id_match = id_m;
        this.id_stade = id_s;
        this.date = d;
        this.duree = duree;
        this.score = score;
        this.nb_spectateur = nb;
    }
     public Match(int id_m, int id_s,int duree, Date d, String score, int nb) {

        this.id_match = id_m;
        this.id_stade = id_s;
        this.date = d;
        this.duree = duree;
        this.score = score;
        this.nb_spectateur = nb;
    }

    /**
     * ********* getteur***************
     */
    public int getIdMacth() {
        return id_match;
    }

    public int getIdStade() {
        return id_stade;
    }

    public Date getDate() {
        return date;
    }

    public int getDuree() {
        return duree;
    }

    public String getScore() {
        return score;
    }

    public int getNbSpectateur() {
        return nb_spectateur;
    }

    /**
     * ************** setteur *****************************
     */
    public void setIdMatch(int id) {

        id_match = id;

    }

    public void setIdStade(int idd) {
        id_stade = idd;
    }

    public void setDate(Date d) {
        date = d;
    }

    public void setDuree(int d) {
        duree = d;
    }

    public void setScore(String s) {
        score = s;
    }

    public void setNbSpectateur(int n) {
        nb_spectateur = n;
    }
    /**
     * *************** toString *******************
     */
    
    public String toString()
    {
        return ""
                + " Id Match" + this.getIdMacth()
                + "ID Stade" + this.getIdStade()
                + "Duree" + this.getDate()
                + "Date" + this.getDate()
                + "Score" + this.getScore()
                + "NB Spectateur" + this.getNbSpectateur();
    }

}
