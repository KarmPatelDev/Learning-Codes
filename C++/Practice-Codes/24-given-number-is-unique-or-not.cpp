#include <iostream>
using namespace std;

int main(){
    
    int num, rem, a[10] = {0};
    cout << "Enter The Number: ";
    cin >> num;
    
    int i = 0;
    while(num!=0){
       rem = num%10;
       a[i] = rem;
       num /= 10;
       i++;
    }

    for(int j = i - 1; j >= 0; j--){
        for(int k = j - 1; k >= 0; k--){
            if(a[j] == a[k]){cout << "The Number is Not Unique";exit(0);}
        }
    }
    
    cout << "The Number is Unique";
    return 0;
}