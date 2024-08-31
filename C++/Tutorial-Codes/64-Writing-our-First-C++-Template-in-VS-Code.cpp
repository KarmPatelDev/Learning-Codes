/*

IT IS ONLY FOR INT

#include <iostream>
using namespace std;

class vector{
       
       public:

       int * arr;
       int size;

       

       vector(int m){

        size = m;
        arr = new int[size];
       }

       int dotProduct(vector &v){
         
         int d = 0;
         for(int i = 0; i < size; i++){
           d += this->arr[i] * v.arr[i];
       }

       return d;
}


};

int main(){
    
    vector v1(3);
    v1.arr[0] = 4;
    v1.arr[1] = 3;
    v1.arr[2] = 1;
    vector v2(3);
    v2.arr[0] = 1;
    v2.arr[1] = 0;
    v2.arr[2] = 1;
    int a = v1.dotProduct(v2);
    cout << a;
    return 0;
}


*/


#include <iostream>
using namespace std;

template <class T>
class vector{
       
       public:

       T * arr;
       int size;

       

       vector(int m){

        size = m;
        arr = new T[size];
       }

       T dotProduct(vector &v){
         
         T d = 0;
         for(int i = 0; i < size; i++){
           d += this->arr[i] * v.arr[i];
       }

       return d;
}


};

int main(){
    
    vector <int> v1(3);
    v1.arr[0] = 4;
    v1.arr[1] = 3;
    v1.arr[2] = 1;
    vector <int> v2(3);
    v2.arr[0] = 1;
    v2.arr[1] = 0;
    v2.arr[2] = 1;
    int a = v1.dotProduct(v2);
    cout << a << endl;

    vector <float> v3(3);
    v3.arr[0] = 4.5;
    v3.arr[1] = 3.0;
    v3.arr[2] = 0.25;
    vector <float> v4(3);
    v4.arr[0] = 0.5;
    v4.arr[1] = 0.5;
    v4.arr[2] = 1;
    float b = v3.dotProduct(v4);
    cout << b;

    return 0;
}