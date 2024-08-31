//  Write a C program to find 1+1/2+1/3+1/4+....+1/n

#include <stdio.h>
#include <conio.h>

double sum(int n){
    double i, s = 0.0;
    for(i = 1; i <= n; i++){
      s = s + 1/i;
    }
    return s;
}
int main(){
    int n;
    printf("\nEnter Last Term Number: ");
    scanf("%d", &n);
    printf("Sum is %f", sum(n));
    getch();
    return 0;
}