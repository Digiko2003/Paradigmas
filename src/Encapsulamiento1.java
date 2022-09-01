public class Encapsulamiento1 {
    public static void main(String[] args){

        variables objeto1=new variables();
        variables objeto2=new variables();
        variables objeto3=new variables();

        variables precio1=new variables();
        variables precio2=new variables();
        variables precio3=new variables();

        objeto1.setObjeto("Pantalla");
        objeto1.getObjeto();
        objeto2.setObjeto("Lap");
        objeto2.getObjeto();
        objeto3.setObjeto("PC");
        objeto3.getObjeto();

        precio1.setPrecio(241);
        precio1.getPrecio();
        precio2.setPrecio(2121);
        precio2.getPrecio();
        precio3.setPrecio(24521);
        precio3.getPrecio();

        System.out.println(objeto1 + objeto1.getObjeto() + "con cuenta" + precio1.getPrecio());



    }






}
//---------------------------------
class variables{
    public int precio;
    public String objeto;



    //------------
    public int getPrecio() {
        return precio;
    }

    public void setPrecio(int precio) {
        this.precio = precio;
    }


    //------------
    public String getObjeto() {
        return objeto;
    }

    public void setObjeto(String objeto) {
        this.objeto = objeto;
    }

}
