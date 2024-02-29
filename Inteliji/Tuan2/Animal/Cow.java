public class Cow {
    private String name;
    private int id;

    public Cow(String name, int id){
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
        Cow cow = new Cow("Cow", 5);
        System.out.println("Name: " + cow.getname());
        System.out.println("Id: " + cow.getid());
    }
}
