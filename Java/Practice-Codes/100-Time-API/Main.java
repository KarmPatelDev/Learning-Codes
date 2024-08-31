import java.time.LocalDate;
import java.time.LocalTime;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class Main{
    public static void main(String args[]){
        
        // LocalDate d = LocalDate.now();
        // System.out.println(d);

        // LocalTime t = LocalTime.now();
        // System.out.println(t);

        // LocalDateTime dt = LocalDateTime.now();
        // System.out.println(dt);

        LocalDateTime dat = LocalDateTime.now(); // for date
        System.out.println(dat);

        DateTimeFormatter df = DateTimeFormatter.ofPattern("dd-MM-yyyy -- E -- a"); // for format make pattern
        DateTimeFormatter df2 = DateTimeFormatter.ISO_LOCAL_DATE;
        String myDate = dat.format(df);
        System.out.println(myDate);

        String myDate1 = dat.format(df2);
        System.out.println(myDate1);
    }
}