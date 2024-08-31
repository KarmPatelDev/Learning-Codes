#include <iostream>
using namespace std;

int main(){
    
    int n;
    cout << "Enter The Numbe: ";
    cin >> n;

    int a[10] = {0}, rem, i = 0;
    while(n!=0){
       rem = n % 10;
       a[i] = rem;
       n /= 10;
       i++;  
    }
    
    int sum1 = 0, sum2 = 0;
    for(i = 0; i < 10; i++){
        if(i%2 == 0)sum1 = sum1 + a[i];
        else sum2 = sum2 + a[i];
    }

    if(sum1 == sum2)cout << "The Number is Divisible By 11";
    else cout << "The Number is not Divisible By 11";

    return 0;

}
