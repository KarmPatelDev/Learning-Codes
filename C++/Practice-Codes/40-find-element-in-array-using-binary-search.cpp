#include <iostream>
using namespace std;

int binary_search(int *, int, int);

int main(){
    int n, result;
    cout << "Enter The Number Of Elements: ";
    cin >> n;
    int a[n], key;
    cout << "Enter The Elements:\n";
    for(int i = 0; i < n; i++)cin >> a[i];
    cout << endl << "Enter The Search Element: ";
    cin >> key;

    result = binary_search(a, n, key);

    if(result != 0)cout << "The element is occur at position " << (result + 1);
    else cout << "The element is not occur in array";
  

    return 0;
}

int binary_search(int * a, int n, int key){
     int s = 0;
     int e = n - 1;
     while(s <= e){
        int mid = (s + e)/2;
        if(*(a + mid) == key)return mid;
        else if(*(a + mid) > key)e = mid - 1;
        else s = mid + 1;
     }
     
     return 0;

}