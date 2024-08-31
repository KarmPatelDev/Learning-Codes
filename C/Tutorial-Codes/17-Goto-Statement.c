/*

A goto statement in C programming language provides an unconditional jump from the ‘goto’ to a labeled statement in the same function.

NOTE
Use of goto statements is highly discouraged or avoided in any programming language because it makes difficult to trace the control flow of a program to fellow programmers, making the program hard to understand and hard to modify or manipulate. Any program which uses goto can be modified to avoid goto statements.

    These are also called ‘Jump Statement’.
    It is used to transfer the control to a predefined label.
    It’s use is avoided since it causes confusion for the fellow programmers in understanding code.
    goto statement is preferable when we need to break multiple loops using a single statement at the same time.
    
    */

   #include <stdio.h>

int main(){

  

/*

  label:

  printf("It is go to statement");

  // goto label;

  goto end;

  printf("Hello World");

 */

 

 /*

int i, age, j = 0;

  while(j < 10){

    printf("%d\n", j);

    j++;

  

  for(i = 0;i < 10;i++){

    printf("%d\n", i);

    printf("Enter Your Age\n");

    scanf("%d", &age);

    if(age == 20){

      goto end;

      }

   }

 }

 */

   

 end:

 return 0;

 }