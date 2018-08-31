package p1;

public class D2018_08_30_Ex2 {
	public static void main(String[] args) {
		new D2018_08_30_Ex2().m1("def");// 使用匿名物件
		m1("def");
	}

	static void m1(String msg)
	{
		if (msg.equals("abc"))
			return ;
		System.out.println(msg);
	}

}
