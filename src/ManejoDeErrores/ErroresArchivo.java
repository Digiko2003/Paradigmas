package ManejoDeErrores;
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class ErroresArchivo  {
    public static void main(String[] args)  {
        File doc =new File("C:\\Drive\\Learn.txt");
        Scanner obj = null;
        try {
            obj = new Scanner(doc);
        } catch (FileNotFoundException e) {
            System.out.println("error archivo no encontrado");
        }
        try {
            mostrarContenido(obj);
        }catch(NullPointerException ex){
            System.out.println("no hay contenido que mostrar");
        }



    }
    public static void mostrarContenido(Scanner obj) throws java.lang.NullPointerException{
        while (obj.hasNextLine())
            System.out.println(obj.nextLine());
    }

}