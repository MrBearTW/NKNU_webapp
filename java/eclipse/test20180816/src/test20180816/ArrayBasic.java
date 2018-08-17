package test20180816;

public class ArrayBasic {

	public static void main(String[] args) {
//		int a[] = new int[3];
//		a[0] = 9;
//		a[1] = 4;
//		a[2] = 8;
//		
		int[] a = { 9, 4, 8, 7, 5, 6, 1 };

		int b = 0;

		for (int i = 0; i < a.length; i++) {
			if (a[i] % 2 == 0) {
				b = b + a[i];
			}
		}

		System.out.println(b);
		System.out.println(a.length);
	}

}
