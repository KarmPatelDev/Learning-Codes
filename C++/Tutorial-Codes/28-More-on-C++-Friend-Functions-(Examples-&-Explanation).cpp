//   SIMPLE EXAMPLE

/*
#include <iostream>

using namespace std;

class Y;

class X{
     int data;
     friend void add(X, Y);
     public:

     void setValue(int value){

         data = value;
     }

};

class Y{
      int data;
    friend void add(X, Y);
      public:

     void setValue(int value){

         data = value;
     }
};

void add(X o1, Y o2){

    cout << "Summing data of X and Y objects gives me " << o1.data + o2.data;
}

int main(){
    X a1;
    a1.setValue(3);

    Y b1;
    b1.setValue(5);

    add(a1, b1);
    return 0;
}

*/

// COMPLEX EXAMPLE

/*

#include <iostream>

using namespace std;

class c2;

class c1{
    int val1;
    friend void exchange(c1 &, c2 &);
    public:

    void indata(int a){
        val1 = a;
    }

    void display(void){
        cout << val1 << endl;
    }
};

class c2{
    int val2;
    friend void exchange(c1 &, c2 &);
    public:

    void indata(int a){
        val2 = a;
    }

    void display(void){
        cout << val2 << endl;
    }
};

void exchange(c1 & x, c2 & y){

    int temp = x.val1;
    x.val1 = y.val2;
    y.val2 = temp;

}
int main(){
    
    c1 oc1;
    c2 oc2;

    oc1.indata(34);
    oc2.indata(67);
    exchange(oc1, oc2);

    cout << "The Value of c1 After Exchanging Becomes: ";
    oc1.display();

    cout << "The Value of c2 After Exchanging Becomes: ";
    oc2.display();

    return 0;
}

*/


/*

PROBLEM :-

Create a function (Hint - Make it a friend function) which takes 2 point objects and computes the distance between those 2 points

*/

#include <iostream>
#include <math.h>
using namespace std;

class Y;

class X{

    int x, y;
    
    public: 
    friend float distance(X &, Y &);
    void setData(int m, int n){
        x = m;
        y = n;
    }
    
    void displayfp(){
    cout << "(" << x << ", " << y << ")";
    }
};

class Y{

    int x, y;
    
    public: 
    friend float distance(X &, Y &);
    void setValue(int m, int n){
        x = m;
        y = n;
    }
    
    void displaysp(){
     cout << "(" << x << ", " << y << ")";
    }

};

float distance(X & a, Y & b){

     float s = ((b.x - a.x)*(b.x - a.x)) + ((b.y - a.y)*(b.y - a.y));

     return sqrt(s);
}

int main(){
    
    X p, q, r;
    Y s, t, u;

    p.setData(1,1);
    s.setValue(1,1);
    cout << "The distance between two points ";
    p.displayfp();
    cout <<  " and ";
    s.displaysp();
    cout << " is " << distance(p, s) << endl;

    q.setData(0,1);
    t.setValue(0, 6);
    cout << "The distance between two points ";
    q.displayfp();
    cout <<  " and ";
    t.displaysp();
    cout << " is " << distance(q, t) << endl;

    r.setData(1,0);
    u.setValue(70, 0);
    cout << "The distance between two points ";
    r.displayfp();
    cout <<  " and ";
    u.displaysp();
    cout << " is " << distance(r, u) << endl;


    return 0;
}