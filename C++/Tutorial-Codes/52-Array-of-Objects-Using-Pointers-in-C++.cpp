#include <iostream>

using namespace std;

class ShopItem{
    int id;
    float price;

    public:

    void setData(int a, float b){
        id = a;
        price = b;
    }

    void getData(void){
        cout << "Id of this item is " << id << endl;
        cout << "Price of this item is "<< price << endl;
    }
};

int main(){
    
    int size = 3;
    ShopItem *ptr = new ShopItem [size];
    // shop *ptr = &size; // it is address of first element
    ShopItem *ptrTemp = ptr;
    int p, i;
    float q;

    for(i = 0; i < size; i++){
        cout << "Enter Id and Price of Item " << i + 1 << endl;
        cin >> p >> q;
        ptr->setData(p, q);
        ptr++;
    }

    for(i = 0; i < size; i++){
        cout << endl << "Item Number :  " << i + 1 << endl;
        ptrTemp->getData();
        ptrTemp++;
    }
    return 0;
}