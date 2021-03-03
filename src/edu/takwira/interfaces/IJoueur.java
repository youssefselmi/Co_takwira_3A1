/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.interfaces;

import java.util.List;
import java.util.Map;
//import static javafx.scene.input.KeyCode.T;

/**
 *
 * @author pc_dell
 */
public interface IJoueur<T> {
      public void ajouterJoueur(T t);
     public void supprimerJoueur(T t);
     public void updateJoueur(T t);
     public List<T> afficherJoueur(); 
    // public Map<T> afficherEquipeJoueur();
    
}
