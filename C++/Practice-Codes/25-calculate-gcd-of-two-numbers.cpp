#include <iostream>
using namespace std;

int gcd(int, int);

int main(){
    int n1, n2, gcd_num;
    cout << "Enter The Two Numbers: ";
    cin >> n1 >> n2;

    gcd_num = gcd(n1, n2);
    cout << "GCD = " << gcd_num;

    return 0;
}

int gcd(int n1, int n2){
   
   int temp, k;
    if(n1 <= n2)k = n2;
    else k = n1;
        
        for(int i = 1; i <= k; i++){
        if(n1%i == 0 && n2%i == 0){
        temp = i;
        }
        }

    return temp;
}