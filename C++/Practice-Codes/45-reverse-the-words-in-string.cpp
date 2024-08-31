#include <iostream>
using namespace std;

void reverseWord(char arr[]){
    
    int start = 0, end;
    for(int i = 0; arr[i] != '\0'; i++){
        while(arr[i + 1] == ' ' || arr[i + 1] == '\0'){
            end = i;
            while(start < end){                
                swap(arr[start], arr[end]);
                start++;
                end--;
            }
            if(arr[i + 1] == '\0')break;
            i = i + 1;
            start = i+ 1;
        }
    }

    for(int i = 0; arr[i] != '\0'; i++)cout << arr[i];
}
int main(){
    
    char a[100] = "My Name is Karm";

    reverseWord(a);

    return 0;  
}