#include <iostream>
using namespace std;

int power(int);

int main(){
    
    cout << "\n1. BINARY TO DECIMAL CONVERSION\n";
    cout << "2. DECIMAL TO BINARY COVERSION\n\n";
    int num;
    long long int b_no, b1_no = 0;
    int rem, c_no = 0, i = 0, rem1, c1_no, i1 = 1;
    cout << "ENTER YOUR CHOICE: \t";
    cin >> num;
    cout << endl;


    switch(num){
        case 1:
        cout << "Enter Your Binary Number: ";
        cin >> b_no;
        while(b_no!=0){
            rem = b_no%10;
            c_no = c_no + rem*power(i);
            b_no = b_no/10;
            i++;
        }
        cout << "\nDecimal Number: " << c_no;
        break;

        case 2:

        // decimal to binary 
        // collect the reminders of number divided by 2(while loop use for quatient goes to 0) and print all the reminders in reverse
        cout << "Enter Your Decimal Number: ";
        cin >> c1_no;
        while(c1_no!=0){
            rem1 = c1_no % 2;
            c1_no /= 2;
            b1_no += rem1*i1;
            i1 *= 10;
        }
        cout << "\nBinary Number: " << b1_no;
        break;

        default:
        cout << "Entered Wrong Number";
        
    }
    return 0;
}

int power(int i){
    
    int k = 1;
    for(int j = 0; j < i; j++){
        k = k * 2;    
    }

    return k;
}