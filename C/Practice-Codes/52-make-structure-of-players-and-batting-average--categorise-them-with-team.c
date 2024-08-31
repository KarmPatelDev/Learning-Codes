/*
Define a structure called cricket that will describe the following information:
Player name
Team name
Batting average
Using cricket, declare an array player with 50 elements and write a C program to read the information about all the 50 players and print team wise list containing the names of players with their batting average.
*/
#include <stdio.h>
#include <conio.h>
#include <string.h>

struct player
{
    char player_name[34];
    char team_name[34];
    float batting_average;
};

struct player p[50];

int main(){

    int i;
    printf("Enter Only RCB, CSK, LSG, GT Teams if You Enter Another Then We DId Not Count\n\n");
    for(i = 0; i < 50; i++){
        printf("FOR PLAYER - %d\n", i + 1);
        printf("Enter The Player Name: ");
        scanf("%s", &p[i].player_name);
        getchar();
        printf("Enter The Team Name: ");
        scanf("%s", &p[i].team_name);
        printf("Enter Batting Average: ");
        scanf("%f", &p[i].batting_average);
        printf("\n");
    }

    printf("\n");
    printf("CSK Team Players List\n\n");
    for(i = 0; i < 50; i++){
        if(strcmp(p[i].team_name, "CSK") == 0){
            printf("Name: %s\n", p[i].player_name);
            printf("Batting Average: %f\n", p[i].batting_average);
            printf("\n");
        }
    }

    printf("\n");
    printf("RCB Team Players List\n\n");
    for(i = 0; i < 50; i++){
        if(strcmp(p[i].team_name, "RCB") == 0){
            printf("Name: %s\n", p[i].player_name);
            printf("Batting Average: %f\n", p[i].batting_average);
            printf("\n");
        }
    }

    
    printf("\n");
    printf("LSG Team Players List\n\n");
    for(i = 0; i < 50; i++){
        if(strcmp(p[i].team_name, "LSG") == 0){
            printf("Name: %s\n", p[i].player_name);
            printf("Batting Average: %f\n", p[i].batting_average);
            printf("\n");
        }
    }

    printf("\n");
    printf("GT Team Players List\n\n");
    for(i = 0; i < 50; i++){
        if(strcmp(p[i].team_name, "GT") == 0){
            printf("Name: %s\n", p[i].player_name);
            printf("Batting Average: %f\n", p[i].batting_average);
            printf("\n");
        }
    }
    
    getch();
    return 0;
}