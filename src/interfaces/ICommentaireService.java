/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package interfaces;

import entities.Commentaire;
import java.util.List;

/**
 *
 * @author khali
 */
public interface ICommentaireService<Commentaire> {
    public void ajouterCommentaire(Commentaire c);
    public void supprimerCommentaire(Commentaire c);
    public void updateCommentaire(Commentaire c);
    public List<Commentaire> displaycommentaires();
    
    
    
}
