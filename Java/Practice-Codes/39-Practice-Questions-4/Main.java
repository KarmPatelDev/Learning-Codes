class Square{
    int side;

    public void setSide(int a){
        side = a;
    }

    public int area(){
        return (side * side);
    }

    public int periferal(){
        return (4* side);
    }
}

public class Main{
    public static void main(String[] args){

        Square a = new Square();
        a.setSide(12);
        System.out.println(a.area());
        System.out.println(a.periferal());

    }
}