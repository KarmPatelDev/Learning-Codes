/*

Problem Statement:-

This program asks the user to enter the size of rows and columns of two matrices (a and b). Both of the matrices are 2D array. Your task is to populate these 2D arrays from the user, and then your program will display the results. Following is the condition to multiply the two matrices.

To multiply two matrices, the number of columns of the first matrix should be equal to the number of rows of the second matrix.

When this condition satisfies, your program should return the multiplied matrix result. However, if this condition does not satisfy, then your program should display a message to end-user that it cannot perform the multiplication of matrices.

*/

#include <stdio.h>
#include <stdlib.h>
int main()
{
    printf("Matrix Multiplication\n\n");
    int m, n, o, sum = 0;
    printf("Enter The Number Of First Matrix Rows\n");
    scanf("%d", &m);
    printf("Enter The Number Of First Matrix Columns\n");
    scanf("%d", &o);
    printf("Enter The Number Of Second Matrix Rows\n");
    scanf("%d", &o);
    printf("Enter The Number Of Second Matrix Columns\n");
    scanf("%d", &n);

    int a[m][o], b[o][n], result[m][n];

    printf("\n\n");


// You can use if else statement for check that multiplication of 2 matrix is possible or not.


    printf("Enter the first matrix\n");
    for (int i = 0; i < m; i++)
    {
        for (int j = 0; j < o; j++)
        {
            // printf("Enter the %d %d element of first matrix\n", i, j);
            scanf("%d", &a[i][j]);
            // printf("\t");
        }
        // printf("\n");
    }

/*
    for(int i = 1;i <= m; i++){
           for(int j = 1; j <= o; j++){
           printf("Enter The Value Of %d row and %d column in First Matrix\n", i, j);
           scanf("%d", &a[i][j]);
           }
       }
*/       

    printf("\n\n");
    
    printf("Enter the second matrix\n");
    
    for (int i = 0; i < o; i++)
    {
        for (int j = 0; j < n; j++)
        {
            // printf("Enter the %d %d element of first matrix\n", i, j);
            scanf("%d", &b[i][j]);
            // printf("\t");
        }
        // printf("\n");
    }

/*
       for(int i = 1;i <= o; i++){
           for(int j = 1; j <= n; j++){
           printf("Enter The Value Of %d row and %d column in Second Matrix\n", i, j);
           scanf("%d", &b[i][j]);
           }
       }
*/


    printf("\n\n");
    printf("The Multiplication Values Of %d*%d Matrix", m, n);
    printf("\n\n");


    for (int i = 0; i < m; i++)
    {
        for (int j = 0; j < n; j++)
        {
            // Calculate the result
            for (int k = 0; k < o; k++)
            {
                sum += a[i][k] * b[k][j];
            }
            result[i][j] = sum;
            sum = 0;
        }
    }

    //Print the resultant matrix         
    for (int i = 0; i < m; i++)
    {
        for (int j = 0; j < n; j++)
        {
            // Print the result
            printf("%d \t", result[i][j]);
        }
        printf("\n");
    }


/*
    for (int i = 1; i <= m; i++)
    {
        for (int j = 1; j <= n; j++)
        {
            // Calculate the result
            for (int k = 1; k <= o; k++)
            {
                sum += a[i][k] * b[k][j];
            }
            result[i][j] = sum;
            sum = 0;
        }
    }

    //Print the resultant matrix         
    for (int i = 1; i <= m; i++)
    {
        for (int j = 1; j <= n; j++)
        {
            // Print the result
            printf("%d \t", result[i][j]);
        }
        printf("\n");
    }
*/
    return 0;
}
