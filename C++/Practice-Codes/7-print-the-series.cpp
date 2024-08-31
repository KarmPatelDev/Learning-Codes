#include <iostream>
using namespace std;

int main(){
    
    int i = 1, n = 1;
    do{
        
        if(n%2 != 0)cout << i << " ";
        else cout << (-1)*i << " ";
        n++;
        i = i + 3;


    }while(i != 43);

    return 0;
}