package Ejercicio_xml;

import org.w3c.dom.DOMImplementation;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Text;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.transform.*;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.File;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Ejercicio_xml {

    public static void main(String[] args) {
        try {

            DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
            DocumentBuilder builder = factory.newDocumentBuilder();
            DOMImplementation implementation = builder.getDOMImplementation();
            Document documento = implementation.createDocument(null, "curriculum", null);
            documento.setXmlVersion("1.0");


            Element personas = documento.createElement("personas");
            Element persona = documento.createElement("persona");


            Element matricula = documento.createElement("Nombre");
            Text textMatricula = documento.createTextNode("Diego_Arturo_Enriquez_Mercado");
            matricula.appendChild(textMatricula);
            persona.appendChild(matricula);


            Element marca = documento.createElement("Centro_Educativo");
            Text textMarca = documento.createTextNode("UAEM_Atlacomulco");
            marca.appendChild(textMarca);
            persona.appendChild(marca);


            Element precio = documento.createElement("Campo_Laboral");
            Text textPrecio = documento.createTextNode("Ingeneria_En_Computacion");
            precio.appendChild(textPrecio);
            persona.appendChild(precio);


            personas.appendChild(persona);


            documento.getDocumentElement().appendChild(personas);


            Source source = new DOMSource(documento);
            Result result = new StreamResult(new File("curriculum.xml"));


            Transformer transformer = TransformerFactory.newInstance().newTransformer();
            transformer.transform(source, result);

        } catch (ParserConfigurationException | TransformerException ex) {
            System.out.println(ex.getMessage());
        }

    }

}

