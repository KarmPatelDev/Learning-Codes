#include <iostream>

using namespace std;

/*

CLASS TEMPLATE WITH MULTIPLE FEATURES (ONE, TWO AND MORE THEN TWO)

template <class T1, class T2, class T3, ans so on>
class NameOfClass{
    //body
}

*/

template <class T1, class T2>

class myclass{
    public:

    T1 data1;
    T2 data2;

    myclass(T1 a, T2 b){
        data1 = a;
        data2 = b;
    }

    void display(){
        cout << this-> data1 << endl << this->data2;
    }

};

int main(){
    // myclass <int, float> c1(3, 3.8);
    // myclass <int, char> c1(3, 'c');
    // myclass <char, int> c1('a', 3);
    myclass <float, string> c1(3.8, "My name is karm");
    c1.display();
    return 0;
}