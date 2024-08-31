#include <iostream>
using namespace std;

class Number{

    int a;

    public:

    Number(){
        a = 0;
    }

    Number(int num){
        a = num;
    }
    
    // When no copy constructor is found, compiler supplies its own copy constructor

    Number (Number &obj){
        cout << "COPY CONSTRUCTOR CALLED: " << endl;
        a = obj.a;

    }
    void display(){
        cout << "The Number for this object is " << a << endl;
    }
};

int main(){
    Number x, y, z(45), z2;

    x.display();
    y.display();
    z.display();
    
    // Copy constructor invoked when object in the construction
    
    Number z1(x);  // It is invoked
    z1.display();

    z2 = z;        // It is not invoked
    z2.display();

    Number z3 = z;   // It is invoked
    z3.display();


    return 0;
}