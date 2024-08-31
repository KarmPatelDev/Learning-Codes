// System Defined Header File
#include <iostream>
// User Defined Header File
// #include "this.h" This will produce error if this is not in current directory

using namespace std;

int main(){
    // std::cout << "Hello World";
    int num1, num2;
    cout << "Enter The Value Of No. 1 \n";
    cin >> num1;
    cout << "Enter The Value Of No. 2 \n";
    cin >> num2;

    // Arithematic Operator
    cout << "The sum Of two number is " << num1 + num2 << endl;
    cout << "The subtraction Of two number is " << num1 - num2 << endl;
    cout << "The multiplication Of two number is " << num1 * num2 << endl;
    cout << "The division Of two number is " << num1 / num2 << endl;
    cout << "The module Of two number is " << num1 % num2 << endl;
    cout << "The increment in number1 is " << num1++ << endl;
    cout << "The decrement in number1 is " << num1-- << endl;
    cout << "The increment in number2 " << ++num2 << endl;
    cout << "The decrement in number2 " << --num2 << endl << endl;

    // Comparison Operator
    cout << "The value of num1 == num2 is " << (num1 == num2) << endl;
    cout << "The value of num1 != num2 is " << (num1 != num2) << endl;
    cout << "The value of num1 <= num2 is " << (num1 <= num2) << endl;
    cout << "The value of num1 >= num2 is " << (num1 >= num2) << endl;
    cout << "The value of num1 < num2 is " << (num1 < num2) << endl;
    cout << "The value of num1 > num2 is " << (num1 > num2) << endl << endl;

    // Logical Operator
    cout << "The value of AND operator between (num1 == num2) and (num1 > num2) is " << ((num1 == num2) && (num1 > num2)) << endl;
    cout << "The value of OR operator between (num1 == num2) and (num1 > num2) is " << ((num1 == num2) || (num1 > num2)) << endl;
    cout << "The value of NOT operator in (num1 == num2) is " << (!(num1 == num2)) << endl;

}