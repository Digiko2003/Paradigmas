package InterfazGrafica;
import java.awt.BorderLayout;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import javax.swing.JFrame;
import javax.swing.JLabel;

public class MarcoDetallesRaton extends JFrame {
    private String detalles; // String que se muestra en barraEstado
    private final JLabel barraEstado;

    public MarcoDetallesRaton() {
        super("Clics y botones del raton");

        barraEstado = new JLabel("Haga clic en el raton");
        add(barraEstado, BorderLayout.SOUTH);
        addMouseListener(new ManejadorClicRaton()); // agrega el manejador
    }

    // clase interna para manejar los eventos del ratón
    private class ManejadorClicRaton extends MouseAdapter {

        @Override
        public void mouseClicked(MouseEvent evento) {
            int xPos = evento.getX();
            int yPos = evento.getY();

            detalles = String.format("Se hizo clic %d vez(veces)", evento.getClickCount());

            if (evento.isMetaDown()) {
                detalles += " con el boton derecho del raton";
            } else if (evento.isAltDown()) {
                detalles += " con el boton central del raton";
            } else {
                detalles += " con el boton izquierdo del raton";
            }
            barraEstado.setText(detalles);
        }
    }
}