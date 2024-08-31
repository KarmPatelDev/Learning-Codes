// Write C++ program to swap two numbers using macros

#include <iostream>
using namespace std;

#define SWAP(a, b) temp=a;a=b;b=temp;
int main(){
     
    int temp, a, b;
    cout << "Enter The Value Of A: ";
    cin >> a;
    cout << "Enter The Value Of B: ";
    cin >> b;
    SWAP(a, b)
    cout << endl << "The Swap value of a is " << a << " and b is " << b;
    return 0;
}