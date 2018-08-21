package p1;

public class D2018_08_21_Ex9 {

	public static void main(String[] args) {
		int[][] a = { { 2, 1, 3 }, 
				      { 4 }, 
				      { 6, 4, 8, 7 } };
		

		print(a);
		
		int [] maxs = new int[a.length];
		
		for (int i=0; i<a.length  ;i++) {
			maxs[i] = findMax(a[i]);
			System.out.println("Row " + (i+1) + " = " +  maxs[i]);
		}
		
		System.out.println("All rows = " + findMin(maxs));
		
	    
	}
	
	public static int findMax(int[] in) {
		int max = in[0];
		for (int i=1; i<in.length;i++) {
			if (in[i] > max) {
				max = in[i];
			}
		}
		return max;
	}
	
	public static int findMin(int [] in) {
		int min = in[0];
		for (int i=1; i<in.length;i++) {
			if (in[i] < min) {
				min = in[i];
			}
		}
		return min;
		
	}
   
	public static void print(int[][] a) {
		for (int i=0; i<a.length; i++) {
			for (int j=0; j<a[i].length; j++) {
				System.out.print(a[i][j] + " ");
			}
			System.out.println();
		}
		
	}
}


