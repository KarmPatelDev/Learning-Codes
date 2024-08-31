#include <iostream>
using namespace std;

// we have to enter number of line n and quaries k
// Enter first index how many number you want to enter
// now enter the numbers and so on for all index n
// now enter the query index and index number ands you get that index number

int main(){
    int n, q;
    cout << "Enter The value of rows and Queries:";
    cin >> n >> q;
    int * a[n];

    for(int i = 0; i < n; i++){
        int s;
        cout << "How many number you want to add in row " << i << ": ";
         cin >> s;
         cout << "Enter The Numbers: ";
         a[i] = new int[s];
         for(int j = 0; j < s; j++)cin >> a[i][j];
    }

    for(int k = 0; k < q; k++){
        int x, y;
        cout << "Enter The row and Query index: ";
        cin >> x >> y;
        cout << "Your Number is ";
        cout << a[x][y] << endl;
    }
    return 0;
}