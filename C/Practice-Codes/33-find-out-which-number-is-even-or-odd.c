// Write a program to find out which number is even or odd from list of 10 numbers using array

#include <stdio.h>
#include <conio.h>

int main(){
    int a[10], i, even = 0, odd = 0;
    printf("enter 10 num: ");
    for(i = 0; i < 10; i++){
        scanf("%d", &a[i]);
        if(a[i]%2 == 0){
            even++;
        }
        else{
            odd++;
        }
    }
    printf("\neven = %d, odd = %d\n", even, odd);
    getch();
    return 0;
}