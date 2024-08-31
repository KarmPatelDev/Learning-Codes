#include <iostream>
using namespace std;

int main(){
    
    int o = 0;
    for(int i = 1;i <= 25; i++){
        for(int j = 1;j <= 25; j++){
            for(int k = 1;k <= 25; k++){

            int l = (i * i), m = (j * j), n = (k * k);
            if(l == (m + n)){
                if((o%2) == 0)cout << i << "\t" << j  << "\t" << k << endl;
              o++;
            }
            if(o == 6)exit(0);

        }
    }
}

return 0;

}