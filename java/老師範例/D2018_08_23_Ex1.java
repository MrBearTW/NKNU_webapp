// �૬ 
package p1;

public class D2018_08_23_Ex1 {

	public static void main(String[] args) {
		
		int a = 5; //int = 4 bytes
		long b = a; // long = 8 bytes 
		System.out.println(b);
		
		long c  = 5;
		int d = (int) c;
		System.out.println(c);
		
		double e = a;
		System.out.println(e);
		
		double f = 20.5;
		a = (int) (f + 0.5); //4��5�J 
		System.out.println(a);

		System.out.println((int)Math.floor(101.5));//�L����˥h
		System.out.println((int)Math.ceil(101.5));//�L����i��
		System.out.println((int)Math.round(101.49));//4��5�J
	}

}
