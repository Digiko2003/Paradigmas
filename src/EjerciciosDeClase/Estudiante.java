package EjerciciosDeClase;

public class Estudiante extends Persona {
    String noCuenta;
    String curso;
    String calificacion;

    public Estudiante(){
        super("default",0,"x","s/d");
    }

    public Estudiante(String nombre, int edad, String sexo, String direccion, String noCuenta, String curso, String calificacion) {
        super(nombre, edad, sexo, direccion);
        this.noCuenta = noCuenta;
        this.curso = curso;
        this.calificacion = calificacion;
    }

    public void verCalificacion(){
        System.out.println("La calificacion de "+getNombre()+" es"+calificacion);
    }
    public void verCurso(){
        System.out.println("El curso es: "+curso);
    }
    @Override
    public void mostrarInfo(){
        System.out.println("Nombre" + getNombre());
        System.out.println("Edad" + getEdad() );
        System.out.println("Sexo" + getSexo());
        System.out.println("Direccion" + getDirecciono());
        System.out.println("Curso" + curso);
        System.out.println("Calificacion" + calificacion);
    }

}
