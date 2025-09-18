import java.util.ArrayList;

public class Pelanggan {
    private String nama;
    private String noHp;
    private ArrayList<String> daftarBelanja;

    public Pelanggan(String nama, String noHp) {
        this.nama = nama;
        this.noHp = noHp;
        this.daftarBelanja = new ArrayList<>();
    }

    public void tambahBelanja(Kue kue, int jumlah) {
        if (kue.getStok() >= jumlah) {
            daftarBelanja.add(kue.getNamaKue() + " x" + jumlah);
            kue.updateStok(jumlah);
        } else {
            System.out.println("Stok " + kue.getNamaKue() + " tidak mencukupi!");
        }
    }

    public void tampilkanBelanja() {
        System.out.println("\nOrderan " + nama + ":");
        if (daftarBelanja.isEmpty()) {
            System.out.println("  Belum ada orderan");
        } else {
            for (String order : daftarBelanja) {
                System.out.println(" - " + order);
            }
        }
    }
}
