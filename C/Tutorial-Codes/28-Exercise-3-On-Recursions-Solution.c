/*

Exercise-3 Solution :
Question

Write a program which produces Fibonacci Series of numbers using both Recursive and Iterative approach ?

*/

#include <stdio.h>

int fib_recursive(int n){
  if(n == 1 || n == 2){
    return n - 1;
  }
  else{
    return(fib_recursive(n - 1) + fib_recursive(n - 2));
  }
}

int fib_iterative(int n){
  int a = 0;
  int b = 1;
  
  for(int i = 0; i < n - 1; i++){
    b = a + b;
    a = b - a;
  }
  
  return a;
}

int main()
{
  int num;
  printf("Enter The Index To Get Fibonacci Series Value");
  scanf("%d", &num);
  printf("The Value Of Fibonacci Series at Position of %d using iterative method is %d\n", num, fib_iterative(num));
  printf("The Value Of Fibonacci Series at Position of %d using recursive method is %d\n", num, fib_recursive(num));
  return 0;
}
  