public class Main{

    static int logic(int x, int y){
        
        int z;

        if(x > y){
            z = (x + y);
        }
        else{
            z = (x + y) * 5;
        }

        return z;
    }
    
    int logicWithoutStatic(int x, int y){
        
        int z;

        if(x > y){
            z = (x + y);
        }
        else{
            z = (x + y) * 5;
        }

        return z;
    }

    static void changeVal(int [] marks){
        marks[0] = 100;
    }

    public static void main(String args[]){
        
        // using static method
        int res = logic(15, 30);
        System.out.println(res);

       // using object
        Main obj = new Main(); 
        int res1 = obj.logicWithoutStatic(15, 30);
        System.out.println(res1);

        int [] marks = {10, 20, 30, 40, 50, 60};
        // it is reference  marks -> address of first element
        changeVal(marks);

        System.out.println(marks[0]);

    } 
}