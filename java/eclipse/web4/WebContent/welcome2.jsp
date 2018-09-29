<%@ page language="java" contentType="text/html; charset=BIG5"
    pageEncoding="BIG5"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=BIG5">
<title> Login Successfully</title>
</head>

<body>
Another way of using variable. <br>

<%
String user = (String) session.getAttribute("user");
%>

Hi!  <%=user%> welcome to the lib system. <br>
Login Successfully
</body>
</html>
