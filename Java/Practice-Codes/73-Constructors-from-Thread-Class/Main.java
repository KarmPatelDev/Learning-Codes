
class MyThr extends Thread{
    public MyThr(String name){
        super(name);
    }

    public void run(){
        int i = 34;
        System.out.println("Hello World");
        // while(true){

        // }
    }
}

public class Main{
    public static void main(String [] args){
        MyThr a = new MyThr("Patel");
        MyThr b = new MyThr("Karm");

        a.start();
        b.start();

        System.out.println("The PID of a is " + a.getId());
        System.out.println("The PName of a is " + a.getName());

        System.out.println("The PID of b is " + b.getId());
        System.out.println("The PName of b is " + b.getName());

    }
}