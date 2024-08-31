import java.lang.Math; 
import java.util.Scanner;

class Game{
    private int random_no;
    public int guess_no;
    public boolean fail = true;

    void getRandomNo(){ random_no = (int)Math.floor(Math.random() * 100); }

    void setNumber(int guess_no){
        this.guess_no = guess_no;
    }

    void result(){

        if(random_no == guess_no){
            System.out.println("Hurray! The Number that you guess is Right. Number is " + random_no);
            fail = false;
        }
        else if(random_no < guess_no){
            System.out.println("The number is less than your number");
        }
        else{
            System.out.println("The number is more than your number");
        }
    }

}


public class Main{
    public static void main(String[] args){

       Game player = new Game();
       player.getRandomNo();
       
       
       while(player.fail){
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter The Number: ");
        int num = sc.nextInt();
        player.setNumber(num);
        player.result();
       }
    }
}