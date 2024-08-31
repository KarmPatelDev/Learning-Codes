/*

Break Statement :

Break statement is used to break the loop or switch case statements execution and brings the control to the next block of code after loop or switch case.
Break statements are used to bring the program control out of the loop.
The break statement is used inside loops or switch statement in C Language.
Continue Statement :

    The continue statement is used inside loops in C Language. When a continue statement is encountered inside the loop, control jumps to the beginning of the loop for next iteration, skipping the execution of statements inside the body of loop after continue statement.
    It is used to bring the control to the next iteration of the loop.
    The continue statement skips some code inside the loop and continues with the next iteration.
    It is mainly used for a condition so that we can skip some lines of code for a particular condition.
    It forces next iteration in loop i.e. as break terminates the loop but continue forces the next iteration of the loop.
    
    */

   #include <stdio.h>

int main()

{

/*

  // break in loop

    int i, age;

  for(i = 0;i < 10;i++){

    printf("%d\n", i);

    printf("Enter Your Age\n");

    scanf("%d", &age);

    if(age == 20){

      break;

    }

  }

 */

   

/*

  // break in nested loop

    int i, age, j = 0;

  while(j < 10){

    printf("%d\n", j);

    j++;

  

  for(i = 0;i < 10;i++){

    printf("%d\n", i);

    printf("Enter Your Age\n");

    scanf("%d", &age);

    if(age == 20){

      break;

      }

   }

 }

 */

 

 /*

 // break in switch

 int i;

 printf("Enter The Number 0 or 1\n");

 scanf("%d", &i);

 

 switch(i){

   case 0:

     printf("The fan is off");

     break;

   case 1:

     printf("The fan is on");

     break;

   default:

     printf("You entered a wrong number");

 }

*/ 

 

/*

  // continue in loop

     int i, age;

  for(i = 0;i < 10;i++){

    printf("%d\n", i);

    printf("Enter Your Age\n");

    scanf("%d", &age);

    if(age == 20){

      continue;

    }

    printf("Your age is %d\n", age);

  }    

*/

  

 

 /*

   // continue in nested loop

       int i, age, j = 0;

  while(j < 10){

    printf("%d\n", j);

    j++;

  

  for(i = 0;i < 10;i++){

    printf("%d\n", i);

    printf("Enter Your Age\n");

    scanf("%d", &age);

    if(age == 20){

      continue;

      }

     if(age == 15){

      break;

      }

    printf("Your age is %d\n", age);

   }

 }          

 */

       

  return 0;

}