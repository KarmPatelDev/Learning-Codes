/*

We have already covered file pointer, opening/closing, reading/writing to a file, and the different modes of opening a file. In this tutorial, we will see a few more built-in functions related to files in C. By using these functions, we can read or write data from or to the files, character by character, or in the form of a full string.
fputc():

fputc() is used to write characters to the file. The C in the name of the function stands for character. The function takes two parameters as input. The first one is the single character that we want to input to the file. The second parameter is the pointer to the file. On successful implementation, it returns the character on to the screen. If it couldn't do so in case of any other issue, it would display an EOF exception. EOF stands for End of File. You will see a lot of this exception while working with files.
Syntax:

    type fputc(‘character’,file_pointer);

Example:

    Int fputc(‘a’,ptr);

fputs():

fputs() is used to write a null-terminated string to the file. The S in the name of the function stands for string.it also takes two parameters, the same as fputc(). One is the variable storing the string and the second one is the pointer to the file. A null-terminated string is a character string that can be terminated by a null character i.e., \0. You do not have to bother much about null-terminated strings as our computer automatically converts character strings to null-terminated strings.
Syntax:

    fputs(“string”,file_pointer);

Example:

    fputs("code with harry",ptr);

fgetc():

fgetc() works exactly the opposite of fputc(). It reads the character from the file. It reads only one character at a time. We can print it as many times as we want to get the next character and so on. Its syntax is straightforward, as we have to send the file pointer as a parameter. We can store the character into another character to display it onto the screen.
Syntax:

    type = fgetc(file_pointer);

Example:

    c = fgetc(ptr);

fgets():

fgets() is used to read a string from a file. It takes three parameters as input and stores them in a null terminated array. Now talking about the parameters, the first one is the storage array we want our string to store. The third one is the file pointer, and the second one is the count of variables we want to get from the files. For example, we want to take the first four characters from the string, so we will input the second parameter equals to 5. The purpose of doing that is that the null character will hold the fifth place.
Note

Blank space is also considered as a character.
Syntax:

    int fgets(const char *s, int n, file_pointer);

Example:

    fgets(str, 5, ptr);
    
*/


#include <stdio.h>

int main(){

    FILE *ptr = NULL;

    /*
    ptr = fopen("test.txt", "r");
    char c = fgetc(ptr);
    printf("The character I read was %c\n", c);
    c = fgetc(ptr);
    printf("The character I read was %c\n", c);

    char str[34];
    fgets(str, 3, ptr);
    printf("The string is %s\n", str);
    */


    ptr = fopen("test.txt", "w");
    // ptr = fopen("test.txt", "a");
    // ptr = fopen("test.txt", "r+");
    // ptr = fopen("test.txt", "w+");
    // ptr = fopen("test.txt", "a+");
    fputc('o', ptr);
    fputs("My Name Is Karm", ptr);
    
    fclose(ptr);
    return 0;
}