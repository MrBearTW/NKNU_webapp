// char ½m²ß 3
package p1;
public class D2018_08_22_Ex6 {
	public static void main(String[] args) {
		String str = "AaBzqwr123&^$#$"; // => AABZ123&^$#$
		int len = str.length();
		for (int i=0; i<len; i++) {
			char symbol = str.charAt(i);
			if(symbol<= 'z' && symbol >= 'a') {
			//if(symbol<= 122 && symbol >= 97) {
				System.out.print((char)(symbol + 'A'-'a'));
			} else { 
				System.out.print(symbol);
			}	
			
		}
		System.out.println();
		System.out.println('#' < '$');
		System.out.println('#' - '$');
		
	}
}
