package p5;

public class D2018_08_30_Ex12 {
	public static void main(String[] args) {
		B obj = (B) new A();
		System.out.println(obj.a);
		obj.m1();
		

	}

}

class A{//A: super class (¤÷¥N)
	int a = 1;
	void m1() {
		System.out.println("Using m1 of A");
	}
}

class B extends A{ //B: sub class (¤l¥N)
	int a = 2;
	void m1() {
		System.out.println("Using m1 of B");
	}
}

