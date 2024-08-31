#include <iostream>
#include <math.h>
using namespace std;

struct complex
{
    float rel;
    float img;
} s1, s2;

int main()
{

    cout << "Enter The First Complex Number Real and Imaginary Part" << endl;
    cin >> s1.rel >> s1.img;
    cout << "Enter The Second Complex Number Real and Imaginary Part" << endl;
    cin >> s2.rel >> s2.img;

    cout << "The Sum Of Two Complex Number is " << (s1.rel + s2.rel) << " + " << (s1.img + s2.img) << "i" << endl;
    cout << "The Substraction Of Two Complex Number is " << (s1.rel - s2.rel) << " + " << (s1.img - s2.img) << "i" << endl;
    cout << "The multiplication Of Two Complex Number is " << ((s1.rel * s2.rel) - (s1.img + s2.img)) << " + " << ((s1.rel * s2.img) + (s1.img + s2.rel)) << "i" << endl;
    cout << "The Division Of Two Complex Number is " << (((s1.rel) * (s2.rel)) + ((s1.img) * (s2.img))) / (pow(s2.rel, 2) + pow(s2.img, 2)) << " + " << (((s2.rel) * (s1.img)) - ((s1.rel) * (s2.img))) / (pow(s2.rel, 2) + pow(s2.img, 2)) << "i" << endl;
    return 0;
}