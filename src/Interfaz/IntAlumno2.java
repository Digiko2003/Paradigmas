package Interfaz;

public interface IntAlumno2 {
    void mostrarGrado();
    int obtenerAnosdeCarrera();

    public abstract void entradaCurso();
    default void mostrarHorario(){
        System.out.println("horario corrido");
        //System.out.println("horario corrido");
    }
}
