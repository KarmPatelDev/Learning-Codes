#include <iostream>
using namespace std;

int main(){
    
    char a[34];
    int len = 0, j = 0;
    cout << "Enter a String: ";
    cin >> a;
    
    for(int i = 0; a[i] != '\0'; i++)len++;
    
    for(int i = 0, k = (len - 1); i <= (len - 1); i++, k--){
            if(a[i] == a[k])j++;
    }

    if(len == j)cout << "The String is Palindrome";
    else cout << "The String is Not Palindrome";
    return 0;
}