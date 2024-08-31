/*
Exercise 2 :
Question :

Write a program which converts the following units into another :

In this program simply use switch case statements to ask user which type of conversion he wants to do and then simply use basic mathematics and convert one unit into another.

 Exercise of Units and Conversions

kms to miles
inches to foot
cms to inches
pound to kgs
inches to meters



*/

#include <stdio.h>

int main()

{

  printf("Press 1 To Convert Kilometers To Miles\n");

  printf("Press 2 To Convert Inches To Foots\n");

  printf("Press 3 To Convert Centimeters To Inches\n");

  printf("Press 4 To Convert Pounds To Kilograms\n");

  printf("Press 5 To Convert Inches To Meters To Miles\n");

  printf("Press 0 To Quit\n");

  printf("Enter The Conversion Number\n");

 

  

   

  int conversion; 

  scanf("%d", &conversion);

  printf("You Entered %d Conversion Number\n\n", conversion);

 

  float value;

 if(conversion == 0){

   goto end;

 }

 else{

  printf("Enter The Value Of Conversion\n");

  scanf("%f", &value);

 }

  

  switch(conversion){

    case 1:

      printf("%f Kilometers = %f Miles", value, 0.621371 * value);

      break;

    case 2:

      printf("%f Inches = %f Foots", value, 0.0833333 * value);

      break;

    case 3:

      printf("%f Centimeters = %f Inches", value, 0.393701 * value);

      break;

    case 4:

      printf("%f Pounds = %f Kilograms", value, 0.453592 * value);

      break;

    case 5:

      printf("%f Inches = %f Meters", value, 0.0254 * value);

      break;

    default:

      printf("You Have Entered a Wrong Conversion Number");

   }

   

   end:

  return 0;

  

}