
class MyThread1 extends Thread{
    public void run(){
        while(true){
            System.out.println("This is thread1");

            try{
                Thread.sleep(500);
            }catch(InterruptedException e){
                e.printStackTrace();
            }

        }
    }
}

class MyThread2 extends Thread{
    public void run(){
        while(true){
            System.out.println("This is thread2");
        }
    }
}

public class Main{
    public static void main(String [] args){
        MyThread1 a = new MyThread1();
        MyThread2 b = new MyThread2();

        a.start();

        // try{
        //     a.join(); // it can show error and it is use for first complete the whole process then go to another
        // }catch(Exception e){
        //     System.out.println(e);
        // }

        b.start();
    }
}