package test20180816;

public class Array2D {

	public static void main(String[] args) {
		int[][] a = new int[9][];
		a[0] = new int[4];
		a[1] = new int[8];
		a[2] = new int[7];
		a[0][1] = 9;
		a[1][2] = 5;
		a[2][3] = 6;
		System.out.println(a);

	}

}
