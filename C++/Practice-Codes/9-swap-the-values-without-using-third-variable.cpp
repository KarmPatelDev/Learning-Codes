#include <iostream>
using namespace std;

int main(){
    
    int a, b;
    cout << "Enter The Value Of A:";
    cin >> a;
    cout << "Enter The Value Of B:";
    cin >> b;

    cout << endl << "Before Swap: a = " << a << " b = " << b << "\n\n";
    
    a = a + b;
    b = a - b;
    a = a - b;

    cout << endl << "After Swap: a = " << a << " b = " << b << "\n\n";

    return 0;
}