#include <iostream>
using namespace std;

int main(){
    
    int n;
    cout << "Enter The Number Of Elements in N: ";
    cin >> n;

    int a[n], x, pos = 0;
    cout << "Enter The Elemntes:\n";
    for(int i = 0; i < n; i++)cin >> a[i];

    for(int i = 0; i < n; i++){
        for(int j = i; j < n-1; j++){
            if(a[i] > a[j + 1]){
                int temp;
                temp = a[i];
                a[i] = a[j + 1];
                a[j + 1] = temp;
            }
        }
    }

    cout << "Enter Your Element: ";
    cin >> x;

    for(int i = 0; i < n; i++){
        if(a[i] < x)pos++;
    }

    for(int i = pos; i < (n+1); i++){
        int temp;
        temp = a[i];
        a[i] = x;
        x = temp;

    }

    for(int i = 0;i < (n + 1); i++)cout << a[i] << " ";

    return 0;
}