package p1;
public class AbstractClassEx2 {
	public static void main(String[] args) {
		m(new AbsImp2());
	
	}
	
	static void m(Abs obj) {
		obj.m2();
		obj.m1();
		
	}
}

