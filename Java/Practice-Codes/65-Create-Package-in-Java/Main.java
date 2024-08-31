package karm;  

// javac -d . Main.java => for package included file compile
// javac -d . *.java => for all package included file compile at a time
// we can write folder name  instead of .(dot) after -d => it create that new folder with this name and paste folder in that  like => javac -d abc *.java
 
// import java.util.Scanner;
// import java.util.*;

public class Main{
    public static void main(String[] args){

        // Scanner sc = new Scanner(System.in);
        java.util.Scanner sc = new java.util.Scanner(System.in);
        System.out.println("Enter Your Name: ");
        int name = sc.nextInt();
        System.out.println("\nHello World");
    }
}