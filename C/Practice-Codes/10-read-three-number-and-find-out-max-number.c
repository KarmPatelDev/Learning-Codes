// Write a program to read three numbers from a keyboard and find out the maximum out of these three. (nested if else)

#include <stdio.h>
#include <conio.h>

int main(){
    int a, b, c;
    printf("\nEnter The Numbers\n");
    scanf("%d %d %d", &a, &b, &c);
    printf("\n");
    

    if(a>b && a>c){
        printf("\n%d is Maximum\n", a);
    }
    else if(b>a && b>c){
        printf("\n%d is Maximum\n", b);
    }
    else if(c>a && c>b){
        printf("\n%d is Maximum\n", c);
    }
    else{
        printf("\nYou have entered a same numbers, please correct it\n");
    }
    getch();
    return 0;
}