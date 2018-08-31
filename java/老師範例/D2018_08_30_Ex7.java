package p2;

public class D2018_08_30_Ex7 {
	public static void main(String[] args) {
        A obj = new A(); // D2018_08_30_Ex7 跟 A 是使用關係
        System.out.println(obj.a);
        
        A obj2 = new B();
        System.out.println(obj2.b);       
        
	}

}


class A{
	public A() 
	{
	}
	
	public int a; // default modifier
	public int b;
}

class B extends A{//B 跟 A 是繼承關係
	
}
