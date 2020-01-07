/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package daonya;

import java.awt.HeadlessException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import koneksiDB.KoneksiDB;
import objeksnya.timNya;

/**
 *
 * @author Rido
 */
public class Crud {

    timNya tims = new timNya();

    private static String getData() { // menampilkan data dari database
        Connection conn = (Connection) koneksiDB.KoneksiDB.koneksiDB();
        String queryNe = "Select * from tim ORDER BY points Desc, defisit desc;" ;
        ResultSet rs = KoneksiDB.executeQuery(queryNe);
        String hasil="";
        int peringkat = 1;
        try {
            while (rs.next()) {
//                System.out.println(rs.getString(1));
//                System.out.println(rs.getString(2));
//                System.out.println(rs.getString(3));
//                System.out.println(rs.getString(4));
//                System.out.println(rs.getString(5));
//                System.out.println(rs.getString(6));
//                System.out.println(rs.getString(7));
//                System.out.println(rs.getString(8));
//                System.out.println(rs.getString(9));
//                System.out.println(rs.getString(10));
//                System.out.println(rs.getString(11));
                    hasil += "Peringkat:"+peringkat+" Nama Tim:"+rs.getString(2)+
                        " play:"+rs.getString(3)+" win:"+rs.getString(4)+" draw:"+rs.getString(5)+
                        " lose:"+rs.getString(6)+" cetak goal:"+rs.getString(7)+" kebobolan:"+rs.getString(8)+
                        " defisit:"+rs.getString(9)+" points:"+rs.getString(10)+
                        " lawan:"+rs.getString(11)+"\n";
                    peringkat++;
            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }
        return hasil;
    }

    private static timNya getDataSpesifik(String namaTim) { // menampilkan data dari database
        timNya tim = new timNya();
        Connection conn = (Connection) koneksiDB.KoneksiDB.koneksiDB();
        String queryNe = "Select * from tim where nama_tim ='" + namaTim + "'";
        ResultSet rs = KoneksiDB.executeQuery(queryNe);

        try {
            while (rs.next()) {
                tim.setIdTim(Integer.parseInt(rs.getString(1)));
                tim.setNamaTim(rs.getString(2));
                tim.setPlay(Integer.parseInt(rs.getString(3)));
                tim.setWin(Integer.parseInt(rs.getString(4)));
                tim.setLose(Integer.parseInt(rs.getString(5)));
                tim.setDraw(Integer.parseInt(rs.getString(6)));
                tim.setCetakGoal(Integer.parseInt(rs.getString(7)));
                tim.setKebobolan(Integer.parseInt(rs.getString(8)));
                tim.setDefisit(Integer.parseInt(rs.getString(9)));
                tim.setPoints(Integer.parseInt(rs.getString(10)));
                tim.setLawanSebelum(rs.getString(11));

            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }

        return tim;

    }

    public static void postData(String namaTim) {
        String queryNe = "Insert into tim values(null,'" + namaTim + "',0,0,0,0,0,0,0,0,'')";
        try {
            int status = KoneksiDB.execute(queryNe);
            if (status == 1) {
                JOptionPane.showMessageDialog(null, "berhasil insert data");
//                getData();
            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public static void deleteData(String namaTim) {
        String queryNe = "Delete from tim where nama_tim ='" + namaTim + "'";
        try {
            int status = KoneksiDB.execute(queryNe);
            if (status == 1) {
                JOptionPane.showMessageDialog(null, "berhasil insert data");
//                getData();
            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public static void putData(String namaTim, int play, int win, int draw, int lose, int cetakGol, int bobol, int defisit, int point, String timLawan) {
        String queryNe = "Update tim set play=" + play + ",win=" + win + ",draw=" + draw +",cetak_goal="+cetakGol+",kebobolan="+bobol+",defisit="+defisit+",lose=" + lose + ", points=" + point + ", lawan_sebelumnya='" + timLawan + "' where nama_tim='" + namaTim + "'";
        try {
            int status = KoneksiDB.execute(queryNe);
            if (status == 1) {
                JOptionPane.showMessageDialog(null, "berhasil insert data");
                getData();
            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static void clearData(String namaTim){
         String queryNe = "Update tim set play=" + 0 + ",win=" + 0 + ",draw=" + 0 +",cetak_goal="+0+",kebobolan="+0+",defisit="+0+",lose=" + 0 + ", points=" + 0 + ", lawan_sebelumnya='" + ' ' + "' where nama_tim='" + namaTim + "'";
        try {
            int status = KoneksiDB.execute(queryNe);
            if (status == 1) {
                JOptionPane.showMessageDialog(null, "berhasil insert data");
                getData();
            }
        } catch (SQLException ex) {
            Logger.getLogger(Crud.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public static void main(String[] args) {
        timNya timsnya;
        timNya timsnya2;
//        getData();
//        postData("CHELSEA");
        String tA = "LIVERPOOL";
        String tB = "TOTENHAM";
        //skor
        int a = 2;
        int b = 0;
        
        int tAW = 0;
        int tAL = 0;
        int tLB = 0;
        int tBW = 0;
        int drw = 0;
        int sekA=0;
        int sekB=0;
        
        if (a > b) {
            tAW = 1;
            tLB = 1;
            sekA=3;
        } else if (a == b) {
            drw=1;
            tAL=0;
            tLB=0;
            sekA=1;
            sekB=1;
        } else if (a<b) {
            tBW = 1;
            tAL = 1;
            sekB=3;

        }
        
          timsnya = getDataSpesifik(tA);
        timsnya2 = getDataSpesifik(tB);
        int defsA = (timsnya.getCetakGoal()+a) - (timsnya.getKebobolan()+b);
        int defsB = (timsnya2.getCetakGoal()+b) - (timsnya2.getKebobolan()+a);
      
        System.out.println(tA + " vs " + tB + " score " + a + "-" + b);

        putData(tA, timsnya.getPlay() + 1, timsnya.getWin() + tAW, timsnya.getDraw()+drw, timsnya.getLose() + tAL, timsnya.getCetakGoal()+a, timsnya.getKebobolan()+b, defsA, timsnya.getPoints()+sekA, tB);
        putData(tB, timsnya2.getPlay() + 1, timsnya2.getWin() + tBW, timsnya2.getDraw()+drw, timsnya2.getLose() + tLB, timsnya2.getCetakGoal()+b, timsnya2.getKebobolan()+a, defsB, timsnya2.getPoints()+sekB, tA);

//
//        clearData(tB);
//                clearData(tA);
        String result=getData();
        System.out.println(result);
    }

}
