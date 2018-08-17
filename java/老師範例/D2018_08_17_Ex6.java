package p4;

public class D2018_08_17_Ex6 {

	public static void main(String[] args) {

		int [] a  = {3, 5, 7, 10, 12, 25, 86};
		int sum = 0;
		
		for (int i= 0; i<a.length; i++) {
			sum = sum + a[i];
		}
		System.out.println("sum = " + sum);
	}

}
