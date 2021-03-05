/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira.pidev.entities;

/**
 *
 * @author esprit
 */
public class Rating {

    private int id_rating;
    private int id_match;
    private int rate;

    public Rating() {

    }

    public Rating(int id, int rate) {
        
        if(rate >=0 && rate<=5)
        {
           this.id_match = id;
           this.rate = rate; 
        }
        else
        {
            System.out.println(" saisir un nombre entre 0 et 5");
        }
        
    }

    public int getId_match() {
        return id_match;
    }

    public int getRating() {
        return rate;
    }
     public void setId_match(int idd) {
        id_match=idd;
    }

    public void setRating(int r) {
        rate=r;
    }
    
    public String toString(){
        return ""
                + "id_match"+ this.id_match;
               
    }
}
