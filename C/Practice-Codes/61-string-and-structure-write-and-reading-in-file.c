#include <stdio.h>
#include <conio.h>
#include <string.h>
#include <stdlib.h>

const char* PERSON_FORMAT_IN = "(%[^,], %[^,], %[^,], %[^,], %[^,])";
const char* PERSON_FORMAT_OUT = "(%s, %s, %s, %s, %s,)\n";

const char* VEHICLE_FORMAT_IN = "(%d, %d, %d, %d, %d, %d)\n";
const char* VEHICLE_FORMAT_OUT = "(%d, %d, %d, %d, %d, %d)\n";

struct vehicle_info{
      char owner_name[40], vehicle_name[40], vehicle_number[40], date[20], time[20];
} person,person_read;

struct parking_info{
      int twv, thwv, fwv, swv, store_count, store_amount;
}vehicle, vehicle_read;

int main(){

    printf("Enter Name: ");
    gets(person.owner_name);
    printf("Enter Vehicle Name: ");
    gets(person.vehicle_name);
    printf("Enter Vehicle Number: ");
    gets(person.vehicle_number);
    printf("Enter Date: ");
    gets(person.date);
    printf("Enter Time: ");
    gets(person.time);
    
    FILE *file;
    file = fopen("vehicle_info.bin","wb+");
    fprintf(file, PERSON_FORMAT_OUT, person.owner_name, person.vehicle_name, person.vehicle_number, person.date, person.time);
    fseek(file, 0, SEEK_SET);
    fscanf(file, PERSON_FORMAT_IN, person_read.owner_name, person_read.vehicle_name, person_read.vehicle_number, person_read.date, person_read.time);
    printf("\nOwner Name: ");puts(person_read.owner_name);
    printf("Vehicle Name: ");puts(person_read.vehicle_name);
    printf("Vehicle Number: ");puts(person_read.vehicle_number);
    printf("Date: ");puts(person_read.date);
    printf("Time: ");puts(person_read.time);printf("\n");
    fclose(file);

    vehicle.twv = 50;
    vehicle.thwv = 50;
    vehicle.fwv = 50;
    vehicle.swv = 50;
    vehicle.store_count = 50;
    vehicle.store_amount = 50;

    FILE *file2;
    file2 = fopen("parking_info.bin","wb+");
    fprintf(file2, VEHICLE_FORMAT_OUT, vehicle.twv, vehicle.thwv, vehicle.fwv, vehicle.swv, vehicle.store_count, vehicle.store_amount);
    fseek(file2, 0, SEEK_SET);
    fscanf(file2, VEHICLE_FORMAT_IN, &vehicle_read.twv, &vehicle_read.thwv, &vehicle_read.fwv, &vehicle_read.swv, &vehicle_read.store_count, &vehicle_read.store_amount);
    printf("%d %d %d %d %d %d", vehicle_read.twv, vehicle_read.thwv, vehicle_read.fwv, vehicle_read.swv, vehicle_read.store_count, vehicle_read.store_amount); 
    fclose(file2);

    return 0;
}