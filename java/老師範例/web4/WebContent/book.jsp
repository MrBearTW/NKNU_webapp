<%@ page language="java" import ="vo.Book, java.util.List" contentType="text/html; charset=BIG5"
    pageEncoding="BIG5"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=BIG5">
<title>View Books</title>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}

th{
	text-align: left;
}
</style>

</head>


<body>

Hi!  <%=session.getAttribute("user") %>,  the books you have borrowed are: <br> 
<%
List <Book> books = (List<Book>) session.getAttribute("books");
if (books != null){
%>

<table>
<th> 書號</th> <th> 書名</th> <th> 借閱者</th> <th> 價格 </th>
<%	for (Book book : books) {%>
	</tr>
 		<td> <%=book.id %>      </td>
 		<td> <%=book.title %>    </td>
 		<td> <%=book.borrower %> </td>
 		<td> <%=book.price %>    </td>
	</tr> 
<% } %>
</table>
<% 
}else 
	out.print("NOTHING!");
%>




</body>
</html>