/*

Do while loop allows execution of statements inside the block of loop for one time for sure even if the condition in loop fails to satisfy.

Following is the syntax of the do-while loop in C programming.

do {
   statements );
} while( test condition );

If the test condition returns true, the flow of control jumps back up to do, and the set of statements in the loop executes again. This process repeats until the given test condition becomes false.
How does the do-while loop work?

    First, the body of the do-while loop is executed once. Only then, the test condition is evaluated.
    If the test condition returns true, the set of instructions inside the body of the loop is executed again, and the test condition is evaluated.
    This looping process goes on until the test condition becomes false.
    If the test condition returns false, then the loop terminates.

Example:-

 
// The following Program will add numbers until the user enters zero

#include <stdio.h>
int main()
{
    int n, sum = 0;
    do
    {  
printf("Enter a number: ");
scanf("%i", &n);
        sum += n;
    }
    while(n != 0);
    printf("Sum is = %d",sum);

    return 0;
}
  
//  Output:-
  
Enter a number: 3                                                                                                             
Enter a number: 4                                                                                                             
Enter a number: 8                                                                                                             
Enter a number: 0                                                                                                             
Sum is = 15

As we have mentioned at the beginning of this tutorial, that do-while runs at least once even if the test condition returns false, because the test condition is evaluated after the execution of the instructions in the body of the loop.
WHAT IS THE DIFFERENCE BETWEEN WHILE AND DO-WHILE LOOPS IN C?

While loop is executed when given test condition return true, whereas, do-while loop is executed for the first time irrespective the test condition is true or false, because the test condition is checked after executing while loop for the first time.

This difference between while and do-while will be more clear by the following program.

    main( ) { while ( 2 < 1 )
    printf ( "Hello World \n") ;
    } 

Here, since the condition fails the first time itself, the printf( ) statement will not get executed. Let's now write the same code using a do-while loop.

    main( ) {
    do {
    printf ( "Hello World\n") ;
    } while ( 2 < 1 ) ;
    } 

In this program, the printf( ) statement would be executed once, since first the body of the loop is executed, and then the test condition is evaluated

do while loops are used when we have to execute block of loop at least at once for sure i.e. even the condition is false then also do while loop get executed for once.

In do while loop, first of all the statements of do block get executed and then the condition is checked and if the condition is true then it repeat the same step i.e. control goes to top of the loop and again executes it and this process occur till the condition becomes false.

do while loops are also called an 'exit-controlled loop'.

*/

#include <stdio.h>

int main()
{
 /*   int num = 0;
    do{
        printf("%d\n", num);
        num++;
    }while(num<15);
*/

/* 
    int num = 0;
    do{
         num++;
        printf("%d\n", num);       
    }while(num<15);
*/

int num = 0, i;
  printf("Enter The Number\n");
  scanf("%d", &i);
    do{
        printf("%d\n", num + 1);
        num = num + 1;
    }while(num<i);

   return 0; 
}