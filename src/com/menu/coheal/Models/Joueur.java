/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.Models;

import java.util.Date;

/**
 *
 * @author USER-PC
 */
public class Joueur {
    
/**
 *
 * @author Yasmine
 */
      private int id_joueur;
    private String nom_joueur	;
    private String prenom_joueur;
    private String dateNaissance;
     private int age_joueur;	
     private int numero;	
     private String adresse_mail;
     private String ville;	
     private int id_equipe;
     private String categorie;
    private String position;
     private String image;
     private String password;
     private String nom_equipe;
public Joueur()
{}
    public Joueur(String nom_joueur, String prenom_joueur, String dateNaissance, int age_joueur, int numero, String adresse_mail, String ville, int id_equipe, String categorie, String position, String image, String password, String nom_equipe) {
        this.nom_joueur = nom_joueur;
        this.prenom_joueur = prenom_joueur;
        this.dateNaissance = dateNaissance;
        this.age_joueur = age_joueur;
        this.numero = numero;
        this.adresse_mail = adresse_mail;
        this.ville = ville;
        this.id_equipe = id_equipe;
        this.categorie = categorie;
        this.position = position;
        this.image = image;
        this.password = password;
        this.nom_equipe = nom_equipe;
    }

    public Joueur(String nom_joueur, String prenom_joueur, String ville) {
        this.nom_joueur = nom_joueur;
        this.prenom_joueur = prenom_joueur;
        this.ville = ville;
    }

    public Joueur(int id_joueur, String nom_joueur, String prenom_joueur, String dateNaissance, int age_joueur, int numero, String adresse_mail, String ville, int id_equipe, String categorie, String position, String image, String password, String nom_equipe) {
        this.id_joueur = id_joueur;
        this.nom_joueur = nom_joueur;
        this.prenom_joueur = prenom_joueur;
        this.dateNaissance = dateNaissance;
        this.age_joueur = age_joueur;
        this.numero = numero;
        this.adresse_mail = adresse_mail;
        this.ville = ville;
        this.id_equipe = id_equipe;
        this.categorie = categorie;
        this.position = position;
        this.image = image;
        this.password = password;
        this.nom_equipe = nom_equipe;
    }

    public int getId_joueur() {
        return id_joueur;
    }

    public void setId_joueur(int id_joueur) {
        this.id_joueur = id_joueur;
    }

    public String getNom_joueur() {
        return nom_joueur;
    }

    public void setNom_joueur(String nom_joueur) {
        this.nom_joueur = nom_joueur;
    }

    public String getPrenom_joueur() {
        return prenom_joueur;
    }

    public void setPrenom_joueur(String prenom_joueur) {
        this.prenom_joueur = prenom_joueur;
    }

    public String getDateNaissance() {
        return dateNaissance;
    }

    public void setDateNaissance(String dateNaissance) {
        this.dateNaissance = dateNaissance;
    }

    public int getAge_joueur() {
        return age_joueur;
    }

    public void setAge_joueur(int age_joueur) {
        this.age_joueur = age_joueur;
    }

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public String getAdresse_mail() {
        return adresse_mail;
    }

    public void setAdresse_mail(String adresse_mail) {
        this.adresse_mail = adresse_mail;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public int getId_equipe() {
        return id_equipe;
    }

    public void setId_equipe(int id_equipe) {
        this.id_equipe = id_equipe;
    }

    public String getCategorie() {
        return categorie;
    }

    public void setCategorie(String categorie) {
        this.categorie = categorie;
    }

    public String getPosition() {
        return position;
    }

    public void setPosition(String position) {
        this.position = position;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getNom_equipe() {
        return nom_equipe;
    }

    public void setNom_equipe(String nom_equipe) {
        this.nom_equipe = nom_equipe;
    }

    @Override
    public String toString() {
        return "Joueur{" + "id_joueur=" + id_joueur + ", nom_joueur=" + nom_joueur + ", prenom_joueur=" + prenom_joueur + ", dateNaissance=" + dateNaissance + ", age_joueur=" + age_joueur + ", numero=" + numero + ", adresse_mail=" + adresse_mail + ", ville=" + ville + ", id_equipe=" + id_equipe + ", categorie=" + categorie + ", position=" + position + ", image=" + image + ", password=" + password + ", nom_equipe=" + nom_equipe + '}';
    }
     

    
}
    

