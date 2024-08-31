// Write a C program to read and store the roll no and marks of 20 students using array.

#include <stdio.h>
#include <conio.h>

int main(){
    int i, r[20], m[20];
    for(i = 0; i < 20; i++){
        printf("For %d student: ", i + 1);
        scanf("%d %d", &r[i], &m[i]);
    }
    printf("\nroll no.: \t marks:\n\n");
    for(i = 0; i < 20; i++){
        printf("%d \t\t %d\n", r[i], m[i]);
    }
    getch();
    return 0;
}