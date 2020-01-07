/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package daonya;

import java.io.*;
import java.net.*;
import javax.swing.JFrame;
import objeksnya.timNya;

/**
 *
 * @author Noiid
 */
public class Client extends JFrame {

    public final static int REMOTE_PORT = 5000;
    timNya tims;
    static String tesSeh = " ";

    public static String getTesSeh() {
        return tesSeh;
    }

    public Client() {
        tesSeh = output;
    }

    private static String output = null;

    public static void main(String args[]) throws Exception {

        Socket cl = null;
        BufferedReader is = null;
        DataOutputStream os = null;
        BufferedReader stdin = new BufferedReader(new InputStreamReader(System.in));
        String userInput = "";

// Membuka koneksi ke server pada port REMOTE_PORT
        do {
            try {
                cl = new Socket("192.168.64.30", REMOTE_PORT);
                is = new BufferedReader(new InputStreamReader(cl.getInputStream()));
                os = new DataOutputStream(cl.getOutputStream());
            } catch (UnknownHostException e1) {
                System.out.println("Unknown Host: " + e1);
            } catch (IOException e2) {
                System.out.println("Erorr io: " + e2);
            }
// Menulis ke server

            try {
                System.out.println("Menu : ");
                System.out.println("1. Lihat Standings (ketik : 'lihat')");
                System.out.println("2. Masukkan Hasil Score (ketik contoh : 'CHELSEA 1 0 ARSENAL')");
                System.out.println("3. Tambah Tim ('Tambah NamaTim')");

                System.out.print("Ketik menu : ");
                userInput = stdin.readLine();
                os.writeBytes(userInput + "\n");
            } catch (IOException ex) {
                System.out.println("Error writing to server..." + ex);
            }
// Menerima tanggapan dari server
            try {
                output = is.readLine();
                String arrays[] = output.split("_");
                System.out.println("==========================================================================");
                for (int i = 0; i < arrays.length; i++) {
                    System.out.println(arrays[i]);
                }
                System.out.println("==========================================================================");

            } catch (IOException e) {
                e.printStackTrace();
            }
// close input stream, output stream dan koneksi

            if (userInput.equals("exit")) {
                break;
            }
        } while (true);
        try {
            is.close();
            os.close();
            cl.close();
        } catch (IOException x) {
            System.out.println("Error writing...." + x);
        }

    }
}
