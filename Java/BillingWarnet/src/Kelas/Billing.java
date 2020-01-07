/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Kelas;

import java.util.Date;

/**
 *
 * @author Noiid
 */
public class Billing implements java.io.Serializable {
    String username;
    String jenis_billing;
    float jumlah_jam;
    Date jam_mulai;
    Date jam_akhir;
    int biaya;
    String status;
    static final long serialVersionUID = 1L;

    public Billing() {
    }

    public Billing(String username, String jenis_billing, float jumlah_jam, Date jam_mulai, Date jam_akhir, int biaya, String status) {
        this.username = username;
        this.jenis_billing = jenis_billing;
        this.jumlah_jam = jumlah_jam;
        this.jam_mulai = jam_mulai;
        this.jam_akhir = jam_akhir;
        this.biaya = biaya;
        this.status = status;
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

    public float getJumlah_jam() {
        return jumlah_jam;
    }

    public void setJumlah_jam(float jumlah_jam) {
        this.jumlah_jam = jumlah_jam;
    }

    public Date getJam_mulai() {
        return jam_mulai;
    }

    public void setJam_mulai(Date jam_mulai) {
        this.jam_mulai = jam_mulai;
    }

    public Date getJam_akhir() {
        return jam_akhir;
    }

    public void setJam_akhir(Date jam_akhir) {
        this.jam_akhir = jam_akhir;
    }

    public int getBiaya() {
        return biaya;
    }

    public void setBiaya(int biaya) {
        this.biaya = biaya;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    @Override
    public String toString() {
        return super.toString(); //To change body of generated methods, choose Tools | Templates.
    }

    

    
    
    
    
}
