//Primitive Data Type <=> String
package p1;

public class D2018_08_22_Ex10 {
	public static void main(String[] args) {
		//Primitive Data Type => String
		System.out.println(1 + 2 + 3 + 4);
		System.out.println(1 + 2 + 3 + 4 + "");
		System.out.println(1 + 2 + 3  + "" + 4 );
		System.out.println(1 + 2 + "" + 3 + 4 );
		System.out.println(1 + "" + 2 + 3 + 4 );
		System.out.println( "" + 1 + 2 + 3 + 4 );
		
		System.out.println("============ ");
		
		// String => Primitive Data Type
		String str1 = "123";
		String str2 = "456";
		System.out.println(str1+str2);
		System.out.println(Integer.parseInt(str1)+Integer.parseInt(str2));
		System.out.println(Integer.parseInt(str1)+str2);
		
	}
}
