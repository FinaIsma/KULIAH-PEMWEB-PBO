public class User {
    public String usename;
    public String nama;
    public String email;
    public String alamat;
    public String pekerjaan;

    public User(String username, String nama, String email) {
        this.usename = username;
        this.nama = nama;
        this.email = email;
    }

    public void cetakInfo() {
        System.out.println("Username    : " +usename);
        System.out.println("Nama        : " +nama);
        System.out.println("Email       : " +email);
        System.out.println("Alamat      : " +alamat);
        System.out.println("Pekerjaan   : " +pekerjaan);
        System.out.println("==========================");
    }
}