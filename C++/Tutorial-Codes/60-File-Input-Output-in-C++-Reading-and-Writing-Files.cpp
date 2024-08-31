#include <iostream>
#include <fstream>

using namespace std;

/*

The useful classes for working with filws in c++

1) fstreambase
2) ifstream  --> derived from fstreambase
3) ofstream  --> derived from fstreambase

In order to work with files in c++, you will have to open it. Primarily, there are 2 ways to open a file:

1) Using a constructor
2) Using the member function open() of the class

*/


int main(){
    
    // WE CAN CHANGE OBJECT OUT AND IN NAMES THAT SHOWS BELOW
    
    // Opening file using constructor and writing it
    
    string st = "Patel Karm";
    ofstream out("pr-60a.txt");
    out << st;   // It is not cout only out

    // Opening file using constructor and reading it
    string st1;
    ifstream in("pr-60b.txt");

    in >> st1;   // Print one word
    cout << st1 << endl;

    getline(in, st1);  // Print whole line  // "My" already read therefor not show in this line
    cout << st1 << endl;

    getline(in, st1);  // Print Second whole line
    cout << st1 << endl;

    return 0;
}