// #include <iostream>
// using namespace std;

// int main(){

//     char a[50];
//     cout << "Enter The String";
//     gets(a);

//     cout << "UpperCase Characters:\n";
//     for(int i = 0; a[i] != '\0'; i++){
//         if(a[i] >= 65 && a[i] <= 90){
//             int n = a[i];
//             cout << a[i] << " - " << n << endl;
//         }
//     }

//     cout << endl << "LowerCase Characters:\n";
//     for(int i = 0; a[i] != '\0'; i++){
//         if(a[i] >= 97 && a[i] <= 122){
//             int n = a[i];
//             cout << a[i] << " - " << n << endl;
//         }
//     }

//     cout << endl << "Digit Characters:\n";
//     for(int i = 0; a[i] != '\0'; i++){
//         if(a[i] >= 48 && a[i] <= 57){
//             int n = a[i];
//             cout << a[i] << " - " << n << endl;
//         }
//     }
//     return 0;
// }

#include <conio.h>
#include <iostream>
#include <dos.h>
#include <process.h>
using namespace std;
int main()
{
    char ch, a[] = {"I just love to Learn Programming "};
    int j = 0;
    cout << "Uppercase Alphabates\n\n";
    for (int i = 65; i < 91; ++i)
    {
        j++;
        ch = i;
        cout << ch << ":" << i << "\t";
        if (j == 10)
        {
            cout << "\n";
            j = 0;
        }
    }
    j = 0;
    cout << "\n\n\nLowercase Alphabates\n\n";
    for (int i = 97; i < 123; ++i)
    {
        j++;
        ch = i;
        cout << ch << ":" << i << "\t";
        if (j == 10)
        {
            cout << "\n";
            j = 0;
        }
    }
    cout << "\n\n\nDigits\n\n";
    for (int i = 48; i < 58; i++)
    {
        ch = i;
        cout << ch << ":" << i << "\t";
    }
    cout << "\n\n\n\n\t\t";
    for (int i = 0; a[i] != '\0'; ++i)
    {
        cout << a[i];
    }
    return 0;
}