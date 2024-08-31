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


int isPalindrome(int num){

    int rem, reverse = 0;
    int temp = num;
    while(num > 0){
        rem = num % 10;
        reverse = reverse * 10 + rem;
        num/=10;
    }
    printf("Reverse Of This Number is: %d\n", reverse);
    if(temp == reverse){
        return 1;
    }
    else{
         return 0;
    }
}

int main(){
    int number;
    printf("Enter a number to check whether it is a palindrome or not\n");
    scanf("%d", &number);

    if(isPalindrome(number)){
        printf("This number is palindrome\n");
    }
    else{
        printf("This number is not palindrome\n");
    }
}