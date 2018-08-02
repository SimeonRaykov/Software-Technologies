import java.util.Scanner;

public class FitStringIn20Chars {

    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String input = Scanner.nextLine();

        var length = input.length();

        if (length > 20) {

            System.out.println(input.substring(0, 20));

        } else {

            StringBuilder sb=new StringBuilder();
            sb.append(input);

            for (int i = 0; i <20 ; i++) {

                if(sb.length()>=20){
                    break;
                }

                sb.append("*");

            }

            System.out.println(sb.toString());

        }


    }


}
