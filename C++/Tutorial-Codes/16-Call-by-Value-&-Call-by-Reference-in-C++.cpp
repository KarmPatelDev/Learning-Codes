#include <iostream>

using namespace std;

int swap(int a, int b){
    int temp;
    temp = a;
    a = b;
    b = temp;
    cout << "After swap a = " << a << " b = " << b;
    return 0;
}

int swapPointer(int* a, int* b){
    int temp;
    temp = *a;
    *a = *b;
    *b = temp;
    return 0;
}

int & swapReference(int & a, int & b){
    int temp;
    temp = a; 
    a = b;
    b = temp;
    return a;
}

int main(){
    int a, b;
    cout << "Enter The value of a: ";
    cin>>a;
    cout << "Enter The value of b: ";
    cin>>b;

    cout << "Before swap a = " << a << " b = " << b;

    swap(a, b);

    swapPointer(&a, &b);
    cout << "After swap a = " << a << " b = " << b;
    
    swapReference(a, b);
    cout << "After swap a = " << a << " b = " << b;
    return 0;
}
