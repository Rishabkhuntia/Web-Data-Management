import javax.xml.parsers.*;
import org.w3c.dom.*;
import java.net.URL;
import java.io.InputStream;
import java.io.FileInputStream;


class DOMTest {
    static void print ( Node e ) {
	if (e instanceof Text)
	    System.out.print(((Text) e).getData());
	else {
	    NodeList c = e.getChildNodes();
	    System.out.print("<"+e.getNodeName()+">");
	    for (int k = 0; k < c.getLength(); k++)
		print(c.item(k));
	    System.out.print("</"+e.getNodeName()+">");
	}
    }
    public static void main ( String args[] ) throws Exception {
	InputStream inp = new FileInputStream("./reed.xml");
	DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
	DocumentBuilder db = dbf.newDocumentBuilder();
	Document doc = db.parse(inp);
	// Node root = doc.getDocumentElement();
	NodeList course = doc.getElementsByTagName("subj");
	NodeList b = doc.getElementsByTagName("building");
	NodeList r= doc.getElementsByTagName("room");
	NodeList t= doc.getElementsByTagName("title");
	for(int i=0; i< course.getLength();i++){
		Element cr = (Element) course.item(i);
		Element bw = (Element) b.item(i);
		Element rm= (Element) r.item(i);
		Element ti= (Element) t.item(i);
		if(cr.getTextContent().equals("MATH") && bw.getTextContent().equals("LIB") && rm.getTextContent().equals("204")) {
			System.out.println(ti.getTextContent());
		}
	}
	
    }
}
