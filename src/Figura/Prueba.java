package Figura;

public class Prueba {
    public static void main(String[] args) {
        Triangulo triangulo = new Triangulo (0,0,0,0,0);
        System.out.println("El area del triangulo es " + triangulo.getArea() + " y su perimetro es " +
                triangulo.getPerimetro());
    }
}