// ¦r­±±`¼Æ

package p1;

public class D2018_08_23_Ex3 {

	public static void main(String[] args) {
		
		double a = 3.14; //OK
		float b  = 3.14;//Compiling Error (Why?)
		float c  = 3.14F;//OK
		long d = 123;//OK (Why?)
		int e = 123; //OK
		int f = 123L;//Compiling Error (Why?)
		short g = 200;//OK
		long h = 123;//OK
		short i = 32767;//OK 
		short j = 32768;//Compiling Error (Why?)
		short k = 200;//OK
		byte n = 200;//Compiling Error (Why?)

	}

}
