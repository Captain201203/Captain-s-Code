public class Rabbit {
    private String name;
    private int id;
    public Rabbit(String name, int id){
        this.name = name;
        this.id = id;
    }
    public static void main(String[] args) {
        Rabbit rabbit = new Rabbit("Rabbit", 5);
        System.out.println("Name: " + rabbit.getname());
        System.out.println("Id: " + rabbit.getid());
    }

    public String getname() {
        return name;
    }

    public int getid() {
        return id;
    }
}
