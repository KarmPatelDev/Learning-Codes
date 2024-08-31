class Employee{

    private int id;
    private String name;

    public void setId(int data){
        this.id = data;
    }

    public int getId(){
        return this.id;
    }

    public void setName(String name){
        this.name = name;
    }

    public String getName(){
        return this.name;
    }
}


public class Main{
    public static void main(String[] args){
        System.out.println("Hello World");

        Employee karm = new Employee();
        karm.setId(25);
        karm.setName("Karm");

        System.out.println(karm.getId());
        System.out.println(karm.getName());

    }
}