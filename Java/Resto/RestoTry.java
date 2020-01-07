	import java.util.Scanner;

	class RestoTry {
		public static void main(String[] args) {
			char pembelian;
			char pilih;
			int kode; 
			int porsi;
			int jumlah; 
			int banyak;
			int jumlah2; 
			int banyak2;
			int meja;
			int duit=0;
			double total=0;
			double bayar=0;
			double total2=0;
			double total_seluruh=0;
			double bayar2=0;
			double kembalian=0;
			double pajak=0;
			double ppn=0.1;
			double totalbayar=0;
			String pembeli;
			String makanan[]={
				"Nasi Goreng Mawut",
				"Nasi Goreng Original",
				"Nasi Pecel",
				"Gado-gado",
				"Bakmie",
				"Mie Ayam",
				"Mie Pangsit",
				"Ayam Koloke",
				"Steak Ayam",
				"Steak Sinderloin",
				"Nasi Ayam Bakar",
				"Nasi Rawon",
				"Nasi Bali",
				"Kari Ayam",
				"Lalapan Ayam",
				"Kentang Goreng",
				"Tahu Bakso",
				"Sate Usus",
				"Bakso",
				"Nasi Putih"
			    }; //value dari array makanan
	    	double harga_makanan[]={
	    		12000,
	    		9000,
	    		11000,
	    		9000,
	    		9000,
	    		7000,
	    		7000,
	    		13000,
	    		13500,
	    		12000,
	    		11000,
	    		9000,
	    		8500,
	    		8500,
	    		12000,
	    		6000,
	    		5000,
	    		6500,
	    		8000,
	    		4000
	    		}; //value dari array harga makanan
	    	String minuman[]={
	    		"Jus Apel",
	    		"Jus Mangga",
	    		"Jus Alpukat",
	    		"Jus Melon",
	    		"Cappucino Hangat",
	    		"Cappucino Es",
	    		"Es Susu Coklat",
	    		"Milkshake Coklat",
	    		"Milkshake Vanilla",
	    		"Milkshake Strawberry",
	    		"Soda Gembira",
	    		"Joshua",
	    		"Sprite",
	    		"Fanta",
	    		"Teh Botol",
	    		"Teh Hangat",
	    		"Jeruk Hangat",
	    		"Susu Coklat Hangat",
	    		"Soda Putih",
	    		"Air Mineral"
		    	}; //value dari array minuman
	    	double harga_minuman[]={
	    		10000,
	    		10000,
	    		11000,
	    		10000,
	    		6000,
	    		7000,
	    		6500,
	    		11000,
	    		11000,
	    		11000,
	    		10000,
	    		8000,
	    		7000,
	    		7000,
	    		5000,
	    		6000,
	    		7000,
	    		6500,
	    		5000,
	    		3500
	    		}; //value dari array harga minuman

	    	Scanner inputLine = new Scanner(System.in); //membuat object Scanner untuk tipe data String atau char
	    	Scanner inputInt = new Scanner(System.in); //membuat object Scanner untuk tipe data int atau double
	    	do{



	    		System.out.println("\n =============================================================================\n");
	    		System.out.println("          ***************** DAFTAR MENU RESTO JAWA 68 *****************\n");
	    		System.out.println(" =============================================================================\n");
	    		System.out.println(" =============================================================================");
	    		System.out.println(" ||   >> MAKANAN :                   ");
	    		System.out.println(" =============================================================================");
	    		System.out.println(" || ");

	    		for (int a=0 ; a < makanan.length; a++ ){
	    			int ax = a+1;
	    			System.out.println(" || "+ax+".  "+makanan[a]);
	    			System.out.println(" || \t\t\t\tRp."+harga_makanan[a]);
		    } // for untuk menampilkan list dari array makanan dan harga makanan
		    System.out.println(" || ");
		    System.out.println(" =============================================================================");
		    System.out.println(" ||   >> MINUMAN :                   ");
		    System.out.println(" =============================================================================");

		    for (int a=0 ; a < minuman.length; a++ ){
		    	int ax = a+1;
		    	System.out.println(" || "+ax+".  "+minuman[a]);
		    	System.out.println(" || \t\t\t\tRp."+harga_minuman[a]);
		    } // for untuk menampilkan list dari array minuman dan harga minuman
		    System.out.println(" =============================================================================");
		    System.out.println();
		    System.out.println();
		    System.out.println(" =============================================================================");
		    System.out.println(" ||                                                                         ||");
		    System.out.println(" ||              ***************** PEMESANAN *****************              ||");
		    System.out.println(" ||                                                                         ||");
		    System.out.println(" =============================================================================\n");
		    System.out.print("\n  Nomor Meja                = ");
		    meja = inputInt.nextInt(); // input nomor meja
		    System.out.print("\n  Nama Pembeli              = ");
		    pembeli = inputLine.nextLine(); // input nama pembeli
		    System.out.print("\n  Jumlah Menu Makanan Yang Dipesan = ");
		    banyak = inputInt.nextInt(); // input jumlah menu makanan

		    jumlah=1;
		    bayar=0;
		    for(jumlah=1;jumlah<=banyak;jumlah++) //untuk melakukan perulangan saat ingin memesan makanan sesuai dengan jumlah yang diinputkan
		    {
		    	System.out.print(" \n\n  Masukan Kode Menu = "); 
		        kode = inputInt.nextInt(); //input kode menu makanan yang akan dipesan
		        System.out.print("\n");
		        System.out.print("  Nama Makanan = "+makanan[kode - 1]+"\n"); //akan memunculkan nilai dari array makanan pada indeks [kode - 1]
		        System.out.print("  Harga        = Rp"+harga_makanan[kode - 1]+",-"+"\n"); //akan memunculkan nilai dari array harga_makanan pada indeks [kode - 1]
		        System.out.print("  Jumlah Porsi = ");
		        porsi = inputInt.nextInt(); //input porsi yang diinginkan
		        total=harga_makanan[kode - 1]*porsi; // total menghitung dari array harga_makanan pada indeks [kode - 1] dikalikan porsi
		        System.out.print("  Total Harga  = Rp"+total+",-"+"\n");
		        bayar=bayar+total; // bayar akan menghitung bayar ditambahkan total
		    }

		    System.out.print("\n\n  Jumlah Menu Minuman Yang Dipesan = "); // input jumlah menu makanan
		    banyak2 = inputInt.nextInt();
		    jumlah2=1;
		    bayar2=0;
		    for(jumlah2=1;jumlah2<=banyak2;jumlah2++) //untuk melakukan perulangan saat ingin memesan minuman sesuai dengan jumlah yang diinputkan
		    {
		    	System.out.print(" \n\n  Masukan Kode Menu = "); 
		        kode = inputInt.nextInt(); //input kode menu minuman yang akan dipesan
		        System.out.print("\n");
		        System.out.print("  Nama Makanan = "+minuman[kode - 1]+"\n"); //akan memunculkan nilai dari array minuman pada indeks [kode - 1]
		        System.out.print("  Harga        = Rp"+harga_minuman[kode - 1]+",-"+"\n"); //akan memunculkan nilai dari array harga_minuman pada indeks [kode - 1]
		        System.out.print("  Jumlah Porsi = ");
		        porsi = inputInt.nextInt(); //input porsi yang diinginkan
		        total2=harga_minuman[kode - 1]*porsi; // total2 menghitung dari array harga_minuman pada indeks [kode - 1] dikalikan porsi
		        System.out.print("  Total Harga  = Rp"+total2+",-"+"\n");
		        bayar2=bayar2+total2; // bayar2 akan menghitung bayar ditambahkan total2
		    }


		        total_seluruh=bayar+bayar2; //total mengitung bayar ditambahkan bayar2
		        pajak = total_seluruh * ppn; //pajak menghitung total_seluruh dikalikan dengan ppn yang bernilai 10% atau 0,1
		        totalbayar=total_seluruh+pajak; //totalbayar menghitung total_seluruh ditambahkan pajak
		        System.out.println();
		        System.out.println(" =============================================================================");
		        System.out.println(" ||                                                                         ||");
		        System.out.println(" ||              ***************** PEMBAYARAN *****************             ||");
		        System.out.println(" ||                                                                         ||");
		        System.out.println(" =============================================================================\n");
		        System.out.print("\n  Meja               \t\t\t  = "+meja);
		        System.out.print("\n  Nama Pembeli       \t\t\t  = "+pembeli.toUpperCase());
		        System.out.print("\n  Total Makanan      \t\t\t  = Rp"+bayar+",-");
		        System.out.print("\n  Total Minuman      \t\t\t  = Rp"+bayar2+",-");
		        System.out.print("\n  Total              \t\t\t  = Rp"+total_seluruh+",-");
		        System.out.print("\n  PPN 10%            \t\t\t  = Rp"+pajak+",-");
		        System.out.print("\n  Total Bayar        \t\t\t  = Rp"+totalbayar+",-");
		        do{
		        	System.out.print("\n\n  Pembayaran      \t\t\t  = Rp");
			    	duit= inputInt.nextInt(); //input pembayaran dengan variabel duit
			    	if(duit < totalbayar){ //jika duit yang dibayarkan kurang dari totalbayar maka harus mengulangi menginputkan pembayaran lagi
			    		System.out.print("\n  Maaf uang anda kurang, silahkan masukkan pembayaran lagi!"+"\n");
			    	}
			    	
			    }while(duit < totalbayar);
			    kembalian=duit-totalbayar; // kembalian menghitung duit dikurangi totalbayar
			    System.out.print("\n  Cash Back\t\t\t          = Rp"+kembalian+",-");
			    System.out.print("\n\n\t\t\t((((TERIMA KASIH))))");
			    System.out.print("\n\n\n");

			    System.out.print("  Apakah anda ingin mengulangi?(Y/T)");
		        pilih = inputLine.next(".").charAt(0); //input pilih untuk mengulangi program atau tidak
		    }while(pilih=='Y' || pilih=='y'); //jika inputan berupa Y/y maka program otomatis mengulangi dari awal, kalau selain Y/y maka program otomatis keluar
		}
	}
