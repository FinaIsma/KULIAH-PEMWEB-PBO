public class MotorDemo {
    public static void main(String[] args) {
        Motor motor1 =  new Motor();
        motor1.displayStatus();
        motor1.setPlatNomor("B 0838 XZ");
        motor1.setKecepatan(50);
        motor1.displayStatus();
        
        Motor motor2 =  new Motor();
        motor2.setPlatNomor("N 9840 AB");
        motor2.setIsIsMesinOn(true);
        motor2.setKecepatan(40);
        motor2.displayStatus();

        Motor motor3 =  new Motor();
        motor3.setPlatNomor("D 8343 CV");
        motor3.setKecepatan(60);
        motor3.displayStatus();

        Motor motor4 =  new Motor();
        motor4.setPlatNomor("N 1234 DF");
        motor4.setIsIsMesinOn(true);
        motor4.setKecepatan(120);
        motor4.displayStatus();

        Motor motor5 =  new Motor();
        motor5.setPlatNomor("N 1234 DF");
        motor5.setIsIsMesinOn(true);
        motor5.setKecepatan(-25);
        motor5.displayStatus();
    }
}