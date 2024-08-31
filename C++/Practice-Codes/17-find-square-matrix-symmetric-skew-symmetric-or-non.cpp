#include <stdio.h>
#include <iostream>
#include <conio.h>
using namespace std;
int main()
{
    int a[10][10], i, j, n, c = 0, c1 = 0;

    cout << "enter the array size";
    cin >> n;

    cout << "enter the elements\n";
    for (i = 1; i <= n; i++){
        for (j = 1; j <= n; j++){
            cin >> a[i][j];
        }
    }

    for (i = 1; i <= n; i++){
        for (j = 1; j <= n; j++)
        {
            if (a[i][j] == a[j][i])c++;  

            if (a[i][j] == (-1)*a[j][i])c1++;
        }
    }

    if (c == (n*n))
        cout << endl << "the given matrix is symmetric";
    else if (c1 == (n*n))
        cout << endl << "the matrix is skew symmetric";
    else
        cout << endl << "none of two";
    return 0;
}