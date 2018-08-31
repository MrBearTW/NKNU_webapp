package p1;

public class D2018_08_23_Ex6 
{
	public static void main(String[] args) 
	{
		//Human person1 = new Human();
		//System.out.println(person1); // =>System.out.println(person1.toString());
		//person1.m1();
		//Human person2 = new Human("john");
		//Human person3 = new Human("mary", "XXXX");
		//System.out.println(person1.name);
		//System.out.println(person2.name);
		//Human person4 = new Human("tom", "YYYY",25);
		Man person5 = new Man(20);
		
	}
}
class Human extends Object
{
	String name;
	String addr;
	int age;

	public String toString() {
		return "This is a Human object";
	}

	void m1() {
		System.out.println("Using m1()");
	}
	
	Human(){
		
	}
	Human(int a){
		System.out.println(a);
	}
	
	
	Human(String name) {
		super();
		this.name = name;
		System.out.println("AAAA");
	}

	Human(String name, String addr){
		this(name);
		this.addr = addr;
		System.out.println("BBBB");
	}
	
	Human(String name, String addr, int age){
		this(name, addr);
		this.age = age;
		System.out.println("CCCC");
	}
}

class Man extends Human{
	Man(int age){
		super(age);
	}
	
} 
