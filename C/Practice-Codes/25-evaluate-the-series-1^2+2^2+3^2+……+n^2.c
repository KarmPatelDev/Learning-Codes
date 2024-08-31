// Write a program to evaluate the series 1^2+2^2+3^2+……+n^2

#include <stdio.h>
#include <conio.h>

int main(){
    int number, i, sum;
    printf("Enter maximum values Of Series Numbers: ");
    scanf("%d", &number);
    sum = (number * (number + 1) * ((2 * number) + 1)) / 6;

    printf("\nSum of the above given series: \n\n", sum);
    for(i = 1; i <= number; i++){
        if(i != number){
            printf("%d^2 + ", i);
        }
        else{
            printf("%d^2 = %d\n", i, sum);
        }
    }
    getch();
    return 0;
}