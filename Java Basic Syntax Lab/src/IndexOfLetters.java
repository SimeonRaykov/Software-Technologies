import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String input = Scanner.nextLine();

        var counter = 0;
        List<Character> alphabet = new ArrayList<Character>();

        for (int i = 'a'; i <= 'z'; i++) {

            var currentChar = (char)i;

            alphabet.add(currentChar);

            counter += 1;

        }

        for (int i = 0; i <input.length() ; i++) {

            char currentCharOfString=input.charAt(i);

            var currentLetter=alphabet.indexOf(currentCharOfString);

            System.out.printf("%s -> %s%n",currentCharOfString,currentLetter);


        }


    }
}
