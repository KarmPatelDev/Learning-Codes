#include <iostream>

using namespace std;

int main(){
    
    // Simple Example
    int a = 20;
    int* ptr = &a;
    cout << "The value of a is " << *(ptr) << endl;

    // New Operator
    // int *p = new int(40);
    float *p = new float(40.56);
    cout << "The value at address p is " << *(p) << endl;

    int* arr = new int[3];
    arr[0] = 10;
    *(arr + 1) = 20;
    arr[2] = 30;

    cout << "The value of arr[0] is " << arr[0] << endl;
    cout << "The value of arr[1] is " << arr[1] << endl;
    cout << "The value of arr[2] is " << arr[2] << endl << endl;
    
    // delete operator

    // delete arr;
    delete[] arr; // to delete whole contiguous memory of block

    cout << "The value of arr[0] is " << arr[0] << endl;
    cout << "The value of arr[1] is " << arr[1] << endl;
    cout << "The value of arr[2] is " << arr[2] << endl;
    
    return 0;
}