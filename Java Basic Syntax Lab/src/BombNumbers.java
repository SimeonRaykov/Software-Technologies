import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;

public class BombNumbers {
    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String[] input = Scanner.nextLine().split(" ");
        int[] numbersArr = StringArrToIntArr(input);

        String[] input2 = Scanner.nextLine().split(" ");
        int[] numbersArr2 = StringArrToIntArr(input2);

        var sequenceNum = convertArrToList(numbersArr);
        var powers = convertArrToList(numbersArr2);

        var superPowerNum = powers.get(0);
        int xToLoop = Collections.frequency(sequenceNum, superPowerNum);

        var powerSize = powers.get(1);
        try {

            for (int x = 0; x < xToLoop; x++) {


                var superIndex = sequenceNum.indexOf(superPowerNum);
                var superIndexCopy = superIndex;

                for (int i = 0; i <= powerSize; i++) {

                    sequenceNum.remove(superIndex);
                    superIndex -= 1;

                }
                superIndex = superIndexCopy;
                superIndex -= powerSize;

                for (int i = 0; i< powerSize; i++) {

                    sequenceNum.remove(superIndex);
                    superIndex += 1;

                }
            }

        } catch (Exception ex) {

        } finally {

            var sum = 0;

            for (int i = 0; i < sequenceNum.size(); i++) {

                sum += sequenceNum.get(i);

            }

            System.out.println(sum);

        }


    }

    private static List<Integer> convertArrToList(int[] arr) {
        List<Integer> intList = new ArrayList<Integer>();
        for (int i : arr) {
            intList.add(i);
        }
        return intList;
    }

    private static int[] StringArrToIntArr(String[] s) {
        int[] result = new int[s.length];
        for (int i = 0; i < s.length; i++) {
            result[i] = Integer.parseInt(s[i]);
        }
        return result;

    }
}
