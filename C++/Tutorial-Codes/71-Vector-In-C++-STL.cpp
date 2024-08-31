#include <iostream>
#include <vector>

using namespace std;


void display(vector<int> &v){
    for(int i = 0; i < v.size(); i++){
       cout << v[i] << " ";
       cout << v.at(i) << " ";
    }
    cout << endl;
}

template <class T>
void display2(vector<T> &v){
    for(int i = 0; i < v.size(); i++){
       cout << v[i] << " ";
    }
    cout << endl;
}

int main(){
    
    vector<int> vec1; // create a vector //zero length vector
    int element, size;
        cout << "Enter the size of your vector" << endl;
        cin >> size;

    for(int i = 0; i < size; i++){        
        cout << "Enter an element to add to this vector: ";
        cin >> element;
        vec1.push_back(element);
    }
    // vec1.pop_back();
    display(vec1);
    vector<int> :: iterator iter = vec1.begin();
    // vec1.insert(iter, 566);
    // vec1.insert(iter + 1, 566);
    vec1.insert(iter + 1, 5, 566);
    display(vec1);


    vector<char> vec2(4);  // 4 element character vector
    vec2.push_back('5');
    display2(vec2);

    vector<char> vec3(vec2);  // 4 element character vector from vec2
    display2(vec3);

    vector<int> vec4(4, 13);
    display2(vec4);
    cout << vec4.size();
    
    return 0;
}