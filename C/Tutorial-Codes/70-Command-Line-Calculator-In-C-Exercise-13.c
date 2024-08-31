/*

Problem Statement:-

You have to create a command-line utility to add/subtract/divide/multiply two numbers. The first command-line argument of your c program must be the operation. The next arguments being the two numbers.
Here is an example:-

Command.c add 45 4
49

*/


#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
    char * operation;
    operation = argv[1];
    int a, b;
    a = atoi(argv[2]);
    b = atoi(argv[3]);

    if(strcmp(operation, "add") == 0){
        printf("The sum of two number is %d\n", a + b);
    }
    else if(strcmp(operation, "subtract") == 0){
        printf("The subtract of two number is %d\n", a - b);
    }
    else if(strcmp(operation, "multiply") == 0){
        printf("The multiply of two number is %d\n", a * b);
    }
    else if(strcmp(operation, "divide") == 0){
        printf("The divide of two number is %d\n", a / b);
    }
    return 0;
}
