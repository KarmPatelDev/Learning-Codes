#include <iostream>

using namespace std;

class Base1{
    public:
      void greet(){
          cout << "Good Morning" << endl;
      }
};

class Base2{
    public:
      void greet(){
          cout << "Good Afternoon" << endl;
      }
};

class Derived : public Base1, public Base2{

    public:

    void greet(){
        Base1 :: greet();
    }

};

class B{
    public:
      void say(){
          cout << "Good Evening" << endl;
      }
};

// class C{
class C : public B{
    public:

    // C's new say() method will overwrite base class's say() method
    //   void say(){
    //       cout << "Good Night" << endl;
    //   }
};
int main(){
    
    // Ambiguous 1

    Base1 a;
    a.greet();

    Base2 b;
    b.greet();

    Derived c;
    c.greet();
    
    // Ambiguous 2

    B e;
    e.say();

    C f;
    f.say();
    return 0;
}