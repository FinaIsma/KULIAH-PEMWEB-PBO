import java.util.ArrayList;

public class Kue {
    private String namaKue;
    private double harga;
    private int stok;

    public Kue(String namaKue, double harga, int stok) {
        this.namaKue = namaKue;
        this.harga = harga;
        this.stok = stok;
    }

    public void updateStok(int jumlah) {
        this.stok -= jumlah;
    }

    public String tampilkanInfo() {
        return String.format("%-15s | Rp%-10.0f | %-4d |", namaKue, harga, stok);
    }

    public String getNamaKue() {
        return namaKue;
    }

    public double getHarga() {
        return harga;
    }

    public int getStok() {
        return stok;
    }

    public void setStok(int stok) {
        this.stok = stok;
    }
}