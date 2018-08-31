package test20180816;

public class TestArgs {
	public static void main(String[] args) {
		A: for (int i = 0; i < args.length; i++) {
			for (int j = 0; j < args[i].length(); j++) {
				char tmp = args[i].charAt(j);
				if (tmp == '0' || tmp == '2' || tmp == '4' || tmp == '6' || tmp == '8') {
					System.out.println(tmp);
					continue A;
				}
			}
			System.out.println("None");

		}
	}
}
