#include <iostream>

using namespace std;

int main(){
    int a = 10;
    int* b;
    b = &a;
    int** c = &b;
    cout << "The address of a is " << b << endl;
    cout << "The address of a is " << &a << endl;  
    cout << "The address of a is " << *c << endl;
    cout << "The address of b is " << c << endl;
    cout << "The address of b is " << &b << endl;
    cout << "The address of c is " << &c << endl;
    cout << "The Value of a is " << a << endl;
    cout << "The Value of a is " << *b << endl;
    cout << "The Value of a is " << **c << endl;
    return 0;
}