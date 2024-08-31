#include <iostream>
using namespace std;

int main(){
    
    for(int i = 0; i < 10; i++){
        for(int j = i; j < 10; j++){
            cout << " ";
        }
        for(int k = 0; k < i; k++){
            cout << "* ";
        }
        cout << endl;
    }
    
    cout << endl << endl;

    for(int i = 0; i < 10; i++){
        for(int j = i; j < 10; j++){
            cout << " ";
        }
        for(int k = 0; k < (i*2 - 1); k++){
            cout << "*";
        }
        cout << endl;
    }
    return 0;
}