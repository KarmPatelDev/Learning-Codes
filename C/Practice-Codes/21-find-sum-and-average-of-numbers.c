//  Write a C program to find the sum and average of different numbers which are accepted by user as many as user wants

#include <stdio.h>
#include <conio.h>

int main(){
    int i, n, sum = 0, numbers;
    float average;
    printf("\nPlease Enter How many Number you Want?\n");
    scanf("%d", &n);

    printf("\nPlease Enter the elements one by one\n");
    for(i =  0; i < n; i++){
        scanf("%d", &numbers);
        sum = sum + numbers;
    }
    average = sum/n;
    printf("\nSum of the %d Numbers = %d\n", n, sum);
    printf("\nAverage of the %d Numbers = %.2f\n", n, average);
    getch();
    return 0;
}