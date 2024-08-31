// Write a function in the program to return 1 if number is prime otherwise return 0

#include <stdio.h>
#include <conio.h>

int pri(int);

void main(){
    int n, s;
    printf("Enter Value n: ");
    scanf("%d", &n);
    if(pri(n) == 1){
        printf("Prime");
    }
    else{
        printf("Not Prime");
    }
    getch();
}

int pri(int n){
    int i;
    for(i = 2; i < n ; i++){
        if(n%i == 0){
            return 0;
        }
    }
    return 1;
}