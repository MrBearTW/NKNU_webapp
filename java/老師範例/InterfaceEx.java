package p8;

public class InterfaceEx {
	public static void main(String[] args) {
		System.out.println(If1.a);
		System.out.println(If2.a);
		System.out.println(If1.a);
		System.out.println(If2.a);
		
		If3 obj = new C();
		obj.m1();
	}
}


interface If1{
	int a = 5;
	void m1();
}


interface If2 {
	int a = 10;
	void m1();
}

interface If3 extends If1, If2{
	
}


class A implements If1{
	public void m1() {
	}
}

class B implements If2{
	public void m1() {
	}
}

class C implements If3{
	public void m1() {
		System.out.println("Using m1");
	}
}
