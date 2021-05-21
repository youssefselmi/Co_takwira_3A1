/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entites;



/**
 *
 * @author yassin
 */
public class Reclamation {
    
    private int idRec, idJoueur;
    private String SujetRec, DescriptionRec, StatusRec, PrioriteRec;
    private String NomJoueur, PrenomJoueur, EmailJoueur, TlJoueur, NomPrenomCoach, imgRec;
    private String DateRec, DateTraitement;

    public Reclamation() {
    }

    
    public Reclamation(int idRec, int idJoueur, String SujetRec, String DescriptionRec, String StatusRec, String PrioriteRec, String NomJoueur, String PrenomJoueur, String EmailJoueur, String TlJoueur, String NomPrenomCoach, String imgRec, String DateRec, String DateTraitement) {
        this.idRec = idRec;
        this.idJoueur = idJoueur;
        this.SujetRec = SujetRec;
        this.DescriptionRec = DescriptionRec;
        this.StatusRec = StatusRec;
        this.PrioriteRec = PrioriteRec;
        this.NomJoueur = NomJoueur;
        this.PrenomJoueur = PrenomJoueur;
        this.EmailJoueur = EmailJoueur;
        this.TlJoueur = TlJoueur;
        this.NomPrenomCoach = NomPrenomCoach;
        this.imgRec = imgRec;
        this.DateRec = DateRec;
        this.DateTraitement = DateTraitement;
    }

    public Reclamation(int idJoueur, String SujetRec, String DescriptionRec, String StatusRec, String PrioriteRec, String NomJoueur, String PrenomJoueur, String EmailJoueur, String TlJoueur, String NomPrenomCoach, String imgRec, String DateRec, String DateTraitement) {
        this.idJoueur = idJoueur;
        this.SujetRec = SujetRec;
        this.DescriptionRec = DescriptionRec;
        this.StatusRec = StatusRec;
        this.PrioriteRec = PrioriteRec;
        this.NomJoueur = NomJoueur;
        this.PrenomJoueur = PrenomJoueur;
        this.EmailJoueur = EmailJoueur;
        this.TlJoueur = TlJoueur;
        this.NomPrenomCoach = NomPrenomCoach;
        this.imgRec = imgRec;
        this.DateRec = DateRec;
        this.DateTraitement = DateTraitement;
    }
    
        public Reclamation(String SujetRec, String DescriptionRec, String DateRec) {
        this.SujetRec = SujetRec;
        this.DescriptionRec = DescriptionRec;
        this.DateRec = DateRec;
    }

    public int getIdRec() {
        return idRec;
    }

    public void setIdRec(int idRec) {
        this.idRec = idRec;
    }

    public int getIdJoueur() {
        return idJoueur;
    }

    public void setIdJoueur(int idJoueur) {
        this.idJoueur = idJoueur;
    }

    public String getSujetRec() {
        return SujetRec;
    }

    public void setSujetRec(String SujetRec) {
        this.SujetRec = SujetRec;
    }

    public String getDescriptionRec() {
        return DescriptionRec;
    }

    public void setDescriptionRec(String DescriptionRec) {
        this.DescriptionRec = DescriptionRec;
    }

    public String getStatusRec() {
        return StatusRec;
    }

    public void setStatusRec(String StatusRec) {
        this.StatusRec = StatusRec;
    }

    public String getPrioriteRec() {
        return PrioriteRec;
    }

    public void setPrioriteRec(String PrioriteRec) {
        this.PrioriteRec = PrioriteRec;
    }

    public String getNomJoueur() {
        return NomJoueur;
    }

    public void setNomJoueur(String NomJoueur) {
        this.NomJoueur = NomJoueur;
    }

    public String getPrenomJoueur() {
        return PrenomJoueur;
    }

    public void setPrenomJoueur(String PrenomJoueur) {
        this.PrenomJoueur = PrenomJoueur;
    }

    public String getEmailJoueur() {
        return EmailJoueur;
    }

    public void setEmailJoueur(String EmailJoueur) {
        this.EmailJoueur = EmailJoueur;
    }

    public String getTlJoueur() {
        return TlJoueur;
    }

    public void setTlJoueur(String TlJoueur) {
        this.TlJoueur = TlJoueur;
    }

    public String getNomPrenomCoach() {
        return NomPrenomCoach;
    }

    public void setNomPrenomCoach(String NomPrenomCoach) {
        this.NomPrenomCoach = NomPrenomCoach;
    }

    public String getImgRec() {
        return imgRec;
    }

    public void setImgRec(String imgRec) {
        this.imgRec = imgRec;
    }

    public String getDateRec() {
        return DateRec;
    }

    public void setDateRec(String DateRec) {
        this.DateRec = DateRec;
    }

    public String getDateTraitement() {
        return DateTraitement;
    }

    public void setDateTraitement(String DateTraitement) {
        this.DateTraitement = DateTraitement;
    }
    
    
    
    
    
}
