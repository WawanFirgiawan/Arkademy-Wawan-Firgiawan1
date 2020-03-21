//Program Menampilkan Kalimat Terpanjang
public class Main {
    public static void main(String[] args) {
        String sIn = "Halo Arkademian Arkademiax";
        System.out.println(sIn);
        
        String sOut = longest(sIn);
        System.out.println(sOut);        
    }
    
    public static String longest(String input){
        String output = null;
        if(input!=null){
            //hapus semua karakter selain angka dan huruf dari string input
            input = input.replaceAll("[^a-zA-Z0-9]", " ");   
            input = input.replaceAll("\\s+", " ");
            //split string input
            String[]kata = input.split("\\s");
            //mencari kata terpanjang;
            int l = Integer.MIN_VALUE;
            for(String myKata:kata){
                if(myKata.length()>l){
                    l = myKata.length();
                    output = myKata;
                }
            }
        }
        return output;
    }
}