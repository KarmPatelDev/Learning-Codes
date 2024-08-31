#include <iostream>
#include <vector>
#include <sstream>
using namespace std;

vector<int> parseInts(string str){

    vector<int> out;
    stringstream ss(str);
    
    char ch;
    int temp;

    while(ss >> temp){ // ss int goes to temp
       out.push_back(temp);
       ss >> ch;   // for ignore comma
    }

    return out;
}

int main() {
    string str;
    cin >> str;
    vector<int> integers = parseInts(str);
    for(int i = 0; i < integers.size(); i++) {
        cout << integers[i] << "\n";
    }
    
    return 0;
}