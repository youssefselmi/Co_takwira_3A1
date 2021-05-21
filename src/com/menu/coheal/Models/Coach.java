/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//package com.mycompany.Models;

package com.menu.coheal.Models;



/**
 *
 * @author ASUS
 */
public class Coach {
    
    
    private int id_coach;
    private String nom_coach;
    private String prenom_coach;
    private String date_naissance;
    private String grade;
    private String date_fin_contrat;
    private String adresse_mail;
    private float salaire;
    private int nb_trophe_locaux;
    private int nb_trophe_internationaux;
    private String formation_prefere;
    private String image_formation;
    private String image_coach;
    private int age;
    private String mdp_coach;

    public Coach() {
    }

    public int getId_coach() {
        return id_coach;
    }

    public void setId_coach(int id_coach) {
        this.id_coach = id_coach;
    }

    public String getNom_coach() {
        return nom_coach;
    }

    public void setNom_coach(String nom_coach) {
        this.nom_coach = nom_coach;
    }

    public String getPrenom_coach() {
        return prenom_coach;
    }

    public void setPrenom_coach(String prenom_coach) {
        this.prenom_coach = prenom_coach;
    }

    public String getDate_naissance() {
        return date_naissance;
    }

    public void setDate_naissance(String date_naissance) {
        this.date_naissance = date_naissance;
    }

    public String getGrade() {
        return grade;
    }

    public void setGrade(String grade) {
        this.grade = grade;
    }

    public String getDate_fin_contrat() {
        return date_fin_contrat;
    }

    public void setDate_fin_contrat(String date_fin_contrat) {
        this.date_fin_contrat = date_fin_contrat;
    }

    public String getAdresse_mail() {
        return adresse_mail;
    }

    public void setAdresse_mail(String adresse_mail) {
        this.adresse_mail = adresse_mail;
    }

    public float getSalaire() {
        return salaire;
    }

    public void setSalaire(float salaire) {
        this.salaire = salaire;
    }

    public int getNb_trophe_locaux() {
        return nb_trophe_locaux;
    }

    public void setNb_trophe_locaux(int nb_trophe_locaux) {
        this.nb_trophe_locaux = nb_trophe_locaux;
    }

    public int getNb_trophe_internationaux() {
        return nb_trophe_internationaux;
    }

    public void setNb_trophe_internationaux(int nb_trophe_internationaux) {
        this.nb_trophe_internationaux = nb_trophe_internationaux;
    }

    public String getFormation_prefere() {
        return formation_prefere;
    }

    public void setFormation_prefere(String formation_prefere) {
        this.formation_prefere = formation_prefere;
    }

    public String getImage_formation() {
        return image_formation;
    }

    public void setImage_formation(String image_formation) {
        this.image_formation = image_formation;
    }

    public String getImage_coach() {
        return image_coach;
    }

    public void setImage_coach(String image_coach) {
        this.image_coach = image_coach;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getMdp_coach() {
        return mdp_coach;
    }

    public void setMdp_coach(String mdp_coach) {
        this.mdp_coach = mdp_coach;
    }

    @Override
    public String toString() {
        return "Coach{" + "id_coach=" + id_coach + ", nom_coach=" + nom_coach + ", prenom_coach=" + prenom_coach + ", date_naissance=" + date_naissance + ", grade=" + grade + ", date_fin_contrat=" + date_fin_contrat + ", adresse_mail=" + adresse_mail + ", salaire=" + salaire + ", nb_trophe_locaux=" + nb_trophe_locaux + ", nb_trophe_internationaux=" + nb_trophe_internationaux + ", formation_prefere=" + formation_prefere + ", image_formation=" + image_formation + ", image_coach=" + image_coach + ", age=" + age + ", mdp_coach=" + mdp_coach + '}';
    }

    public Coach(int id_coach, String nom_coach, String prenom_coach, String date_naissance, String grade, String date_fin_contrat, String adresse_mail, float salaire, int nb_trophe_locaux, int nb_trophe_internationaux, String formation_prefere, String image_formation, String image_coach, int age, String mdp_coach) {
        this.id_coach = id_coach;
        this.nom_coach = nom_coach;
        this.prenom_coach = prenom_coach;
        this.date_naissance = date_naissance;
        this.grade = grade;
        this.date_fin_contrat = date_fin_contrat;
        this.adresse_mail = adresse_mail;
        this.salaire = salaire;
        this.nb_trophe_locaux = nb_trophe_locaux;
        this.nb_trophe_internationaux = nb_trophe_internationaux;
        this.formation_prefere = formation_prefere;
        this.image_formation = image_formation;
        this.image_coach = image_coach;
        this.age = age;
        this.mdp_coach = mdp_coach;
    }

    public Coach(String nom_coach, String prenom_coach, String date_naissance, String grade, String date_fin_contrat, String adresse_mail, float salaire, int nb_trophe_locaux, int nb_trophe_internationaux, String formation_prefere, String image_formation, String image_coach, int age, String mdp_coach) {
        this.nom_coach = nom_coach;
        this.prenom_coach = prenom_coach;
        this.date_naissance = date_naissance;
        this.grade = grade;
        this.date_fin_contrat = date_fin_contrat;
        this.adresse_mail = adresse_mail;
        this.salaire = salaire;
        this.nb_trophe_locaux = nb_trophe_locaux;
        this.nb_trophe_internationaux = nb_trophe_internationaux;
        this.formation_prefere = formation_prefere;
        this.image_formation = image_formation;
        this.image_coach = image_coach;
        this.age = age;
        this.mdp_coach = mdp_coach;
    }

    
    
    
   
    
    
    
    
    
    
    
    
}
