package InterfazGrafica;

import javax.swing.*;

public class Suma {
    public static void main(String[] args) {

        String primerNumero=
                JOptionPane.showInputDialog("Introduzca el primer entero");
        String segundoNumero=
                JOptionPane.showInputDialog("Introduzca el segundo entero");


        int numero1 = Integer.parseInt(primerNumero);
        int numero2 = Integer.parseInt(segundoNumero);

        int suma = numero1 + numero2;

        //Muestra los resultados en un dialogo de mensajes de JOptionPane
        JOptionPane.showMessageDialog(null," La suma es: " + suma, "Suma de dos enteros", JOptionPane.PLAIN_MESSAGE) ;

    }
} //END





















































