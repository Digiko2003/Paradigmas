package Conexion;

import javax.swing.*;
import java.sql.Connection;
import java.sql.DriverManager;

public class conexion {
    public static void main(String[] args) {

    }
    Connection conexion = null;

    String usuario = "sa";
    String contrasenia = "111";
    String db = "Books";
    String puerto = "1433";


    public Connection obtenerConexion () {
            try {
                String cadena = "jdbc:sqlserver://DESKTOP-IRB59E3: " + puerto + ";" + "databaseName=" + db;
                conexion = DriverManager.getConnection(cadena, usuario, contrasenia);
                //Panel de Conexion.Main exitosa
                JOptionPane.showMessageDialog(null, "Conexion exitosa :)");
            } catch (Exception e) {
                System.out.printf("Error: " + e.toString());
            }
            return conexion;
        }
    }