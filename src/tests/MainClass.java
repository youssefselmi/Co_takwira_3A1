/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tests;

import entities.Article;
import entities.Commentaire;
import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
import javafx.util.Pair;
import services.ArticleService;
import services.CommentaireService;
import tools.MyConnection;

/**
 *
 * @author khali
 */
public class MainClass {
    public static void main(String[] args) {
        MyConnection mc = MyConnection.getInstance();
        MyConnection mc2 = MyConnection.getInstance();
        System.out.println(mc.hashCode()+"--"+mc2.hashCode());
        String str ="1985-05-05";
        Date date=Date.valueOf(str);
        Article a = new Article(2,"Foot","ACM","Info",date,1);
        ArticleService pcd = new ArticleService();
        //pcd.ajouterArticle(a);
        //pcd.supprimerArticle(a);
        //pcd.updateArticle(a);
       // System.out.println(pcd.displayPersons());
       List<Article> articlesList = new ArrayList<>();
     /*  articlesList=pcd.displayArticles();
       for(Article elem: articlesList)
       {
       	 System.out.println (elem);
       }*/
     String rech="FCB";
      articlesList=pcd.chercher_article(rech);
       for(Article elem: articlesList)
       {
       	 System.out.println (elem);
       }
      
      String str1 ="1985-05-05";
        Date date1=Date.valueOf(str1);
      Commentaire c = new Commentaire(1,"Message2",date1,1,1);
      CommentaireService ccd = new CommentaireService();
      //ccd.ajouterCommentaire(c);
      //ccd.supprimerCommentaire(c);
      //ccd.updateCommentaire(c);
      
     /*  List<Commentaire> commentairesList = new ArrayList<>();
       commentairesList=ccd.displaycommentaires();
       for(Commentaire elem: commentairesList)
       {
       	 System.out.println (elem);
       }*/
     List<Pair<Integer,Article>> list = new ArrayList<Pair<Integer,Article>>();
      list=pcd.article_plus_commentes();
      for(Pair<Integer, Article> elem: list)
       {
       	 System.out.println (elem);
       }
      
   }
    
}
