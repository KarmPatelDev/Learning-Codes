public class Main{
    public static void main(String[] args){

       int[] marks = new int[5];
       int[] marks2 = {100, 20, 10, 30, 45};
 
       marks[0] = 100;
       marks[1] = 50;
       marks[2] = 60;
       marks[3] = 30;
       marks[4] = 10;

       for(int i = 0; i < 5; i++){
        System.out.println(marks[i]);
       }

       System.out.println(marks.length);

       for(int i: marks){
        System.out.println(i);
       }

       
    }
}