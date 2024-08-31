#include <iostream>
using namespace std;

class Complex{

    int real, imaginary;

    public:
    
    void setData(int a, int b){
        real = a;
        imaginary = b;
    }

    void getData(){
        cout << " The real part is " << real << endl;
        cout << " The imaginary part is " << imaginary << endl;
    }

};

int main(){
    Complex c1;
    c1.setData(1, 54);
    c1.getData();

    Complex *ptr = &c1;
    (*ptr).setData(1, 54);
    (*ptr).getData();

    Complex *ptr1 = new Complex;
    (*ptr1).setData(1, 54);
    (*ptr1).getData();

    // Below Exactly Same As Upper
    ptr1->setData(1, 54);   // "->" de-reference the ptr1 pointer, which points to Complex object and invoked setData
    ptr1->getData();

    Complex *ptr2 = new Complex[3];
    ptr2->setData(1, 54);
    ptr2->getData();
    (ptr2 + 1)->setData(1, 54);
    (ptr2 + 1)->getData();
    (ptr2 + 2)->setData(1, 54);
    (ptr2 + 2)->getData();
    
    return 0;
}