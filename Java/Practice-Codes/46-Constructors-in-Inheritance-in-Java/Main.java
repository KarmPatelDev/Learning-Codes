class Base{
    public int x;

    Base(){
        System.out.println("This is constructor of Base");
    }

    Base(int x){
        this.x = x;
        System.out.println("This is overloading constructor of Base");
    }
}

class Derived extends Base{
    public int y;

    Derived(){
        super(25); // for run overloaded constructor otherwise it call the no parameter constructor
        System.out.println("This is constructor of Derived");
    }

    Derived(int x, int y){
        super(x);
        this.y = y;
        System.out.println("This is constructor of Derived");
    }
}

class Child extends Derived{
    int z;

    Child(){
        super(25, 50); // for run overloaded constructor otherwise it call the no parameter constructor
        System.out.println("This is constructor of Child");
    }


    Child(int x, int y, int z){
        super(x, y);
        this.z = z;
        System.out.println("This is constructor of Child");
    }

}

public class Main{
    public static void main(String[] args){

       Base b = new Base();
       Derived d = new Derived();
       Child c = new Child();

       Base b1 = new Base(10);
       System.out.println(b1.x);

       Derived d1 = new Derived(45, 95);
       System.out.println(d1.x);
       System.out.println(d1.y);

       Child c1 = new Child(12, 11, 13);
       System.out.println(c1.x);
       System.out.println(c1.y);
       System.out.println(c1.z);




    }
}