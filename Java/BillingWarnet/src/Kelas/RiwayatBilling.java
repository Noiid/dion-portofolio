/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Kelas;

/**
 *
 * @author Noiid
 */
public class RiwayatBilling {
    String username;
    String jenis_billing;
    int jumlah_jam;
    int biaya;
    static final long serialVersionUID = 1L;

    public RiwayatBilling() {
    }

    public RiwayatBilling(String username, String jenis_billing, int jumlah_jam, int biaya) {
        this.username = username;
        this.jenis_billing = jenis_billing;
        this.jumlah_jam = jumlah_jam;
        this.biaya = biaya;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getJenis_billing() {
        return jenis_billing;
    }

    public void setJenis_billing(String jenis_billing) {
        this.jenis_billing = jenis_billing;
    }

    public int getJumlah_jam() {
        return jumlah_jam;
    }

    public void setJumlah_jam(int jumlah_jam) {
        this.jumlah_jam = jumlah_jam;
    }

    public int getBiaya() {
        return biaya;
    }

    public void setBiaya(int biaya) {
        this.biaya = biaya;
    }
    
}
