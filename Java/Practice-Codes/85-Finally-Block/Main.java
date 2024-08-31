public class Main{
    public static void main(String args[]){

        try{
            int a = 5;
            int b = 0;
            int c = a/b;
        }
        catch(Exception e){
            System.out.println(e);
        }
        finally{
            System.out.println("Hello World");
        }
    }
}