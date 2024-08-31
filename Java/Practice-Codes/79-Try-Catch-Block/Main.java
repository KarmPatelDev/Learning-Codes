import java.util.Scanner;

class MyException extends Exception{
    @Override
    public String toString(){
        return super.toString() + "I am toString()";
    }

    @Override
    public String getMessage(){
        return super.getMessage() + "I am getMessage()";
    }


}

public class Main{
    public static void main(String [] args){

    int a = 8;

    if(a < 99){
        try{
            throw new MyException();
            // throw new ArithmeticException("This is erithmetic error");
        }
        catch(Exception e){
            System.out.println(e.getMessage());
            // System.out.println(e.toString());
            // System.out.println(e);
            // e.printStackTrace();
        }
        
    }


    // int [] marks = new int[5];
    // marks[0] = 7;
    // marks[1] = 56;
    // marks[2] = 76;
    // marks[3] = 78;
    // marks[4] = 87;

    // Scanner sc = new Scanner(System.in);
    // System.out.println("Enter The Array Index: ");
    // int ind = sc.nextInt();

    // System.out.println("Enter The Number You Want To Divide The Value With: ");
    // int number = sc.nextInt();

    // try{
    //     System.out.println("The value at array index entered is " + marks[ind]);
    //     System.out.println("The value at array-value/number is " + marks[ind]/number);
    // }
    // catch(ArithmeticException e){
    //     System.out.println("Arithmetic Error: " + e);
    // }
    // catch(ArrayIndexOutOfBoundsException e){
    //     System.out.println("Array Index Error: " + e);
    // }
    // catch(Exception e){
    //     System.out.println("Other Error: " + e);
    // }
        
    }
}