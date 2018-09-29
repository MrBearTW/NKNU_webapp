import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import vo.Book;

public class ModelWeb4 {
	static boolean validate(String account, String password){
		AccessDB db = new AccessDB();
			try {
				db.getConnection();
			} catch (IllegalAccessException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			} catch (InstantiationException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			} catch (ClassNotFoundException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			}
		
		
		String sql = "select count(*) from user where account ='" + account + "' and password ='" + password +"'" ;
		
		ResultSet rs= db.getResultSet(sql);
		System.out.println(sql);
		 int row=  0;
	
		 try {
			 while (rs.next()){
				 row = rs.getInt(1);
			 }
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		 
		 System.out.println("row = " + row);

		 if (row ==1)
			return true;
		else
			return false;
	}

	static List<Book> viewBooks(String who){
		AccessDB db = new AccessDB();
		try {
			db.getConnection();
		} catch (IllegalAccessException e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		} catch (InstantiationException e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		} catch (ClassNotFoundException e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		}
		String sql = "select id, title, borrower, price from book where borrower ='" + who +"'";
		System.out.println(sql);
		ResultSet rs= db.getResultSet(sql);
		List <Book> list = new ArrayList<Book>();
			try {
				while (rs.next()){
					String id = rs.getString(1);
					String title = rs.getString(2);
					String borrower = rs.getString(3);
					int price = rs.getInt(4);
					list.add(new Book(id, title, borrower, price));
				}
			} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			}
		return list;
	}
}
