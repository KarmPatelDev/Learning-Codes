// Write a program to check whether the given number is prime or not

#include <stdio.h>
#include <conio.h>

int main(){
    int i, n, count = 0;
    printf("Enter Any number n: ");
    scanf("%d", &n);

    for(i = 1; i <= n; i++){
        if(n % i == 0){
            count++;
        }
    }

    if(count == 2){
        printf("n is a Prime number\n");
    }
    else{
        printf("n is not a Prime number\n");
    }

}
