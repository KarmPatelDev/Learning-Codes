#include <iostream>
using namespace std;

int main(){
    char a[34], b[34], c[68];
    cout << "Enter The First String: ";
    gets(a);
    cout << "Enter The Second String: ";
    gets(b);
    cout << endl;
    int i, j, l = 0;
    for(i = 0; a[i] != '\0'; i++);
    for(j = 0; a[j] != '\0'; j++);

    for(int k = 0; k < (i + j - 1); k++){
        if(k >= 0 && k < i) c[k] = a[k];
        else if(k >= i && k <= (i + j - 2)){
           c[k] = b[l];
           l++;
        }
    }
    c[i + j - 1] = '\0';

    cout << c;
    return 0;
}