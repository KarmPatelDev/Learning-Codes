#include <iostream>

using namespace std;

int c = 45;

int main(){
    // int a, b, c;
    // cout << "Enter The Value Of A: ";
    // cin >> a;
    // cout << "Enter The Value Of B: ";
    // cin >> b;
    // c = a + b;
    // cout << "The sum of A and B is " << c << endl;
    // cout << "The Global Value Of c is " << ::c << endl;

    float d = 34.4F;
    long double e = 34.4L;
    cout << "The Size Of 34.4 is " << sizeof(34.4) << endl;
    cout << "The Size Of 34.4f is " << sizeof(34.4f) << endl;
    cout << "The Size Of 34.4F is " << sizeof(34.4F) << endl;
    cout << "The Size Of 34.4l is " << sizeof(34.4l) << endl;
    cout << "The Size Of 34.4L is " << sizeof(34.4L) << endl;
    cout << "The Size Of d is " << d << endl << "The Value Of e is " << e << endl;
    
    // float x = 455;
    // float & y = x;
    // cout << x << endl;
    // cout << y << endl;

    int a = 45;
    float b = 45.46;
    cout << "The Value Of a is " << sizeof((float)a) << endl;
    cout << "The value of a is " << float(a) << endl;

    cout << "The value of b is " << sizeof((int)b) << endl;
    cout << "The value of b is " << int(b) << endl;

    cout << "The expression is " << a + b << endl;
    cout << "The expression is " << a + (int)b << endl;
    cout << "The expression is " << a + int(b) << endl;
    return 0;
}