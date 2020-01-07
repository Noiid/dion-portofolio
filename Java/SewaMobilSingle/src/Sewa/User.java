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
public class User {
    String nama;
    String NIK;
    String noSim;
    String alamat;
    String noHP;

    public User(String nama, String NIK, String noSim, String alamat, String noHP) {
        this.nama = nama;
        this.NIK = NIK;
        this.noSim = noSim;
        this.alamat = alamat;
        this.noHP = noHP;
    }
    void print(){
        System.out.print("Nama Penyewa : "+nama+" | \t");
        System.out.print("NIK : "+NIK+" | \t");
        System.out.print("No SIM : "+noSim+" | \t");
        System.out.print("Alamat : "+alamat+" | \t");
        System.out.print("No HP : "+noHP+" | \t");
    }
    void printSewa(){
        System.out.println("Nama Penyewa : "+nama);
        System.out.println("NIK : "+NIK);
        System.out.println("No SIM : "+noSim);
        System.out.println("Alamat : "+alamat);
        System.out.println("No HP : "+noHP);
    }
}
