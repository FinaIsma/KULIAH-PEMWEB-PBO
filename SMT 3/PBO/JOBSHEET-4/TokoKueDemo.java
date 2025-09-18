public class TokoKueDemo {
    public static void main(String[] args) {
        TokoKue toko = new TokoKue("Nays Cake and Sweets");

        Kue k1 = new Kue("Brownies", 50000, 10);
        Kue k2 = new Kue("Cheesecake", 75000, 5);
        toko.tambahKue(k1);
        toko.tambahKue(k2);
        toko.tampilkanKue();

        Pelanggan p1 = new Pelanggan("Fina", "08123456789");
        Pelanggan p2 = new Pelanggan("Karina", "08987654321");
        toko.daftarPelanggan(p1);
        toko.daftarPelanggan(p2);

        p1.tambahBelanja(k1, 2);
        p1.tambahBelanja(k2, 1);
        p2.tambahBelanja(k1, 3); 

        p1.tampilkanBelanja();
        p2.tampilkanBelanja();

        toko.tampilkanKue();
    }
}
