// Write a C program to find out the Maximum and Minimum number from given 10 numbers

#include <stdio.h>
#include <conio.h>

int main(){
    int i, ar[10], max, min, num;
    printf("Enter 10 Numbers\n");
     
    for(i = 0; i < 10; i++){
        scanf("%d", &ar[i]);
    }
    max = ar[0];
    min = ar[0];
    for(i = 0; i < 10; i++){
        if(max < ar[i]){
            max = ar[i];
        }
        if(min > ar[i]){
            min = ar[i];
        }
    }
   


  /*
   max = -32000;
   min = 32000;

   for(i = 0; i < 10; i++){
        
        scanf("%d", &ar[i]);
        
        if(max < ar[i]){
            max = ar[i];
        }
        if(min > ar[i]){
            min = ar[i];
        }    
    }
    */

    printf("\nMaximum Of Given Array: %d", max);
    printf("\nMinimum Of Given Array: %d", min);
    getch();
    return 0;
}