// Write a c program to prepare pay slip using the following data.Da = 10% of basic, Hra = 7.50% of basic, Ma = 300, Pf = 12.50% of basic, Gross = basic + Da + Hra + Ma, Nt = Gross – Pf.

#include <stdio.h>
#include <conio.h>

float main(){
    float Da, Hra, Pf, Gross, basic, Nt, Ma = 300;
    printf("Enter Basic Salary: ");
    scanf("%f", &basic);
    printf("\n-----Preparing a Pay Slip-----\n");
    Da = 0.10*basic;
    Hra = 0.0750*basic;
    Pf = 0.1250*basic;
    Gross = basic + Da + Hra + Ma;
    Nt = Gross - Pf;
    printf("Da: %f\nHra: %f\nPf: %f\n\n", Da, Hra, Pf);
    printf("Gross: %f\nNt: %f\n", Gross, Nt);
    getch();
    return 0;
}
