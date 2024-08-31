#include <iostream>
#include <fstream>
using namespace std;

int main(){
    
    // connencting our file with hout function
    ofstream hout("pr-61.txt");

    // creating string
    cout << "Enter Your Name: ";
    string st;
    // cin >> st;
    getline(cin, st);
    
    // writing a string to the file
    

    //  hout << "Good Morning " + st;
    
    hout << "Good Morning " + st + " Have a Nice Day";

    hout.close();
    
    
    // connencting our file with hout function
    ifstream hin("pr-61.txt");

    // creating string;
    string st2;
    
    // reading a string from the file
    
    // hin >> st2;
    // cout << st2;

    getline(hin, st2);
    cout << st2;
    
    hin.close();
}