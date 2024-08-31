import java.util.Scanner;

public class Main{
    public static void main(String[] args){

      //Class   
      String name = new String("Karm");
      System.out.println(name);
      String name2 = "Karm";
      System.out.println(name2);
      
      int a = 6;
      float b = 5.645f;
      System.out.printf("The value of a is %d and the value of b is %8.2f", a, b);
      System.out.format("The value of a is %d and the value of b is %f", a, b);
      
      Scanner sc = new Scanner(System.in);
      //String name3 = sc.next();
      String name3 = sc.nextLine();
      System.out.println(name3);


    }
}