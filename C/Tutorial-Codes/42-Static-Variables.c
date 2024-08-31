/*

Local Variables

Local variables are declared inside a function or a block of code; they cannot be accessed outside the function. The local variables can be used only by statements that are inside that function or block of code. The system does not initialize local variables, we must initialize it ourself. The scope of these variables will be within the function only.
Global Variables

Global variables are defined outside a function, usually in the main. Global variables hold their values, and we can access them inside any of the functions defined for the program. Global variables are initialized by the system automatically when we define them.

If the local and global variables have the same name, the local variable will take preference.
Formal Parameters

Formal parameters have precedence over global variables, and they are treated as local variables within a function. The term formal parameters are used to refer to the parameters in the definition of the method. In contrast, actual parameters are the variable or expression that appears in the function or method call in the calling environment.

Now let us move to our main topic of this tutorial, i.e., static variables. Static is a keyword in the C language. We can use it with variables and functions.
What is a static variable?

A static variable is known to retain the value even after they exit the scope. Static variables retain their value and are not initialized again in the new scope. The static variable until the end of the program is kept in the memory, whereas a normal variable is destroyed when a function is over. They can be defined inside or outside the function. Static variables are local to the block. The default value of static variables is zero. The keyword static is used to declare a static variable.
Syntax:

    static Datatype Variable_name = Variable_value;

datatype − The data type of variable like char, int, float, etc.

variable_name − This is the name of the variable.

Variable_value − Value to initialize the variable. By default, it is zero.
Example:

#include <stdio.h>  

int myfunc()  
{  
 static int i=0;  
  i++;  
  return i;  
}

int main()  
{  
printf("Value:%d",myfunc()); 
printf("\nValue:%d",myfunc()); 

    return 0; 
}

Output:-

Value:1
Value:2
Differences between static local and the static global variable
Static global variable

If we declare the variable with a static keyword outside the function, then it is known as a static global variable. This variable will be accessible throughout the program.
Static local variable

When a variable with a static keyword is declared inside a function is known as a static local variable. The scope of the static local variable will be the same as the local variables, but its memory will be available throughout the execution of the program.
Properties of a static variable

The following are some properties of a static variable:

    Static variable memory is allocated within a static variable.
    A static variable will retain the value even after they exit the scope.
    Static variable memory is available throughout the program.
    If we do not assign any value to the static variable, then the default value will be 0.
    
*/

#include <stdio.h>

int c = 33;   // It is Global Variable

int func2(){
    return 3;
}
int func1(int b){
/*
    int loc = 65;
    printf("The address of b in func1 function is %x\n", &b);
    printf("The address of c in func1 function is %x\n", &c);
    printf("The value of c in func1 function is %d\n", c);
    return b * 10;
*/

    static int myvar = 0;
    // static int myvar;
    // static int myvar = 98;
    // static int myvar = func2();  // It show error because static value initialize first before start the function so static is always declaired by constant
    printf("The value of myvar is %d\n", myvar);
    myvar++;
    return b + myvar;
}
int main(){

/*
    int c = 22;    // It is local variable
    int b = 34;
    int val = func1(b);
    int * ptr = &val;
  //  printf("%d", loc);  // It is show error because loc is local variable of func1(b).
    printf("The value of func1 is %d\n", val);
    printf("The address of b in main function is %x\n", &b);
    printf("The address of c in main function is %x\n", &c);
    printf("The value of c in main function is %d\n", c);
*/

    int b = 45;
    int val1 = func1(b);
    val1 = func1(b);
    val1 = func1(b);
    val1 = func1(b);
    val1 = func1(b);
    val1 = func1(b);
    printf("\n");
    printf("The value of func1 is %d\n", func1(b));
    printf("The value of func1 is %d\n", func1(b));
    printf("The value of func1 is %d\n", func1(b));
    printf("The value of func1 is %d\n", func1(b));
    printf("The value of func1 is %d\n", func1(b));
    printf("The value of func1 is %d\n", func1(b));

    return 0;
}
