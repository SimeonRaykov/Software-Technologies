import com.sun.jdi.connect.Connector;

import java.util.Scanner;

public class SymmetricNumbers {
    public static void main(String[] args) {

        Scanner Scanner = new Scanner(System.in);

        int n = Integer.parseInt(Scanner.nextLine());

        boolean isSymmetrical = false;

        for (int i = 0; i <= n; i++) {

            if (i >= 1 && i < 10) {
                isSymmetrical = true;
            }

            var str = Integer.toString(i);
            if (str.length() == 2) {
                if (str.charAt(0) == str.charAt(1)) {
                    isSymmetrical = true;
                }
            }
            if (str.length() == 3) {
                if ((str.charAt(0) == str.charAt(2)) || ((str.charAt(0) == str.charAt(1)) && (str.charAt(2) == str.charAt(0)))) {
                    isSymmetrical = true;
                }
            }

         if(str.length()==4){

                if(str.charAt(0)==str.charAt(3) && str.charAt(1)!=str.charAt(0) && str.charAt(2)!=str.charAt(3)){
                    isSymmetrical=true;
                }

            else if(str.charAt(1)==str.charAt(2) && str.charAt(3)!=str.charAt(1) &&str.charAt(0)!=str.charAt(2)){
                    isSymmetrical=true;
                }
                else if(str.charAt(0)==str.charAt(1) &&str.charAt(2)==str.charAt(3) && str.charAt(2)==str.charAt(0)){
                    isSymmetrical=true;
                }


            }

            if (isSymmetrical) {
                System.out.print(i + " ");
                isSymmetrical = false;
            }

        }


    }
}
