/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.interfraces;

import java.util.List;

/**
 *
 * @author yassin
 * @param <T>
 */
    public interface IReclamation <T>{
    
    public void ajouterReclamation(T t);

    public void supprimerReclamation(T t);

    public void updateReclamation(T t);

    public List<T> displayReclamation(); 
    
}
