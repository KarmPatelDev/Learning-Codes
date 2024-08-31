// Write a program to evaluate the series sum = 1-x + x^2 / 2! - x^3 / 3! + x^4 / 4!......-x^9 / 9!

#include <stdio.h>
#include <math.h>
#include <conio.h>

double Series(double x, int n){
    double sum = 1, term = 1, fct, j, m;
    for(int i = 1; i < n; i++){
        fct = 1;
        for(int j = 1; j <= i; j++){
            fct = fct * j;
        }
        term = term * (-1);
        m = term * pow(x, i) / fct;
        sum = sum + m;
       
    }
    return sum;
}

int main(){
    double x = 9;
    int n = 10;
    printf("%.4f", Series(x, n));
    getch();
    return 0;
}