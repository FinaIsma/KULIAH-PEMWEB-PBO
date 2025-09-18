import java.util.ArrayList;

public class TokoKue {
    private String namaToko;
    private ArrayList<Kue> daftarKue;
    private ArrayList<Pelanggan> daftarPelanggan;

    public TokoKue(String namaToko) {
        this.namaToko = namaToko;
        this.daftarKue = new ArrayList<>();
        this.daftarPelanggan = new ArrayList<>();
    }

    public void tambahKue(Kue kue) {
        daftarKue.add(kue);
    }

    public void daftarPelanggan(Pelanggan pelanggan) {
        daftarPelanggan.add(pelanggan);
    }

    public void tampilkanKue() {
        System.out.println("\nMenu " + namaToko);
        System.out.println("Nama            | Harga        | Stok |");
        System.out.println("----------------------------------------");
        
        for (Kue kue : daftarKue) {
            System.out.println(kue.tampilkanInfo());
        }
    }
}