// Write a program to access elements using pointer

#include <stdio.h>
#include <conio.h>

int main(){

    int data[5];
    for(int i = 0; i < 5; i++){
        printf("Enter The %d Number: ", i + 1);
        scanf("%d", &data[i]);
    }
    printf("Entered Number: ");
    for(int i = 0; i < 5; i++){
        printf("%d ", *(data + i));
    }
}