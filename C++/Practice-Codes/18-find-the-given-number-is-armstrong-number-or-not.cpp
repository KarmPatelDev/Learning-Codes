#include <iostream>
using namespace std;

int main(){
    
    int num, rem, sum = 0;
    cout << "Enter The Number: ";
    cin >> num;
    int temp = num;
    while(num!=0){
        rem = num%10;
        sum = sum + (rem * rem * rem);
        num = num/10;
    }

    if(temp == sum)cout << "The given number is Armstrong Number";
    else cout << "The given number is Not Armstrong Number";

    return 0;
}