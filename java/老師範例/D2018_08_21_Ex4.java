package p1;

//while ... if ... continue example (1 到 10 偶數相加)

public class D2018_08_21_Ex4 {
	public static void main(String[] args) {
		int i = 1;
		int sum = 0;
		while (i <= 10){
			if (i%2 == 1) {
				i++;
				continue;
			}
			sum = sum + i;
			i++;
		}
		System.out.println("sum = " + sum);
	}
}
