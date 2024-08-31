#include <iostream>
#include <string>
#include <map>

using namespace std;

int main(){
    
    map<string, int> marksMap;
    marksMap["Karm"] = 98;
    marksMap["Dhyey"] = 82;
    marksMap["Abhahy"] = 78;
    marksMap.insert({{"Rohan", 71}, {"Mohan", 67}});
    map<string, int> :: iterator iter = marksMap.begin();
    for(iter = marksMap.begin(); iter != marksMap.end(); iter++){
       cout << (*iter).first << "  " << (*iter).second << "\n";
    }
    cout << "The size is " << marksMap.size() << endl;
    cout << "The max size is " << marksMap.max_size() << endl;
    cout << "The empty return value is " << marksMap.empty() << endl;
    return 0;
}