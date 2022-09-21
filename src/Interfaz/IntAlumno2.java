package Interfaz;

public interface IntAlumno2 {
    void mostrarGrado();
    int obtenerAnosdeCarrera();

    public abstract void entradaCurso();
    default void mostrarHorario(){
<<<<<<< HEAD
        System.out.println("horario corrido");
=======
        //System.out.println("horario corrido");
>>>>>>> 45d8254 (05/10/2022)
    }
}
