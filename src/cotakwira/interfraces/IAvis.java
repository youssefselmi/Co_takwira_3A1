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
 */
public interface IAvis <T>{
    
    public void ajouterAvis(T t);

    public void supprimerAvis(T t);

    public void updateAvis(T t);

    public List<T> displayAvis();
    
}
