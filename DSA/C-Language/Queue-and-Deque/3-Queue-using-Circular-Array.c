#include <stdio.h>

#define N 5
int queue[N], front = -1, rear = -1;

void enqueue();
void dequeue();
void peep();
void display();

int main(){

int choice = 1;

while(choice){
    printf("\n\n");
    printf("Press 1 For Push\n");
    printf("Press 2 For Pop\n");
    printf("Press 3 For Peep\n");
    printf("Press 4 For Display\n");
    printf("Press 0 For Exit\n");
    printf("Enter The Choice: ");
    scanf("%d", &choice);
    
    switch(choice){
        case 1:
        enqueue();
        break;
        case 2:
        dequeue();
        break;
        case 3:
        peep();
        break;
        case 4:
        display();
        break;
    }
}

      return 0;
}

void enqueue(){

    int num;
    printf("\nEnter The Number: ");
    scanf("%d", &num);

    if(front == -1 && rear == -1){
        front = rear = 0;
        queue[rear] = num;
        printf("%d number is Added", queue[rear]);
    }
    else if((rear + 1)%N == front){
        printf("Queue is in OverFlow Condition");
    }
    else{
        rear = (rear + 1)%N;
        queue[rear] = num;
        printf("%d number is Added", queue[rear]);
    }
}

void dequeue(){
    
    if(front == -1 && rear == -1){
        printf("\nQueue is in UnderFlow Condition");
    }
    else if(front == rear){
        printf("\n%d Number is Removed", queue[front]);
        front = rear = -1;
    }
    else{
        printf("\n%d Number is Removed", queue[front]);
        front = (front + 1)%N;
    }
}

void peep(){
    if(front == -1 && rear == -1){
        printf("\nQueue is Empty");
    }
    else{
    printf("\nThe Last Number Added is %d", queue[rear]);
    }
}

void display(){
    if(front == -1 && rear == -1){
        printf("\nQueue is Empty");
    }
    else{
    printf("\n");
    int i = front;
    while(i != rear){
        printf("%d ", queue[i]);
        i = (i + 1)%N;
    }
    printf("%d", queue[rear]);
    }
}