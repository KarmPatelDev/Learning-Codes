#include <iostream>
#include <sstream>
using namespace std;

// stringstream - we can convert integer to string and string to integer

int main(){
    
    int input;
    cin >> input;

    // Note :- sso and ss are the name of object we can take anything
    
    stringstream sso;
    sso << input; // << insertion operator ans sso contains input

    string strinput;
    // read from object(sso)
    sso >> strinput;

    cout << "The Integer Number " << input << endl;
    cout << "The string form of integer Number " << strinput << endl;

    string number = "44";
    stringstream ss;
    ss << number;
    int input2;
    ss >> input2;
    cout << input2 + 2 << endl;
    cout << number + "2"<< endl;

    return 0;
}