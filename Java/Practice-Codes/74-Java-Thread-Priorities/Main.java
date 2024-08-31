
class MyThr extends Thread{
    public MyThr(String name){
        super(name);
    }

    public void run(){
        while(true){
            System.out.println("The Thread Name is " + this.getName());
        }
    }
}

public class Main{
    public static void main(String [] args){
        MyThr thread1 = new MyThr("Thread1 Least Important");
        thread1.setPriority(Thread.MIN_PRIORITY);

        /*
        NOTE: Priority also depend on Operating System
        */
       
        MyThr thread2 = new MyThr("Thread2");
        MyThr thread3 = new MyThr("Thread3");
        MyThr thread4 = new MyThr("Thread4");
        MyThr thread5 = new MyThr("Thread5 Most Important");
        thread5.setPriority(Thread.MAX_PRIORITY);

        thread1.start();
        thread2.start();
        thread3.start();
        thread4.start();
        thread5.start();

    }
}