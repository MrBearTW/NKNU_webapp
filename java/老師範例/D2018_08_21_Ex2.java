package p1;

//while ... (do) Example

public class D2018_08_21_Ex2 {
	public static void main(String[] args) {
		int sum = 0;
		int j = 1;
		while (j <= 10) {
			if (j % 2 == 0) { 
				sum += j; // sum = sum + i;
			}
			j++;
		}
		System.out.println("sum =" + sum);

	}

}
