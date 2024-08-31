

interface myInf{
    void thisMethod();
    void thisMethod2();  
}

@FunctionalInterface
interface myInf2{
    // void thisfun();
    void thisfun(int a);
}

public class Main{
    public static void main(String [] args){

      //Anonymous Class
      myInf obj = new myInf() {
        @Override
        public void thisMethod(){
            System.out.println("Hello World");
        }

        @Override
        public void thisMethod2(){
            System.out.println("Good Morning");
        }
      }; 
     obj.thisMethod();


     // Lamda Expression

    //  myInf2 obj2 = () -> {
    //     System.out.println("Hello World");
    //  };
    //  obj2.thisfun();
    
    
     myInf2 obj2 = (a) -> {
        System.out.println("Hello World" + a);
     };
     obj2.thisfun(6);

    }
}