#include <iostream>
using namespace std;

/*

Syntax for initialization list in construction:

constructor (argument-list) : initialization-section
{
    assignment + other code;
}

class Test{
   int a;
   int b;
   public:
      Test(int i, int j) : a(i), b(j){
           constructor body
      }
};

*/

class Test{
   int a;
   int b;
   public:

        // Test(int i, int j) : a(i), b(j){
        // Test(int i, int j) : a(i), b(i + j){
        // Test(int i, int j) : a(i), b(a + j){
        // Test(int i, int j) : a(i), b(25 + j){
        // Test(int i, int j) : b(j), a(i + b){ // It is show garbage value of a because a is initialize first and then b in private mode Solve this problem we have to initialize first b and then a in private mode
        Test(int i, int j) : a(i){
           // a = i;
            b = j;
           cout << "Constructor Executred" << endl;
           cout << "The value of a is " << a << endl;
           cout << "The value of b is " << b << endl << endl;


      }
};

int main(){
    Test t(25, 25);
    return 0;
}