/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.entities;

import java.sql.Date;

/**
 *
 * @author yassin
 */
public class Reclamation {

    private int idRec, idJoueur, idCoach;
    private String SujetRec, DescriptionRec, StatusRec, PrioriteRec;
    private String NomJoueur, PrenomJoueur, EmailJoueur, TlJoueur;
    private Date DateRec, DateTraitement;

    public Reclamation() {}
    public Reclamation(int idRec,int idJoueur,String SujetRec,String DescriptionRec,int idCoach) {
        this.idRec = idRec;
        this.idJoueur = idJoueur;
        this.SujetRec = SujetRec;
        this.DescriptionRec = DescriptionRec;
        //this.PrioriteRec = PrioriteRec;
        //this.StatusRec = StatusRec;
        //this.DateRec = DateRec;
        //this.DateTraitement = DateTraitement;
        this.idCoach = idCoach;
    }
    public Reclamation(int idRec,int idJoueur,String SujetRec,String DescriptionRec)//update
    {
     this.idRec = idRec; 
     this.idJoueur = idJoueur;
     this.SujetRec = SujetRec;
     this.DescriptionRec = DescriptionRec;
    }
    public Reclamation(int idRec,String SujetRec,String DescriptionRec)//update
    {
     this.idRec = idRec; 
     this.SujetRec = SujetRec;
     this.DescriptionRec = DescriptionRec;
    }
    public Reclamation(int idRec,String SujetRec,String DescriptionRec,int idCoach)//update coach
    {
     this.idRec = idRec; 
     this.SujetRec = SujetRec;
     this.DescriptionRec = DescriptionRec;
     this.idCoach = idCoach;
    }

    public int getIdRec() { return idRec;}
    public int getIdJoueur() { return idJoueur;}
    public String getSujetRec() { return SujetRec;}
    public String getDescriptionRec() { return DescriptionRec;}
    //public String getPrioriteRec() { return PrioriteRec;}
    //public String getStatusRec() { return StatusRec;}
    public Date getDateRec() { return DateRec;}
    //public Date getDateTraitement() { return DateTraitement;}
    public int getIdCoach() { return idCoach;}
    
    
    public void setIdRec(int idRec) { this.idRec = idRec;}
    public void setIdJoueur(int idJoueur) { this.idJoueur =idJoueur;}
    public void setSujetRec(String SujetRec) { this.SujetRec = SujetRec;}
    public void setDescriptionRec(String DescriptionRec) { this.DescriptionRec = DescriptionRec;}
    public void setPrioriteRec(String PrioriteRec) { this.PrioriteRec = PrioriteRec;}
    public void setStatusRec(String StatusRec) { this.StatusRec = StatusRec;}
    public void setDateRec(Date DateRec) { this.DateRec = DateRec;}
    public void setDateTraitement(Date DateTraitement) { this.DateTraitement = DateTraitement;}
    public void setIdCoach(int idCoach) { this.idCoach = idCoach;}
    
    public void setNomJoueur(String NomJoueur) { this.NomJoueur = NomJoueur;}
    public void setPrenomJoueur(String PrenomJoueur) { this.PrenomJoueur = PrenomJoueur;}
    public void setEmailJoueur(String EmailJoueur) { this.EmailJoueur = EmailJoueur;}
    public void setTlJoueur(String TlJoueur) { this.TlJoueur = TlJoueur;}

//    @Override
//    public String toString()                                                                                                                                                                                                          
//    {
//     return "Reclamation{"+"idRec="+idRec+",idJoueur="+idJoueur+",SujetRec="+SujetRec+",DescriptionRec="+DescriptionRec+",PrioriteRec="+PrioriteRec+",StatusRec="+StatusRec+",DateRec="+DateRec+",DateTraitement="+DateTraitement+",idCoach="+idCoach+",NomJoueur="+NomJoueur+",PrenomJoueur="+PrenomJoueur+",EmailJoueur="+EmailJoueur+",TlJoueur="+TlJoueur+'}';    
//    }
    
        @Override
    public String toString()                                                                                                                                                                                                          
    {
     return "Reclamation{"+"idRec="+idRec+",SujetRec="+SujetRec+",DescriptionRec="+DescriptionRec+",StatusRec="+StatusRec+",DateRec="+DateRec+",idCoach="+idCoach+'}';    
    }
    
}
