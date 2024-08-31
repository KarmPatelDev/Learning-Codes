/*

for loops are mostly or frequently used loops in C language because of their efficiency. This loop provides many more features than other type of loops.

The for loop is used to iterate the statements or a part of the program several times.
It is used to traverse the data structures like the arrays and linked lists.
It has a little different syntax than while and do-while loops.

In for loops first of all the condition is checked and if it is true then statements of for loop runs otherwise it terminates. But if condition is true then after checking condition it execute statements and after executing statements it checks the iteration of variable and increases/decreases its value and then again follows the same procedure i.e. checking condition and all.
Syntax of for loop :

for (expression 1; expression 2; expression 3)

{

Statement 1;

// code inside for block

…

}

Here, Expression 1 – Initialization, Expression 2 – Condition, Expression 3 – Iteration (increment/decrement)
Properties of expression 1 :

    It represents the initialization of the loop variable.
    We can initialize more than one variable in expression 1.
    Expression 1 is optional.

Properties of expression 2 :

    It is conditional expression. It checks for a specific condition to be satisfied. If it is not, the loop is terminated.
    It can have more than one condition. However the loop will iterate until the last condition becomes false. Other conditions will be treated as statements.
    It is optional.
    It can perform the task of expression 1 and expression 3. i.e. we can initialize and update the loop variable.
    We can pass zero or non-zero value in expression 2. But non-zero means ‘true’ and zero means ‘false’.

Properties of expression 3 :

    It is used to update the loop variable.
    We can update more than one variable at same time.
    It is optional.

So, for loops are used in program to iterate any block of code again and again and mainly loops are used to execute any code many times. for loop is one of the widely used loop in c language as it allows us to enter and manipulate data in Arrays and other data structures.

The syntax of the for loop is:

for ( initialize counter ; test counter ; increment/decrement counter)
 {
 //set of statements
 }

initialize counter: It will initialize the loop counter value, i.e., i=0.
test counter: It verifies whether the condition is true.
Increment/decrement counter: Incrementing or decrementing the counter.
Set of statements: Execute the set of statements.
Example:-

#include <stdio.h>

int main()
{
    int num = 10;
    int i;
    for(i = 0; i < num; i++) { 
    printf("%d ",i);
}
    return 0;
}
// Output:-
0 1 2 3 4 5 6 7 8 9

Explanation of the above code:-

First, the initialization expression will initialize loop variables. The expression i=0 executes once when the loop starts. Then the condition i < num is checked if it is true, then the statements inside the body of the loop are executed. After executing the statements inside the body, the control of the program is transferred to increment the variable by 1 (i++). The expression i++ modifies the loop variables. Then the condition i<num is evaluated again. If the condition is still true, the body of the loop will execute once more. The for loop terminates when i < num becomes false.

Just as if statement, we can have for loop inside another for a loop. This is known as nested for loop. Similarly, while loop and do while loop can also be nested.

for ( initialization; test condition; increment ) {
   for ( initialization; test condition; increment ) {
    // set of statements
   }   
   // set of statements
}

Note: there is no rule that a loop must be nested inside its own type. For loop can be nested inside the while loop and vice versa.
Why we prefer For Loops?

It is clear to a developer exactly how many times the loop will execute. So, if the developer has to dry run the code, it will become easier. Also, the Syntax of the for loop is almost the same as other programming languages like C++ and Java.

*/


#include <stdio.h>

int main()
{
/* int i;
    for(i = 0;i < 10;i++){
        printf("%d\n", i);
    }
*/
/*    int i = 0;
    for(;i < 10;i++){
        printf("%d\n", i);
    }
*/
/*    int i, j;
    for(i = 0,j = 0;i < 10, j < 15;i++, j++){
    printf("%d %d\n", i, j);
    }
*/

/*  int i, j;
    for(i = 0,j = 0;j < 15, i < 10;i++, j++){
    printf("%d %d\n", i, j);
    }
*/

/*    int i, j;
    for(i = 0,j = 0;j < 15, i < 10;){
    printf("%d %d\n", i, j);
    i++;
    j++;
    }
*/

    return 0;
}