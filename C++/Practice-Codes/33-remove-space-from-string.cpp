#include <iostream>
using namespace std;

int main()
{
    int i, j = 0;
    char str[30];
    cout << "Enter a String:\n";
    gets(str);
    for (i = 0; str[i] != '\0'; ++i)
    {
        if (str[i] != ' ')
            str[j++] = str[i];
    }
    str[j] = '\0';
    cout << "\nString After Removing Spaces:\n"
         << str;
    return 0;
}