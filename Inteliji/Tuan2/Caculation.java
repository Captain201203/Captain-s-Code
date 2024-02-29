public class Caculation {
    public Caculation(int a, int b){
        this.a = a;
        this.b = b;
    }
    private int a;
    private  int b;

    public int sum(){
        return a+ b;
    }

    public int minus(){
        return a-b;
    }

    public static void main(String[] args){
        Caculation cal = new Caculation(5,7);
        System.out.println((cal.sum()));
        System.out.println((cal.minus()));
    }
}
