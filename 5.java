//Program Menghapus dan membuat pola
public class Main {

    public static void main(String[] args) {
        String sIn = "993141 -1 1323 14-23234";
        System.out.println(sIn);
        String sOut = myFunction(sIn);
        System.out.println(sOut);
    }

    public static String myFunction(String input) {
        String output = null;
        if (input != null) {
            String sProses = input.replaceAll("-", "");
            sProses = sProses.replaceAll("\\s", "");
            output = "";
            int a = 0;
            int l = sProses.length();
            int sisa = l - a;
            while (sisa > 0) {
                if (sisa >= 5) {
                    output += sProses.substring(a, a + 3);
                    a += 3;

                    output += "-";
                } else {
                    if (sisa == 4) {
                        output += sProses.substring(a, a + 2);
                        a += 2;

                        output += "-";
                    } else if (sisa == 3) {
                        output += sProses.substring(a, a + 3);
                        a += 3;
                    } else {
                        output += sProses.substring(a, a + sisa);
                        a += sisa;
                    }
                }
                sisa = l - a;
            }

        }
        return output;
    }
}