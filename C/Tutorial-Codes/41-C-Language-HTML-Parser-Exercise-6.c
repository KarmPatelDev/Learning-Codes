/*

While using a browser, when you click right and select view page source, you will see the HTML of that website you are using at that time. HTML is the standard markup language for Web pages. So, today’s task is to write a code to “parse the sample HTML.”
Instructions:

You are given with an HTML code like, <h1> This is a heading </h1>.Your task is to parse the content written between the HTML tags.

    char string[] = "<h1> This is a heading </h1>";

For this task, you have to create a void function parser, which will take a string as an argument and return the parsed content written in the HTML code. Following is the sample of input and output.
Input:

<h1> This is the heading </h1>
Output:

This is the heading
*/

#include <stdio.h>
#include <string.h>

void parser(char * string){

    int in = 0;  //Variable to track whether we are inside the tag
    int index = 0;

    for(int i = 0; i < strlen(string); i++){
        if(string[i] == '<'){
            in = 0;
            continue;
        }
        else if(string[i] == '>'){
            in = 1;
            continue;
        }
        if(in == 1){
            string[index] = string[i];
            index++;
        }
    }
    string[index] = '\0';

//Remove the trailing spaces from the beginning


    //Shift the string to the left
    while(string[0] == ' '){  

        for(int i = 0; i < strlen(string); i++){

        string[i] = string[i + 1];

    }

}
    
    //Remove the trailing spaces from the end
    while(string[strlen(string) - 1] == ' '){

      string[strlen(string) - 1] = '\0';

    }
}


int main(){
    char name[52];
    printf("Enter the name in any html tag\n");
    gets(name);
    parser(name);
    printf("The parse html code is:-   ~~%s~~", name);
    return 0;
}