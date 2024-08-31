// A file named data contains a series of integer numbers. Write a c program to read all numbers from file and then write all odd numbers into file named “odd” and write all even numbers into file named “even”. Display all the contents of these files on screen

#include <stdio.h>
#include <conio.h>

int main(){
    FILE *ftp, *fep, *fop;
    int n, x;
    printf("How Many Numbers You Want to enter: ");
    scanf("%d", &n);
    
    ftp = fopen("string.txt", "w");
    for(int i = 0; i < n; i++){
    printf("%d Number = ", i + 1);
    scanf("%d", &x);
    fprintf(ftp, "%d", x);
    }
    fclose(ftp);
    
    ftp = fopen("string.txt", "r");
    fep = fopen("even.txt", "w");
    fop = fopen("odd.txt", "w");
  

    for(int i = 0; i < n; i++){
        fscanf(ftp, "%c", &x);
        printf("%c\n", x);
        if(x % 2 == 0){
            fputc(x, fep); 
        }
        else{
            fputc(x, fop);
        }
    }

    fclose(fop);
    fclose(fep);
    fclose(ftp);
    getch();
    return 0;
}