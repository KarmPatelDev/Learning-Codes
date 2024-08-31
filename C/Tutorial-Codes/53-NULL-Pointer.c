/*

we are going to learn about NULL pointers. The concept of the NULL pointer is very easy and simple to understand. A NULL pointer is a pointer that does not point to any memory location. It generally points to NULL or 0th memory location, so in simple words, no memory is allocated to a NULL pointer.
Dereference:

Here again, we will see the concept of dereferencing as its behavior, in this case, is the same as a void pointer. We can say that the type of a NULL pointer is void. So we have to typecast it into any variable the same as in the void pointer case.
NULL pointer vs. Uninitialized pointer:

The two are different as the Null pointer points to the 0th memory location, which means that it does not occupy any memory location. In contrast, an uninitialized pointer means that the pointer occupies a garbage value. The garbage value can be any value the garbage collector assigns to the pointer, which may point to some memory location. So to be on the safe side, NULL pointers are preferred.
NULL pointer vs. Void pointer:

NULL pointer and void pointer may sound similar to their wordy meanings overlap too much, but they are very different as the NULL pointer is a value, and the void pointer is a type. We will see the meaning of the sentence with the help of an example.

    int *ptr = NULL;

Here we have set ptr to NULL, which means it is not pointing to any memory location. Now let us see another example:

    void *ptr;

Now, this is a void pointer in which the value will set according to what sort of value we store in it. If we equal it to an integer, then its value will be int, and if we pass a character variable in it then, its value will be char and so on. For further clarification about the difference, you may visit the previous tutorial i.e., tutorial #52.
Advantages:

    We can initialize the pointer variable without allocating any specific address to it.
    We can use it to check whether a pointer is legitimate or not. We can check that by making the pointer a NULL pointer, after which it can not be dereferenced.
    It is used for comparison with other pointers to check whether they are pointing to some memory address or not.
    We use it for error handling in the case of C programming.
    We can pass a NULL pointer at places where we do not want to pass a pointer with a valid memory address.
    
    */

   #include <stdio.h>

int main()
{
  int a = 40;
  int * ptr = NULL;
  // int * ptr = &a;
  // int * ptr;
  if(ptr != NULL){
    printf("The address of a is %x\n", ptr);
  }
  else{
    printf("The address is %x\nThe pointer is NULL Pointer and it can not be dereference\n", ptr);
  }
  return 0;
}