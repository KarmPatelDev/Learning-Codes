#include<iostream>
using namespace std;

int main( )
{

int n, i, j, temp;

cout<<"Enter the no. of elements:";
cin>> n;

int a[n];

cout<<"Enter the array elements:";
for(i=0; i< n; i++)cin>>a[i];

for( i=0; i< n; i++){
   for(j=i; j< n-1; j++)
   {
    if(a[i]> a[j+1])
    {
        temp= a[i];
        a[i]= a[j+1];
        a[j+1]= temp;
    }
    }
}

cout<<"Elements after sorting:";
for( i=0; i< n; i++)cout<< a[i]<<" ";
return 0;
}