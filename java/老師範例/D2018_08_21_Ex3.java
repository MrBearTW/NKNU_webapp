package p1;

//while ... (do) Example

public class D2018_08_21_Ex3 {
	public static void main(String[] args) {
	
		int [] data = {2, 4, 9, 12, 3, 5, 15, 20};
		int i = 0;
		while (i < data.length) {
			if(data[i] % 3 == 0) {
				System.out.println(data[i]);
				i++;
				continue;
				
			} 
			i++;
			
		}
		

	}

}
