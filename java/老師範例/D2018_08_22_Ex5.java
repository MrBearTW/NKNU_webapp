// char ½m²ß 2
package p1;
public class D2018_08_22_Ex4 {
	public static void main(String[] args) {
		String str = "abc"; //str = "AaBz123&^$#$"
		int len = str.length();
		for (int i=0; i<len; i++) {
			System.out.println((char)(str.charAt(i) + 'A'-'a'));
		}
	}
}
