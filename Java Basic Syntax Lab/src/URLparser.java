import java.util.Scanner;

public class URLparser {
    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);
        String protocol="";
        String server = "";
        String resource = "";
try {


    String URL = Scanner.nextLine();


    while (URL.charAt(0) != ':') {

        protocol += URL.charAt(0);
        URL = URL.substring(1);

    }
    URL = URL.substring(3);

    while (URL.charAt(0) != '/') {

        server += URL.charAt(0);
        URL = URL.substring(1);
    }
    URL = URL.substring(1);
    resource = URL;

    System.out.printf("[protocol] = \"%s\"%n", protocol);
    System.out.printf("[server] = \"%s\"%n", server);
    System.out.printf("[resource] = \"%s\"", resource);
}
catch (Exception ex){

    System.out.printf("[protocol] = \"%s\"%n", protocol);
    System.out.printf("[server] = \"%s\"%n", server);
    System.out.printf("[resource] = \"%s\"", resource);
}
    }
}
