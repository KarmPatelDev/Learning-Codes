/*

The task you have to perform is “Star Pattern In C”. Printing different pattern is one of the most popular programming exercise for beginners, it not only improves the programming skills but also the thinking ability of the person. Following are the instructions you have to follow:
Instructions:-

Take input from the user and ask the user to choose 0 for the triangular star pattern and 1 for the reserved triangular star pattern. When the user entered the number, your program should print the pattern accordingly.
Hint

Ask the user to enter the number of rows and then use nested for loop to print rows and columns of triangular star pattern.
Triangular star pattern:

*
**
***
****


Reserved Triangular Star Pattern:

****
***
**
*



*/

#include <stdio.h>

void main(){
    
    int i, j, k, pattern;
    char star = '*';   
    printf("Enter The Number 0 For Triangular Star Pattern and Enter The Number 1 For Reverse Triangular Star Pattern\n");
    scanf("%d", &pattern);

    if(pattern == 0){
        printf("You choose Triangular Star Pattern\n");
    }
    else if(pattern == 1){
        printf("You choose Reverse Triangular Star Pattern\n");
    }
    else{
      printf("You have entered a wrong number");
    }
       
       if(pattern == 0 || pattern == 1){
           printf("\n");
           printf("Enter the number To print how many lines you want to create star pattern\n");
       }
       scanf("%d", &j);
        
    
    if(pattern == 0){
        for(i = 1; i <= j; i++){
            for(k = 1; k <= i;k++){
            printf("%c", star);
            }
           printf("\n");
        }

    }
    else if(pattern == 1){
       for(i = j; i >= 1 ; i--){
           for(k = i; k >= 1;k--){
            printf("%c", star);
           }
           printf("\n");
        }

    }
   
}