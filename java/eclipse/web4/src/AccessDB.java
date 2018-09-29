//1. Example of Model
//1. Example of Aggregation

import java.sql.*;

public class AccessDB {
 
  // Example of Aggregation 	
  private Connection con =null;
  private ResultSet rs=null;
  private PreparedStatement insert = null;
  
  public AccessDB(){}	
  
  public Connection getConnection()throws IllegalAccessException, 
         InstantiationException, ClassNotFoundException 
  {
	String user = "root";
    String pass = "";
    String database = "lib";
    String url = "jdbc:mysql://localhost:3306/" + database 
                 + "?useUnicode=true&characterEncoding=big5";
    try{
      Class.forName("com.mysql.jdbc.Driver").newInstance();
     
      // Example of Aggregation 	
      con = DriverManager.getConnection(url,user,pass);
      
    }
    catch(SQLException sqle){
      System.out.println("SQL Exception : " + sqle);
    }
    
    return con;		
  }
  
  public ResultSet getResultSet(String sql) 
  {
	  Statement stmt=null;
	  try{
		  stmt=con.createStatement();
		
		  // Example of Aggregation 	
		  rs=stmt.executeQuery(sql);
		  
	  }catch(SQLException se){
		  System.out.println("Error:"+se.toString());
	  }catch(Exception e){
		  System.out.println("Error:"+e.toString());			
	  }
	  return rs;
  }
  
  public PreparedStatement getPreparedStatement(String sql ) throws SQLException
  {
	  insert = con.prepareStatement(sql);
      insert.executeUpdate();
      return insert;
  }
  
}
