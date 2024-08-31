class Base{
    public int x;

    public void math1(){
        System.out.println("The method2 of Base Class");
    }
}

class Derived extends Base{
    @Override
    public void math1(){
        System.out.println("The method2 of Derived Class");
    }

    public void math2(){
        System.out.println("The method3 of Derived Class");
    }
}

public class Main{
    public static void main(String[] args){

       Base b = new Base();
       b.math1();

       Derived d = new Derived();
       d.math1();
    }
}