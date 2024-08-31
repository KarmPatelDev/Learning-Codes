/*
Typecasting is a way to convert one data type into another one. It is also known as data conversion or type conversion.
C Language Provides two methods of type casting :

Implicit type casting
Explicit type casting
Implicit type casting :

Implicit type casting means conversion of data types from one to another without losing its original meaning or sense.

In this type casting program automatically converts the variable from one data type to other. It follows strict rules in converting data type of variables as it always converts lower data types to higher ones.

#include<stdio.h>
int main() 
{ 
	short a=10; //initializing variable of short data type 
	int b; //declaring int variable 'b'. 
	b=a; //Implicit type casting 
	printf("%d\n",a); 
	printf("%d\n",b); 
} 

Explicit type casting :

Explicit type casting means conversion of data type from one to another forcefully by programmer. It is user defined conversion.

#include<stdio.h>
int main() 
{ 
	int a; 
	float b; 
	char c; 
	printf("Enter the value of a\n"); 
	scanf("%d",&a); 
	printf("A is %d\n", a); 
	printf("Enter the value of b\n"); 
	scanf("%f",&b ); 
	printf("B is %d\n", (int) b); 
	printf("Type any character : \n"); 
	scanf(" %c",&c ); 
	printf("Character is %d",(int) c); 
	return 0; 
}

*/

#include <stdio.h>

int main(){

  float a = 54;

  float b = 54;

  float c = 54/(float)5;

  float d = (float)54/5;

  printf("The number is %d\n", (int) a);

  printf("The number is %f\n", b);

  printf("The number is %f\n", c);

  printf("The number is %f\n", d);

  return 0;

}