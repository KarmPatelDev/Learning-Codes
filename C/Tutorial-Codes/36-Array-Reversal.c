/*

The task you have to perform is “Array Reversal in C”.
Instruction:

In this task you have to write a C program that will reverse an array of integers. For that purpose, create the function that will take array as an argument and reverse an array.

Your program should print the array before and after reversal.
For Example:

Before Reversal: 1, 2, 3, 4, 5, 6, 67

After Reversal: 67, 6, 5, 4, 3, 2, 1


*/


#include <stdio.h>

void arrayRev(int* ptr){

int temp;
for(int i = 0; i < 7/2; i++){

    // Three lines very important for swapping
    temp = ptr[i];
    ptr[i] = ptr[6 - i];
    ptr[6 - i] = temp;
}

}

int main(){

    int arr[] = {2,12,22,32,42,52,62};
    
    printf("Before reversing the array\n");
    for(int i = 0; i < 7; i++){
        printf("The value at %d position is %d\n", i, arr[i]);
    }

    printf("\n\n");
    arrayRev(arr);
    printf("\n\n");

    printf("After reversing the array\n");
    for(int i = 0; i < 7; i++){
        printf("The value at %d position is %d\n", i, arr[i]);
    }

    return 0;
}