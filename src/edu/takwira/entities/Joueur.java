package edu.takwira.entities;

import java.sql.Date;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pc_dell
 */
public class Joueur {
    private int id_joueur;
    private String nom_joueur	;
    private String prenom_joueur;
    private float age;
    private Date date_naissance;	
     private int numero;	
     private String adresse_mail;
     private String ville;	
     private int id_equipe;
     //private String nom_equipe;

    public Joueur() {
    }

    public Joueur(int id_joueur, String nom_joueur, String prenom_joueur,Date date_naissance, int numero, String adresse_mail, String ville, int id_equipe) {
        this.id_joueur = id_joueur;
        this.nom_joueur = nom_joueur;
        this.prenom_joueur = prenom_joueur;
        this.date_naissance = date_naissance;
        this.numero = numero;
        this.adresse_mail = adresse_mail;
        this.ville = ville;
        this.id_equipe = id_equipe;
    }

    public int getId_joueur() {
        return id_joueur;
    }

    public String getNom_joueur() {
        return nom_joueur;
    }

    public String getPrenom_joueur() {
        return prenom_joueur;
    }
    

   public float getAge_joueur() {
        return age;
    }

    public Date getDate_naissance() {
        return date_naissance;
    }
/*
    public String getNom_equipe() {
        return nom_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }
*/
   

    public int getNumero() {
        return numero;
    }

    public String getAdresse_mail() {
        return adresse_mail;
    }

    public String getVille() {
        return ville;
    }

    public int getId_equipe() {
        return id_equipe;
    }

    public void setId_joueur(int id_joueur) {
        this.id_joueur = id_joueur;
    }

    public void setNom_joueur(String nom_joueur) {
        this.nom_joueur = nom_joueur;
    }

    public void setPrenom_joueur(String prenom_joueur) {
        this.prenom_joueur = prenom_joueur;
    }

   public void setAge_joueur(float age) {
        this.age = age;
    }

   

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public void setAdresse_mail(String adresse_mail) {
        this.adresse_mail = adresse_mail;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public void setDate_naissance(Date date_naissance) {
        this.date_naissance = date_naissance;
    }
    

    public void setId_equipe(int id_equipe) {
        this.id_equipe = id_equipe;
    }

    @Override
    public String toString() {
        return "Joueur{" + "id_joueur=" + id_joueur + ", nom_joueur=" + nom_joueur + ", prenom_joueur=" + prenom_joueur +  ",age=" +age + ",Date de Naissance=" + date_naissance+ ", numero=" + numero + ", adresse_mail=" + adresse_mail + ", ville=" + ville + ", id_equipe=" + id_equipe + '}';
    }
    public void afficher ()
    {
     System.out.println("Le nom de joueur "+this.nom_joueur+" le prenom du joueur "+this.prenom_joueur);
        
    }
     


    }
