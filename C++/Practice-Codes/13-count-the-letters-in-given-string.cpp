#include<iostream>
using namespace std;

int main( )
{
char str[80];
int i, c1=0,c2=0;
cout<<"Enter the text:";
gets(str);
for(i=0; str[i]!='\0'; i++)
{
c1++;
if(str[i]==' ')c2++;
}
cout<<"Total Letters present in the given text :"<< c1-c2;
return 0;
}