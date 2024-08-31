// Write a C program to find 1+1/2!+1/3!+1/4!+.....+1/n!

#include <stdio.h>
#include <conio.h>

int main(){
    int i, j, n, f;
    double sum = 0.0;
    printf("Enter Last Element: ");
    scanf("%d", &n);
    for(i = 1; i <= n; i++){
        if(i != n){
            printf("1/%d! + ", i);
        }
        else{
            printf("1/%d! = ", i);
        }
        for(j = 1; j <= i; j++){
           f = f*j;
        }
        sum = sum + (1.0)/f;
    }
    printf("%lg", sum);
    getch();
    return 0;
}