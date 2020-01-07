/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package User;

import Kelas.Billing;
import Kelas.Generator;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.Vector;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

/**
 *
 * @author User
 */
public class User extends javax.swing.JFrame {

    /**
     * Creates new form User
     */
    Generator ct = new Generator(this);
    Billing bill;
    private List<Billing> listBilling = new ArrayList<Billing>();
    public User() {
        initComponents();
    }
    public User(Billing bill) {
        this.bill = bill;
        DateFormat dateFormatWaktu = new SimpleDateFormat("HH:mm:ss");  
        DateFormat dateFormatTgl = new SimpleDateFormat("EEEE, dd MMMM yyyy", new java.util.Locale("ID"));
        initComponents();
        
        labelNama.setText(bill.getUsername());
        labelJenis.setText(bill.getJenis_billing());
        labelJam.setText(String.valueOf(bill.getJumlah_jam())+" Jam");
        labelJumlah.setText(String.valueOf("Rp. "+bill.getBiaya()));
        Mulai.setText(dateFormatTgl.format(bill.getJam_mulai())+", "+dateFormatWaktu.format(bill.getJam_mulai()));
//        labelMulai.setText(dateFormatTgl.format(bill.getJam_mulai())+", "+dateFormatWaktu.format(bill.getJam_mulai()));        labelMulai.setText(dateFormatTgl.format(bill.getJam_mulai())+", "+dateFormatWaktu.format(bill.getJam_akhir()));
        labelAkhir.setText(dateFormatTgl.format(bill.getJam_akhir())+", "+dateFormatWaktu.format(bill.getJam_akhir()));
        ct.nextDate(bill.getJam_akhir());
        Thread t = new Thread(new Jalan());
        t.start();

    }
    public class Jalan implements Runnable{
        
        @Override
        public void run() {
        while (true) {
            
            labelSelisih.setText(ct.Mundur());
            String mundur = "0 hari 0 jam 0 menit 0 detik";
            if (ct.Mundur().equalsIgnoreCase(mundur)) {
                Disconnect();
                break;
            }
            try {
                Thread.sleep(100);
            } catch (InterruptedException ex) {
                Logger.getLogger(User.class.getName()).log(
                   Level.SEVERE, null, ex);
            }
        }
    }
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jButton1 = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        labelJenis = new javax.swing.JLabel();
        jButton2 = new javax.swing.JButton();
        labelJam = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        labelJumlah = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        labelNama = new javax.swing.JLabel();
        ww = new javax.swing.JLabel();
        ll = new javax.swing.JLabel();
        labelAkhir = new javax.swing.JLabel();
        labelSelisih = new javax.swing.JLabel();
        Mulai = new javax.swing.JLabel();

        jButton1.setText("jButton1");

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel1.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        jLabel1.setText("WARNET KELOMPOK 9");

        labelJenis.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelJenis.setText("Jenis");

        jButton2.setText("Disconect");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        labelJam.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelJam.setText("10:00:00");

        jLabel6.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        jLabel6.setText("Biaya");

        labelJumlah.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelJumlah.setText("5000");

        jLabel3.setFont(new java.awt.Font("Times New Roman", 1, 12)); // NOI18N
        jLabel3.setText("Jl. Simpang Remujung No. 10 Kota Malang   081334254259");

        jLabel4.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        jLabel4.setText("Username");

        labelNama.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelNama.setText("NAMA");

        ww.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        ww.setText("Mulai");

        ll.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        ll.setText("Akhir");

        labelAkhir.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelAkhir.setText("Akhir");

        labelSelisih.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        labelSelisih.setText("Akhir");

        Mulai.setFont(new java.awt.Font("Times New Roman", 1, 14)); // NOI18N
        Mulai.setText("Mulai");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jButton2)
                .addGap(34, 34, 34))
            .addGroup(layout.createSequentialGroup()
                .addGap(60, 60, 60)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(labelSelisih)
                    .addComponent(jLabel3)
                    .addComponent(jLabel1)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(labelJenis)
                            .addComponent(jLabel6)
                            .addComponent(jLabel4))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addGroup(layout.createSequentialGroup()
                                .addGap(3, 3, 3)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addGroup(layout.createSequentialGroup()
                                        .addComponent(labelJam)
                                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                        .addComponent(ll))
                                    .addGroup(layout.createSequentialGroup()
                                        .addComponent(labelJumlah)
                                        .addGap(0, 0, Short.MAX_VALUE))))
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(labelNama)
                                .addGap(74, 74, 74)
                                .addComponent(ww)))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(labelAkhir)
                            .addComponent(Mulai))))
                .addContainerGap(168, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel3)
                .addGap(31, 31, 31)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabel4)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(labelJenis)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jLabel6))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(labelNama)
                            .addComponent(ww)
                            .addComponent(Mulai))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(labelJam)
                            .addComponent(ll)
                            .addComponent(labelAkhir))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(labelJumlah)))
                .addGap(18, 18, 18)
                .addComponent(labelSelisih)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 50, Short.MAX_VALUE)
                .addComponent(jButton2)
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:
        Disconnect();
    }//GEN-LAST:event_jButton2ActionPerformed
    private void Disconnect(){
        bacaObject();
        for (Billing billing : listBilling) {
            if (billing.getUsername().equalsIgnoreCase(bill.getUsername())) {
                billing.setStatus("Offline");
            }
        }
        simpanData();
        JOptionPane.showMessageDialog(null, "Anda telah Disconnect");
        StrukUser su = new StrukUser(bill);
        this.setVisible(false);
        su.setVisible(true);
    }
    private void bacaObject(){
        try {
            FileInputStream fin = new FileInputStream("billing.txt");
            ObjectInputStream oin = new ObjectInputStream(fin);
            try {
// Read the vector back from the list
                Object obj = oin.readObject();
// Cast back to a vector
                listBilling = (Vector) obj;
            } catch (ClassCastException cce) {
// Can't read it, create a blank one
                listBilling = new Vector();
            } catch (ClassNotFoundException cnfe) {
// Can't read it, create a blank one
                listBilling = new Vector();
            }
            fin.close();
        } catch (FileNotFoundException fnfe) {
// Create a blank vector
            listBilling = new Vector();
        } catch (IOException ex) {
            Logger.getLogger(User.class.getName()).log(Level.SEVERE, null, ex);
        }
//        JOptionPane.showMessageDialog(null, "Data Dibaca");
    }
    public void simpanData(){
        FileOutputStream fout;
        try {
            fout = new FileOutputStream("billing.txt");
            ObjectOutputStream oout = new ObjectOutputStream(fout);
// Write the object to the stream
            oout.writeObject(listBilling);
            fout.close();
//            JOptionPane.showMessageDialog(null, "Data Disimpan");

        } catch (FileNotFoundException ex) {
            Logger.getLogger(User.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(User.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(User.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(User.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(User.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(User.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new User().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel Mulai;
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel labelAkhir;
    private javax.swing.JLabel labelJam;
    private javax.swing.JLabel labelJenis;
    private javax.swing.JLabel labelJumlah;
    private javax.swing.JLabel labelNama;
    private javax.swing.JLabel labelSelisih;
    private javax.swing.JLabel ll;
    private javax.swing.JLabel ww;
    // End of variables declaration//GEN-END:variables
}