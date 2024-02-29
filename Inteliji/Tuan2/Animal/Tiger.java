public class Tiger {
    private String name;
    private int id;

    public Tiger(String name, int id) {
        this.name = name;
        this.id = id;
    }

    public String getname() {
        return name;
    }

    public int getid() {
        return id;
    }

    public static void main(String[] args) {
        Tiger tiger = new Tiger("Tiger", 5);
        System.out.println("Name: " + tiger.getname());
        System.out.println("Id: " + tiger.getid());
    }
}