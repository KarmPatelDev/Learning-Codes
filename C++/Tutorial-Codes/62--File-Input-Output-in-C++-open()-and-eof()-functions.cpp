#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main(){

    ofstream out;
    
    out.open("pr-62.txt");

    out << "My Name is Karm\n";
    out << "My Name is Karm\n";
    out << "My Name is Karm\n";

    out.close();
    
    ifstream in;
    string st;
    in.open("pr-62.txt");
    in >> st;
    cout << st;
    
    // eof - end of file
    while(in.eof() == 0){
        getline(in, st);
        cout << st << endl;
    }
    
    in.close();

}