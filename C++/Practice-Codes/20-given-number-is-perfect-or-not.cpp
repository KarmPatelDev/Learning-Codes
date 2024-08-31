#include <iostream>
using namespace std;

int main(){
    
    int num, sum = 0;
    cout << "Enter The Number";
    cin >> num;

    for(int i = 1;i < num; i++){
        if(num%i == 0){sum = sum + i;}
    }

    if(sum == num)cout << "The Number is Perfect Number";
    else cout << "The Number is Not Perfect Number";
    return 0;
}