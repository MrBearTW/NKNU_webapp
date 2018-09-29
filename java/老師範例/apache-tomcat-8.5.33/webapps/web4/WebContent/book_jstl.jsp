<%@ page language="java" import ="vo.*, java.util.*;" contentType="text/html; charset=BIG5"
    pageEncoding="BIG5"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=BIG5">
    <title>View Books with Java Standard Tag Library</title>
    <%@ taglib prefix="c" 
           uri="http://java.sun.com/jsp/jstl/core" %>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>
    Hi!
    <c:out value="${user}" />, the books you have borrowed are: <br>
    <%
//List <Book> books = (List<Book>) session.getAttribute("books");

%>
    <c:choose>
        <c:when test="${books != null}">
            <table>
                <th> �Ѹ�</th>
                <th> �ѦW</th>
                <th> �ɾ\��</th>
                <th> ���� </th>

                <c:forEach var="book" items="${books}">
                    </tr>
                    <td>
                        <c:out value="${book.id}" />
                    <td>
                        <c:out value="${book.title}" />
                    </td>
                    <td> ${book.borrower} </td>
                    <td>${book.price} </td>
                    </tr>
                </c:forEach>
            </table>
        </c:when>
        <c:otherwise>
            NOTHING
        </c:otherwise>
    </c:choose>


</body>

</html>