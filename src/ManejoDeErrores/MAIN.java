package ManejoDeErrores;

public class MAIN {
    public static void main(String[] args) {
        int[] numeros={1,2,3};

        System.out.print("valor ");
        try {
            System.out.println(numeros[3]);
        } catch (java.lang.ArrayIndexOutOfBoundsException e) {
            System.out.println("error: "+e.getMessage());
        }
        System.out.println("final");
    }
}