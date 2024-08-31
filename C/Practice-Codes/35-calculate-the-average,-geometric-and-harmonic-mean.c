// Write a C program to calculate the average, geometric and harmonic mean of n elements in an array

#include <stdio.h>
#include <math.h>
#include <conio.h>

int main(){
    int a[50], i, n;
    float sum = 0, avg, s1 = 1, s2 = 0;
    printf("Enter Size: ");
    scanf("%d", &n);
    for(i = 0; i < n; i++){
        printf("Enter %d value\n", i + 1);
        scanf("%d", &a[i]);
        sum = sum + a[i];
        s1 = s1 * a[i];
        s2 = s2 + (1.0 / a[i]);
    }
    avg = sum / n;
    printf("avg=%f\t geometric mean=%f\t harmonic mean=%f",avg, pow(s1, 1.0/n), n / s2);
    getch();
    return 0;
}
