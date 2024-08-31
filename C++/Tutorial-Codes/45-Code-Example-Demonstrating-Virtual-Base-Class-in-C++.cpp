#include <iostream>

using namespace std;

/*

student --> test --> result
student --> sport --> result

*/

class Student{
     protected:
     int roll_no;

     public:
     void set_number(int a){
         roll_no = a;
     }
    void print_number(void){
        cout << "Your roll no. is " << roll_no << endl;
    }
};

// class Test : public virtual Student{ // It is same as Below
class Test : virtual public Student{

    protected:
    float maths, physics;

    public:
    void set_marks(float m1, float m2){
        maths = m1;
        physics = m2;
    }
    void print_marks(void){
        cout << "Your Result is Here:" << endl;
        cout << "Maths: " << maths << endl;
        cout << "Physics: " << physics << endl;
    }
};

// class Sport : virtual public Student{  // It is same as Below
class Sport : public virtual Student{

    protected:
    float score;

    public:
    void set_score(float sc){
        score = sc;
    }
    void print_score(void){
        cout << "PT: " << score << endl;
    }
};

class Result : public Test, public Sport{
    private:
    float total;

    public:
    void display(void){
        total = maths + physics + score;
        print_number();
        print_marks();
        print_score();
        cout << "Your Total Score is " << total << endl;

    }
};

int main(){
        Result karm;
        karm.set_number(71);
        karm.set_marks(25, 25);
        karm.set_score(25);
        karm.display();
        return 0;
}