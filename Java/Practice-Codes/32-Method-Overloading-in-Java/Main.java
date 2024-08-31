public class Main{

    static void logic(){
          System.out.println("Hello World!");
    }

    static void logic(int x){
          System.out.println("The Output is " + x);
    }


    static void logic(int x, int y){
          System.out.println("The output is " + (x + y));
    }
    
    static void logic(int x, int y, int z){
          System.out.println("The output is " + (x + y + z));
    }

    public static void main(String args[]){
        
        //we can't override using different return value
        logic();
        logic(10);
        logic(10, 20);
        logic(10, 20, 30);

    } 
}