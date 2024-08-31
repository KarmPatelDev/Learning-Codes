/*
The While loop allows execution of statement inside block of loop, only if the condition in loop satisfies.

In while loop first of all the condition is checked and if it is true then it’s statements get executed otherwise it skip the whole while loop block if the condition is failed to satisfy.

In while loop, a condition is checked or evaluated before processing a body of the loop. If a condition is true then the body of a loop gets executed. After the body of a loop is executed then control of program again goes back at the beginning of the loop, and the condition is checked if it is true, the same process is executed until the condition becomes false in loop. Once the condition becomes false, the control goes out of the while loop.

After exiting the loop, the control goes to the statements which are immediately after the loop or statements next to the loop. The body of a loop can contain more than one statement. If it contains only one statement, then the curly braces {} are not compulsory to use. It is a good practice though to use the curly braces even we have a single statement in the body because it reduces the chances of getting an error.

In while loop, if the condition is not true, then the body of a loop or statements in the block of loop will not get executed, not even once.

while loop is an 'entry controlled loop'.

The Syntax of while loop is:

while (condition test)
{
// Set of statements
}

The body of while loop can contain a single statement or a block of statements. The condition may be any expression, and true is any nonzero value. The loop iterates while the test condition evaluates to true.

When the condition becomes false, the program control passes to the line immediately following the loop.
Example:-

#include<stdio.h>
 intmain(){    
 inti=0;      
 while(i<=5){      
printf("%d \n",i);      
i++;      
}  
 return0;  
}

Explanation of the above program:-

    We have initialized a variable i with value 0. This code will print from 0 to 4; hence the variable is initialized with value 0.
    In a while loop, we have provided a condition (i<=5), which means the loop will execute the body until the value of i becomes 5. After that, the loop will be terminated.
    In the body of a loop, we have a print function to print our number and an increment operation ( i++) to increment the value per execution of a loop. This process will continue until the value becomes 5 and then it will print the number and then terminate the loop.
    Properties of while loop:

    Following are some properties of while loop.
        A conditional expression written in the brackets of while is used to check the condition. The Set of statements defined inside the while loop will execute until the given condition returns false.
        The condition will return 0 if it is true. The condition will be false if it returns any nonzero number.
        In the while loop, we cannot execute the loop until we do not specify the condition expression.
        It is possible to execute a while loop without any statements. This will give no error.
        We can have multiple conditional expressions in a while loop.
        Braces are optional if the loop body contains only one statement.
*/

#include <stdio.h>

int main()
{
    int i = 0;
     while(i<15){
        printf("%d\n", i); 
        i = i + 1;   
    }

/*    while(i<15){
        i = i + 1;
        printf("%d\n", i);    
    }
*/
    return 0;
}