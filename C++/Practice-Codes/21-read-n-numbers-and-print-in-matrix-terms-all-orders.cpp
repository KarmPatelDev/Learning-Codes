#include <iostream>
using namespace std;

int main(){
    
    int n;
    cout << "Enter The Number Of Elements: ";
    cin >> n;
    int a[n];
    cout << "Enter The Elements" << endl;
    for(int i = 0; i < n; i++)cin >> a[i];

    for(int i = 1; i < n; i++){
        cout << endl;
         if(n%i == 0){
            int p = i, q = n/i, r = 0;
            for(int x = 0; x < p; x++){
                for(int y = 0; y < q; y++){
                    cout << a[r++] << "\t";
                }
                cout << endl;
            }
         }
    }

    return 0;
}