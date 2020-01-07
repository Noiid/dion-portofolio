/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Kelas;

import User.User;
import java.io.IOException;
import java.util.Date;  
import java.text.DateFormat;  
import java.text.SimpleDateFormat;  
import java.util.Calendar;
import java.util.Locale;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author SYUKRON
 */
public class Generator {
    private User view;
    public String tanggal;
    public String time;
    public String besok;
    private Date hari;
    private String pola = null;
    private String loc = null;
    private String hasil = null;
    public static int countdown = 24 * 60 * 60;
//    ControllerTugas tgl = new ControllerTugas(); 
    
    public Generator(User view){
        this.view = view;
    }
    private String getTanggal() {  
        DateFormat dateFormat = new SimpleDateFormat("EEEE, dd MMMM yyyy");  
        Date date = new Date();  
        return dateFormat.format(date);  
    }  
     
    private String getWaktu() {  
        DateFormat dateFormat = new SimpleDateFormat("HH:mm:ss");  
        Date date = new Date();  
        return dateFormat.format(date);  
    } 
       
    public static void main(String Args[]){  
         
//        System.out.println("Sekarang tanggal : "+tgl.getTanggal()); 
//        System.out.println("Waktu sekarang : "+tgl.getWaktu());
//        tanggal = tgl.getTanggal();
//        System.out.println(tanggal);
    }
    
    public String tanggal(){
        tanggal = getTanggal();
//        System.out.println(tanggal);
        return tanggal;
    }
    
    public String time(){
        time = getWaktu();
//        System.out.println(time);
        return time;
    }
    
    public String besok(){
        DateFormat dateFormat = new SimpleDateFormat("EEEE, dd MMMM yyyy");  
        Date date = new Date();
        
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.DATE, 1);
        date = c.getTime();
        besok = dateFormat.format(date);
        return besok;
    }
    public void nextDate(Date date){
        hari = date;
    }
    public void nextTime(int th, int bl, int dt, int jm, int mnt, int dtk){
        Calendar ct = Calendar.getInstance();
        ct.setTime(new Date(0));
        ct.set(Calendar.YEAR, th);
        ct.set(Calendar.MONTH, bl);
        ct.set(Calendar.DAY_OF_MONTH, dt);
        ct.set(Calendar.HOUR_OF_DAY, jm);
        ct.set(Calendar.MINUTE, mnt);
        ct.set(Calendar.SECOND, dtk);

        hari = ct.getTime();
    }
    
    public String setDate(){
        pola = "EEEE, dd MMMM yyyy";
        hasil = show(hari, pola, null);
        return hasil;
    }
    
    public String setTime(){
        pola = "hh:mm:ss";
        hasil = show(hari, pola, null);
        return hasil;
    }
    
    protected static String show(Date time, String pola, Locale loct){
        String tglnya = null;
        SimpleDateFormat formatter = null;
        if(loct == null){
            formatter = new SimpleDateFormat(pola);
        }else{
            formatter = new SimpleDateFormat(pola, loct);
        }
        tglnya = formatter.format(time);
        return tglnya;
    }
    
    public String Mundur(){
        Date today = new Date();
        long diff = hari.getTime() - today.getTime();
        long sec = diff/1000;
        
        long day = sec/countdown;
        long secday = sec%countdown;
        long detik = secday%60;
        long menit = (secday/60)%60;
        long jam = (secday/3600);
        
        hasil = day+" hari "+jam+" jam "+menit+" menit "+detik+" detik";
            return hasil;
    }
}
