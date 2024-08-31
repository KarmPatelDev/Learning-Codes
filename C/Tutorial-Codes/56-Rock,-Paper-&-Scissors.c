/*

we are going to program a game “Rock, Paper & Scissor.”

For this task, we will use library time.h. The header file time.h contains definitions of functions to get and manipulate date and time information in our program. You also have to generate a random number for this program, so the following is the code to generate a random number.

int generateRandomNumber(int n)
{
srand(time(NULL));
return rand() % n;
}

The function srand() is used to initialize the random number generator by passing the argument seed. We can use srand() function is defined inside stdlib.h header file. The main will look like:
Problem statement:-

As we all are familiar with the concept of the game. In this game, we have two players. In our program, player 1 will be the user, and player 2 will be the computer. Player 1 selects either rock, paper, or scissor. The computer does not know about what player 1 has selected, so the computer randomly selects any item (rock, paper, or scissor).

In this game, each player has 3 turns. The player who gets the point at least two times will win the game. The following are the rules of the game.

rock vs. scissors -> rock wins
paper vs. scissors -> scissors wins
paper vs. rock -> paper wins
Task:-

You have to write a C program that will:

    Allows the user to play this game three times with a computer.
    Log the scores of the computer and the player.
    Display the name of the winner at the end

Note: You have to display the name of the player during the game. Take users name as an input from the user.

*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int generateRandomNumber(int n){
    srand(time(NULL)); // srand takes seed as an input and is define inside stdlib.h
    return rand()%n;
}

int greater(char char1, char char2){
    // c1 > c2 print 1, c1 < c2 print 0, c1 = c2 print -1

/*
    if(char1 == char2){
        return -1;
    }
    if((char1 == 'r') && (char2 == 's')){
        return 1;
    }
    else{
        return 0;
    }
    if((char1 == 'p') && (char2 == 'r')){
        return 1;
    }
    else{
        return 0;
    }
    if((char1 == 's') && (char2 == 'p')){
        return 1;
    }
    else{
        return 0;
    }
*/
    
    if(char1 == char2){
        return -1;
    }
    if((char1 == 'r') && (char2 == 's')){
        return 1;
    }
    else if((char1 == 's') && (char2 == 'r')){
        return 0;
    }
    else if((char1 == 'p') && (char2 == 'r')){
        return 1;
    }
    else if((char1 == 'r') && (char2 == 'p')){
        return 0;
    }
    else if((char1 == 's') && (char2 == 'p')){
        return 1;
    }
    else if((char1 == 'p') && (char2 == 's')){
        return 0;
    }

}

int main(){
    printf("Welcome To The Rock, Paper, Scissors Game\n");
    
    int playerScore = 0, compScore = 0, temp;
    char playerChar, compChar;
    char dict[] = {'r', 'p', 's'};

    for(int i = 0; i < 3; i++){

    // Take Player Input    
    printf("Player's Turn\n");
    printf("Choose 1 For Rock, 2 For Paper, 3 For Scissor\n");
    scanf("%d", &temp);
    getchar();
    playerChar = dict[temp - 1];
    printf("You Chose %c\n", playerChar);

    // Generate Computer Input
    printf("Computer's Turn\n");
    printf("Choose 1 For Rock, 2 For Paper, 3 For Scissor\n");
    temp = generateRandomNumber(3) + 1;
    compChar = dict[temp - 1];
    printf("CPU Chose %c\n", compChar);

    // Cpmpare The Score
    if(greater(compChar, playerChar) == 1){
        compScore += 1;
        printf("CPU Got It!\n");
    }
    else if(greater(compChar, playerChar) == -1){
        compScore += 1;
        playerScore += 1;
        printf("It's a Draw\n");
    }
    else if(greater(compChar, playerChar) == 0){
        playerScore += 1;
        printf("You Got It!\n");
    }
    printf("You:- %d, CPU:- %d\n\n", playerScore, compScore);
    }

    if(playerScore > compScore){
        printf("You Win The Game\n");
    }
    else if(playerScore < compScore){
        printf("CPU Win The Game\n");
    }
    else if(playerScore == compScore){
        printf("The Game is Draw\n");
    }
    return 0;
}