#include <iostream>
using namespace std;

int main(){
    int n, firstnum = 0, secnum = 1, num;
    cout << "Enter The Number Of Terms";
    cin >> n;

    cout << firstnum << " " << secnum << " ";
    for(int i = 0; i < n - 2; i++){
        num = firstnum + secnum;
        cout << num << " ";
        firstnum = secnum;
        secnum = num;
    }

    return 0;
}