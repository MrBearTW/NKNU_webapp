package p8;

public class InstanceOfEx {

	public static void main(String[] args) {
		m(new C1());
		
	}
	
	static void m(A1 obj) {
		if (obj instanceof  B1) {
			B1 objB = (B1) obj; 
			objB.m2();
		}
		
	}
}

class A1 {
	void m1() {
		System.out.println("Using m1 of A");
		
	}
}

class B1 extends A1{
	void m2() {
		System.out.println("Using m2 of B");
	}
}

class C1 extends A1{
	void m3() {
		System.out.println("Using m3 of C");

		
	}
}