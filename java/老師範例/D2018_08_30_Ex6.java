package p1;

import java.util.Scanner;

public class D2018_08_30_Ex6 {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.print("input numbers: ");
		String line = sc.nextLine();
		sc.close();
		
		String [] strArr = line.split(" ");
		
		int sum = 0;
		for (int i=0; i<strArr.length; i++) {
			sum += Integer.parseInt(strArr[i]);
		}
		
		System.out.println("sum of the numbers = " + sum);
	}
}
