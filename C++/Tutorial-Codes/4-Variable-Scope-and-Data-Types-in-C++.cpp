#include <iostream>
using namespace std;
int glo = 9;
void sum(){
    cout << glo << "\n";
}
int main(){
    cout << "Hello World \n";
    int a = 34, b = 53, glo = 78;
    float PI = 3.14;
    char c = 'u';
    bool d = true;
    sum();
    cout << glo << "\n";
    cout << "The value of a is " << a << ". The value of b is " << b << ". The value of PI is " << PI << ". The value of c is " << c << ". The value of d is " << d;
    return 0;
}