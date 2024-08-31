#include <iostream>
using namespace std;

int main()
{
    char a[20];
    int i, j;
    cout << "Enter any String:"
         << "\n";
    gets(a);
    cout << "Reverse of the string is: ";
    for (i = 0; a[i] != '\0'; ++i);
    for (j = i - 1; j >= 0; --j)
        cout << a[j];
    return 0;
}