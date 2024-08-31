// Write a program to sort given array in ascending order (Use Insertion sort, Bubble sort, Selection sort, Mergesort, Quicksort, Heapsort)

#include <stdio.h>
#include <conio.h>

int main(){
int a[50], i, j, temp, n;
printf("Enter Size: ");
scanf("%d", &n);
for(i = 0; i < n; i++){
    scanf("%d", &a[i]);
}
for(i = 0; i < n; i++){
    for(j = i + 1; j < n; j++){
        if(a[i] > a[j]){
            temp = a[i];
            a[i] = a[j];
            a[j] = temp;
        }
    }
}
printf("sorted array: \n");
for(i = 0; i < n; i++){
    printf("%d\n", a[i]);
}

getch();
return 0;
}