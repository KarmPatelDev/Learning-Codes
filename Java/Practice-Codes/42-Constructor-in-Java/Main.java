class Employee{
    private int id;
    private String name;

    public Employee(){
        id = 10;
        name = "Karm";
    }

    public Employee(int id){
        this.id = 10;
        name = "Karm";
    }

    public Employee(String name){
        id = 5;
        this.name = "Karm";
    }

    public Employee(int id, String name){
        this.id = id;
        this.name = name;
    }

    // public void setId(int id){this.id = id;}
    public int getId(){return this.id;}
    // public void setName(String name){this.name = name;}
    public String getName(){return this.name;}
}


public class Main{
    public static void main(String[] args){
       
    //    Employee e1 = new Employee();
    //    Employee e1 = new Employee(1);
    //    Employee e1 = new Employee("Karm");
       Employee e1 = new Employee("karm");

       System.out.println(e1.getId());

       System.out.println(e1.getName());

    }
}