abstract class Base{
    public Base(){
        System.out.println("I'm constructor of Base2");
    }

    public void sayHello(){
        System.out.println("Hello Guys");
    }

    abstract public void greet();// now derived class can implement this it owns //we have to write abstract before class
    //abstract class => we can't make objects

}

class Derived extends Base{
    @Override
    public void greet(){
        System.out.println("Hello Good Morning");
    }
}

abstract class Child extends Derived{
    public void th(){
        System.out.println("Good Morning");
    }
}

public class Main{
    public static void main(String[] args){

       Derived a = new Derived();
       a.greet();

    }
}