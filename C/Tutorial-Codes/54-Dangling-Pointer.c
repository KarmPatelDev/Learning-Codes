/*

What is a dangling pointer?

Dangling pointers are pointers that are pointing to a memory location that has been freed or deleted.
Dangling pointers arise during object destruction, when an object with an incoming reference is deleted or deallocated, without modifying the value of the pointer, so that the pointer still points to the memory location of the deallocated memory.The system may reallocate the previously deleted memory; the unpredicted result may occur as the memory may now contain different data.
There are some causes of dangling pointers. The causes are explained below with examples.
De-allocating or free variable memory:-

When memory is deallocated, the pointer keeps pointing to freed space.

int main() 
{ 
   int *ptrr=(int *)malloc(sizeof(int)); 
   int x=80; 
   ptrr=&x; 
   free(ptrr); 
   return 0; 
}

In the above code, we have created two variables *ptrr and a where the ptrr is a pointer, and x is the integer variable that contains a value 80. The *ptrr (pointer variable) is created with the help of the malloc() function. As we know that malloc() function returns the void, so we use int * for type conversion to convert void pointer into int pointer.
Function call

Now, we will see how the pointer becomes dangling with the function call.

#include
int *myvalue(){ 
int a=5; 
return &a; 
}
int main() 
{ 
int *ptr=myvalue(); 
printf("%d", *ptr); 
return 0; 
}   

Output:- Segmentation fault (core dumped).

In the above code, First, we create the main() function in which we have declared ptr pointer, which contains the return value of the myvalue(). When the myvalue() is called, then the control moves to the context of the int *myvalue(), the myvalue() returns the address of the "a" variable. Now, when control comes back to the main() function, it means the variable a is no longer available. Therefore, we can say that the pointer is dangling as it points to a memory location that has been freed or deleted.

If the above code is written with a variable, 'a' is static. We know that static variable stores in global memory. So, in this case, the output will be 5.
How to Avoid the Dangling Pointer Errors?

The dangling pointer introduces nasty bugs in our C programming and these bugs frequently become security holes at a time. These dandling pointer errors can be avoided by initializing the pointer value to the NULL. If we assign the NULL value to the pointer, then the pointer will not point to the memory location that has been freed. By assigning the NULL value to the pointer means that the pointer is not pointing to any memory location.

*/

#include <stdio.h>

int* functionDangling(){
  int a = 34;
  int b = 43;
  int sum = a + b;
  return &sum;
}

int main()
{
  // case 1: Do allocation of a memory block
  int *ptr = (int *) malloc(7 * sizeof(int));
  ptr[0] = 10;
  ptr[1] = 20;
  ptr[2] = 30;
  ptr[3] = 40;
  free(ptr);  // ptr is now a dangling pointer
  
  // case 2: function returning local variable address
  int * dangPtr = functionDangling(); // ptr is now a dangling pointer
  
  // case 3: If a variable goes out of scope
  int * danglingPtr3;
  {
    int c = 53;
    danglingPtr3 = &c;
  } 
  // Here variable goes out of scope which means danglingPtr3 is pointing to a location which is free and hence danglingPtr3 is now a dangling Pointer
  return 0;
}