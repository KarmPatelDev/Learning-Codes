interface sampleInterface{
    void method1();
    void method2();
}

interface ChildSampleInterface extends sampleInterface{
    void method3();
    void method4();
}

class SampleClass implements ChildSampleInterface{

    public void method3(){
        System.out.println("math3");
    }

    public void method4(){
        System.out.println("math4");
    }

    // we also write math1 and math2 because ChildSampleInterface inherited from sampleInterface

    public void method1(){
        System.out.println("math1");
    }

    public void method2(){
        System.out.println("math2");
    }

}

public class Main{
    public static void main(String[] args){
        SampleClass sc = new SampleClass();
        sc.method1();
        sc.method2();
        sc.method3();
        sc.method4();
    }
}