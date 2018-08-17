package p4;

public class D2018_08_17_Ex8 {
	public static void main(String[] args) {
		int[] a = { 3, 5, 7, 10, 12, 25, 86 };
		
		for (int i = 0; i < a.length; i++) {
			if (a[i] % 5 == 0) {
				System.out.println(a[i]);
				break;
			}
		}
	}
}
