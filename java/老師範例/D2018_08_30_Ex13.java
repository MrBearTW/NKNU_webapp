package p5;
public class D2018_08_30_Ex13 {
	public static void main(String[] args) {
		D obj = new D();
		obj.m1();
	}
}


class C {// C: super class
	void m1() {
		System.out.println("Using m1 of C");
	}
}


class D extends C{ //D: sub class
	
	protected void m1() {
		System.out.println("Using m1 of D");
	}
	
}