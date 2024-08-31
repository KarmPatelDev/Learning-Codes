/*

The purpose of the exercises given in this series is to help you become a pro in coding. The problem you are going to solve is very interesting. The task is to create a C Language program that works as a Travel Agency Manager.
Instructions:-

You manage a travel agency, and you want your n drivers to input their following details:

    Name of the driver
    Driving License Number
    Route
    Kms

Your program should be able to take n as input (or you can take n=3 for simplicity), and your drivers will start inputting their details one by one. Your program should print details of the drivers in a beautiful fashion. For this task, you have to use Structure only. These four inputs: name, driving license number, route, and km information will be struct members. After creating struct, you have to create its array of size “n.” 
*/

#include <stdio.h>
#include <string.h>

struct drivers{
    char name[52];
    int driving_license_no;
    char route[34];
    int kms;
} d1, d2, d3;

int main(){

printf("Enter The First Driver Name\n");
scanf("%s", &d1.name);
printf("Enter The First Driver Driving License No.\n");
scanf("%d", &d1.driving_license_no);
printf("Enter The First Driver Route\n");
scanf("%s", &d1.route);
printf("Enter The First Driver, How many kms he/she drive?\n");
scanf("%d", &d1.kms);

printf("Enter The Second Driver Name\n");
scanf("%s", &d2.name);
printf("Enter The Second Driver Driving License No.\n");
scanf("%d", &d2.driving_license_no);
printf("Enter The Second Driver Route\n");
scanf("%s", &d2.route);
printf("Enter The Second Driver, How many kms he/she drive?\n");
scanf("%d", &d2.kms);

printf("Enter The Third Driver Name\n");
scanf("%s", &d3.name);
printf("Enter The Third Driver Driving License No.\n");
scanf("%d", &d3.driving_license_no);
printf("Enter The Third Driver Route\n");
scanf("%s", &d3.route);
printf("Enter The Third Driver, How many kms he/she drive?\n");
scanf("%d", &d3.kms);

printf("\nThe Details Of First Driver\n\n");
printf("Name: \t%s\n", d1.name);
printf("Driving License No.: \t%d\n", d1.driving_license_no);
printf("Route: \t%s\n", d1.route);
printf("Kilometers: \t%d\n\n", d1.kms);

printf("The Details Of Second Driver\n\n");
printf("Name: \t%s\n", d2.name);
printf("Driving License No.: \t%d\n", d2.driving_license_no);
printf("Route: \t%s\n", d2.route);
printf("Kilometers: \t%d\n\n", d2.kms);

printf("The Details Of Third Driver\n\n");
printf("Name: \t%s\n", d3.name);
printf("Driving License No.: \t%d\n", d3.driving_license_no);
printf("Route: \t%s\n", d3.route);
printf("Kilometers: \t%d\n\n", d3.kms);
return 0;
}