/*

Modes:

Before discussing Files' functions, we have to learn about different modes used along with these functions as a parameter. The following are the modes:

    r: opens a file for reading.
    w: opens a file for writing. It can also create a new file.
    a: opens a file for appending.
    r+: opens a file for both reading and writing but cannot create a new file.
    w+: opens a file for both reading and writing. 

Note: there are many other modes, but these are the basic and most used ones.
Opening a File:

We use the fopen() function for opening files in C.
Syntax:

    ptr = fopen(“file_location”,”mode”);

Example:

    ptr = fopen(“D:\\file.txt”,”w”);

Closing a File:

Closing an open file is one of the most crucial steps while dealing with C. Files does not automatically get closed after working with them. We have to close them manually. To close a file, we have to use the fclose() function. The syntax is straightforward because we just have to send the pointer as a parameter to the function.
Syntax:

    fclose(fptr);

Reading a File:

To read a file in C, we use a function fscanf(). This function is a file version of scanf(). Like scanf() used to get input from the keyboard, it gets its input from a file and prints it onto the screen. We have to send the file pointer as an argument for the program to be able to read it. The file has to be opened in r mode, i.e., read mode, to work properly for fsanf().
Example:

ptr = fopen(“D:\\file.txt”,”r”);
char str[128] = "Welcome to code with Harry";
fscanf(ptr, "%s", str);
printf("%s",str );

Writing to a file:

In order to write to a file, we use the function fprintf(). The function is a file version of printf(). Same as we used to print text onto the screen using printf(), we use fprintf() to print text inside the file. We have to send the file pointer as an argument for the program to be able to print it into the file. The file has to be opened in w mode, i.e. write mode, to work properly for fsanf().
Example:

char str[128] = "Empty";
ptr = fopen(“D:\\file.txt”,”w”);
fprintf(ptr, "%s", str);

Summary:

In this tutorial we saw different modes of opening files and how to open, close, read or write to a file, along with their syntax and implementation. In the nest tutorial we will see additional functions such as fget, fput, fgetc and fputc. So stay tuned and watch the next tutorial to complete your learning related to files in C.

*/


#include <stdio.h>

int main(){
    FILE *ptr = NULL;
    char string[34] = "My Name Is Karm";


    // Reading A File
    /*
    ptr = fopen("test.txt", "r");
    fscanf(ptr, "%s", string);
    printf("The content of this file is %s\n", string);
    */

    // Write With Clear All File Text
    /*
    ptr = fopen("test.txt", "w");
    fprintf(ptr, "%s", string);
    printf("The content of this file is %s\n", string);
    */

    // Write Without Clear All File Text
    // Also Many Times You Can Write With Run Multiple Times Code
    /*
    ptr = fopen("test.txt", "a");
    fprintf(ptr, "%s", string);
    printf("The content of this file is %s\n", string);
    */
    
    fclose(ptr);
    return 0;
}