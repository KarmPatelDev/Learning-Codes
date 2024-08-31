public class Main{

    static int logic(int x, int ...arr){

       // int ... arr return array of int values
       int sum = x;

       for(int a: arr){
        sum += a;
       }

        return sum;

    }

    public static void main(String args[]){
    
    // it show error because one argument x is compalsory if it is present 
    //   System.out.println("\nThe sum is " + logic());

       System.out.println("\nThe sum is " + logic(1));

       System.out.println("\nThe sum is " + logic(1, 5, 7, 96, 5));

       System.out.println("\nThe sum is " + logic(1, 5, 7, 85, 654, 45, 52));

       System.out.println("\nThe sum is " + logic(1, 5, 7, 85));

       System.out.println("\nThe sum is " + logic(1, 5, 7, 85, 2, 45, 78, 4, 63, 59, 02, 45, 4));

    }
}