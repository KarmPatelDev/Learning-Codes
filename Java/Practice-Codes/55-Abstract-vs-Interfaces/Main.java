interface Bicycle{
    int a = 45;
    void applyBrake(int decrement);
    void speedUp(int increment);
}

interface HornBicycle{
    void blowHorn2();
    void hornFreq();
}

class PrakashCycle implements Bicycle, HornBicycle{
    void blowHorn(){
        System.out.println("Peep Peep");
    }

    public void applyBrake(int decrement){ // we have to write public when use interface method
        System.out.println("Peep Peep");
    }

    public void speedUp(int increment){ // we have to write public when use interface method
        System.out.println("Peep Peep");
    }

    public void blowHorn2(){ // we have to write public when use interface method
        System.out.println("Peep Peep");
    }

    public void hornFreq(){ // we have to write public when use interface method
        System.out.println("Peep Peep");
    }
}

public class Main{
    public static void main(String[] args){

        PrakashCycle c = new PrakashCycle();
        c.applyBrake(1);
        System.out.println(c.a);

        //We can't modify property of interfaces
        // c.a = 54;
        System.out.println(c.a);

        c.speedUp(1);
        c.blowHorn();
        c.blowHorn2();
        c.hornFreq();



    }
}