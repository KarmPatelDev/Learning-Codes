public class Main{
    public static void main(String[] args){

       int[][] marks = new int[2][2];
       int[][] marks2 = {{100, 20}, {10, 30}, {45, 50}};

       marks[0][0] = 12;
       marks[0][1] = 13;
       marks[1][0] = 14;
       marks[1][1] = 15;


       for(int i = 0; i < 2; i++){
        for(int j = 0; j < 2; j++){
        System.out.println(marks[i][j]);
        }
       }

       System.out.println(marks.length);

       for(int i: marks){
        for(int j: marks[i]){
           System.out.println(j);
        }
       }

    }
}