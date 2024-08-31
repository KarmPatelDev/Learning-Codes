//conditions for leap year are as follows
// leap years occur in years exactly divisible by four,
// except that years ending in 00 are leap years
// only if they are divisible by 400.

#include <iostream>
using namespace std;

int main(){

    int year;
    cout << "Enter The Year: ";
    cin >> year;

    if((year%4 == 0) && (year%100 != 0) || (year%400 == 0))cout << year << " is leap year";
    else cout << year << " is not leap year";

    return 0;
}
