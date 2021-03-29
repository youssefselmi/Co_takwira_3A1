/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package takwira;

import edu.takwira.entities.Coach;
import edu.takwira.entities.Entrainement;
import edu.takwira.tools.Connection;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Side;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.XYChart;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class StatentrainementController implements Initializable {

    @FXML
    private PieChart pieChart;

  

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
            
           ObservableList<PieChart.Data> data = FXCollections.observableArrayList();



           
            List<Entrainement> entrainementtab = new ArrayList<>();
      
            try {
            String requete = "SELECT * FROM entrainement";
            Statement st = Connection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
                Entrainement e = new Entrainement();
                e.setId_entrainement(rs.getInt(1));
                e.setDuree(rs.getInt(2));

                e.setDate_entrainement(rs.getDate(3));
                e.setHeure(rs.getString(4));

                e.setId_equipe(rs.getInt(7));
                e.setId_coach(rs.getInt(5));
                e.setId_stade(rs.getInt(6));
                 e.setNom_equipee(rs.getString(8));
                 e.setNom_stadee(rs.getString(9));
                 e.setNom_coache(rs.getString(10));
                 e.setType(rs.getString(11));





                entrainementtab.add(e);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
           int dureeattaque=0;
           int dureediffence=0;
           int dureemilieux=0;
           
           for(int i=0;i<entrainementtab.size();i++)
           {
               if(entrainementtab.get(i).getType().equals("Attaque"))
               {dureeattaque=dureeattaque+entrainementtab.get(i).getDuree();}
               else if(entrainementtab.get(i).getType().equals("Deffence"))
               {dureediffence=dureediffence+entrainementtab.get(i).getDuree();}
               else 
                   dureemilieux=dureemilieux+entrainementtab.get(i).getDuree();
               
               
           }
           System.out.println(dureeattaque);
           System.out.println(dureediffence);
        
        
         data.add(new PieChart.Data("Attaque",dureeattaque));
         data.add(new PieChart.Data("Diffence",dureediffence));
         data.add(new PieChart.Data("Milieux",dureemilieux));


         
           pieChart.setTitle("Stat");
        pieChart.setLegendSide(Side.LEFT);
         pieChart.setData(data);
               

    }    
    
}
