
class Employee{
    int id;
    String name;
    int salary = 100;

    public void printDetails(){
        System.out.println("ID is " + id);
        System.out.println("Name is " + name);
    }

    public int getSalary(){
        return salary;
    }
}

public class Main{
    public static void main(String []args){

        System.out.println("Hello World");

        Employee karm = new Employee();
        karm.id = 25;
        karm.name = "Karm";

        System.out.println(karm.id);
        System.out.println(karm.name);
        karm.printDetails();
        System.out.println("salary: " + karm.getSalary());
        

        Employee karm2 = new Employee();
        karm2.id = 50;
        karm2.name = "Karm2";
        karm2.printDetails();
        System.out.println("salary: " + karm2.getSalary());

    }
}