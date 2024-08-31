/*

Exercise 3 :
Question : Write a program using recursive function to produce Fibonacci series of numbers?

fib_recursive(int n):
     if n==1 or n==2:
         return n

     else:
      return fib_recursive(n-1) + fib_recursive(n-2)
 

To know about Fibonacci series :

    https://www.mathsisfun.com/numbers/fibonacci-sequence.html

So, here you have to simply produce Fibonacci series of no. 42 using both iterative and recursive logic.

Actually I gave this exercise to show that which method is good either iterative or recursive to find Fibonacci series of any no.

So try to solve it …

*/


#include <stdio.h>

int fib_recursive(int number)

{

  if(number == 1 || number == 2){

    return number - 1;

  }

  else return(fib_recursive(number - 1) + fib_recursive(number - 2));

}

int main()

{

  int num;

  printf("Enter the number to find the value of Fibonacci Series Number at that order number\n");

  scanf("%d", &num);

  printf("The value is %d at the order %d in the Fibonacci Series", fib_recursive(num), num);

    return 0;

}