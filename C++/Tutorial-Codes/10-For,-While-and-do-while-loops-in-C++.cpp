#include <iostream>

using namespace std;

int main(){
     int i;
    for(i = 1; i < 20; i++){
        cout << i << "\n";
    }

    cout << endl;
    i = 1;

    while(i < 20){
        cout << i << "\n";
        i++;
    }
    cout << endl;  
    i = 1;
    do {
        i++;
        cout << i << "\n";
        
    }while(i < 20);

}