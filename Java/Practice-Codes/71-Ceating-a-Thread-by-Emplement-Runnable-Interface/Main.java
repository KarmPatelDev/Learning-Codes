
class MyThreadRunnable1 implements Runnable{
    public void run(){
        while(true){
            System.out.println("Hello World, Thread1");
        }
    }
}

class MyThreadRunnable2 implements Runnable{
    public void run(){
        while(true){
            System.out.println("Hello World, Thread2");
        }
    }
}

public class Main{
    public static void main(String [] args){

        MyThreadRunnable1 thread1 = new MyThreadRunnable1();
        Thread a = new Thread(thread1);
        MyThreadRunnable2 thread2 = new MyThreadRunnable2();
        Thread b = new Thread(thread2);

        a.start();
        b.start();

    }
}