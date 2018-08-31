package p1;

public class D2018_08_23_Ex6 {

	public static void main(String[] args) {
		Human person1 = new Human();
		System.out.println(person1); //=>System.out.println(person1.toString()); 
		person1.m1();
		
		/*
		Human person2 = new Human("john");
		System.out.println(person1.name);
		System.out.println(person2.name);
		*/
	}
}
class Human 
{
	String name;
	String addr;
	int  age;
    public String toString(){
		return "This is a Human object";
	}
	
	void m1(){
		System.out.println("Using m1()");
	}
	
	
}
