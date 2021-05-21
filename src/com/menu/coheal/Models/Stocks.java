/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.menu.coheal.Models;

/**
 *
 * @author maherWare
 */
public class Stocks {
    private int idProduit;
    private int quantite;
    private int prixUnite;
    private String nomProduit;

    public Stocks() {
    }

    public Stocks(int idProduit,int quantite,int prixUnite,String nomProduit ) {
        this.idProduit = idProduit;
        this.quantite = quantite;
        this.prixUnite = prixUnite;
        this.nomProduit = nomProduit;
      
    }

    public Stocks(int quantite,int prixUnite,String nomProduit) {
     this.quantite = quantite;
        this.prixUnite = prixUnite;
        this.nomProduit = nomProduit;
    }

    @Override
    public String toString() {
        return "Stocks{" + "idProduit=" + idProduit + ", nomProduit=" + nomProduit + ", quantite=" + quantite + ", prixUnite=" + prixUnite;

    }

    public int getIdProduit() {
        return idProduit;
    }

    public void setIdProduit(int idProduit) {
        this.idProduit = idProduit;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public int getPrixUnite() {
        return prixUnite;
    }

    public void setPrixUnite(int prixUnite) {
        this.prixUnite = prixUnite;
    }

    public String getNomProduit() {
        return nomProduit;
    }

    public void setNomProduit(String nomProduit) {
        this.nomProduit = nomProduit;
    }

    
    
    
    
}
