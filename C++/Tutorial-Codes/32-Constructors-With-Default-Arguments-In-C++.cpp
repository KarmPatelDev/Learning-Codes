#include <iostream>

using namespace std;

class Simple{

    int data1, data2, data3;

    public:

    Simple(int a, int b = 13, int c = 14){
        data1 = a;
        data2 = b;
        data3 = c;
    }

    void printData();
};

void Simple :: printData(){

cout << "The value of data1, data2 and data3 respectively are " << data1 << ", " << data2 << " and " << data3 << endl;

}

int main(){
    
    Simple s1(35);
    s1.printData();

    Simple s2(35, 25);
    s2.printData();

    Simple s3(35, 25, 15);
    s3.printData();

    return 0;
}