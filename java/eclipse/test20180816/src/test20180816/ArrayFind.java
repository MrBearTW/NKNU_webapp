package test20180816;

public class ArrayFind {

	public static void main(String[] args) {
		int[] a = { 9, 4, 8, 7, 5, 6, 1 };



		for (int i = a.length; i >= 0 ; i--) {
			if (a[i-1] % 4 == 0) {
				System.out.println(a[i-1]);
				break;
			}
		}

	}

}
