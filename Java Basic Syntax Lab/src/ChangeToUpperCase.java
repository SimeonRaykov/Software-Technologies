import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
public class ChangeToUpperCase {
    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String text = Scanner.nextLine();

        List<String> listOfStr = new ArrayList<String>();
        List<String> resultList=new ArrayList<String>();

        var splitted =text.split(" ");

        for (int i = 0; i <splitted.length ; i++) {

            Collections.addAll(listOfStr,splitted[i]);

        }

        for (int i = 0; i <listOfStr.size() ; i++) {

            String currentStr=listOfStr.get(i);

            if(currentStr.contains("<upcase>") || currentStr.contains("</upcase>")){

                if(currentStr.contains("<upcase>") && currentStr.contains("</upcase>")){

                    currentStr= currentStr.replace("</upcase>","");
                    currentStr=  currentStr.replace("<upcase>","");
                }

                if(currentStr.contains("<upcase>")){
                  currentStr=  currentStr.replace("<upcase>","");

                }
                else{
                   currentStr= currentStr.replace("</upcase>","");
                }



                currentStr=currentStr.toUpperCase();
            }
resultList.add(currentStr);
        }

        String result="";

        for (int i = 0; i <resultList.size() ; i++) {

            result+=resultList.get(i) +" ";


        }


        System.out.println(result);

    }
}
