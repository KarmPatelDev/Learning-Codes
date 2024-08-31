#include <iostream>
using namespace std;

int main(){
    int a, b, c;
    cout << "Enter The Three Number A, B and C Respectively:\n";
    cin >> a >> b >> c;
    cout << endl;
    if(a == b || b == c || c == a){
    cout << "The Two Values Are Same";
    }
    else {
    if(a > b && a > c)cout << "The value A is maximum";
    else if(b > a && b > c)cout << "The value B is maximum";
    else if(c > a && c > b)cout << "The value C is maximum";
    }
    return 0;
}