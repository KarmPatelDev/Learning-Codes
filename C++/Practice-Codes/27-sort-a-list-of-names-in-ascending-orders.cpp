#include <iostream>
#include <string.h>
using namespace std;

int main(){
    int n;
    cout << "Enter The Number Of Names: ";
    cin >> n;
    char str[n][34], temp[34];

    for(int i = 0; i < n; i++)cin >> str[i];
    
    for(int i = 0;i < n; i++){
        for(int j = i + 1; j < n - 1; j++){
           if(strcmp(str[i], str[j]) == 1){
                 strcpy(temp, str[i]);
                 strcpy(str[i], str[j]);
                 strcpy(str[j], temp);
           }
        }
    }

    cout << endl;
    for(int i = 0; i < n; i++)cout << str[i] << endl;

    return 0;
}
