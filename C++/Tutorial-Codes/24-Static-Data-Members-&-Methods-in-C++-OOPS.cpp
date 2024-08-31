#include <iostream>
using namespace std;

class employee{
   int id;
   static int count; // If we don't use static then it is not hold the value when other object called. All the object share the value of variable.
   // static int count = 1000; // It is show syntax error if you do this then declare the value outside of the class

    public:
       void setData(void){
           cout << "Enter The Id of " << count << endl;
           cin >> id;
           count++;
       }
        void getData(void){
            cout << "The id of this employee is " << id << endl;
        }
       
       // static function store only static variable
        static void getCount(void){
            // cout << id; //It shows error
            cout << "The value of count is " << count << endl;
        }

};

// Count is the static data member of class employee
int employee :: count;  // TO declare static variable it is initialize to zero.
// int employee :: count = 1000; // TO declare other value of static value

int main(){
    employee karm, abhay, dhyey;
    
    // karm.id = 1;
    // karm.count = 1; // It is private can not do this

    karm.setData();
    karm.getData();
    employee :: getCount();

    abhay.setData();
    abhay.getData();
    employee :: getCount();
    
    dhyey.setData();
    dhyey.getData();
    employee :: getCount();

    return 0;
}