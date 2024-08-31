class Thread1 extends Thread{
    @Override
    public void run(){
        while(true){
            System.out.println("Hello World, Thread1");
            System.out.println("Hello World, Thread1");
        }
    }
}

class Thread2 extends Thread{
    @Override
    public void run(){
        while(true){
          System.out.println("Hello World, Thread2");
          System.out.println("Hello World, Thread2");
        }
    }
}

public class Main{
    public static void main(String [] args){
        Thread1 a = new Thread1();
        Thread2 b = new Thread2();

        a.start();
        b.start();
    }
}