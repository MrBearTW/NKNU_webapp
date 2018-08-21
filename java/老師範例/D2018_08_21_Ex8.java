package p1;
public class D2018_08_21_Ex8 {

	public static void main(String[] args) {
		int [] a ={1, 3, 5, 10, 15, 20};
		int b = 5;
		int c = 12;
		int result = sumup(b, c); 
		System.out.println(result);
		result = sumup(a);
		System.out.println(result);
		
	}
	
	static int sumup(int [] a)
	{
		int sum = 0;
		for (int i=0; i<a.length; i++){
			sum = sum + a[i];	
		}
		return sum;
	}
	
	static int sumup(int a){
		return a;
	}
	
	static int sumup(int x, int y){
		return x+y;
	}
	
	static int sumup(int a, int b, int c){
		return a+b+c;
	}
	
	

}
