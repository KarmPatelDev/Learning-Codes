// print following series using function: x + x^3/3! + x^5/5! +.......+ x^n/n!


#include <iostream>
using namespace std;

double solution(double, int);
double power(double, int);
int factorial(int);

int main(){
    
    double x, result;
    int n;

    cout << "Enter The Value Of X: ";
    cin >> x;
    cout << "Enter The Value Of N: ";
    cin >> n;

    result = solution(x, n);

    cout << "The Value Of Series Is " << result;
    
    return 0;
}

double solution(double x, int n){

    double solution = 0;

    for(int i = 0; i < n; i += 2){
       solution = solution + (power(x, i)/factorial(i));
    }

    return solution;
}

double power(double x, int i){
    
    double m = 1;
    for(int j = 1; j <= i; j++){
       m = m * x;
    }

    return m;
}

int factorial(int i){
    
    int m = 1;
    for(int j = 1; j <= i; j++){
        m = m * j;
    }

    return m;
}