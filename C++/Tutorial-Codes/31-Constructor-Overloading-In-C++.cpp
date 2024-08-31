#include <iostream>

using namespace std;

class Complex{
    int a, b;

    public:

    Complex(){
        a = 25;
        b = 30;
    }

    Complex(int x){
        a = x;
        b = 0;
    }

    Complex(int x, int y){
        a = x;
        b = y;
    }

    void printNumber(void){
        cout << "The Number Is " << a << " + " << b << "i" << endl;
    }

};

int main(){
    
    Complex c1;
    c1.printNumber();
    Complex c2(35);
    c2.printNumber();
    Complex c3(25, 35);
    c3.printNumber();
    return 0;
}