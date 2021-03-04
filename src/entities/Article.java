/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import java.util.Date;

/**
 *
 * @author khali
 */
public class Article {
    int id;
    String type;
    String titre;
    String description;
    Date date;
    int id_personnel;

    public Article() {
    }

    public Article(String type, String titre, String description, Date date, int id_personnel) {
        this.type = type;
        this.titre = titre;
        this.description = description;
        this.date = date;
        this.id_personnel = id_personnel;
    }

    public Article(int id, String type, String titre, String description, Date date, int id_personnel) {
        this.id = id;
        this.type = type;
        this.titre = titre;
        this.description = description;
        this.date = date;
        this.id_personnel = id_personnel;
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

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public int getId_personnel() {
        return id_personnel;
    }

    public void setId_personnel(int id_personnel) {
        this.id_personnel = id_personnel;
    }

    @Override
    public String toString() {
        return "Article{" + "id=" + id + ", type=" + type + ", titre=" + titre + ", description=" + description + ", date=" + date + ", id_personnel=" + id_personnel + '}';
    }
    
    
}
