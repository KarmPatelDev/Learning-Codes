// Write a program to find the maximum element from 1-Dimensional array

#include <stdio.h>
#include <conio.h>

int main(){
    int a[50], i, max, n;
    printf("Enter Size: ");
    scanf("%d", &n);
    for(i = 0; i < n; i++){
        scanf("%d", &a[i]);
    }
    max = a[0];
    for(i = 0; i < n; i++){
        if(a[i] > max){
            max = a[i];
        }
    }
    printf("max = %d", max);
    getch();
    return 0;
}