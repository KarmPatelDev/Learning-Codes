#include <iostream>

using namespace std;


int main(){
    int age;
    cout << "Enter Your Age: ";
    cin >> age;

    if(age == 18){
        cout << endl << "You are teenager";
    }
    else if(age > 18){
        cout << endl << "You are adult";
    }
    else if((age < 18) && (age > 0)){
        cout << endl << "You are kid";
    }
    else{
        cout << endl << "You are not in the earth";
    }

    switch(age){
        case 11:
        cout << endl << "You are kid";
        break;
        case 22:
        cout << endl << "You are adult";
        break;
        case -12:
        cout << endl << "You are not in the earth";
        break;
        default: 
        cout << endl << "Add specific number";
        break;

    }
}
