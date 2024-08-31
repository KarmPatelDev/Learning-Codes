import java.util.Calendar;
import java.util.TimeZone;
import java.util.GregorianCalendar;

public class Main{
    public static void main(String args[]){

        Calendar c = Calendar.getInstance();
        System.out.println(c);
        System.out.println(c.getCalendarType());
        System.out.println(c.getTimeZone());

        Calendar c2 = Calendar.getInstance(TimeZone.getTimeZone("Asia/Singapopre"));
        System.out.println(c2.getCalendarType());
        System.out.println(c2.getTimeZone());
        System.out.println(c2.getTimeZone().getID());

        System.out.println(c2.getTime());
        System.out.println(c2.get(Calendar.DATE));
        System.out.println(c2.get(Calendar.SECOND));
        System.out.println(c2.get(Calendar.HOUR));
        System.out.println(c2.get(Calendar.HOUR_OF_DAY) + " : " + c2.get(Calendar.MINUTE));

        GregorianCalendar cal = new GregorianCalendar();
        System.out.println(cal.isLeapYear(5600));

        System.out.println(TimeZone.getAvailableIDs()[15]);

    }
}