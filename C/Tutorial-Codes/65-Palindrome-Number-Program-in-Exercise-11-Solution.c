/*

The task you have to perform is to write a program that will check whether the integer number is a palindrome or not. A palindromic number is a number such as 16461, which remains the same when its digits are reversed. The example of palindromic numbers is 101, 131, 151.
Task:-

Create a function in which you will pass the number as an argument and the function return whether the number is palindrome or not.

int isPalindrome(int num)
{
return 1;
}

Take the integer input from the user using scanf() statement. If the number is a palindrome, the message should display on the screen that “This number is a palindrome”.

*/

#include <stdio.h>
#include <stdlib.h>

int isPalindrome(int num)
{
    int reversed = 0;
    int originalNumber = num;

    // Lets reverse the number
    while (num != 0)
    {
        reversed = reversed * 10 + num % 10;
        num = num / 10;
    }

    printf("The reversed number is %d\n", reversed);

    if (originalNumber == reversed)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

int main()
{
    int number;
    printf("Enter a number to check whether it is a palindrome or not \n");
    scanf("%d", &number);
    // Your task is to implement this function
    if (isPalindrome(number))
    {
        printf("This number is a palindrome\n");
    }

    else
    {
        printf("This number is not a palindrome\n");
    }

    return 0;
}
