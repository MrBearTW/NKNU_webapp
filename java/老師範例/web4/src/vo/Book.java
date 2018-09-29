package vo;

public class Book {
	public String id;
	public String title;
	public String borrower;
	public int price;
	
	public Book(String id, String title, String borrower, int price) {
		super();
		this.id = id;
		this.title = title;
		this.borrower = borrower;
		this.price = price;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getBorrower() {
		return borrower;
	}

	public void setBorrower(String borrower) {
		this.borrower = borrower;
	}

	public int getPrice() {
		return price;
	}

	public void setPrice(int price) {
		this.price = price;
	}
	
	

}
