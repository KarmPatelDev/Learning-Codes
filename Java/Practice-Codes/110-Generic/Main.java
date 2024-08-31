import java.util.ArrayList;


class MyGeneric<T>{
    int val = 344;
    private T t1;

    public MyGeneric(int val, T t1){
        this.val = val;
        this.t1 = t1;
    }

    public void display(){
        System.out.println(val + " " + t1);
    }
}

public class Main{
    public static void main(String args []){

       ArrayList<Integer> a = new ArrayList<>();
       a.add(25);
       a.add(13);
       a.add(658);

       int d = a.get(2);
       System.out.println(d);

       MyGeneric g1 = new MyGeneric(25, "Karm");
       g1.display();
       MyGeneric<Float> g2 = new MyGeneric(25, 20.5f);
       g2.display();
       MyGeneric<Double> g3 = new MyGeneric(25, 20.5);
       g3.display();

    }
}