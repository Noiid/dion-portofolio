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
public class SewaVideoGameMain {
    public static void main(String[] args) {
        int hariPinjam = 2;
        int perHari = 5000;
        SewaVideoGame sewa = new SewaVideoGame("A12", "Dion Maulana", "Mobile Legend", hariPinjam, perHari);
        sewa.totalBayar(hariPinjam, perHari);
        sewa.tampilSewa();
        
        
    }
}
