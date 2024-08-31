// Write a function Exchange to interchange the values of two variables, say x and y. Illustrate the use of this function in a calling function

#include <stdio.h>
#include <conio.h>

void exch(int, int);

void main(){
    int x, y;
    printf("Enter The Value Of X And Y: ");
    scanf("%d %d", &x, &y);
    exch(x, y);
    
    getch();
}

void exch(int x, int y){
    int temp;
    temp = x;
    x = y;
    y = temp;
    printf("After Exchanging, X = %d and Y = %d\n", x, y);
}


// Using A Pointer For Swapping

/*
#include <stdio.h>  
  
void swap(int*, int*);   
int main()  
{  
    int a, b;   
    printf("Enter values for a and b\n");  
    scanf("%d%d", &a, &b);   
    printf("\n\nBefore swapping: a = %d and b = %d\n", a, b);   
    swap(&a, &b);   
    printf("\nAfter swapping: a = %d and b = %d\n", a, b);   
    return 0;  
}  
  
void swap(int *x, int *y)  
{  
    int temp;    
    temp = *x;  
    *x   = *y;  
    *y   = temp;  
}  
*/