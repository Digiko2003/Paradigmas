package ExamParadigmas;

public class ProductoFresco extends Producto {
    private String fechaEnvasado, paisDeOrigen;

    public ProductoFresco(String fechaCaducidad, String numeroLote){
        super(fechaCaducidad, numeroLote);
        fechaEnvasado = "Desconocido";
        paisDeOrigen = "Desconocido";
    }

    public void setFechaEnvasado(String fecha){
        fechaEnvasado = fecha;
    }

    public void setPaisDeOrigen(String pais){
        paisDeOrigen = pais;
    }

    public String getFechaEnvasado(){
        return fechaEnvasado;
    }

    public String getPaisDeOrigen(){
        return paisDeOrigen;
    }

    public void imprimirDatos(){
        imprimirInfo();
        System.out.println("Fecha de envasado: " + getFechaEnvasado() + "\nPais de origen: " + getPaisDeOrigen() + "\n");
    }
}