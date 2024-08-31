#include <iostream>
using namespace std;

class shop{
    
    int itemID[100];
    int itemPrice[100];
    int counter;

    public:
       void initcounter(void){counter = 0;}
       void setPrice(void);
       void getPrice(void);
};

void shop :: setPrice(void){
    cout << "Enter ID Of Your Item No - " << counter + 1 << endl;
    cin >> itemID[counter];
    cout << "Enter Price Of Your Item" << endl;
    cin >> itemPrice[counter];
    counter++;
}

void shop :: getPrice(void){
   for(int i = 0; i < counter; i++){

       cout << "The Price Of Item with ID " << itemID[i] << " is " << itemPrice[i] << endl;

   }

}

int main(){
    shop dukaan;
    dukaan.initcounter();
    dukaan.setPrice();
    dukaan.setPrice();
    dukaan.setPrice();
    dukaan.getPrice();
    return 0;
}