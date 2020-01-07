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
public class MobilSewa {
    String kdSewa;
    String tglPinjam;
    String tglKembali;
    int lama;
    Mobil mbl;
    User penyewa;
    int totalHarga;
    int bayar;

//    public MobilSewa(String namaPenyewa, String noKK, String alamat, String noSIM, String kdMobil, String nama, String kategori, String nopol, String available, int harga, String tglPinjam, String tglKembali, int lama) {
//        this.namaPenyewa = namaPenyewa;
//        this.noKK = noKK;
//        this.alamat = alamat;
//        this.noSIM = noSIM;

    public MobilSewa(String kdSewa, String tglPinjam, String tglKembali, int lama, Mobil mbl, User penyewa, int totalHarga, int bayar) {
        this.kdSewa = kdSewa;
        this.tglPinjam = tglPinjam;
        this.tglKembali = tglKembali;
        this.lama = lama;
        this.mbl = mbl;
        this.penyewa = penyewa;
        this.totalHarga = totalHarga;
        this.bayar = bayar;
    }

    
    

    
    public MobilSewa() {
    
    }
    void print(){
        System.out.println("Kode Sewa : "+kdSewa);
        System.out.println("Data Penyewa");
        System.out.println("------------");
        penyewa.printSewa();
        System.out.println("Data Mobil yang di sewa : ");
        System.out.println("--------------------------");
        mbl.printSewa();
        System.out.println("Lama Sewa : "+lama);
        System.out.println("Tanggal Pinjam : "+tglPinjam);
        System.out.println("Tanggal Kembali : "+tglKembali);
        System.out.println("Total Harga : "+totalHarga);
        System.out.println("Bayar : "+bayar);
        System.out.println("------------------------------");


    }
}
