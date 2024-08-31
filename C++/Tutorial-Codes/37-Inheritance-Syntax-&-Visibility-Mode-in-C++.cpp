#include <iostream>
using namespace std;

// Base Class
class Employee{
   
    public:

    int id;
    float salary;
    Employee(int inpId){
        id = inpId;
        salary = 34.0;
    }
    Employee(){}
};

// Derived Class

/*
class {{derived-class-name}} : {{visibility-mode}}  {{base-class-name}}
{
    class members/methods/etc...
};


NOTE :-

Default visibility mode is private
Public Visibility Mode: Public members of the base class becomes Public members of the derived class
Private Visibility Mode: Public members of the base class become private members of the derived class
Private members are never inherited
*/

class Programmer : Employee{
     
     public:
     int languageCode;
     Programmer(int inpId){
         id  = inpId;
        languageCode = 9;
     }
     void getData(){
         cout << id << endl;
     }

};

int main(){
    
    Employee harry(1), rohan(2);
    cout << harry.salary << endl;
    cout << rohan.salary << endl;
    Programmer skillF(10);
    cout << skillF.languageCode << endl;
   //  cout << skillF.id; // It is run when visibility mode is public
    skillF.getData();
    return 0;
}