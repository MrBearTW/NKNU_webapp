package p1;

public class PloymorphismEx {
    public static void main(String[] args) {
    	
    	Super [] array  = new Super[4];  //���� Super���}�C (array)�A���׬� 2
    	array[0] = new Super();//���� Super ����(�l�N����)�A��J array[0]
    	array[1] = new Sub1();  //���� Sub1 ����(�l�N����)�A��J array[1]
        array[2] = new Sub2();  //���� Sub2 ����(�l�N����)�A��J array[2]
        array[3] = new Sub3();  //���� Sub3 ����(�l�N����)�A��J array[3]       
        for (int i = 0; i<array.length; i++)
            array[i].m1();  //�h���AJVM �|�ھڤ��P���l�N����A�ϥΥ��T���l�N��k
       
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
    void m1() {System.out.println("using m1 of Super");} // ���N�����ŧi m1
 }

class Sub1 extends Super{
    void m1() {System.out.println("using m1 of Sub1");}  // �l�N Sub1 �мg ���N��k
}  

class Sub2 extends Super{
    void m1() {System.out.println("using m1 of Sub2");} // �l�N Sub2 �мg ���N��k
} 

class Sub3 extends Super{
    void m1() {System.out.println("using m1 of Sub3");} // �l�N Sub2 �мg ���N��k
}

