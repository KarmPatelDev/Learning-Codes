public class Main{

    static long fact(int n){ 
        if(n <= 1){
            return 1;
        }

        return (n * fact(n - 1));
    }

    static long fact2(int n){
        long factorial = 1;

        for(int i = 1; i <= n; i++){
            factorial *= i;
        }

        return factorial;
    }

    public static void main(String args[]){

        System.out.println(fact(30));
        System.out.println(fact2(30));

    } 
}