// char ½m²ß 4
package p1;
public class D2018_08_22_Ex7 {
	public static void main(String[] args) {
		String str = "2018"; // Ans => 11
		int sum = 0;
	    for (int i=0; i<str.length(); i++) {
	    	sum = str.charAt(i) - '0' + sum;
	    }
	    System.out.println(sum);
	}
}
