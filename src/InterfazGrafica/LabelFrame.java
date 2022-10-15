package InterfazGrafica;


import java.awt.FlowLayout;
import javax.swing.JFrame; // proporciona las características básicas de una ventana

import javax.swing.JLabel; // muestra texto e imágenes
import javax.swing.SwingConstants; // constantes comunes utilizadas con Swing
import javax.swing.Icon; // interfaz utilizada para manipular imágenes
import javax.swing.ImageIcon; // carga las imágenes

public class LabelFrame extends JFrame {
    private JLabel etiqueta1;
    private JLabel etiqueta2;
    private JLabel etiqueta3;


    public LabelFrame() {
        super("Prueba de JLabel");
        setLayout(new FlowLayout());

        etiqueta1 = new JLabel("Hello");
        etiqueta1.setToolTipText("Esta es etiqueta1");
        add(etiqueta1);


        Icon elvis = new ImageIcon(getClass().getResource("di.png"));
        etiqueta2 = new JLabel("Rock and roll", elvis, SwingConstants.LEFT);
        etiqueta2.setToolTipText("Esta es etiqueta2");
        add(etiqueta2); // agrega etiqueta2 a JFrame

        etiqueta3 = new JLabel();
        etiqueta3.setText("Hola");
        etiqueta3.setIcon(elvis);
        etiqueta3.setHorizontalTextPosition(SwingConstants.CENTER);
        etiqueta3.setVerticalTextPosition(SwingConstants.BOTTOM);
        etiqueta3.setVerticalTextPosition(SwingConstants.BOTTOM);
        etiqueta3.setToolTipText("Esta es etiqueta3");
        add(etiqueta3);
    }
}












































