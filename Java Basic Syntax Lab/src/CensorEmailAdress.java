import java.util.Scanner;

public class CensorEmailAdress {
    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String emailAdress = Scanner.nextLine();
        String censor = emailAdress;

        while (censor.charAt(0) != '@') {

            censor = censor.substring(1);

        }

        String text = Scanner.nextLine();

        var asteriksCount = emailAdress.length() - censor.length();
        var asteriks = "";

        for (int i = 0; i < asteriksCount; i++) {

            asteriks+="*";

        }

        String resultText = text.replaceAll(emailAdress, asteriks+censor);

        System.out.println(resultText);

    }
}
