/*

Exercise 1 (Solution) :
Question : Print Multiplication table of any number entered by user
Solution :

There are two methods or ways to complete this task :

Simple printf command method
Loops method

We can simply use print commands and can print the table easily. And the other way is that we can use loops i.e. repetition of block of code to accomplish our task.
Method 1 : By Using Simple print commands :

#include<stdio.h>
int main()
{
	//method 1: Using Print Commands

	int table;
	printf("\nEnter the number you want multiplication table of : ");
	scanf("%d", &table);

	printf("\nMultiplication table of %d is :", table);
	
	printf("\n\n%d*1 = %d\n, table, table*1");
	printf("%d*2 = %d\n, table, table*2");
	printf("%d*3 = %d\n, table, table*3");
	printf("%d*4 = %d\n, table, table*4");
	printf("%d*5 = %d\n, table, table*5");
	printf("%d*6 = %d\n, table, table*6");
	printf("%d*7 = %d\n, table, table*7");
	printf("%d*8 = %d\n, table, table*8");
	printf("%d*9 = %d\n, table, table*9");
	printf("%d*10 = %d\n, table, table*10");

	return 0;
}

Method 2 : By using loops :

#include<stdio.h>
int main()
{
	//method 2: Using Loops

	int table;
	printf("\nEnter the number you want multiplication table of : ");
	scanf("%d", &table);

	printf("Multiplication table of %d is as follows:\n\n", table);

	for (int i =1; i<=10, i++)
	{
		printf("%d*%d = %d\n", table, i, table*i );
	}
	
	
	return 0;
}

*/

#include <stdio.h>

int main()

{

  int num;

  printf("Type The Number For Multiplication Table\n");

  scanf("%d", &num);

  for(int i=1; i < 11; i++)

  {

    printf("%d * %d = %d\n", num, i, num*i);

  }

  return 0;

}