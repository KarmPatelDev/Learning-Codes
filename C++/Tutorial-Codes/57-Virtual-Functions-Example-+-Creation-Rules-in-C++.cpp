#include <iostream>
using namespace std;

/*

RULES FOR VIRTUAL FUNCTIONS

They cannot be static
They are accessed by object pointers
Virtual functions can be a friend of another class
A virtual function in the base class might not be used.
If a virtual function is defined in a base class, there is no necessity of redefining it in the derived class

*/
class CWH{
    protected:
        string title;
        float rating;
    public:
        CWH(string s, float r){
             title = s;
             rating = r;
        }
        
        // void display(){ // It display two tomes Hello World
        virtual void display(){
            cout << "Hello World";
        }

};

class CWHVideo : public CWH{
    protected:
        float videolength;
    public:
        CWHVideo(string s, float r, float vl) : CWH(s, r){
          videolength = vl;
        }

        void display(){
            cout << "This is an amazing video with title " << title << endl;
            cout << "Rating: " << rating << " out of 5 stars" << endl;
            cout << "Length of this video is: " << videolength << " in minutes and second" << endl << endl;
        }
};

class CWHText : public CWH{
    protected:
        int words;
    public:
        CWHText(string s, float r, int wc) : CWH(s, r){
          words = wc;
        }

        void display(){
            cout << "This is an amazing Blog with title " << title << endl;
            cout << "Rating: " << rating << " out of 5 stars" << endl;
            cout << "Total words of this Blog is: " << words << endl << endl;
        }
};

int main(){
    
    string title;
    float rating, videolength;
    int words;

    // For Code With Video

    title = "Django Tutorial";
    videolength = 27.59;
    rating = 4.9;
    CWHVideo djVideo(title, rating, videolength);
    // djVideo.display();

    // For Code With Text

    title = "Django Tutorial";
    words = 2759;
    rating = 4.9;
    CWHText djText(title, rating, words);
    // djText.display();
    
    CWH* tut[2];

    tut[0] = &djVideo;
    tut[1] = &djText;
    
    tut[0]->display();
    tut[1]->display();

    return 0;
}