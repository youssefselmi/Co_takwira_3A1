/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.takwira.interfaces;

import java.util.List;
//import static javafx.scene.input.KeyCode.T;

/**
 *
 * @author ASUS
 */
public interface IEntrainement<T> {
    
     public void ajouterEntrainement(T t);
     public void supprimerEntrainement(T t);
     public void updateEntrainement(T t);
     public List<T> afficherEntrainement();
     
    
    
}
