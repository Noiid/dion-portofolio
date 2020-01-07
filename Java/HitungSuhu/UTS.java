import java.util.Scanner;
class UTS {
	public static void main(String[] args) {
		Scanner sc= new Scanner(System.in);
		String suhu="";
		String potongSuhu="";
		String satuan="";
		int batas=0;
		double bilSuhu=0;
		double totalSuhu=0;
		try{
			System.out.print("Masukkan suhu Celcius/Reamur : ");
			suhu = sc.nextLine();
			batas = (suhu.length()-1);
			satuan = suhu.substring(suhu.length()-1);
			potongSuhu = suhu.substring(0,batas);		
			bilSuhu = Double.valueOf(potongSuhu);
			
		}catch(Exception e){
			System.out.println("Inputan tidak valid");
			System.exit(1);
		}
		switch(satuan){
			case "c" :
			case "C" :
			if(bilSuhu <= 100 && bilSuhu >= 0) {
				totalSuhu = 4*bilSuhu/5;
				System.out.println("Suhu Reamur : "+totalSuhu+"R");
			}else{
				System.out.println("Rentang suhu Celcius harus antara 0-100");
				System.exit(1);
			}
			break;
			case "r" :
			case "R" :
			if(bilSuhu <= 80 && bilSuhu >= 0){
				totalSuhu = 5*bilSuhu/4;
				System.out.println("Suhu Celcius : "+totalSuhu+"C");
			}else{
				System.out.println("Rentang suhu Celcius harus antara 0-80");
				System.exit(1);
			}
			break;
			default:
			System.out.println("Inputan tidak valid, kalau Celcius harus ditambahkan C dibelakang bilangan, kalau Reamur harus ditambahkan R dibelakang bilangan");
			System.exit(1);
		}
		/*if(satuan == "c" || satuan == "C") {
			if(bilSuhu <= 100) {
				totalSuhu = 5/4*bilSuhu;
				System.out.println("Suhu Reamur : "+totalSuhu+"R");
			}else{
				System.out.println("Rentang suhu Celcius harus antara 0-100");
				System.exit(1);
			}
		}else if(satuan == "r" || satuan == "R") {
			if(bilSuhu <= 80){
				totalSuhu = 4/5*bilSuhu;
				System.out.println("Suhu Celcius : "+totalSuhu+"C");
			}else{
				System.out.println("Rentang suhu Celcius harus antara 0-80");
				System.exit(1);
			}
		}else{
			System.out.println("Inputan tidak valid, kalau Celcius harus ditambahkan C dibelakang bilangan, kalau Reamur harus ditambahkan R dibelakang bilangan");
			System.exit(1);
		}*/
		

	}
}