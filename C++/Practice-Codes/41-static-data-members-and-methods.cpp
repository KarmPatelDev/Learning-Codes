#include <iostream>
using namespace std;

class Employee{
     
     int id;
     static int count;

     public:

     void setData(void){
        cout << "Enter The Id of " << count << " Emplyee: ";
        cin >> id;
        count++;
     }

     void getData(void){
        cout << "The Emplyee " << (count - 1) << " has Id is " << id << endl;
     }

     static void counter(void){
        cout << "The Emplyee Number is " << (count - 1) << endl << endl;
     }

};

int Employee :: count = 100;

int main(){
    
    Employee e1, e2, e3;
    e1.setData();
    e1.getData();
    // e1.counter();
    Employee :: counter();

    e2.setData();
    e2.getData();
    Employee :: counter();

    e3.setData();
    e3.getData();
    Employee :: counter();


    return 0;
}