/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.entities;

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
    private int id_equipe1;
    private int id_equipe2;

    public Match() {

    }

    public Match(/*int id_m, */int id_s,int eq1,int eq2,int duree, Date d, String score, int nb) {

       // this.id_match = id_m;
        this.id_stade = id_s;
        this.date = d;
        this.duree = duree;
        this.score = score;
        this.nb_spectateur = nb;
        this.id_equipe1=eq1;
        this.id_equipe2=eq2;
    }
    public Match(int id_m,String score){

        this.id_match = id_m;
        
        this.score = score;
        
    }
     public Match(int id_s,int duree, Date d, String score, int nb) {

      
        this.id_stade = id_s;
        this.date = d;
        this.duree = duree;
        this.score = score;
        this.nb_spectateur = nb;
       
    }
    /* public Match(int id_m, int id_s,int duree, Date d, String score, int nb) {

        this.id_match = id_m;
        this.id_stade = id_s;
        this.date = d;
        this.duree = duree;
        this.score = score;
        this.nb_spectateur = nb;
    }*/

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

    public int getId_equipe1() {
        return id_equipe1;
    }

    public int getId_equipe2() {
        return id_equipe2;
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

    public void setId_equipe1(int id_equipe1) {
        this.id_equipe1 = id_equipe1;
    }

    public void setId_equipe2(int id_equipe2) {
        this.id_equipe2 = id_equipe2;
    }
    
    /**
     * *************** toString *******************
     */
    
    public String toString()
    {
        return ""
                + "\n Id Match: " + this.getIdMacth()
                + "\nID Stade: " + this.getIdStade()
                + "\n ID Equipe1: "+this.getId_equipe1()
                +"\n Id Equipe2: " + this.getId_equipe2()
                + "\n Duree : " + this.getDate()
                + "\n Date: " + this.getDate()
                + "\n Score: " + this.getScore()
                + "\n NB Spectateur: " + this.getNbSpectateur();
    }

}
