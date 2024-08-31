/*

we will learn to manipulate strings in C using different library functions. C provides us the useful string handling library functions. The string.h library is used to perform string operations. It provides several functions for manipulating character strings.We need to often manipulate or change the strings according to the need of a problem, the string.h library makes handling string in programming simple and easy to understand.

Following are some commonly used string handling functions:
strcat( ):-

This function is used to concatenates the source string at the end of the target string. For example, “Hello” and “World” on concatenation would result into a string “HelloWorld”. Here is an example of strcat( ):

int main( ) { 
char  s[ ] = "Hello" ;
char  t[30] = "World" ;
strcat ( t, s ) ;
printf ( "String = %s", t ) ;
}
//Output: string = HelloWorld

strlen( ):-

This function is used to counts the number of characters present in a string. Its example is given below:

int main( ) { 
char  str[ ] = "Harry" ;
int  str_length;
str_length= strlen ( str ) ;
printf ( " length = %d", str_length );
}
//Output: length = 5 

strcpy( ):-

This function is used to copies the contents of one string into another. The base addresses of the source and target strings should be given to this function. Here is an example of strcpy( ):

int main( ) { 
char  s[ ] = "CodeWithHarry" ;
char  t[20] ;
strcpy ( t, s ) ;
printf ( "\n Source string = %s", s ) ;
printf ( "\n Target string = %s", t ) ; }
//And here is the output...
//Source string = CodeWithHarry
//Target string = CodeWithHarry

strcmp( ):-

This function is used to compares two strings to find out whether they are same or different. The strcmp() will compare two strings character by character until there is a mismatch or end of one of the strings is reached. If both of the strings are identical, strcmp( ) returns a value zero. If they are not identical, it will return the numeric difference between the ASCII values of the first non-matching pairs of characters. Here is a example of strcmp( ).

#include <stdio.h>
#include <string.h>
int main()
{
char string1[ ] = "Harry" ;
char string2[ ] = "Code" ;
int a;
a= strcmp ( string1, string2 ) ;
printf ("\n%d", a) ;
return 0;
}
//Output:5

strrev():-

This function is used to show the reverse of the string. Following are the example of strrev():




#include <stdio.h>
#include <string.h>
int main()
{
char str[50] = "1234";
printf("After reversing string is =%s",strrev(str));
return 0;}
//Output: After reversing string is = 4321

There are many other built-in string funtions like strlwr , strupr ,strcat , strdup and strset, these functions are also very useful in manipulating the strings. In today’s tutorial we have discussed only few of the string functions. You can explore more about string functions by searching it on the internet.


*/

#include <stdio.h>
#include <string.h>

int main(){
    char s1[] = "patel";
    char s2[] = "karm";
    char s3[20];
    char str1[20];
    char str2[20];
    char str3[] = " is the friend of ";
    
    puts(strcat(s1, s2));
    printf("The concat of s1 and s2 is %s\n", strcat(s1, s2));
    printf("\n\n");

  // Length null character not include
    printf("The string length s1 is %d\n", strlen(s1));
    printf("The string length s2 is %d\n", strlen(s2));
    printf("\n\n");

    puts(strrev(s1));
    printf("The reverse string of s2 is %s\n", strrev(s2));
    printf("\n\n");

    // puts(strcpy(s3, strcat(s1, s2)));
    // printf("The copy of s1 in s3 is %s\n", strcpy(s3, strcat(s1, s2)));

    strcpy(s3, strcat(s1, s2));
    puts(s3);
    printf("The copy of concat s1 and s2 in s3 is %s\n", s3);
    printf("\n\n");

    printf("The strcmp for s1 and s2 returned %d\n", strcmp(s1, s2));
    printf("The strcmp for s1 and s2 returned %d\n", strcmp(s2, s1));
    printf("\n\n");
    
    printf("Enter The First Name\n");
    gets(str1);
    printf("Enter The Second Name\n\n");
    gets(str2);

    printf("Using simple printf :-\n");
    printf("%s is friend of %s\n\n", str1, str2);

    printf("Using concat command :-\n");
    printf("%s\n\n", strcat(str1, strcat(str3, str2)));
    
    return 0;
}
