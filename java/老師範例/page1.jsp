<%@ page language="java" contentType="text/html; charset=BIG5"
    pageEncoding="BIG5"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="BIG5">
<title>Insert title here</title>
</head>
<body>
Here is a JSP page <br>

<%
   String msg = (String) request.getSession().getAttribute("msg");
   out.print(msg);
%>
</body>
</html>