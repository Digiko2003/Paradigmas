public class EjemploEncapsulamiento {
    public static void main(String[] args){

    }
   alumno a1=new alumno();



}
//-----------------------------------------//
class alumno{
    //Variables
    private int noCta;
    private String nombre;


    //noCta
    public int getNoCta() {
        return noCta;
    }
    public void setNoCta(int noCta) {
        this.noCta = noCta;
    }

    //Nombre
    public String getNombre() {
        return nombre;
    }
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }





}
