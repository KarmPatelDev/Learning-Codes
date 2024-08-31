#include <iostream>

using namespace std;

int count = 0;
class num{
     public:
       
       num(){
           count++;
           cout << "This is the time when constructor is called for object number " << count << endl;
       }

       ~num(){
           cout << "This is the time when destructor is called for object number " << count << endl;
           count--;
       }
};

int main(){
    cout << "We are inside the main function" << endl;
    cout << "Creating first object" << endl;
    num n1;
    {
        cout << "Entering in the block"<< endl;
        cout << "Creating two more objects" << endl;
        num n2, n3;
        cout << "Existing this block" << endl;
    }

    cout << "Back To Main" << endl;
    
    return 0;
}