package test20180816;

public class Plus1To10 {
	static int sum = 99;
	public static void main(String[] args) {
		int x = 5;
		x = x + 9527;
		System.out.println(x);
		System.out.println("sum0 = " +sum);

		int sum = 0;
		int i = 1;
		for (; i <= 10; i++) {
			sum = sum + i;
			System.out.println("i = " + i + "  sum = " + sum);
		}
		System.out.println("sum11 = " +sum);
		System.out.println("final = " + sum);
	}
}
