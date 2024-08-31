#include <iostream>

using namespace std;

/*

Syntax for inheriting in multiple inheritance:-

class derived-class : visibility-mode base-1-class, visibility-mode base-2-class, ......., visbility base-n-class
{
    class body of derived class
};

*/

class Base1{

    protected:
       int base1int;

    public:
       void set_base1int(int a){
           base1int = a;
       }
};

class Base2{

    protected:
       int base2int;

    public:
       void set_base2int(int a){
           base2int = a;
       }
};

class Base3{

    protected:
       int base3int;

    public:
       void set_base3int(int a){
           base3int = a;
       }
};

class derived : public Base1, public Base2, public Base3
{
     public:

     void show(){
         cout << "The value of Base1 is " << base1int << endl;
         cout << "The value of Base2 is " << base2int << endl;
         cout << "The value of Base3 is " << base3int << endl;
         cout << "The sum of Base1, Base2 and Base3 is " << base1int + base2int + base3int << endl;
     }
};

/*

The inherited derived class will look something like this:

Data Member:
      base1int --> protected
      base2int --> protected
      base3int --> protected

Member Functions:
      set_base1int() --> public
      set_base2int() --> public
      set_base3int() --> public
      show() --> public

*/

int main(){
    derived karm;
    karm.set_base1int(25);
    karm.set_base2int(25);
    karm.set_base3int(25);
    karm.show();
    return 0;
}