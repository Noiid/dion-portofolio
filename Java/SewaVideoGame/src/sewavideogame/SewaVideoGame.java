/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sewavideogame;

/**
 *
 * @author SPLASH
 */
public class SewaVideoGame {
    String id, namaMember, namaGame;
    int lamaPinjam, hargaSewa;
    SewaVideoGame(String no_id, String namaAnggota, String Game, int lama, int harga){
        id = no_id;
        namaMember = namaAnggota;
        namaGame = Game;
        lamaPinjam = lama;
        hargaSewa = harga;
    } 
    int totalBayar(int lama, int harga){
        return lama*harga;
    }
    void tampilSewa(){
        System.out.println("Id = "+id);
        System.out.println("Nama member = "+namaMember);
        System.out.println("Nama Game = "+namaGame);
        System.out.println("Lama Pinjam = "+lamaPinjam);
        System.out.println("Harga Sewa per Hari = "+hargaSewa);
        System.out.println("Total Bayar = "+totalBayar(lamaPinjam,hargaSewa));



    }
    
}
