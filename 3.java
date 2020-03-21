//Program Membuat pola Triagle
public class Main {
    public static void main(String[] args) {
        triangle(3); 
        triangle(-3); 
        triangle("Tiga"); 
    }
    
    public static<N> void triangle(N input){
        if(input instanceof Integer){
            int n = (Integer) input;
            if(n>0){
                for(int i=1;i<=n;i++){
                    for(int j=1;j<=i;j++){
                        System.out.print("#");
                    }
                    System.out.println();
                }
            }else{
                System.out.println("Parameter harus angka dan positif");
            }            
        }else{
            System.out.println("Parameter harus angka dan positif");
        }
    }
    
}