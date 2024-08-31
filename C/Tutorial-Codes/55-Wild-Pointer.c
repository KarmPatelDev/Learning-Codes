/*

we are going to learn about wild pointers. A wild pointer is a simple concept, but a separate tutorial had to be made to make you aware. So, let's start with the definition.

“Uninitialized pointers are known as void pointers.”
For Example:

    int *ptr;

In the above example, we created a pointer but didn't give it any value, so it becomes a wild pointer.

Its disadvantage is that it will store any garbage value in it, meaning it will hold some arbitrary memory location. Due to the storage of some random location, it can cause a lot of bugs in the program, and sometimes the programmer will not even be able to identify the cause.
Solution:

To avoid the bugs and errors it can cause in a program; we prefer to convert a void pointer to a NULL pointer. By doing so, our pointer will not point to any memory location, as it will point to 0 or NULL location. We can convert a wild pointer to a NULL pointer by merely placing it equal to NULL. Let us see it in C syntax.
Syntax:

    int *ptr = NULL;

So, we will adopt this method if we are not using our pointer to point at some memory location.

Now the other way to save ourselves from such problems is to initialize the pointer.
For example:

    int x = 3;
    int *ptr;
    ptr = &3;

If we only execute the first two lines in the above chunk of code, then it will be a wild pointer as no value has been initialized to it, but if we execute the third line too, it will point to some location, making it a normal pointer.
Dereferencing:

We cannot dereference a wild pointer as we can not be sure about the data in the memory it is pointing towards. Dereferencing a wild pointer can cause a lot of bugs and can also crash the program.
Conclusion:

So, guys, this tutorial was of a fundamental level. The reason for making it separately was to make you aware of a wild pointer to keep you from making errors that can create bugs you couldn't understand the reason for. I also want you to learn C programming concepts to an expert level, as I promised in my first tutorial.

*/

#include <stdio.h>

int main()
{
  int a = 34;
  int *ptr;  // This is a wild pointer
  
  /*
  *ptr = 34; // This is not a good thing to do
  printf("The value of *ptr is %d\n", *ptr);
  */
    
  ptr = &a; // ptr is no longer a wild pointer
  printf("The value of a is %d\n", *ptr);  
  return 0;
}