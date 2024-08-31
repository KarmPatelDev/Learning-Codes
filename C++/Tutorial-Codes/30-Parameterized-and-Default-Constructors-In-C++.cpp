#include <iostream>
using namespace std;

class Complex{
    int a, b;
      public:
    Complex(int, int);

    void printNumber(void){
        cout << "The Number Is " << a << " + " << b << "i" << endl;
    }
};

Complex :: Complex(int x, int y){  // This is a parameterized constructor as it takes two parameters
    a = x;
    b = y;
}

class Point{
      int r, s;
      public:

      Point(int m, int n){
             r = m;
             s = n;
      }

      void displayNumber(){
          cout << "The Point is (" << r << ", " << s << ")" << endl;
      }

};

int main(){

    // Implicit Call
    Complex p(1, 5);
    p.printNumber();
    
    // Explicit Call
    Complex q = Complex(1, 5);
    q.printNumber();

    Point u(1, 5);
    u.displayNumber();

    Point v(2, 3);
    v.displayNumber();
  
    return 0;
}




