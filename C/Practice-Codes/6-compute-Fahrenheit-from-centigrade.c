// Write a program to compute Fahrenheit from centigrade (f=1.8*c +32)

#include <stdio.h>
#include <conio.h>

float main(){
float f, c;
printf("\nEnter Celcius:\n");
scanf("%f", &c);
f = (c*9/5) + 32;
printf("Fahrenhit: %f\n", f);
getch();
return 0;
}
