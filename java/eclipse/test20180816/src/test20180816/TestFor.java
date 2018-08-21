package test20180816;

public class TestFor {

	public static void main(String[] args) {
		int [] data = {2,4,9,12,3,5,15,20};
		int i =0;
		int sum = 0;
		while(i < data.length) {
			if(data[i]%2==0) {
				sum = sum+data[i];
				//System.out.println(data[i]);
				//break;
			}
				i++;
		}
		System.out.println(sum);
	}

}
