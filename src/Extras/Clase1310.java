package Extras;

public class Clase1310 {
    private static String mensaje= "Hola";

    private static  int numero(int v1){
        return v1++;
    }

    public static void main(String[] args) {
        Clase1310 obj1=new Clase1310();
        Clase1310 obj2=new Clase1310();
        obj2.mensaje="mundo";

        System.out.println(obj1.mensaje);
        System.out.println("El resultado es: "+ Clase1310.numero(6));
    }
}
