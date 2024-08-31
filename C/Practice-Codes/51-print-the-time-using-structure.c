//  Define structure data type called time_struct containing three member’s integer hour, integer minute and integer second. Develop a program that would assign values to the individual number and display the time in the following format: 16: 40:51

#include <stdio.h>
#include <conio.h>

struct time_struct
{
    int hour;
    int minute;
    int second;
};

struct time_struct ts;

int main(){
    printf("Enter Hours: ");
    scanf("%d", &ts.hour);
    printf("Enter Minutes: ");
    scanf("%d", &ts.minute);
    printf("Enter Seconds: ");
    scanf("%d", &ts.second);

    if(ts.hour >= 0 && ts.minute >= 0 && ts.second >= 0 && ts.hour <= 24 && ts.minute <= 60 && ts.second <= 60){
    printf("\n\nTime is: %d: %d: %d\n", ts.hour, ts.minute, ts.second);
    }
    else{
        printf("\n\nEnter The Correct Time Values\n");
    }
    getch();
    return 0;
}