#include <iostream>
using namespace std;

int main(){
    
    int num, rem, sum = 0;
    cout << "Enter The Number:";
    cin >> num;

    while(num!=0){
        rem = num%10;
        sum = sum + rem;
        num = num/10;
    }
    
    cout << "The Sum of Individual Digit is " << sum;
    
    return 0;
}