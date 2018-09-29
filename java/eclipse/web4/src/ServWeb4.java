

import java.io.IOException;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import vo.Book;

/**
 * Servlet implementation class ServWeb4
 */
@WebServlet("/ServWeb4")
public class ServWeb4 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServWeb4() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doPost(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String sid = request.getParameter("sid");
		if (sid.equals("1")){
			String account = request.getParameter("acc");
			String password = request.getParameter("pwd");
			boolean login = ModelWeb4.validate(account, password);
			String msg = request.getParameter("msg");
			msg = new String(msg.getBytes("ISO8859_1"), "BIG5");
			System.out.println(msg);
			if (login){
				request.getSession().setAttribute("user", account);
				response.sendRedirect("welcome.jsp");
			}
			else {
				response.sendRedirect("fail.jsp");
			}
		}
		else if (sid.equals("2")){
			String user = (String) request.getSession().getAttribute("user");
			if (!user.equals("")){
				List<Book> list =  ModelWeb4.viewBooks(user);
				if (list.size()> 0)
					request.getSession().setAttribute("books", list);
				else
					request.getSession().setAttribute("books", null);
				response.sendRedirect("book.jsp");
				//response.sendRedirect("book_jstl.jsp");
			}
		}
	}
}
