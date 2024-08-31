/*

#undef:

As can be guessed by the name, it is used to undefine a macro to eliminate its definition.
Example:

    #define E 1111
    #undef E

E is not defined for any value after using #undef, so it holds no value in the above example.
#ifdef:

It is used to check whether a macro is defined or not. If it is defined, then it executes the code.
Example:

    #ifdef M
    //execute code if true i.e., the macro is defined

#ifndef:

It works exactly the opposite of ifdef. Meaning that it executes the code if the macro is undefined.
Example:

    #ifndef M
    //execute code if true i.e., the macro is defined

#if:

It checks whether the given condition is true or not. If true, then it executes the code.
Example:

    #if condition
    // execute code if true i.e. condition satisfied

#else:

If the condition of ‘if’ is false, then the else is executed.
Example:

#if condition 
// execute code if true else pass it to #else

#else 
// execute code if “if condition” is false

#elif:

It is used to insert more conditions between if and else. If the “if statement” is true, then elif won’t be checked.
Example:

#if condition 
// execute code if true else pass it to #elif

#elif expression 
// execute code if true else pass it to #else

#else 
//else code

#pragma:

Pragma is used to issue some special commands to compiler.
KEY POINTS TO REMEMBER:

    Source program is converted into executable code through different processes like precompilation, compilation, assembling and linking.
    Local variables uses stack memory.
    Dynamic memory allocation functions use the heap memory.

EXAMPLE PROGRAM FOR #DEFINE, #INCLUDE PREPROCESSORS IN C LANGUAGE:
#define

This macro defines constant value and can be any of the basic data types.
#include <file_name>

The source code of the file “file_name” is included in the main C program where “#include <file_name>” is mentioned.

  
#include <stdio.h>

#define height 100
#define number 3.14
#define letter 'A'
#define letter_sequence "ABC"
#define backslash_char '\?'

void main()
{
   printf("value of height    : %d \n", height );
   printf("value of number : %f \n", number );
   printf("value of letter : %c \n", letter );
   printf("value of letter_sequence : %s \n", letter_sequence);
   printf("value of backslash_char  : %c \n", backslash_char);

}

OUTPUT:

value of height : 100
value of number : 3.140000
value of letter : A
value of letter_sequence : ABC
value of backslash_char : ?

EXAMPLE PROGRAM FOR CONDITIONAL COMPILATION DIRECTIVES:
A) EXAMPLE PROGRAM FOR #IFDEF, #ELSE AND #ENDIF IN C:

“#ifdef” directive checks whether particular macro is defined or not. If it is defined, “If” clause statements are included in source file.

Otherwise, “else” clause statements are included in source file for compilation and execution.

#include <stdio.h>
#define RAJU 100

int main()
{
   #ifdef RAJU
   printf("RAJU is defined. So, this line will be added in " \
          "this C file\n");
   #else
   printf("RAJU is not defined\n");
   #endif
   return 0;
}

OUTPUT:

RAJU is defined. So, this line will be added in this C file
B) EXAMPLE PROGRAM FOR #IFNDEF AND #ENDIF IN C:

#ifndef exactly acts as reverse as #ifdef directive. If particular macro is not defined, “If” clause statements are included in source file.

Otherwise, else clause statements are included in source file for compilation and execution.

#include <stdio.h>
#define RAJU 100
int main()
{
   #ifndef SELVA
   {
      printf("SELVA is not defined. So, now we are going to " \
             "define here\n");
      #define SELVA 300
   }
   #else
   printf("SELVA is already defined in the program”);

   #endif
   return 0;

}

OUTPUT:

SELVA is not defined. So, now we are going to define here
C) EXAMPLE PROGRAM FOR #IF, #ELSE AND #ENDIF IN C:

“If” clause statement is included in source file if given condition is true.

Otherwise, else clause statement is included in source file for compilation and execution.

#include <stdio.h>
#define a 100
int main()
{
   #if (a==100)
   printf("This line will be added in this C file since " \
          "a \= 100\n");
   #else
   printf("This line will be added in this C file since " \
          "a is not equal to 100\n");
   #endif
   return 0;
}

OUTPUT:

The line will be added in this C file since a = 100
EXAMPLE PROGRAM FOR UNDEF IN C LANGUAGE:

This directive undefines existing macro in the program.

#include <stdio.h>

#define height 100
void main()
{
   printf("First defined value for height    : %d\n",height);
   #undef height          // undefining variable
   #define height 600     // redefining the same for new value
   printf("value of height after undef \& redefine:%d",height);
}

OUTPUT:

First defined value for height : 100 value of height after undef & redefine : 600
EXAMPLE PROGRAM FOR PRAGMA IN C LANGUAGE:

Pragma is used to call a function before and after main function in a C program.

#include <stdio.h>

void function1( );
void function2( );

#pragma startup function1
#pragma exit function2

int main( )
{
   printf ( "\n Now we are in main function" ) ;
   return 0;
}

void function1( )
{
   printf("\nFunction1 is called before main function call");
}

void function2( )
{
   printf ( "\nFunction2 is called just before end of " \
            "main function" ) ;"
}

OUTPUT:

Function1 is called before main function call
Now we are in main function
Function2 is called just before end of main function
MORE ON PRAGMA DIRECTIVE IN C LANGUAGE:

    #Pragma
    startup
    <function_name_1> 

This directive executes function named “function_name_1” before

    #Pragma
    exit
    <function_name_2> 

This directive executes function named “function_name_2” just before termination of the program.

    #pragma warn – rvl

If function doesn’t return a value, then warnings are suppressed by this directive while compiling.

    #pragma warn – par

If function doesn’t use passed function parameter , then warnings are suppressed

    #pragma warn – rch

If a non reachable code is written inside a program, such warnings are suppressed by this directive.

Let's discuss some pre-defined macros now. A pre-defined macro is a macro that has already been defined or understood by C preprocessor and does not need a definition.
__DATE__:

It prints the current date on to the screen. The date format it follows is MMMDDYYY.
Syntax:

#include <stdio.h>
int main()
{
                printf( __DATE__);
                return 0;
}
 

Output:

Sep 15 2020
Note: The output will be the current date.
__TIME__:

It prints the current time on to the screen. The date format it follows is HH:MM:SS.
Syntax:

#include <stdio.h>
int main()
{
                printf( __TIME__);
                return 0;
}

Output:

17:15:20
Note: The output will be the current time.
__FILE__:

It prints the current file name on to the screen. The name will be printed as a string literal.
Syntax:

#include <stdio.h>
int main()
{
                printf( __FILE__);
                return 0;
}

Output:

main.c
__LINE__:

It prints the current line number on to the screen. The number will be printed as a decimal constant.
Syntax:

#include <stdio.h>
int main()
{
                printf( “%d”__LINE__);
                return 0;
}

Output:

4
__STDC__:

It is used to check whether our program is being compiler using ANSI standard or not. It will return 1 if true.
Syntax:

#include <stdio.h>
int main()

    printf("%d\n", __STDC__);
    return 0;
}

Output:

1


*/


#include <stdio.h>

int main()
{
  printf("Today's Date is %s\n", __DATE__);
  printf("Today's Time is %s\n", __TIME__);
  printf("File Name is %s\n", __FILE__);
  printf("Line Number is %d\n", __LINE__); 
  printf("ANSI: %d\n", __STDC__);
  return 0;
}