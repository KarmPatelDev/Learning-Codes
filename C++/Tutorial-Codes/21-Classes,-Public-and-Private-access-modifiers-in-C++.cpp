#include <iostream>

using namespace std;

class Employee   // we can use data + function in class not in structure
{
   private:
   int a, b, c;

   public:
   int d, e;

   void setData(int a1, int  b1, int  c1)
//    {      // we can use to define the setData with declaration
//     a = a1;
//     b = b1;
//     c = c1;
// }
;
  // Declaration
   void getData(){
       cout << "The value of a is " << a << endl;
       cout << "The value of b is " << b << endl;
       cout << "The value of c is " << c << endl;
       cout << "The value of d is " << d << endl;
       cout << "The value of e is " << e << endl;
   }

};

void Employee :: setData(int a1, int b1, int c1){
    a = a1;
    b = b1;
    c = c1;
}

int main(){
    
    Employee karm;
   // karm.a = 100 // It is not work because a variable is private
    karm.d = 34;
    karm.e = 89;
    karm.setData(56, 99, 30);
    karm.getData();
    return 0;
}
