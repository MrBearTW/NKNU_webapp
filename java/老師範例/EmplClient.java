package p7;

public class EmplClient {
	public static void main(String[] args) {
		Empl [] empls = new Empl[3];
		empls[0] = new Staff("01", "john", "xxx");
		empls[1] = new Sales("02", "mary", "yyy");
		empls[2] = new HourWorker("03", "tom", "yyy");
		
		for (int i=0; i<empls.length; i++) {
			System.out.println(empls[i].id + " " + 
		                       empls[i].name + " " +
					           empls[i].getPay() );
		}
	}
}
/* 
// Without using abstract
class Empl{
	String id;
	String name;
	String addr;
	public Empl() {
		
	}
	public Empl(String id, String name, String addr) {
		super();
		this.id = id;
		this.name = name;
		this.addr = addr;	
	}
	
	int getPay() {
		return 0;
		
	}
}
*/

//Using abstract
abstract class Empl{
	String id;
	String name;
	String addr;
	public Empl() {
		
	}
	public Empl(String id, String name, String addr) {
		super();
		this.id = id;
		this.name = name;
		this.addr = addr;	
	}
	
	abstract int getPay() ;
}


class Staff extends Empl{
	Staff(String id, String name, String addr){
		super(id, name, addr);
	}
	int getPay() {
		return 30000;
	}
	
	
}

class Sales extends Empl{
	Sales(String id, String name, String addr){
		super(id, name, addr);
	}
	int getPay() {
		return 50000;
	}
	
}


class HourWorker extends Empl{
	HourWorker(String id, String name, String addr){
		super(id, name, addr);
	}
	int getPay() {
		return 20000;
	}
}