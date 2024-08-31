#include <iostream>
using namespace std;

int main()
{
    char a[50];
    int i;
    cout << "Enter a string:";
    gets(a);
    cout << "\n";
    if (islower(a[0]))
        a[0] = toupper(a[0]);
    for (i = 0; a[i] != '\0'; ++i)
    {
        if (a[i] == ' ')
            if (islower(a[i + 1]))
                a[i + 1] = toupper(a[i + 1]);
    }
    cout << "The new string is:" << a;
    return 0;
}