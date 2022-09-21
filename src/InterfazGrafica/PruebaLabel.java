package InterfazGrafica;

// Fig. 12.7: PruebaLabel.java
// Prueba de LabelFrame
import javax.swing.JFrame;

public class PruebaLabel {
    public static void main(String[] args) {
        LabelFrame marcoEtiqueta = new LabelFrame();
        marcoEtiqueta.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        marcoEtiqueta.setSize(260, 180);
        marcoEtiqueta.setVisible(true);
    }
}// fin de la clase PruebaLabel