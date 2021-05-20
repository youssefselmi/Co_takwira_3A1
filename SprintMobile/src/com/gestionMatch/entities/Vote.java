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
public class Vote {
    private int idVote;
    private int idMatch;
    private int idUser;
    private int vote;

    public Vote() {
    }

    public Vote(int idVote, int idMatch, int idUser, int vote) {
        this.idVote = idVote;
        this.idMatch = idMatch;
        this.idUser = idUser;
        this.vote = vote;
    }

    public Vote(int idMatch, int idUser, int vote) {
        this.idMatch = idMatch;
        this.idUser = idUser;
        this.vote = vote;
    }

    public int getIdVote() {
        return idVote;
    }

    public void setIdVote(int idVote) {
        this.idVote = idVote;
    }

    public int getIdMatch() {
        return idMatch;
    }

    public void setIdMatch(int idMatch) {
        this.idMatch = idMatch;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    public int getVote() {
        return vote;
    }

    public void setVote(int vote) {
        this.vote = vote;
    }

    @Override
    public String toString() {
        return "Vote{" + "idVote=" + idVote + ", idMatch=" + idMatch + ", idUser=" + idUser + ", vote=" + vote + '}';
    }
    
}
