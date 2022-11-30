package ExamParadigmas;

public class TestHerencia {
    public static void main(String[]args){
        ProductoCongelado nuggets = new ProductoCongelado("16-10-2016","L1603004");
        ProductoFresco lechuga = new ProductoFresco("20-10-2016","L1610005");
        ProductoRefrigerado jugo = new ProductoRefrigerado("25-10-2016","L1609006");
        nuggets.setTemperaturaRecomendada(-18);
        lechuga.setFechaEnvasado("03-10-2015");
        lechuga.setPaisDeOrigen("Panamá");
        jugo.setCodigoSupervisionAlimentaria("B#6745");
        System.out.println("Producto Congelado: ");
        nuggets.imprimirDatos();
        System.out.println("Producto Fresco: ");
        lechuga.imprimirDatos();
        System.out.println("Producto Refrigerado: ");
        jugo.imprimirDatos();
    }
}

