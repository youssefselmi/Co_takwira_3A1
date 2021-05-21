/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Models;

import java.util.Date;

/**
 *
 * @author khali
 */
public class Article {
    
    private int id;
    private String type,titre,description;
    private String date;
    private String url;
    private int idPersonnel;

    public Article() {
    }

    public Article(int id, String type, String titre, String description, String date, String url, int idPersonnel) {
        this.id = id;
        this.type = type;
        this.titre = titre;
        this.description = description;
        this.date = date;
        this.url = url;
        this.idPersonnel = idPersonnel;
    }

    public Article(String type, String titre, String description, String date, String url, int idPersonnel) {
        this.type = type;
        this.titre = titre;
        this.description = description;
        this.date = date;
        this.url = url;
        this.idPersonnel = idPersonnel;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

    public int getIdPersonnel() {
        return idPersonnel;
    }

    public void setIdPersonnel(int idPersonnel) {
        this.idPersonnel = idPersonnel;
    }
    
    
}
