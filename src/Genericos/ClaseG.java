package Genericos;

public class ClaseG <T>{
    private T dato;

    public ClaseG(T dato){
        this.dato=dato;
    }

    public T getDato() {
        return dato;
    }

    public void setDato(T dato) {
        this.dato = dato;
    }
}
