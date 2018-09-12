package p7;

public class InterfaceClient {

	public static void main(String[] args) {
        If1[] objs = new If1[2];
     
        objs[0] = new A(); 
        objs[1] = new B();
        
        for (int i=0; i<objs.length; i++) {
        	objs[i].m1();
        }
        
        m(new B());
 	}
	
	static public void m(If1 o) {
		o.m1();
		
	}
}

interface If1{
	void m1() ;
}

class A implements If1{
	public void m1() {
		System.out.println("Using m1 of A");
	}
}

class B implements If1{
	public void m1() {
		System.out.println("Using m1 of B");	
	}
	
}
