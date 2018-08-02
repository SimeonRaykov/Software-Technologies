import java.util.*;

public class MostFreqNumberInArr {
    public static void main(String[] args) {

        Scanner Scanner = new Scanner(System.in);

        String[] input = Scanner.nextLine().split(" ");

        int[] numbersArr = StringArrToIntArr(input);

        int count = 1;
        int maxCount = 1;

        String currentBest = "";
        String bestNumber = "";

        Map<Integer, Integer> numbersCountMap = new HashMap<Integer, Integer>();

        for (int i = 0; i <= numbersArr.length - 1; i++) {

            int currentNumber = numbersArr[i];

            if (!numbersCountMap.containsKey(currentNumber)) {

                numbersCountMap.put(currentNumber, 1);

            } else {

                numbersCountMap.put(currentNumber, numbersCountMap.get(currentNumber) + 1);

            }

        }

        int maxValueInMap=(Collections.max(numbersCountMap.values()));

        HashSet<Integer> finalResult = new HashSet<Integer>();

        for (Map.Entry<Integer, Integer> entry : numbersCountMap.entrySet()) {  // Itrate through hashmap
            if (entry.getValue() == maxValueInMap) {
                   finalResult.add(entry.getKey());
            }
        }

        if(finalResult.size()==1){
            System.out.println(finalResult.iterator().next());
        }
        else{



            for (int i = 0; i <numbersArr.length ; i++) {

                var currentElement=numbersArr[i];

                if(finalResult.contains(currentElement)){

                    System.out.println(currentElement);
                    break;

                }

            }

        }


    }

    private static int[] StringArrToIntArr(String[] s) {
        int[] result = new int[s.length];
        for (int i = 0; i < s.length; i++) {
            result[i] = Integer.parseInt(s[i]);
        }
        return result;

    }
}
