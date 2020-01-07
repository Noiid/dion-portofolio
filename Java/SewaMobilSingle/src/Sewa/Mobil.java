/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Sewa;

/**
 *
 * @author SPLASH
 */
public class Mobil {
    String kdMobil;
    String nama;
    String kategori;
    String nopol;
    String available;
    int harga;

    public Mobil(String kdMobil, String nama, String kategori, String nopol, String available, int harga) {
        this.kdMobil = kdMobil;
        this.nama = nama;
        this.kategori = kategori;
        this.nopol = nopol;
        this.available = available;
        this.harga = harga;
    }
    public Mobil() {
    
    }
    void print(){
        System.out.print("Kode Mobil : "+kdMobil+" | \t");
        System.out.print("Nama Mobil : "+nama+" | \t");
        System.out.print("Kategori : "+kategori+" | \t");
        System.out.print("No Polisi : "+nopol+" | \t");
        System.out.print("Harga : "+harga+" | \t");
        System.out.println("Status : "+available);
        
    }
    void printSewa(){
        System.out.println("Kode Mobil : "+kdMobil);
        System.out.println("Nama Mobil : "+nama);
        System.out.println("Kategori : "+kategori);
        System.out.println("No Polisi : "+nopol);
        System.out.println("Harga : "+harga);
        
    }
}

    
