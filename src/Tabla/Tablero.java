package Tabla;

public class Tablero {
    private int x;
    private int y;

    public Tablero(int x, int y) {
        this.x = x;
        this.y = y;
    }

    public void moverArriba(int incremento) {
        y += incremento;
    }

    public void moverAbajo(int decremento) {
        y -= decremento;
    }

    public void moverDerecha(int incremento) {
        x += incremento;
    }

    public void moverIzquierda(int decremento) {
        x -= decremento;
    }

    public int getX() {
        return x;
    }

    public int getY() {
        return y;
    }
}