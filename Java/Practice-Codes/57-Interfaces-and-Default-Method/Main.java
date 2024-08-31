interface Camera{
      void takeSnap();
      void recordVideo();
      
      private void greet(){  // we can't access from class but we can access it bu public method in this current interface(like default void record4kVideo)
        System.out.println("Hello GoodMorning");
      }

      default void record4kVideo(){
        greet();
        System.out.println("Recording 4k videos...");
      }
}

interface Wifi{
    String[] getNetworks();
    void connectToNetwork(String network);
}

class CellPhone{
    void callNumber(int phoneNumber){
        System.out.println("Calling..." + phoneNumber);
    }

    void pickCall(){
        System.out.println("Connecting...");
    }
}

class Smartphone extends CellPhone implements Wifi, Camera{
     public void takeSnap(){
        System.out.println("Taking Snap......");
     }

     public void recordVideo(){
        System.out.println("Record Video......");
     }

     public String[] getNetworks(){
        System.out.println("Getting List of Networks");
        String[] network = {"karm", "abhay", "dhyey"};
        return network;
     }

    public void connectToNetwork(String network){
        System.out.println(network);
    }
     public void record4kVideo(){
        System.out.println("Recording the 4k videos");
     }
}

public class Main{
    public static void main(String[] args){

        Smartphone sc = new Smartphone();
        String[] ar = sc.getNetworks();
        for(String item : ar){
            System.out.println(item);
        }
        
        sc.record4kVideo();
    }
}