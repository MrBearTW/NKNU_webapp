package test20180816;

public class AbstractClassEx1 {
	public static void main(String[] args) {
		Abs obj = new AbsImp2("D");
	}
}
abstract class Abs{
	abstract void m1() ; //abstract method
	
	void m2() {
		System.out.println("Using m2 of Abs");
	}
	
	Abs(){ //Constructor
		System.out.println("A");
	}
	Abs(String msg){ //Constructor
		System.out.println(msg);
	}
}
abstract class AbsImp extends Abs{
	
	AbsImp (){
		super("C");
		System.out.println("B");
	}
	AbsImp (String msg){ 
		System.out.println("B");
	}
}

class AbsImp2 extends AbsImp{

	@Override
	void m1() {
		// TODO Auto-generated method stub
		
	}
	
	AbsImp2(String msg){
  }
	
}