#include<iostream>
#include <math.h>
using namespace std;
/*
Create 2 classes:
    1. SimpleCalculator - Takes input of 2 numbers using a utility function and performs +, -, *, / and displays the results using another function.
    2. ScientificCalculator - Takes input of 2 numbers using a utility function and performs any four scientific operations of your choice and displays the results using another function.

    Create another class HybridCalculator and inherit it using these 2 classes:
    Q1. What type of Inheritance are you using?  --> Multiple Inheritance
    Q2. Which mode of Inheritance are you using?  --> Public , Public
    Q3. Create an object of HybridCalculator and display results of the simple and scientific calculator.
    Q4. How is code reusability implemented?
*/

class simpleCalc{
       
       protected:
       float num1, num2;

       public:
       void setData(float , float );
       void getData(void);

};

void simpleCalc :: setData(float n1, float n2){
    num1 = n1;
    num2 =  n2;
}

void simpleCalc :: getData(){
    cout << "The sum of two number is " << num1 + num2 << endl;
    cout << "The subtraction of two number is " << num1 - num2 << endl;
    cout << "The multiply of two number is " << num1 * num2 << endl;
    cout << "The division of two number is " << num1 / num2 << endl;
}

class scientificCalc{
        
        protected:
        float num1, num2;

        public:
        void setValue(float , float );
        void getValue(void);
};

void scientificCalc :: setValue(float n1, float n2){
    num1 = n1;
    num2 =  n2;
}

void scientificCalc :: getValue(){
    cout << "The value of X^Y is " << pow(num1, num2) << endl;
    cout << "The exponential of two number is respectively " << exp(num1) << " and " << exp(num2) << endl;
    cout << "The logarithm of two number is respectively " << log(num1) << " and " << log(num2) << endl;
    cout << "The tangent of two number is respectively " << tanh(num1) << " and " << tanh(num2) << endl;
}

class hybridCalc : public simpleCalc, public scientificCalc{
    
    public:

    void display(void){
          
          cout << endl << endl << "The Caluclulation From Simple Calculator:-" << endl << endl;
          getData();
          cout << endl << "The Caluclulation From Simple Calculator:-" << endl << endl;
          getValue();


    }

};

int main(){
    
    hybridCalc karm;

    float i, j, k, l;
    cout << "Enter The Value For Simple Caluculation Resplsectively: ";
    cin >> i >> j;
    cout << "Enter The Value For Scientific Caluculation Resplsectively: ";
    cin >> k >> l;

    karm.setData(i, j);
    karm.setValue(k, l);

    karm.display();

    return 0;
}