class Base{
    public int x;

    public void setX(int x){
        this.x = x;
    }

    public void getX(){
        System.out.println(x);
    }
}

class Derived extends Base{
    public int y;

    public void setY(int y){
        this.y = y;
    }

    public void getY(){
        System.out.println(y);
    }
}

public class Main{
    public static void main(String[] args){

       Base b = new Base();
       b.setX(4);
       b.getX();

       Derived d = new Derived();
       d.setY(25);
       d.getY();
       d.setX(30);
       d.getX();

    }
}