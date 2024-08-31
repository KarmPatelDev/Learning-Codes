/*

Guys, to write code in any of the programming language we need a place or environment in which we can write code and can compile it.

So, before diving in this let’s first understand what IDE and compiler is?

IDE – Ide (Integrated Development Environment) is a software application which provides many comprehensive facilities to programmers for software or application development.

    Ide provide tools to create build and test software’s. It also provides programmable editors, libraries, build automation tools etc.
    It has features like syntax highlighting, syntax checking etc.
    E.g. Net Beans, Microsoft Visual Studio etc.

Compiler – It’s a software that transforms computer code written in one programming language into another language i.e. machine language.

    It translates the source code to machine code so that it can be executed by the computer.
    E.g. GNU Gcc etc.

So, we’ll be using Visual Studio Code as IDE because it is open source software and it’s developed by Microsoft and it is developed on daily basis by developers i.e. its updates and patches are coming regularly.

Linux OS and Mac OS have pre-installed compilers means there is no need to install compiler of C language if you are using any of these OS but for Windows OS you need to install it.
So, let’s install our IDE i.e. Visual Studio Code:

    Simply open any of the browsers (I’ll recommend Google Chrome).
    Then go to search bar and then type “Download visual studio code” (without “”).
    And then open this link : https://visualstudio.microsoft.com/downloads/
    Then choose your platform for which you want to download this IDE i.e. Windows, Linux, Mac etc.
    After that your download will start…..

And after downloading simply install it like any other software.
Now, let’s download compiler of our C language:

    Search “C programming in vs code” in your browser (without “”).
    Open this link : https://code.visualstudio.com/docs/languages/cpp
    Then simply click on Mingw-64 option or link in that web page.
    After that new page will open i.e. :
    Then click on download option and download your compiler.

After that simply install it like any other software without making any change in the by default settings.
Now, to configure compiler with Ide:

Check this video: .There I have taught in simple Hindi language what to do after installing both compiler and IDE in your computer or laptop.

After installing and configuring IDE and Compiler. Simply open VS Code and install an extension i.e. C/C++ intellisense:
So, let’s write our first ever code:
*/

#include<stdio.h>

int main ()

{

printf("Hello Wordl\n");

return 0;

}

/*

After writing code compile it.

If you are getting error “gcc is not recognized as an internal or external command” then watch this video : https://www.youtube.com/watch?v=qLh84CmdBJ0

And if you are not getting any error then simply type “gcc (filename.c)” (without “”) in terminal and then press Enter to compiler and create .exe of that file. After that a.exe file will be created and then in terminal type a.exe and press enter to run your program.

*/