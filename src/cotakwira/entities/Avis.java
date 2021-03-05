/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.entities;

/**
 *
 * @author yassin
 */
public class Avis {
    
    private int idAvis,idJoueur,idCoach;
    private String rate;
    private String description;

    public Avis() {
    }

    public Avis(int idAvis,int idCoach,int idJoueur, String rate, String description) {
        this.idAvis = idAvis;
        this.rate = rate;
        this.description = description;
        this.idCoach = idCoach;
        this.idJoueur = idJoueur;        
    }

    public int getidAvis() {
        return idAvis;
    }

    public String getRate() {
        return rate;
    }

    public String getDescription() {
        return description;
    }
    
    public int getidJoueur()
    {
    return idJoueur;
    }
    public int getidCoach()
    {
    return idCoach;
    }

    public void setidAvis(int idAvis) {
        this.idAvis = idAvis;
    }

    public void setRate(String rate) {
        this.rate = rate;
    }

    public void setDescription(String description) {
        this.description = description;
    }
    
     public void setidCoach(int idCoach) {
        this.idCoach = idCoach;
    }

      public void setidJoueur(int idJoueur) {
        this.idJoueur = idJoueur;
    }


    @Override
    public String toString() {
        return "Avis{" + "idAvis=" + idAvis + ", rate=" + rate + ",idCoach=" + idCoach + ",idJoueur=" + idJoueur + ",idCoach=" + idCoach + ", description=" + description + '}';
    }
}