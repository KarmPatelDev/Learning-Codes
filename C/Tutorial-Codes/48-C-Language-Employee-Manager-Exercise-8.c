/*

Problem Statement:-

Suppose ABC is a private limited company which manages the employee records of other companies. Employee id can be of any length, and it can contain any character. The following are the task you have to perform for three employees.

    Take the length of an employee id as an input and store it in an integer length variable
    Take an employee id as an input and display it on the screen.
    Save the employee id in a character array, which is allocated dynamically.
    Create only one character array dynamically.

Program Example:-
Employee1;

Enter the no. of characters in your employee id: 45
//dynamically allocate the character array
Take input from the user: //employee_id
Employee2;

Enter the no. of characters in your employee id: 5
//dynamically allocate the character array
Take input from the user: //employee_id
Employee3;

Enter the no. of characters in your employee id: 9
//dynamically allocate the character array
Take input from the user: //employee_id

You have to reallocate the memory in such a way so that your program is robust and uses less memory. By solving this exercise, you will not only practically perform the concept we have learned until now, but also it will improve you coding skills. Try to develop problem-solving skills in yourself. This will help in becoming a pro in programming. Best of luck!

*/

#include <stdio.h>
#include <stdlib.h>

int main(){

    int n, i = 0;
    char* ptr;

    while(i < 3){
    printf("Enter the length of character in %d Employee id\n", i + 1);
    scanf("%d", &n);
    ptr = (char*) malloc((n+1) * sizeof(char));
    printf("Enter the %d Employee Id\n", i + 1);
    scanf("%s", ptr);
    printf("The Employee Id of %d Employee is %s\n", i + 1, ptr);
    free(ptr);
    i++;
    }
    return 0;
}