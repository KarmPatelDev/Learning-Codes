#include <iostream> 
using namespace std;

void checkPermutation(string s1, string s2){
    
    
    int a1[26] = {0};
    int cnt2 = 0;
    for(int i = 0; s2[i] != '\0'; i++){
        a1[s2[i] - 97]++;
        cnt2++;
    }

    int cnt1 = 0;
    for(int i = 0; s1[i] != '\0'; i++)cnt1++;

    int a2[26] = {0};
    for(int i = 0; i < (cnt1 - cnt2); i++){

        int temp = i;
        for(int j = 0; j < cnt2; j++){
           a2[s1[temp] - 97]++;
           temp++;
        }

        for(int k = 0; k < 26; k++){
            if(a1[k] != a2[k]){ 
                for(int l = 0; l < 26; l++)a2[l] = 0;
                break;
             }
        
        if(k == 25){cout << "The Permutation is present" << endl;exit(0);}
        }
        
    }
    cout << "The permutation not present" << endl;
}

int main(){
    string s1 = "cibaoo";
    string s2 = "abo";

    checkPermutation(s1, s2);
    return 0;
}