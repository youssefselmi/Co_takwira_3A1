/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cotakwira.interfraces;

import java.sql.Date;
import java.util.List;

/**
 *
 * @author yassin
 * @param <T>
 */
public interface IReclamation<T> {

    public boolean ajouterReclamation(T t);

    public boolean supprimerReclamation(int idRec);

    public boolean updateReclamation(T t);

    public List<T> displayReclamation(T t);

    public void PrioriteRec();

    public int contraintModifier24h(int idRec);

}
