#include <iostream>

using namespace std;

int sum(int, int);
int main(){
    int num1, num2;
    cout << "Enter The value of num1: ";
    cin>>num1;
    cout << "Enter The value of num2: ";
    cin>>num2;
    cout << "The Sum of two number is " << sum(num1, num2);
}
int sum(int a, int b){
         int c;
         c = a + b;
         return c;
     }
