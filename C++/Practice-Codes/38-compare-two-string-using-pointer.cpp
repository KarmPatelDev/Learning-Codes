#include <iostream>
using namespace std;

int str_cmp(char *, char*);

int main()
{
    char str1[50], str2[50];
    int str_cmp(char *, char *);
    cout << "Enter first string:";
    gets(str1);
    cout << "Enter second string:";
    gets(str2);

    if(str_cmp(str1, str2) == 1){
           cout << "String is Equal\n";
    }
    else{
        cout << "String is not Equal";
    }

    return 0;
}

int str_cmp(char *s1, char *s2){
    
    while(*s1 == *s2){
        if(*s1 == '\0' || *s2 == '\0')break;
        s1++;
        s2++;
    }
    if(*s1 == '\0' && *s2 == '\0')return 1;

    return 0;
}