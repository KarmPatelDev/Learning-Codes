/*

Before understanding about loops let’s understand some of the basic concepts related to loops.

Let’s assume if I ask you to make a program which contain natural no. from 1 to 100 then you may write 100’s of printf statements and can write it but if I ask to write first 1000 natural no. then it going to be really difficult task.

So to overcome these types of problems we use loops and Guys let me ask you a simple question - why we do programming?

Its answer is that to reduce human efforts and if we write 1000’s of line of code then there is no use of programming that’s why loops are introduced in programming which means to repeat some task again and again till the condition become false.

In Looping program executes a block of code again and again or repeatedly until the condition become false.

Loops are very basic and very useful programming facility that facilitates programmer to execute any block of code repeatedly and can be controlled as per the conditions put by the programmer.
Types of Loops -:

Loops are of two types depending upon the position of control statement in a program.
1. Entry controlled loop
2. Exit controlled loop

In an entry controlled loop, the condition of loop is checked before executing the body of a loop. It is also called as a pre-checking loop.
In an exit controlled loop, the condition of loop is checked after executing the body of a loop. It is also called as a post-checking loop.
Infinite Loop is defined as the loop which doesn’t have proper condition and which executes infinitely i.e. it doesn’t stop on its own. An infinite loop is also called as an "Endless loop." To Close Infinite loop press Ctrl+C shortcut.
Different Types of Loops -:

    Do while loop
    While loop
    For loop

For Loop:-

A for loop is a repetition control structure that allows us to efficiently write a loop that will execute a specific number of times. The for loop working is as follows:

The initialization statement is executed only once; in this statement, we initialize a variable to some value.
In the second step, the test expression is evaluated. Suppose the test expression is evaluated to true. In that case, the for loop keeps running, and the test expression is re-evaluated, but if the test expression is evaluated to false, then the for loop terminates.
The loop keeps executing until the test expression is false. When the test expression is false, then the loop terminates.
while loop:-

While loop is called a pre-tested loop. The while loop allows code to be executed multiple times, depending upon a boolean condition that is given as a test expression. While studying for loop, we have seen that the number of iterations is known, whereas while loops are used in situations where we do not know the exact number of iterations of the loop. The while loop execution is terminated on the basis of the Boolean (true or false) test condition.
do-while loop:-

In do-while loops, the execution is terminated on the basis of the test condition. The main difference between the do-while loop and while loop is that, in the do-while loop, the condition is tested at the end of the loop body, whereas the other two loops are entry controlled loops.

Note: In do-while loop, the loop body will execute at least once irrespective of the test condition.
What about an Infinite Loop?

An infinite loop also known as an endless loop occurs when a condition always evaluates to true. Usually, this is considered an error.

Sometimes, while executing a loop, it becomes necessary to jump out of the loop. For this, we will use the break statement or continue statement.
break statement

When a break statement is encountered inside a loop whether it is a for loop or a while loop, the loop is terminated and the program continues with the statement immediately following the loop.
continue statement

Using a continue statement in the loop will cause the control to go directly to the test-condition and then it will continue the loop process.

*/