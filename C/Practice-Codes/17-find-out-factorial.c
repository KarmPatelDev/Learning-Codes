// Write a C program to find factorial of a given number

#include <stdio.h>
#include <conio.h>


int fact(int n){
    if(n == 1){
        return 1;
    }
    else{
        return n*fact(n-1);
    }
}

/*
int fact(int n){

    int a[n], temp;
    a[0] = 1;
    for( int i = 1; i <= n-1; i++){
     a[i] = a[i-1] * (i+1);
    }

    return a[n - 1];
}
*/

void main(){
    int n;
    printf("Enter The No: ");
    scanf("%d", &n);
    printf("\nFactorial Of %d is %d\n", n, fact(n));
    getch();
}