// Write Program To Find Area Of Triangle
#include <stdio.h>
#include <conio.h>

float main(){
    float a, b, h;  
    printf("Enter The Height Of Triangle\n");
    scanf("%f", &h);
    printf("Enter The Base Of Triangle\n");
    scanf("%f", &b);
    a = (h * b)/2;
    printf("\nArea Of Triangle = %f\n", a);
    getch();
    return 0;
}