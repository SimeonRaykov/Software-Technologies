import java.util.*;

public class SumsByTown {
    public static void main(String[] args) {

        Scanner Scanner = new Scanner(System.in);

        var n = Integer.parseInt(Scanner.nextLine());

        TreeMap<String, Double> result = new TreeMap<String, Double>();

        String currentTown = "";

        for (int i = 0; i < n; i++) {

            String currentLineInput = Scanner.nextLine();

            StringBuilder sb = new StringBuilder();

            int x = 0;

            while (currentLineInput.charAt(x) != ' ') {

                sb.append(currentLineInput.charAt(x));
                x += 1;
            }
            currentTown = sb.toString();

            sb.setLength(0);


            currentLineInput = currentLineInput.replace(currentTown, "");

            while (currentLineInput.charAt(0) == ' ' || currentLineInput.charAt(0) == '|') {

                currentLineInput = currentLineInput.substring(1);

            }


            Double income = Double.parseDouble(currentLineInput);

            if (!result.containsKey(currentTown)) {

                result.put(currentTown, income);

            } else {

                result.put(currentTown, income += result.get(currentTown));
            }
        }

            for (
                    Map.Entry<String, Double> entry : result.entrySet())

            {

                String key = entry.getKey();
                Double value = entry.getValue();

                System.out.println(key + " -> " + value);

            }

    }
}

