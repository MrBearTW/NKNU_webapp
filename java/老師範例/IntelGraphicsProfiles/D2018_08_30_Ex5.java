package p1;

import java.util.Scanner;

public class D2018_08_30_Ex5 {
	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
			System.out.println("key in numbers: ");
			String line = sc.nextLine();
			String[] arr = line.split(" ");
			
			for (int i=0; i<arr.length; i++) {
				System.out.println(arr[i]);
			}
		
		sc.close();


	}

}
