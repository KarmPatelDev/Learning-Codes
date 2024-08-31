#include <iostream>

using namespace std;

int main(){
     int i;
    for(i = 1; i < 20; i++){
        if(i== 12){
            break;
        }
        cout << i << "\n";
        
    }

    cout << endl;
    i = 1;

    while(i < 20){
        
        
        i++;
        if(i == 12){
            continue;
        }
        cout << i << "\n";
    }
    

}