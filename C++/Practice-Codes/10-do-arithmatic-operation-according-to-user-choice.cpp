#include <iostream>
using namespace std;

int main(){
    
    double a, b, result;
    char c;
    cout << "+ For Addition\n- For Substraction\n* For Multiplication\n/ For Division\n% For Modulus\n" << endl;
    cout << "Enter The Number1, Operator and Number2 respectively:\n";
    cin >> a >> c >> b;

    switch(c){
        case '+':
        result = a + b;
        break;
        case '-':
        result = a - b;
        break;
        case '*':
        result = a * b;
        break;
        case '/':
        result = a / b;
        break;
        case '%':
        result = (int)a % (int)b;
        break;
        default:
        cout << "Enter The Valid Operator or Number\n\n";
        exit(0);
    }

    cout << "Result = " << result;

    return 0;
}