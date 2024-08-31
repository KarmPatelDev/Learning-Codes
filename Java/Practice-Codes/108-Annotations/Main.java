

@FunctionalInterface
interface myInf{
    void thisMethod();
    // void thisMethod2();  // it show error because only one method in functionalinterface
}

class Phone{
    public void display(){
        System.out.println("Hello World");
    }
}

class NewPhone extends Phone{

    @Override
    public void display(){
       System.out.println("Good Morning");
    }
    @Deprecated
    public void display2(){
       System.out.println("Good Morning");
    }
}

public class Main{
    public static void main(String args[]){

        @SuppressWarnings("deprecation")  // all warning are hide

        NewPhone a = new NewPhone();
        a.display();

    }
}