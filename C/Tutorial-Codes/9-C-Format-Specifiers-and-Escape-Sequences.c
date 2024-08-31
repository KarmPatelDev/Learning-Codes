/*

Format specifier in C:-

The format specifier in C programming is used for input and output purposes. Through this, we tell the compiler what type of variable we are using for input using scanf() or printing using printf(). Some examples are %d, %c, %f, etc.
The %c and %d used in the printf( ) are called format specifiers. Format specifier tells printf( ) to print the value, for %c, a character will printed, and for %d, a decimal will be printed.Here is a list of format specifiers.

    Format Specifier - Type
    %c - Used to print the character
    %d - Used to print the signed integer
    %f - Used to print the float values
    %i - Used to print the unsigned integer
    %l - Used to long integer
    %lf - Used to print the double integer
    %lu - Used to print the unsigned int or unsigned long integer
    %s - Used to print the String
    %u - Used to print the unsigned integer

Following are the few examples of format specifier:

To print the integer value:
printf("\n The value of integer is %d", d);

To print the float value:
printf("The value of float is %f", f);

To print the character:
printf("\n The value of character is %c", c);

To print the string:
printf("\n The value of string is %s", s);
What is Escape Sequence in C?

Many programming languages supports the concept of Escape Sequence. An escape sequence is a sequence of characters which are used in formatting the output. They are not displayed on the screen while printing. Each character has its own specific function like \t is used to insert a tab and \n is used to add newline.
Types of Escape Sequence in C

    Escape Sequence - Description
    \t - Inserts a tab
    \b - Inserts a backspace
    \n - Inserts a newline.
    \r - Inserts a carriage return.
    \f - Inserts a form feed.
    \’ - Inserts a single quote character.
    \” - Inserts a double quote character.
    \\ - Inserts a backslash character.

Following are the some examples of escape sequence:

Print character backslash(\) using printf function

    printf("\n C programming \m/ "); 

Prints a newline before and after the text

    printf("\n This is my C program\n"); · 

Use \" to print double quote and \' for single quote

    printf("\n Welcome to \"The C Programming tutorial\"");
    printf("\n Welcome to \'C programming series \'") ; 

To provide tab space between two words

    printf("Hello \t Viewers"); 

To add vertical tab character.

    printf("Hello Viewers");
    printf("\v Welcome to C Programming"); 
    
*/


#include <stdio.h>
#define d 8
int main()
{
/*
    int a = 5;
    float b = 5.33;
    printf("The number of a is %d and the number of b is %f", a, b);
    printf("%0.4f", b);
    printf("The number is %10.4f", b);
    printf("%-10.4f is the number", b);
*/

 /*
    %c character
    %d integer
    %f float
    %l long
    %lf double
    %Lf long double
 */

 /*  
    const int c = 8;
 //   c = 9; can not do this because c is constant
    printf("%d\n", c);

 //   d = 9; can not do this because c is constant
    printf("%d", d);
*/

// printf("Hello \n My Name is Karm Patel \n \t\t\t\t \\t is use for tab \n \\n is use to break line \n \a \\a is use for sound");
    return 0;

    // and /*.......*/ it is use for comment.
    
}