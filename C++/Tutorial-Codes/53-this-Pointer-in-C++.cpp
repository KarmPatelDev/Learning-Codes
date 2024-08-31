#include <iostream>

using namespace std;

class A{

    int a;   // class variable

    public:

/*
Method 1
    void setData(int a){
         
        // a = a;   // both are local variable
         this->a = a;  // one is class variable and another is local variable

    }

*/

// Method 2

    A & setData(int a){
        
        // (*this).a = a; // same as below
        this->a = a;
        return *this;
         
    }

//


    void getData(void){
        cout << "The value of a is " << a << endl;
    }
};

int main(){
    
    // "this" is a keyword which is a pointer which points to the object which invokes the member function
    
    A a;
    
    /*

    // Method 1

    a.setData(4);
    a.getData();
    
    */

    //  Method 2

    a.setData(4).getData();    // a.setData(4) --: it is a whole object return

    return 0;
}