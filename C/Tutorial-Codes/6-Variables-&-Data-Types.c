/*

Variable -:

    A variable is a name or an identifier which is given to any storage area or memory location.
    Actually, Variable doesn’t hold a value but it’s the name given to any memory address in RAM. It means variable is the way to access that memory address of Ram so that we can store or manipulate data in that memory address or memory block.
    It’s a name of memory location.

Declaration:

We cannot declare a variable without specifying its data type. The data type of a variable depends on what we want to store in the variable and how much space we want it to hold. The syntax for declaring a variable is simple:

    data_type variable_name;

or

    data_type variable_name = value;

the data type can be int, float, char, depending on what kind of value we want to store.
Naming a Variable:

A variable name can be of anything we want to call out variable. Yet there are specific rules we must follow while naming a variable:

    A variable name can contain alphabets, digits, and underscore (-) only.
    The starting letter can not be a digit.
    White spaces cannot be used.
    The name should not be reserved keyword or special character.

We can declare and assign value to a variable in two ways.
1st way:

    int a = 12;

2nd way:

    int a;
    a= 12;

Both of these have exactly the same working.

A variable as it names define can be altered, or its value can be changed, but same is not true for its type. If a variable is of integer type, then it will only store an integer value, which means that we cannot assign a character type value to an integer variable. We can not even store a decimal value into an integer variable.

Valid Variable Names : int demo; , float demo123; , char _demo123; etc.

Invalid Variable Names : $demo; , int 123demo; , char float;
Data Types -:

Data type is the type of data that variable holds.
These are used for assigning a type to a variable.

The words which are both data type and keyword in C Language are known as Primitive Data Type.
Such as int, char, float, double and void.

Basic Data Type: These are the fundamental data type of C Language.
E.g. : int, char, float, double.

Derived Data Type: These are the data types which are made with the help of Basic Data Types.
E.g. : array, pointer, structure, union.

Enumeration Data Type : enum.

Void Data Type : It is the data type which denotes the value empty i.e. Void data type means “no data type”.

Data Type Size varies from architecture to architecture. It means 32bit architecture system can have some other size for any specific data type then 64bit architecture system.

It is not necessary to define any variable with signed keyword because all the variables by default are declared by signed keyword only.

Note: Search Online DataType Memory and Range Table.

*/


#include <stdio.h>

/*

int main()
{
    int a,b,c,d;
    a = 4;
    int karm11 = 5;
    printf("The Number of sum a and karm11 is %d\n", a + karm11);
    printf("The division of 9 and 9 is %d", 9/9);
    return 0;
}

*/

/*

int main()
{
    printf("%lu", sizeof(char));
    return 0;
}

*/

/*
int main()
{
    int a,b;
    printf("Enter The Number Of A");
    scanf("%d", &a);
    printf("Enter The Number Of B");
    scanf("%d", &b);
    printf("The sum of two number is %d", a + b);
    return 0;

}

*/