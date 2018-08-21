package p4;

public class D2018_08_17_Ex9 {
	public static void main(String[] args) {
		int[] a = { 5, 4, 7, 11, 12, 24, 86 };
		for (int i = a.length-1; i >= 0; i--) {
			if (a[i] % 5 == 0) {
				System.out.println(a[i]);
				break;
			}
		}
	}
}
