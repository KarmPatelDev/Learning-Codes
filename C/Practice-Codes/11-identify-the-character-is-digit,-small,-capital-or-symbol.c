// Write a C program to check whether the entered character is capital, small letter, digit or any special character

#include <stdio.h>
#include <conio.h>

char main(){
char c;

printf("Enter The Character:\n");
scanf("%c", &c);
if(isupper(c)){
printf("Given char is UpperCase\n");
}
else if(islower(c)){
printf("Given char is LowerCase\n");
}
else if(isdigit(c)){
printf("Given char is Digit\n");
}
else{
printf("Given char is special character\n");
}
getch();
return 0;
}
