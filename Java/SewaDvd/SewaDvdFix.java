import java.util.Scanner;
import java.util.Random;
import java.util.Date;
import java.lang.Object;
import java.text.Format;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
class SewaDvdFix {
	static Scanner scanAngka = new Scanner(System.in);
	static Scanner scanLine = new Scanner(System.in);
	static Scanner scanString = new Scanner(System.in);
	static Random random = new Random();
	static String tipeDvd[]={
			"Action", 
			"Romance",
			"Horror", 
			"Crime", 
			"Sci-Fi", 
			"War",
			"Cartoon" 
		};
	static String filmDvd[][]={
			{
				"Maze Runner: The Death Cure",
				"Black Panther",
				"Alpha",
				"Tomb Raider",
				"Pacific Rim Uprising",
				"Ready Player One",
				"The New Mutants",
				"Avengers: Infinity War",
				"Solo: A Star Wars Story",
				"Mission: Impossible 6"
			},
			{
				"A Star Is Born",
				"How To Be Single",
				"The Choice",
				"Tumbledown",
				"My Big Fat Greek Wedding 2",
				"Already Tomorrow In Hong Kong",
				"Me before You",
				"Mike And Dave Need Wedding Dates",
				"Maggie’s Plan",
				"Mothers Day"
			},
			{
				"Babadok",
				"Creep",
				"We Are Still Here",
				"Crimson Peak",
				"You're Next",
				"The Conjuring",
				"Let The Right One In",
				"Insidious",
				"Scream",
				"Nightmare on Elm Street"
			},
			{
				"Goodfellas",
				"The Godfather",
				"Pulp Fiction",
				"Sleepless",
				"Xxx: Return Of Xander Cage",
				"John Wick: Chapter 2",
				"The Fate Of The Furious",
				"The Hitman's Bodyguard",
				"Kingsman: The Golden Circle",
				"The Commuter"
			},
			{
				"2001: A Space Odyssey",
				"Star Wars : A New Hope",
				"Alien Franchise",
				"Blade Runner",
				"E.T. the Extra-Terrestrial",
				"The Terminator",
				"Jurassic Park",
				"The Matrix",
				"Minority Report",
				"Inception"
			},
			{
				"Pearl Harbor",
				"Black Hawk Down",
				"We Were Soldiers",
				"Battle Los Angeles",
				"Letters from Iwo Jima",
				"Battleship",
				"U-571",
				"Green Zone",
				"Attack on Leningrad",
				"Valkyrie"
			},
			{
				"Brave",
				"Rango",
				"Toy Story 3",
				"Big Hero 6",
				"Frozen",
				"Wall-e",
				"Happy Feet",
				"Wreck-It Ralph",
				"Ratatouille",
				"Monster Inc."
			}
		};
	static int hargaDvd[]={
			15000,
			13000,
			16000,
			14000,
			12000,
			12000,
			14500
		};
	static void tampilHeader(){
		DateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
		Date date = new Date();
		System.out.println(" \n =========================================================================\n");
	    System.out.println("          ***************** Rental DVD SPLASH *****************\n");
	    System.out.println("           Rental DVD terpercaya, terdapat lebih dari 50 dvd \n");
	    System.out.println("                   Jl. P. M. Yamin 3/175 Kota Malang \n");
	    System.out.println("   "+dateFormat.format(date)+"\n");
	    System.out.println(" =========================================================================\n");
	}
	static void tampilMenu(String tipe[], int harga[]){
		int n= harga.length;
	    System.out.println(" =========================================================================");
	    System.out.println(" ||                             ||                                      ||");
	    System.out.println(" ||\tGenre DVD\t\t||\t\tHarga/hari\t\t||");
	    System.out.println(" ||                             ||                                      ||");
	    System.out.println(" =========================================================================");
	    System.out.println(" ||=============================||======================================||");
	    System.out.println(" ||\t\t\t\t||\t\t\t\t\t||");
		for(int a = 0;a<n;a++){
			int ax = a+1;
			System.out.println(" ||\t"+ax+".\t"+tipe[a]+"\t\t||\t\t"+harga[a]+"\t\t\t||");
			System.out.println(" ||\t\t\t\t||\t\t\t\t\t||");
		}
		System.out.println(" ||=============================||======================================||");
	}
	static void tampilFilm(String film[][], String genre[], int pilihan){
		int pilih=pilihan-1;
		int n= film[0].length;
		System.out.println(" =========================================================================\n");
	   	System.out.println("       "+genre[pilih]+"\n");
	    System.out.println(" =========================================================================\n\n");	    
		for(int a = 0;a<n;a++){
			int ax = a+1;
			System.out.println(" >>\t"+ax+".\t"+film[pilih][a]+"\n");
		}
		System.out.println("\n ||=============================||======================================||\n\n");
	}
	static void tampilHome(String film[][], int nomer){
		int n=film.length;
		for (int a =0;a<n ;a++ ) {
			System.out.println(" >>\t"+film[a][nomer]+"\n");
		}
	}
	static void tampilStruk(String film[], int harga[]){
		int n= film.length;	    
		for(int a = 0;a<n;a++){
			int ax = a+1;
			System.out.println(" >>\t"+ax+".\t"+film[a]+"\n");
			System.out.println("        Harga \t\t: "+harga[a]+"\n");
		}
	}
	
	static int handleSumSewa(){
		int jumlah=0;
		do{
	    	System.out.print(" >> Jumlah sewa Dvd(maks 5) : ");
	    	jumlah = scanAngka.nextInt();
	    	if(jumlah>5||jumlah<1){
	    			System.out.println("\n    * Jumlah antara 1-5\n");
	    		}
	    }while(jumlah>5||jumlah<1);
	    return jumlah;
	}
	static int handleMenuKatalog(String film[],int harga[]){
		int pilih=0;
	    tampilMenu(film,harga);
		do{
	    	System.out.print("  \n || Lihat Katalog pilih genre : ");
	    	pilih= handleInput("\n    * Inputan harus angka!");
	    	if(pilih>film.length||pilih<1){
	    	System.out.println("\n    * Pilihan antara 1-"+film.length+"\n");
	    	}
	    }while(pilih>film.length||pilih<1);
	    return pilih;
	}
	static int handleSubMenuKatalog(String subFilm[][]){
		int pilihDvd=0;
		do{
	    	System.out.print(" >> Pilih Dvd : ");
	    	pilihDvd =  handleInput("\n    * Inputan harus angka!");
	    	if(pilihDvd>subFilm[0].length||pilihDvd<1){
	    		System.out.println("\n    * Pilihan antara 1-"+subFilm[0].length+"\n");
	    	}
	    }while(pilihDvd>subFilm[0].length||pilihDvd<1);
	    return pilihDvd;
	}
	static int handleJumHari(){
		int date=0;
		do{
	    	System.out.print(" >> Masukkan Jumlah hari(maks. 7)\t: ");
	    	date =  handleInput("\n    * Inputan harus angka!");
	    	if(date>7||date<1){
	    		System.out.println("\n    Maaf, jumlah hari invalid\n");
	    	}
	    }while(date>7||date<1);
	    return date;
	}
	static int setBatasBulan(int month){
		int batasBulan=0;
		if(month==1||month==3||month==5||month==7||month==8||month==10||month==12){
	    	batasBulan=31;
	    }else if(month==4||month==6||month==9||month==11){
	    	batasBulan=30;
	    }else if(month==2){
	    	batasBulan=28;
	    }else{
	    	batasBulan=0;
	    } 
	    return batasBulan;
	}
	static int handleTanggal(int batas){
		int date=0;
		do{
	    	System.out.print("\n >> Masukkan Tanggal sewa(1-"+batas+") \t: ");
	    	date =  handleInput("\n    * Inputan harus angka!");
	    	if(date>batas||date<1){
	    		System.out.println("\n   *  Harap masukkan tanggal 1-"+batas);
	    	}
	    }while(date>batas||date<1);
	    return date;
	}
	static String setTanggalKembali(int month,int date, int year, int batasBulan, int day){
		int bulanKembali=month;
	    int tanggalKembali=day+date;
	    int tahunKembali=year;
	    if(tanggalKembali>batasBulan){
	    	bulanKembali=bulanKembali+1;
	    	tanggalKembali=tanggalKembali-batasBulan;
	    	if(bulanKembali>12){
	    		tahunKembali=tahunKembali+1;
	    		bulanKembali=bulanKembali-12;
	    	}
	    }
	    String kembali=tanggalKembali+"-"+bulanKembali+"-"+tahunKembali;
	    return kembali;
	}
	static int handleInput(String message){
		int input= -1;
		try{
			input=scanAngka.nextInt();
		}catch(Exception e){
			System.out.println(message);
			System.exit(1);
		}
		return input;
	}
	static char handleInputChar(String message){
		char input= 'a';
		try{
			input=scanLine.next(".").charAt(0);
		}catch(Exception e){
			System.out.println(message);
			System.exit(1);
		}
		return input;
	}
	static String handleInputString(String message){
		String input= "a";
		try{
			input=scanString.nextLine();
		}catch(Exception e){
			System.out.println(message);
			System.exit(1);
		}
		return input;
	}
	static String handleNIK(String perihal){
		String nik=" ";
		do{
	    	System.out.print("\n >> Masukkan "+perihal+" \t\t: ");
	    	nik=handleInputString("\n    * Inputan harus angka!");
	    	if(!nik.matches("[0-9]*")){
	    		System.out.println("\n   *  Harap masukkan angka\n");
	    	}
	    }while(!nik.matches("[0-9]*"));
	    return nik;
	}
	
	public static void main(String[] args) {	
		DateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
		Date date = new Date();	
		String dDate= dateFormat.format(date);
		int tahunNow=Integer.valueOf(dDate.substring(0,4));
		int acak =0;
		char pilih =' ';
		char ulang=' ';
		String namaPenyewa="";
		String alamat="";
		String nik="";
		int jmlSewa=0;
		int totalBayar=0;
		int pilihDvd=0;
		int hargaSatuan=0;
		int hari=0;
		int bulan=0;
		int tahun=0;
		int tanggal=0;
		int batasBulan=0;
		int tanggalKembali=0;
		int bulanKembali=0;
		int tahunKembali=0;
		int batasTahun=0;
		String dataSewa[];
		int hargaSewa[];
		int menuKatalog=0;
		int menuSubKatalog=0;
		String dKembali="";
		String dMasuk="";	
		String noHp="";	
		do{
	    tampilHeader();
	    System.out.println(" \tSekilas Dvd yang tersedia : \n");
	    acak = random.nextInt(9);
	    tampilHome(filmDvd,acak);
	    System.out.println(" =========================================================================\n");
	    do{
	    	menuKatalog=handleMenuKatalog(tipeDvd,hargaDvd);
	    	System.out.println();
	    	tampilFilm(filmDvd,tipeDvd,menuKatalog);
	    	System.out.println();
	    	System.out.print(" || Apakah anda ingin mengulangi lihat Katalog?(Y/T)");
		    pilih = handleInputChar("\n    * Inputan harus char!");
		    if ((pilih=='y'||pilih=='Y')||(pilih=='t'||pilih=='T')) {
		    }else{
		    	System.out.println("\n     * Inputan harus Y/T");
		    	System.exit(1);
		    }

	    }while(pilih=='Y' || pilih=='y');
	    System.out.println("\n");
	    System.out.println(" =========================================================================\n");
	    System.out.println("       Data Penyewa\n");
	    System.out.println(" =========================================================================\n");
	    System.out.print(" >> Masukkan Nama Penyewa \t: ");
	    namaPenyewa = handleInputString("\n    * Inputan harus String!");
	    System.out.println();
	    System.out.print(" >> Masukkan Alamat \t\t: ");
	    alamat = handleInputString("\n    * Inputan harus String!");
	    nik =  handleNIK("Nomor Identitas");
	    noHp =  handleNIK("Nomor HP");
	    System.out.println();
	    System.out.println(" =========================================================================\n");
	    System.out.println("       Data Penyewaan DVD \n");
	    System.out.println(" =========================================================================\n");
	    jmlSewa=handleSumSewa();
	    System.out.println();
	    dataSewa = new String[jmlSewa];
	    hargaSewa = new int[jmlSewa];
	    for (int i=0;i<jmlSewa ;i++ ) {
	    	int ix=i+1;
	    	menuKatalog=handleMenuKatalog(tipeDvd,hargaDvd);
	    	System.out.println();
	    	tampilFilm(filmDvd,tipeDvd,menuKatalog);
	    	menuSubKatalog=handleSubMenuKatalog(filmDvd);  	
	    	System.out.println("\n >> DVD ke-"+ix+" anda menyewa DVD "+filmDvd[menuKatalog-1][menuSubKatalog-1]+"\n");
	    	hargaSewa[i]=hargaDvd[menuKatalog-1];
	    	dataSewa[i]=filmDvd[menuKatalog-1][menuSubKatalog-1];
	    }
	    hari=handleJumHari();

	    for(int i=0;i<jmlSewa;i++){
	    	hargaSewa[i]=hargaSewa[i]*hari;
	    	totalBayar = totalBayar+hargaSewa[i];
	    }

	    bulan = handleTanggal(12);
	    batasBulan=setBatasBulan(bulan);
	    tanggal=handleTanggal(batasBulan);
	    System.out.print("\n >> Masukkan Tahun sewa \t\t: "+tahunNow);
	    dMasuk=tanggal+"-"+bulan+"-"+tahunNow;
	    dKembali=setTanggalKembali(bulan ,tanggal ,tahunNow , batasBulan, hari);
	    
	    System.out.println("\n\n =========================================================================\n");
	    System.out.println("       Struk                           "+dateFormat.format(date)+"\n");
	    System.out.println(" =========================================================================\n");
	    System.out.println(" >> Nama Penyewa \t: "+namaPenyewa.toUpperCase()+"\n");
	    System.out.println(" >> Alamat \t\t: "+alamat.toUpperCase()+"\n");
	    System.out.println(" >> Nomor Identitas  \t: "+nik+" \n");
	    System.out.println(" >> Nomor HP  \t\t: "+noHp+" \n");
	    System.out.println(" >> Dvd yang di sewa \t: "+jmlSewa+" Dvd \n");
	    tampilStruk(dataSewa,hargaSewa);
	    System.out.println();
	    System.out.println(" >> Tanggal pinjam \t: "+dMasuk);
	    System.out.println("\n >> Jumlah hari \t: "+hari);
	    System.out.println("\n >> Jatuh tempo \t: "+dKembali);
	    System.out.println("\n >> Total Bayar \t: "+totalBayar);
	    int pembayaran=0;
	    do{
	    	System.out.print("\n >> Pembayaran \t\t: ");
	    	pembayaran =  handleInput("\n    * Inputan harus angka!");
	    	if(totalBayar>pembayaran){
	    		System.out.println("\n   *  Pembayaran tidak valid, silahkan lakukan pembayaran lagi\n");
	    	}
	    }while(totalBayar>pembayaran);
	    int kembalian=pembayaran-totalBayar;
	    System.out.println("\n >> Kembalian \t\t: "+kembalian);
	    System.out.println("\n\n                      * TERIMA KASIH *");
	    System.out.println();	
	    System.out.print("    Apakah anda ingin mengulangi ?(Y/T)");
		    ulang = handleInputChar("\n    * Inputan harus char!");
		}while(ulang=='Y' || ulang=='y');	
	}
}