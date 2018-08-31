//static 的用法

package p1;

public class D2018_08_30_Ex1 {

	public static void main(String[] args) 
	{
		//Human.height = 170; //使用 class
		Human john = new Human(); 
		john.height = 170; //使用 object
		Human mary = new Human();
		mary.height = 160;
        
		Human.weight = 60;//static variable 
		System.out.println("befor " + john.weight);
		System.out.println("befor " + mary.weight);
		
		john.weight = 70;
		mary.weight = 50;
		Human.weight = 40;
		
		
		System.out.println("after (john) " + john.weight);
		System.out.println("after(mary) " + mary.weight);
		System.out.println("after(Human) " + Human.weight);
		
		
		
	
	

	}

}

class Human {
	int height; //object-level variable
	static int weight; //class-level variable
	
	
}
