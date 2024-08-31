class Phone{

    public void greet(){
        System.out.println("Good Morning");
    }

    public void name(){
        System.out.println("My Name is Java");
    }

}

class Smartphone extends Phone{

    public void greet2(){
        System.out.println("Good Afternoon");
    }

    public void name(){
        System.out.println("My Name is Jave in Class 2");
    }

}

public class Main{
    public static void main(String[] args){

        // Phone obj = new Phone();
        // Smartphone smobj = new Smartphone();
        // obj.name();

        Phone obj1 = new Smartphone(); // we can do this if reference is super class and object is subclass viseversa not possible
        // Smartphone obj2 = new Phone(); // not allowed
        obj1.name(); // it run object method first
        obj1.greet();
        // obj1.greet2(); // it is not work because ref is phone and we use smartphone method

    }
}