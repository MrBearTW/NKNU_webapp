package test20180816;

public class TestWhile {

	public static void main(String[] args) {
		
		//while...do
		/*
		while(true) {
			System.out.println("YO");
		}
		*/
		
		//do...while
		/*
		int j =1 ;
		do {System.out.println("NoNoNo");
			
		}
		while(j>0);
		*/
		
		int [] data = {1,2,3,4,5,6,7,8,9,10};		
		int sum = 0;
			
		for(int i =0;i < data.length;i++) {
			if(data[i]%2==0) {
				sum = sum+data[i];}
		}
		System.out.println(sum);
	}

}
