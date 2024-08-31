/*

With great power comes great responsibility. C programming is a language that gives us the power of memory management. As in the previous lecture, we have discussed the concept of dynamic memory allocation. We know that dynamic memory allocation is a way in which the size of a data structure can be changed during the runtime. Memory assigned to a program in a typical architecture is divide into four segments:
Code

The function pointers can only access this memory area. The size of the code area is fixed.
Static/Global variables

All static and global variables are stored in this area. The variables which are stored in this area exist until the program exits.
Stack

Stack area is the temporary memory area as the stack area's variables are deleted whenever the program reaches out of scope. All the automatic variables, constants, function parameters, and return value, local variables of the default storage class get stored in the stack area.
Heap

The heap area is used to store the data structures created by using dynamic memory allocation. The size of the heap area is variable and depends upon the free space in the memory.
What is Memory Leak?

A memory leak is a poison for software because software shows undefined behavior due to the memory leak. A memory leak occurs when we create a memory in a heap and forget to delete it. It happens when we do not use dynamic memory properly. If the system has enough memory, in that case also this slows down the performance of the system. To avoid this problem, memory allocated on the heap should always be freed when not needed.

As an example of a memory leak, let us analyze the following code fragment.

    char *mystring
    mystring = (char *)malloc(200);
    mystring = NULL;

The first line of code char *mystring declares a pointer to char. In the second line, a space of 200 bytes is reserved. The memory manager returns a pointer to the beginning of that block, and it is stored in the mystring variable. At this point, the address of this block is not stored anywhere else. The following line assigns the value NULL to the same pointer(mystring). Now the question arises, where the address of the memory is reserved? It has been lost, and there is no way to recover it because mystring was the only copy of such value. Consequently, the memory portion will be kept as reserved for the rest of the program execution, so the memory leaked.
Reasons for Memory leak:-

Memory leaks are particularly serious issues for programs. Memory leaks in C happen because of these three reasons:

    we do not free the memory that is no longer needed
    we do try to free the memory, but we do not have the reference to a dangling pointer.
    we try to free the memory using the wrong function

How to avoid memory leak in C?

To avoid memory leaks, we should always be freed the memory allocated on the heap when no longer needed. The code will look like this:

#include <stdlib.h>
void myfunc() 
{ 
   int *ptr = (int *) malloc(sizeof(int)); 
  //  Statements 
   free(ptr); 
   return; 
}

In situations where dynamic allocation is no longer required to maintain, free up space before the program terminates.
Two rules should be observed for any C program related to dynamic memory management are:

Any memory that is dynamically reserved with malloc, calloc, or realloc must be deallocated through using free().
When the program executes its last instruction and has dynamic memory blocks that are not deallocated, it is considered incorrect.

*/


#include <stdio.h>
#include <stdlib.h>

int main()
{

   int i = 1;
   int *i2;

   while (i < 4555)
   {
      printf("I am Karm Patel\n");
      i2 = malloc(34444 * sizeof(int));
      if (i % 100 == 0)
      {
         getchar();
      }
      i++;
      free(i2);  // without this we will encounter of memory leaks
   }
}