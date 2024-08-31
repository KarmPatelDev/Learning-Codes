/*
In this tutorial, our focus will be towards the structure of our written program. As a beginner the concept might be difficult for you to understand but do not worry as it happens to everyone, but with time you will develop a good grasp on it. We will be discussing some of the structural parts of our code, such as:

    Pre-processor commands
    Functions
    Variables
    Statements
    Expressions
    Comments

Now we will divide our written program into a few lines of code and one by one we will go over the meaning of each and every keyword in the specific line.

So, let’s begin with Pre-processor commands.

    #include <stdio.h>

This is the first line of our code. Any line starting with # represents a preprocessing command. It tells our program that before its execution, it must include the stdio.h named file in it because we are using some of the commands or codes from this file.

For example, if our programs needs mathematical operations of high level them we must include:

    #include <math.h>

It helps us to use the code from math.h file for the calculations in our programs.

    int main()

this is the 2nd line. main() is function here and we will see the detail about the function in later tutorials. Here int is the return type of function and the return type is according to the functions activity i.e. if it is giving an integer variable as a result then return type should be int.

    int a, b;

here we are initializing two variables as integers. Initializing with integer means that we can store integer values in it. If we would have initialized them with char then we could have stored character values in it such as a, b, c, d, etc.

    printf("Enter number a\n");

This is simply a print statement. Whatever we write in the brackets will be directly printed onto the screen. /n is the new line character here.

    scanf("%d", &);

scanf is used to take inputs from the user. Here & gives the address of variable “a” to store the user's given value. %d notifies that the value should be of integer type.

    printf("The sum is %d\n", a+b);

Here a+b is simply a mathematical addition and print statement is printing the result onto the screen.

    return 0;

we need a return value for a function. The function we created was of int type so it is returning 0. Return 0 means that the function is working perfectly.

Note: Return statement and function type should be same.

    //This is a comment

We write comments by using the double slash sign (//). Comments are to notify other programmers the working of the code at specific intervals or we write them for our-self. They do not have any effect on the written program.
Steps included in execution of C program are :

Pre-processing -> Compilation -> Assembly -> Linking.

Now we are going to write a command in our power terminal window, down below:

    gcc-Wall-save-temps file_name.c -o new_file

Note: Here the file_name is the name of the file we created to write code and new_file is the name we want our executable file to have.
Now I will tell you the benefits of this command. By the help of this command five files will be created namely:

    file_name.i
    file_name.s
    file_name.o
    file_name.c
    new_file.exe

    file_name.i will create a preprocessing file where comments are removed, macros are expended and all the code from # files are copied into the file_name.i file with our respective code at the end.
    file_name.s will have our code converted in assembly level code
    file_name.o will have all the code in machine level language in binary form.
    file_name.c will contain our executable C language code.
    new_file.exe is the linker that links all the file_name.o sort of files at on place.

    Pre-Processing : In this process comments are removed, macros are expanded and #include files are included.
    Extension of pre-processed file is (.i)

    Compiling : In this process pre-processed file is converted into assembly instructions.
    Extension of assembly instruction file is (.s)

    Assembly : Assembly instructions are then converted into machine language instructions.
    Extension of machine instruction file is (.o)

    Linking : In this process all object file i.e. (.o) files are converted to executable i.e. (.exe) program. There atre two type Static and Dynamic linking.

    That’s how execution of C program occurs.
    To Compile a Code In The New exe File

    PS C:\Users\Patel Karm\Downloads\Karm\Codding\C language> gcc 4.c -o karm

    PS C:\Users\Patel Karm\Downloads\Karm\Codding\C language> ./karm.exe
    To Execute The Steps Code Of C Program

    PS C:\Users\Patel Karm\Downloads\Karm\Codding\C language> gcc 3.c -Wall -save-temps -o karm
    
    */

   #include <stdio.h>

int main()
{
    int a, b;
    printf("Enter The First Number a\n");
    scanf("%d", &a);

    printf("Enter The Second Number b\n");
    scanf("%d", &b);

    printf("The Sum of two number is %d", a+b);
    return 0;
}