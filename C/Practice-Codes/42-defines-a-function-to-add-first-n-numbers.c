// Write a program that defines a function to add first n numbers

#include <stdio.h>
#include <conio.h>

int addn(int);   //declaration

void main(){
    int n, ans;
    printf("Enter Value n: ");
    scanf("%d", &n);
    ans = addn(n);
    printf("Answer = %d\n", ans);
    getch();
}

int addn(int n){
    int i, total = 0;
    for(i = 1; i <= n; i++){
        total += i;
    }
    return total;
}
