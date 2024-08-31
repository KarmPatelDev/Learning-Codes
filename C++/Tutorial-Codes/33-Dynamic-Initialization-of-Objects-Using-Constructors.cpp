#include <iostream>

using namespace std;

class BankDeposit{
     int principal;
     int years;
     float interestRate;
     float returnValue;

     public:

     BankDeposit(){}

     BankDeposit(int p, int y, float r){
         principal = p;
         years = y;
         interestRate = r;
         returnValue = principal;

         for(int i = 0; i < y; i++){

             returnValue = returnValue * (1 + interestRate);
         }

     }

     BankDeposit(int p, int y, int R){
         principal = p;
         years = y;
         interestRate = (float)R/100;
         returnValue = principal;

         for(int i = 0; i < y; i++){

             returnValue = returnValue * (1 + interestRate);
         }

     }


     void shows();

};

void BankDeposit :: shows(){
 
cout << "Principal Amount: " << principal << endl << "Interest Rate: " << interestRate << endl << "Years: " << years << endl << endl << "Return Value After " << years << " years: " << returnValue << endl << endl;

}

int main(){
    BankDeposit bd1, bd2, bd3;
    int p, y, R;
    float r;
    
    bd3.shows();   // If We don't use this line then compiler not find function for bd3

    cout << "Enter The Amount Of Principal: ";
    cin >> p;
    cout << "Enter The Interest Rate in Decimal: ";
    cin >> r;
    cout << "Enter The Time Duration in Years: ";
    cin >> y;
    bd1 = BankDeposit(p, y, r);
    bd1.shows();

    cout << "Enter The Amount Of Principal: ";
    cin >> p;
    cout << "Enter The Interest Rate in Percentage: ";
    cin >> R;
    cout << "Enter The Time Duration in Years: ";
    cin >> y;
    bd1 = BankDeposit(p, y, R);
    bd1.shows();

    return 0;
}