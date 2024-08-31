package com.company;
/** 
 * This is class is to demonstrate what javadocs how to use This word show in Description of class
 * @author Karm Patel
 * @version 0.1
 * @since 2020
 * @see <a href="" target="_blank>Java Docs</a>
*/

public class Main{

    public static void main(String args[]){

        System.out.println("This is main method");

    }

    /**
     * This is best
     * @param i This is the first number to addd
     * @param j This is the second number to add
     * @return Sum of two number as an integer
     * @throws Exception if i is 0
     * @deprecated This method is deprecated use + operator
     */

    public void add(int a, int b){
        System.out.println("The sum is: " + (a + b));
        return ();
    }


    
}