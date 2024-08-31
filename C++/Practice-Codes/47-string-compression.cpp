#include <iostream>
#include <vector>
using namespace std;

int compression(vector<char>& v){
     int i = 0, ansIndex = 0, n = v.size();

     while(i < n){
        int j = i + 1;
        while(j < n && v[i] == v[j]){
            j++;
        }
        //we reach here if 1 char , j- i character same or all character same
        
        // for write character
        v[ansIndex++] = v[i];
        
        // count the character occurences
        int cnt = j - i;

        if(cnt > 1){
            // convert the counting into single digit and saving in answer

            string cnt2 = to_string(cnt);
            for(char ch: cnt2){v[ansIndex++] = ch;}
        }
        // for next character
        i = j;
        
     }
     return ansIndex;    
}

int main(){

    vector<char> v;
    v.push_back('a');
    v.push_back('a');
    v.push_back('a');
    v.push_back('b');
    v.push_back('b');
    v.push_back('c');

    int size = compression(v);
    for(int i = 0; i < size; i++)cout << v[i] << " ";

    return 0;
}