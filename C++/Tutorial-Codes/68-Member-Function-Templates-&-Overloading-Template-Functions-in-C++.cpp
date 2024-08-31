#include <iostream>

using namespace std;

template <class T>

class Karm{

    public:

    T data;
    Karm(T a){
        data = a;
    }

    void display();
};

template <class T>
void Karm <T> :: display(){
    cout << data << endl;
}

void func(int a){
    cout << "I am first func " << a << endl;
}

template <class T>
void func(T a){
    cout << "I am Templatised func() " << a << endl;
}

template <class T>
void func1(T a){
    cout << "I am Templatised func() " << a << endl;
}


int main(){
    
    // Karm <int> h(5);
    // Karm <float> h(5.7);
    Karm <char> h('A');
    cout << h.data << endl;
    h.display();

    func(4);  // Exact match takes the highest priority
    func1(4);
    return 0;
}