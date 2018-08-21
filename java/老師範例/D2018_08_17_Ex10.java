package p4;
public class D2018_08_17_Ex10 {
	public static void main(String[] args) {
		int[] a = { -5, -4, -7, -11, -12, -24, -86 };
		
		int max = a[0];
		
		for (int i = 1; i <a.length; i++) {
			if (a[i]> max) {
				max = a[i];
			}
		}
		System.out.println("max = " + max);
	}
}
