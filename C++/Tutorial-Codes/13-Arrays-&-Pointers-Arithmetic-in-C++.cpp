#include <iostream>
using namespace std;

int main(){
    int marks[] = {45, 23, 57, 89};
    
    int mathsMarks[4];
    mathsMarks[0] = 2278;
    mathsMarks[1] = 45;
    mathsMarks[2] = 654;
    mathsMarks[3] = 487;

    cout << "There are maths Marks" << endl;
    cout << mathsMarks[0] << endl;
    cout << mathsMarks[1] << endl;
    cout << mathsMarks[2] << endl;
    cout << mathsMarks[3] << endl;

    marks[2] = 2555;
    cout << marks[0] << endl;
    cout << marks[1] << endl;
    cout << marks[2] << endl;
    cout << marks[3] << endl;

    for(int i = 0; i <= 3; i++){
        cout << "The Value Of marks " << i << "is " << marks[i];
    }

    int*  p = marks;
    cout << *(p++) << endl;
    cout << *(++p) << endl;
    cout << "the value of *p is " << *p << endl;
    cout << "the value of *(p+1) is " << *(p+1) << endl;
    cout << "the value of *(p+2) is " << *(p+2) << endl;
    cout << "the value of *(p+3) is " << *(p+3) << endl;
    return 0;
}