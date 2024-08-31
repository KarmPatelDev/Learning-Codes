// Write a C program to enter a distance in to kilometre and convert it into meter, feet, inches and centimetres

#include <stdio.h>
#include <conio.h>

float main(){
    float meter, feet, inch, cm, km;
    printf("\nEnter The Distance in Kilometer\n");
    scanf("%f", &km);
    meter = 1000*km;
    feet = 3281*km;
    inch = 39370*km;
    cm = 100000*km;
    printf("\nDistance in Kilometer is %f\n", km);
    printf("Distance in meter is %f\n", meter);
    printf("Distance in centimeter is %f\n", cm);
    printf("Distance in inch is %f\n", inch);
    printf("Distance in feet is %f\n", feet);
    getch();
    return 0;
}
