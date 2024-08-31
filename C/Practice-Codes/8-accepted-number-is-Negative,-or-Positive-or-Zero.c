// Write a C program to find that the accepted number is Negative, or Positive or Zero

#include <stdio.h>
#include <conio.h>

int main(){
    int i;
    printf("\nEnter The Number\n");
    scanf("%d", &i);
    if(i == 0){
        printf("\nNumber is Zero\n");
    }
    else if(i > 0){
        printf("\nNumber is Positive\n");
    }
    else if(i < 0){
        printf("\nNumber is Negative\n");
    }
    getch();
    return 0;
}