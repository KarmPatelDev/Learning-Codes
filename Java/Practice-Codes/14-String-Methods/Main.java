public class Main{
    public static void main(String[] args){
       
       String a =  "Karm";

       System.out.println(a.length());
       System.out.println(a.toLowerCase());
       System.out.println(a.toUpperCase());

       String b = new String("       Karm      ");

       System.out.println(b.trim());

       System.out.println(a.substring(0));
       System.out.println(a.substring(2));
       System.out.println(a.substring(2, 3));

       System.out.println(a.replace('r', 'm'));
       System.out.println(a.replace("rm", "mar"));

       System.out.println(a.startsWith("pat"));
       System.out.println(a.endsWith("rm"));
       
       System.out.println(a.charAt(2));
       
       //first index occur
       System.out.println(a.indexOf('K'));
       System.out.println(a.indexOf("rm"));
       //it start to find from index 4
       System.out.println(a.indexOf("rm", 4));
       System.out.println(a.lastIndexOf("rm"));
       System.out.println(a.lastIndexOf("rm", 4));

       System.out.println(a.equals("Karm"));
       System.out.println(a.equalsIgnoreCase("KaRM"));

       System.out.println("\'\n\tKarm Patel\" \\");

    }
}