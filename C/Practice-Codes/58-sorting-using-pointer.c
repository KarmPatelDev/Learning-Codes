// Write a program for sorting using pointer
// Note: Apart from stdio.h, conio.h, you also require to include alloc.h header file in your program

#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main(){
    int n, *p, i, j, temp;

    printf("\nHow Many Number Which You Want To Enter\n");
    scanf("%d", &n);

    p = (int *) malloc(n*sizeof(int));

    if(p == NULL){
        printf("\nMemory Allocation Unsuccessful\n");
        goto label;
    }
    
    for(i = 0; i < n; i++){
        printf("\nEnter The %d Number: ", i + 1);
        scanf("%d", p + i);
    }

    for(i = 0; i < n; i++){
        for(j = 0; j < n; j++){
            if(*(p + i) < *(p + j)){
                temp = *(p + i);
                *(p + i)  = *(p + j);
                *(p + j) = temp;
            }
        }
    }

    printf("\nThe Sorted Numbers Are: ");
    for(j = 0; j < n; j++){
        printf("%d ", *(p + j));
    }

    label:
    getch();
    return 0;
}