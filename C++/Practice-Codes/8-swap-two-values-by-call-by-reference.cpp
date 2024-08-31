#include <iostream>
using namespace std;

void swap(int *, int *);

int main(){
    
    int a, b;
    cout << "Enter The Value Of A:";
    cin >> a;
    cout << "Enter The Value Of B:";
    cin >> b;

    cout << endl << "Before Swap: a = " << a << " b = " << b << "\n\n";
    
    swap(&a, &b);

    cout << endl << "After Swap: a = " << a << " b = " << b << "\n\n";

    return 0;
}

void swap(int *a, int *b){

    int temp;
    temp = *a;
    *a = *b;
    *b = temp;
    
}