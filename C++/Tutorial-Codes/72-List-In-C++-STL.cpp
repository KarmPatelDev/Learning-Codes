#include <iostream>
#include <list>

using namespace std;

void display(list<int> &lst){
    list<int> :: iterator it;

    for(it = lst.begin(); it != lst.end(); it++){
        cout << *it << " ";
    }
        cout << endl;
}
int main(){
    

    list<int> list1;  // list of 0 length
    
    list1.push_back(5);
    list1.push_back(10);
    list1.push_back(25);
    list1.push_back(7);
    list1.push_back(3);
    list1.push_back(3);
    list1.push_back(48);

/*
    list<int> :: iterator iter = list1.begin();
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
    cout << *iter << " ";
    iter++;
*/
    
/*
    // Removing elements from the list
    list1.pop_back();
    list1.pop_front();
    list1.remove(3);
    list1.remove(25);
*/
    // Sorting The List
    list1.sort();
    display(list1);
    
    // Reversing The List
    list1.reverse();
    display(list1);
    





    list<int> list2(3); // empty list of size 3
    list<int> :: iterator iter = list2.begin();
    *iter = 45;
    iter++;
    *iter = 6;
    iter++;
    *iter = 9;
     
    display(list2);

    list1.merge(list2);
    list1.sort();
    cout << "List 1 After Merge: ";
    display(list1);
    return 0;
}