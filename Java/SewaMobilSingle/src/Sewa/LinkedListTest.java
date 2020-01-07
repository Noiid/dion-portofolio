/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Sewa;

import java.util.Scanner;
import java.util.Date;
import java.text.Format;
import java.text.DateFormat;
import java.text.SimpleDateFormat;

/**
 *
 * @author SPLASH
 */
public class LinkedListTest {

    static Scanner scan = new Scanner(System.in);
    static Scanner scanLine = new Scanner(System.in);
    static Scanner scanMbl = new Scanner(System.in);


//    static void menuCustomer() {
//        System.out.println("Memilih menu : ");
//        System.out.println("1. Lihat daftar Mobil");
//        System.out.println("2. Sewa Mobil");
//        System.out.println("3. Mobil yang disewa");
//        System.out.println("4. Kembalikan");
//        System.out.println("5. Logout");
//    }
    static String dateCurrent() {
        DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
        Date date = new Date();
        String dDate = dateFormat.format(date);
        return dDate;
    }

    static String setTanggalKembali(int month, int date, int year, int batasBulan, int day) {
        int bulanKembali = month;
        int tanggalKembali = day + date;
        int tahunKembali = year;
        if (tanggalKembali > batasBulan) {
            bulanKembali = bulanKembali + 1;
            tanggalKembali = tanggalKembali - batasBulan;
            if (bulanKembali > 12) {
                tahunKembali = tahunKembali + 1;
                bulanKembali = bulanKembali - 12;
            }
        }
        String kembali = tanggalKembali + "/" + bulanKembali + "/" + tahunKembali;
        return kembali;
    }

    static int setBatasBulan(int month) {
        int batasBulan = 0;
        if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) {
            batasBulan = 31;
        } else if (month == 4 || month == 6 || month == 9 || month == 11) {
            batasBulan = 30;
        } else if (month == 2) {
            batasBulan = 28;
        } else {
            batasBulan = 0;
        }
        return batasBulan;
    }

    static int handleInput(String message) {
        int input = -1;
        try {
            input = scan.nextInt();
        } catch (Exception e) {
            System.out.println(message);
            System.exit(1);
        }
        return input;
    }

    static int handleJumHari() {
        int date = 0;
        do {
            System.out.print("Masukkan Jumlah hari(maks. 7) : ");
            date = handleInput("\n    * Inputan harus angka!");
            if (date > 7 || date < 1) {
                System.out.println("\n    Maaf, jumlah hari invalid\n");
            }
        } while (date > 7 || date < 1);
        return date;
    }

    static int handlePembayaran(int hrg) {
        int date = 0;
        int setengah = hrg / 2;
        do {
            System.out.print("Masukkan DP (min 50% total harga) : ");
            date = handleInput("\n    * Inputan harus angka!");
            if (date < setengah) {
                System.out.println("\n    Maaf, pembayaran minimal " + setengah);
            }
        } while (date < setengah);
        return date;
    }

    static int handlePelunasan(int hrg) {
        int date = 0;
        do {
            System.out.print("Masukkan Besar Pelunasan : ");
            date = handleInput("\n    * Inputan harus angka!");
            if (date < hrg) {
                System.out.println("\n    Maaf, pembayaran minimal " + hrg);
            }
        } while (date < hrg);
        return date;
    }

    static char handleInputChar(String message) {
        char input = 'a';
        try {
            input = scanLine.next(".").charAt(0);
        } catch (Exception e) {
            System.out.println(message);
            System.exit(1);
        }
        return input;
    }

    static String handleInputString(String message) {
        String input = "a";
        try {
            input = scanLine.nextLine();
        } catch (Exception e) {
            System.out.println(message);
            System.exit(1);
        }
        return input;
    }

    static String handleNIK(String perihal) {
        String nik = " ";
        do {
            System.out.print("Masukkan " + perihal + " : ");
            nik = handleInputString("\n    * Inputan harus angka!");
            if (!nik.matches("[0-9]*")) {
                System.out.println("\n   *  Harap masukkan angka\n");
            }
        } while (!nik.matches("[0-9]*"));
        return nik;
    }

    static void menu() {
        System.out.println("      PT. RO-CAR MALANG    ");
        System.out.println("Memilih menu : ");
        System.out.println("1. Tambah Mobil");
        System.out.println("2. Hapus Mobil");
        System.out.println("3. Lihat Data Mobil");
        System.out.println("4. Sewa Mobil");
        System.out.println("5. Lihat Data Penyewaan");
        System.out.println("6. Kembalikan Mobil");
        System.out.println("7. Cari Mobil");
        System.out.println("8. Cari Data Sewa");
        System.out.println("9. Logout");
    }

    public static void main(String[] args) {
        LinkedList dllM = new LinkedList();
        LinkedListSewa dllS = new LinkedListSewa();
//        Mobil[] Mb = new Mobil[10];
//        Mb[0] = new Mobil("SUV112", "Pajero Sport", "SUV", "N 01238 BA", "available", 300000);
        dllM.addFirst(new Mobil("SUV112", "Pajero Sport", "SUV", "N 01238 BA", "available", 300000));
//        Mb[1] = new Mobil("SDN091", "Honda Civic", "Sedan", "L 7682 IK", "available", 500000);
        dllM.addLast(new Mobil("SDN091", "Honda Civic", "Sedan", "L 7682 IK", "available", 500000));
//        Mb[2] = new Mobil("MNV222", "Nissan Grand Livina", "Minivan", "N 9911 S", "available", 250000);
        dllM.addLast(new Mobil("MNV222", "Nissan Grand Livina", "Minivan", "N 9911 S", "available", 250000));
//        Mb[3] = new Mobil("SDN025", "Toyota Vios", "Sedan", "M 1692 LP", "available", 400000);
        dllM.addLast(new Mobil("SDN025", "Toyota Vios", "Sedan", "M 1692 LP", "available", 400000));
//        Mb[4] = new Mobil("SUV612", "Daihatsu Terios", "SUV", "N 1087 BB", "available", 500000);
        dllM.addLast(new Mobil("SUV612", "Daihatsu Terios", "SUV", "N 1087 BB", "available", 500000));
//        Mb[5] = new Mobil("SUV920", "Land Cruiser", "SUV", "L 1298 AA", "available", 650000);
        dllM.addLast(new Mobil("SUV920", "Land Cruiser", "SUV", "L 1298 AA", "available", 650000));
//        Mb[6] = new Mobil("SDN661", "Toyota Corona", "Sedan", "N 5672 OP", "available", 300000);
        dllM.addLast(new Mobil("SDN661", "Toyota Corona", "Sedan", "N 5672 OP", "available", 300000));
//        Mb[7] = new Mobil("HTB290", "Honda Jazz", "Hatch Back", "P 6865 LK", "available", 400000);
        dllM.addLast(new Mobil("HTB290", "Honda Jazz", "Hatch Back", "P 6865 LK", "available", 400000));
//        Mb[8] = new Mobil("SDN872", "Chevrolet Kalos", "Sedan", "M 6678 KA", "available", 350000);
        dllM.addLast(new Mobil("SDN872", "Chevrolet Kalos", "Sedan", "M 6678 KA", "available", 350000));
//        Mb[9] = new Mobil("SDN793", "VW Beetle", "Sedan", "N 2381 IU", "available", 700000);
        dllM.addLast(new Mobil("SDN793", "VW Beetle", "Sedan", "N 2381 IU", "available", 700000));
        

        try {
            int pilih = 0;
            do {
                
                int data = 0;
                int dataIndex = 0;
                int dataIndexKembali = 0;
                int statusMobil = 0;
                String milihKB = "";
                String milihMB = "";
                int pilihMobil = -1;
                String kMobil = "", nMobil = "", katMobil = "", nopolMobil = "", status = "";
                int harMobil = 0;
                menu();
                System.out.print("Masukkan pilihan : ");
                pilih = scan.nextInt();
                switch (pilih) {
                    case 1:
                        System.out.println("Masukkan data Mobil : ");
                        System.out.print("Kode Mobil : ");
                        kMobil = scanLine.nextLine();
                        System.out.print("Nama Mobil : ");
                        nMobil = scanLine.nextLine();
                        System.out.print("Kategori Mobil :  ");
                        katMobil = scanLine.nextLine();
                        System.out.print("No Polisi : ");
                        nopolMobil = scanLine.nextLine();
                        System.out.print("Status Mobil : ");
                        status = scanLine.nextLine();
                        System.out.print("Harga Mobil : ");
                        harMobil = scan.nextInt();
                        Mobil MbBaru = new Mobil(kMobil, nMobil, katMobil, nopolMobil, status, harMobil);
                        dllM.addLast(MbBaru);
                        System.out.println("Data berhasil di tambahkan!");
                        break;
                    case 2:
                        System.out.print("Masukkan kode mobil : ");
                        String kdM = scanLine.nextLine();
                        dllM.removeKey(kdM);
                        break;
                    case 3:
                        dllM.print();
                        break;
                    case 4:
                        dllM.print();
                        System.out.print("Masukkan Kode Mobil : ");
                        milihMB = scanMbl.nextLine();
                        dataIndex = dllM.getKey(milihMB);
                        Mobil MbPinjam;
                        MbPinjam = dllM.get(dataIndex);
                        System.out.println(MbPinjam.kdMobil);
                        statusMobil = dllM.getStatusMobil(milihMB);

                        if (statusMobil == 1) {
                            String kodSewa = "TRO" + MbPinjam.kdMobil;
                            System.out.print("Masukkan Nama Penyewa : ");
                            String namaPenyewa = handleInputString(" Inputan harus String");
                            String NIK = handleNIK("NIK");
                            String NoSIM = handleNIK("No SIM");
                            System.out.print("Masukkan Alamat : ");
                            String alamat = handleInputString(" Inputan harus String");
                            String noHp = handleNIK("No HP");
                            String tglPinjam = dateCurrent();
                            System.out.println("Tanggal Pinjam : " + dateCurrent());
                            int lamaHari = handleJumHari();
                            int tgl = Integer.valueOf(tglPinjam.substring(0, 2));
                            int bulan = Integer.valueOf(tglPinjam.substring(3, 5));
                            int tahun = Integer.valueOf(tglPinjam.substring(6, 10));
                            int batasBulan = setBatasBulan(bulan);
                            String tglKembali = setTanggalKembali(bulan, tgl, tahun, batasBulan, lamaHari);
                            System.out.println("Tgl Kembali : " + tglKembali);
                            int totHarga = MbPinjam.harga * lamaHari;
                            System.out.println("Total Harga : " + totHarga);
                            int bayar = handlePembayaran(totHarga);
                            int kembali = totHarga - bayar;
                            if (bayar >= totHarga) {
                                int cashback = bayar - totHarga;
                                bayar = totHarga;
                                System.out.println("Sudah Lunas");
                                System.out.println("Cashback : " + cashback);
                            } else {
                                System.out.println("Pelunasan sebesar " + kembali + " dibayarkan pada saat mengembalikan mobil");
                            }

                            User cust = new User(namaPenyewa, NIK, NoSIM, alamat, noHp);
                            MobilSewa MobPJM = new MobilSewa(kodSewa, tglPinjam, tglKembali, lamaHari, MbPinjam, cust, totHarga, bayar);
                            dllS.addLast(MobPJM);
                            dllM.changeAtrib(milihMB, "unavailable");
                        } else {
                            System.out.println("Maaf mobil tidak bisa disewakan");
                        }

                        break;
                    case 5:
                        dllS.print();
                        break;
                    case 6:
                        dllS.print();
                        if (!dllS.isEmpty()) {
                            int biayaTambah = 0;
                            System.out.println("Masukkan Kode Sewa : ");
                            milihKB = scanLine.nextLine();
                            dataIndexKembali = dllS.getKey(milihKB);
                            String kdMblKembali = dllS.get(dataIndexKembali).mbl.kdMobil;
                            MobilSewa MbKembali;
                            MbKembali = dllS.get(dataIndexKembali);
                            if (dataIndexKembali != -1) {
                                MbKembali.print();
                                
                                System.out.println("");
                                System.out.print("Apakah ada kerusakan ?");
                                char rusak = handleInputChar("Inputan harus char Y/T");
                                if (rusak == 'y' || rusak == 'Y') {
                                    System.out.print("Masukkan biaya tambahan : ");
                                    biayaTambah = scan.nextInt();
                                } else {
                                    biayaTambah = 0;
                                }
                                dllS.changeAtribBack(milihKB, MbKembali.totalHarga + biayaTambah);
                                int selisih = MbKembali.totalHarga - MbKembali.bayar;
                                if (selisih == 0) {
                                    System.out.println("Terima Kasih!");
                                } else {
                                    System.out.println("Yang harus dibayar : " + (MbKembali.totalHarga - MbKembali.bayar));
                                    int bayarLunas = handlePelunasan(MbKembali.totalHarga - MbKembali.bayar);
                                    int feedback = MbKembali.totalHarga - MbKembali.bayar - bayarLunas;
                                    System.out.println("Cashback : " + feedback);
                                    System.out.println("Terima Kasih!");
                                }
                                dllM.changeAtrib(kdMblKembali, "available");
                                System.out.println("Mobil berhasil di kembalikan");
                                dllS.removeKey(milihKB);
                            } else {
                                System.out.println("Mobil yang akan dikembalikan tidak tersedia");
                            }
                        }

                        break;
                    case 7:
                        dllM.print();
                        System.out.print("Masukkan kode mobil : ");
                        String kdMBL = scanLine.nextLine();
                        int indexTemu = dllM.getKey(kdMBL);
                        if (indexTemu != -1) {
                            dllM.get(indexTemu).print();
                        } else {
                            System.out.println("Data tidak ditemukan");
                        }
                        break;
                    case 8:
                        dllS.print();
                        if (!dllS.isEmpty()) {
                            System.out.print("Masukkan kode sewa : ");
                            String kodeSew = scanLine.nextLine();
                            int indexTemuSewa = dllS.getKey(kodeSew);
                            if (indexTemuSewa != -1) {
                                dllS.get(indexTemuSewa).print();
                            } else {
                                System.out.println("Data tidak ditemukan");
                            }
                        }

                        break;
                }
            } while (pilih != 9);
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }

    }

}
