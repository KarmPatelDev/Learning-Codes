#include <iostream>

using namespace std;

template <class T1 = int, class T2 = float, class T3 = char>

class myclass{
    public:

    T1 data1;
    T2 data2;
    T3 data3;

    myclass(T1 a, T2 b, T3 c){
        data1 = a;
        data2 = b;
        data3 = c;
    }

    void display(){
        cout << "The value of data1 is " << data1 << endl;
        cout << "The value of data2 is " << data2 << endl;
        cout << "The value of data3 is " << data3 << endl << endl;
    }

};

int main(){
    
    myclass <> c(3, 3.8, 'A');
    c.display();

    myclass <float, string, char> c1(3.8, "My name is karm", 'A');
    c1.display();

    myclass <float, char, int> c2(3.8, 'C', 'A');
    c2.display();

    return 0;
}