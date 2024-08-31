// Write a program to write a string in file

#include <stdio.h>
#include <conio.h>

int main(){
    FILE *ftp;
    char str[34];
    
    /*Error handling for output file*/
    if (ftp == NULL){
    puts("Issue in opening the Output file");
}

    ftp = fopen("string.txt", "w");
    printf("Enter The String: ");
    gets(str);
    fputs(str, ftp);
    fclose(ftp);
}