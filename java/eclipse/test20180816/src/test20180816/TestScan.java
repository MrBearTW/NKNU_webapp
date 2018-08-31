package test20180816;

import java.util.Scanner;

public class TestScan {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		System.out.println("key in numbers: ");
		String line = sc.nextLine();
		String[] arr = line.split(" ");

		for (int i = 0; i < arr.length; i++) {
			System.out.println(arr[i]);
		}

		sc.close();

	}
}
