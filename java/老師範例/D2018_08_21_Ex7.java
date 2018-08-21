package p1;

public class D2018_08_21_Ex7 {
	public static void main(String[] args) {
		int[][] a = { { 7, 8, 9, 6, 10, 20 }, { 2 }, { 33, 4, 5, 12, 25 },
				{ 1, 3, 15, 7 } };

		A: for (int i = 0; i < a.length; i++) {
			B: for (int j = 0; j < a[i].length; j++) {
				for (int k = 0; k < 5; k++) {
					if (a[i][j] % 5 == 0) {
						System.out.print(a[i][j] + " ");
						continue;
					}
					System.out.println("BP0");
				}
				System.out.println("BP1");
			}
			System.out.println("BP2");
		}
		System.out.println("BP3");
	}

}
