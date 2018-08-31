package p1;

public class PloymorphismEx {
    public static void main(String[] args) {
    	
    	Super [] array  = new Super[4];  //產生 Super的陣列 (array)，長度為 2
    	array[0] = new Super();//產生 Super 物件(子代物件)，放入 array[0]
    	array[1] = new Sub1();  //產生 Sub1 物件(子代物件)，放入 array[1]
        array[2] = new Sub2();  //產生 Sub2 物件(子代物件)，放入 array[2]
        array[3] = new Sub3();  //產生 Sub3 物件(子代物件)，放入 array[3]       
        for (int i = 0; i<array.length; i++)
            array[i].m1();  //多型，JVM 會根據不同的子代物件，使用正確的子代方法
       
        /*
        Super obj1 = new Sub1();
        Super obj2 = new Sub2();
        Super obj3 = new Super();
        
        Sub1 obj4 = new Sub1();
        Sub1 obj5 = new Sub2();
        Sub1 obj5 = new Super();
        */
    }
}

class Super{
    void m1() {System.out.println("using m1 of Super");} // 父代必須宣告 m1
 }

class Sub1 extends Super{
    void m1() {System.out.println("using m1 of Sub1");}  // 子代 Sub1 覆寫 父代方法
}  

class Sub2 extends Super{
    void m1() {System.out.println("using m1 of Sub2");} // 子代 Sub2 覆寫 父代方法
} 

class Sub3 extends Super{
    void m1() {System.out.println("using m1 of Sub3");} // 子代 Sub2 覆寫 父代方法
}

