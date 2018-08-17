package p4;

public class D2018_08_17_Ex5 {

	public static void main(String[] args) {

		int [] a  = new int[3];
		a[0] = 5;
		a[1] = 7;
		a[2] = 9;
		int sum = 0;
		
		for (int i= 0; i<3; i++) {
			sum = sum + a[i];
		}
		System.out.println("sum = " + sum);
	}

}
