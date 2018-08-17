package p4;

public class D2018_08_17_Ex1 {
	static int sum1;// member variable

	public static void main(String[] args) {
		int x = 5;
		x = x + 1;
		
		//System.out.println("x = " + x);
		//System.out.println("sum1 = " + sum1);

		int sum = 0; //local variable 
		
		for (int i = 1; i <= 10; i++){
			if(i%2 == 0)
			{
				sum = sum + i;
			}
			
		}	
		System.out.print("sum = " + sum);
	}
}
