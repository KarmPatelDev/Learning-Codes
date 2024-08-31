// Read five persons height and weight and count the number of person having height greater than 170 and weight less than 50

#include <stdio.h>
#include <conio.h>

int main(){
    int person, height, weight, count = 0;
    for(person = 0; person < 5; person++){
        printf("\nEnter Details Of Person - %d\n", person + 1);
        printf("\nEnter Height: ");
        scanf("%d", &height);
        printf("Enter weight: ");
        scanf("%d", &weight);
        if(height > 170 && weight < 50){
            count++;
        }
    }
    printf("\ncount value = %d\n",count);
    getch();
    return 0;
}