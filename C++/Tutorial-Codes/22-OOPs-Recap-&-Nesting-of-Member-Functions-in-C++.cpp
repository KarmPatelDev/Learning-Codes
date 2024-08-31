#include <iostream>

using namespace std;

// OOPs - Classes and objects

// C++ --> initially called --> C with classes by stroustroup
// class --> extension of structures (in C)
// structures had limitations
//      - members are public
//      - No methods
// classes --> structures + more
// classes --> can have methods and properties
// classes --> can make few members as private & few as public
// structures in C++ are typedefed
// you can declare objects along with the class declarion like this:
/* class Employee{
            // Class definition
        } harry, rohan, lovish; */
// harry.salary = 8 makes no sense if salary is private

// Nesting of member functions

class binary{
// private: //If you don't write anything private or public it is consider private
   string s;

  //  void chk_bin(void);  // To make private

   public:

   void read(void);
   void chk_bin(void);
   void ones_complement(void);
   void display(void);
};

void binary :: read(void){

    cout << "Enter a binary number" << endl;
    cin >> s;
}

// s.length()  == for length find
// s.at()  == for find position
void binary :: chk_bin(void){

    for(int i = 0; i < s.length(); i++){
        if(s.at(i) != '0' && s.at(i) != '1'){
            cout << "Incorrect Binary Format" << endl;
            exit(0);
            
        }
    }
}

void binary :: ones_complement(void){
    
   //  chk_bin();  // You can also call the function like this NESTING FUNCTION
    for(int i = 0; i < s.length(); i++){
    if(s.at(i) == '0'){
        s.at(i) = '1';
    }
    else{
        s.at(i) = '0';
    }
    }
}

void binary :: display(void){

    cout << "Your Binary Number is: " << endl;
    for(int i = 0; i < s.length(); i++){
        cout << s.at(i);
} 
     cout << endl;
}

int main(){
    
    binary b;
    b.read();
    b.chk_bin(); // If we add this in private then public not use this function
    b.display();
    b.ones_complement();
    b.display();
    return 0;
}