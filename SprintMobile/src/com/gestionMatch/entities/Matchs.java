/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gestionMatch.entities;

import java.util.Date;

/**
 *
 * @author esprit
 */
public class Matchs {
    private int idMatch ;
    private int idStade;
    private int idEquipe1;
    private int idEquipe2;
    private Date date;
    private int nbSpectateur;
    private String heureDeb;
    private String heureFin;
    private String description;
    private String status;
    private String score;
    private int idOrg;

    public Matchs() {
    }

    public Matchs(int idMatch, int idStade, int idEquipe1, int idEquipe2, Date date, int nbSpectateur, String heureDeb, String heureFin, String description, String status, String score, int idOrg) {
        this.idMatch = idMatch;
        this.idStade = idStade;
        this.idEquipe1 = idEquipe1;
        this.idEquipe2 = idEquipe2;
        this.date = date;
        this.nbSpectateur = nbSpectateur;
        this.heureDeb = heureDeb;
        this.heureFin = heureFin;
        this.description = description;
        this.status = status;
        this.score = score;
        this.idOrg = idOrg;
    }

    public Matchs(int idStade, int idEquipe1, int idEquipe2, Date date, int nbSpectateur, String heureDeb, String heureFin, String description, String status, String score, int idOrg) {
        this.idStade = idStade;
        this.idEquipe1 = idEquipe1;
        this.idEquipe2 = idEquipe2;
        this.date = date;
        this.nbSpectateur = nbSpectateur;
        this.heureDeb = heureDeb;
        this.heureFin = heureFin;
        this.description = description;
        this.status = status;
        this.score = score;
        this.idOrg = idOrg;
    }

    
    
    
    public int getIdMatch() {
        return idMatch;
    }

    public void setIdMatch(int idMatch) {
        this.idMatch = idMatch;
    }

    public int getIdStade() {
        return idStade;
    }

    public void setIdStade(int idStade) {
        this.idStade = idStade;
    }

    public int getIdEquipe1() {
        return idEquipe1;
    }

    public void setIdEquipe1(int idEquipe1) {
        this.idEquipe1 = idEquipe1;
    }

    public int getIdEquipe2() {
        return idEquipe2;
    }

    public void setIdEquipe2(int idEquipe2) {
        this.idEquipe2 = idEquipe2;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public int getNbSpectateur() {
        return nbSpectateur;
    }

    public void setNbSpectateur(int nbSpectateur) {
        this.nbSpectateur = nbSpectateur;
    }

    public String getHeureDeb() {
        return heureDeb;
    }

    public void setHeureDeb(String heureDeb) {
        this.heureDeb = heureDeb;
    }

    public String getHeureFin() {
        return heureFin;
    }

    public void setHeureFin(String heureFin) {
        this.heureFin = heureFin;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getScore() {
        return score;
    }

    public void setScore(String score) {
        this.score = score;
    }

    public int getIdOrg() {
        return idOrg;
    }

    public void setIdOrg(int idOrg) {
        this.idOrg = idOrg;
    }

    @Override
    public String toString() {
        return "Matchs{" + "idMatch=" + idMatch + ", idStade=" + idStade + ", idEquipe1=" + idEquipe1 + ", idEquipe2=" + idEquipe2 + ", date=" + date + ", nbSpectateur=" + nbSpectateur + ", heureDeb=" + heureDeb + ", heureFin=" + heureFin + ", description=" + description + ", status=" + status + ", score=" + score + ", idOrg=" + idOrg + '}';
    }
    
    
}
