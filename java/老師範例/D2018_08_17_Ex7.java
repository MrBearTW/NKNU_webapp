package p4;

public class D2018_08_17_Ex7 {
	public static void main(String[] args) {
		int[] a = { 3, 5, 7, 10, 12, 25, 86 };
		int sum = 0;

		for (int i = 0; i < a.length; i++) {
			if (a[i] % 2 == 1) {
				sum = sum + a[i];
			}
		}
		System.out.println("sum = " + sum);
	}
}
