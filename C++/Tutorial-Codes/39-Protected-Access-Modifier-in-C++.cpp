#include <iostream>

using namespace std;

class Base{

     protected:

     int a;

     private:

     int b;

};

/*

For Visibility Modes

1. Private Member
private visibility - No inheritance
protected visibility - No inheritance
public visibility - No inheritance

2. Protected Member
private visibility - No inheritance
protected visibility - Protected inheritance
public visibility - Protected inheritance

3. Public Member
private visibility - No inheritance
protected visibility - Protected inheritance
public visibility - Public inheritance

*/

class Derived : protected Base{


};

int main(){
    Base p;
    Derived q;
    // cout << q.a;  // will not work since a is protected in both base and derived class
    return 0;
}