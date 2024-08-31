// Write a C program to use recursive calls to evaluate F(x) = x – x3 / 3! + x5 / 5 ! – x7 / 7! + … xn/ n!

#include <stdio.h>
#include <conio.h>

float series(float x, int n);
float power(float x, int y);
long factorial(int p);

void main(){
     float x;
     int n;
     printf("Enter The Value Of X and N: ");
     scanf("%f %d", &x, &n);
     printf("\nAnswer = %f\n", series(x, n));
     getch();
}

float series(float x, int n){
     float sum = 0;
     int s = 1;
     for(int i = 1; i <= n; i+=2){

          sum = sum + s*(power(x, i)/factorial(i));
          s = s*(-1);

     }
     return sum;
}

float power(float x, int y){
     for(int i =1; i <= y; i++){
          x = x * x;
     }
     return x;
}

long factorial(int p){
     long f = 1;
     for(int i = 1; i <= p; i++){
          f = f*i;
     }
     return f;
}
