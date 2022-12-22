// package xpath;

import javax.xml.xpath.*;
import org.xml.sax.InputSource;
import org.w3c.dom.*;

class XPATH {

    static void print ( Node e ) {
	if (e instanceof Text)
	    System.out.print(((Text) e).getData());
	else {
	    NodeList c = e.getChildNodes();
	    System.out.print("<"+e.getNodeName());
	    NamedNodeMap attributes = e.getAttributes();
	    for (int i = 0; i < attributes.getLength(); i++)
		System.out.print(" "+attributes.item(i).getNodeName()
				 +"=\""+attributes.item(i).getNodeValue()+"\"");
	    System.out.print(">");
	    for (int k = 0; k < c.getLength(); k++)
		print(c.item(k));
	    System.out.print("</"+e.getNodeName()+">");
	}
    }

    static void evalTtile ( String query, String document ) throws Exception {
	XPathFactory xpathFactory = XPathFactory.newInstance();
	XPath xpath = xpathFactory.newXPath();
	InputSource inputSource = new InputSource(document);
	NodeList result = (NodeList) xpath.evaluate(query,inputSource,XPathConstants.NODESET);
	System.out.println("XPath query: "+query);
	for (int i = 0; i < result.getLength(); i++) {
		Element t = (Element) result.item(i);
		NodeList list = t.getElementsByTagName("title");
		for (int j=0;j<list.getLength();j++) {
			Element title= (Element) list.item(j);
			System.out.println(title.getTextContent());
		}

	}
	    // print(result.item(i));
	// System.out.println();
    }
	static void evalCourse ( String query, String document ) throws Exception {
		XPathFactory xpathFactory = XPathFactory.newInstance();
		XPath xpath = xpathFactory.newXPath();
		InputSource inputSource = new InputSource(document);
		NodeList result = (NodeList) xpath.evaluate(query,inputSource,XPathConstants.NODESET);
		System.out.println("XPath query: "+query);
		for (int i = 0; i < result.getLength(); i++) {
			Element t = (Element) result.item(i);
			NodeList list = t.getElementsByTagName("title");
			for (int j=0;j<list.getLength();j++) {
				Element title= (Element) list.item(j);
				System.out.println(title.getTextContent());
			}
	
		}
			// print(result.item(i));
		// System.out.println();
		}

		static void evalINST ( String query, String document ) throws Exception {
		XPathFactory xpathFactory = XPathFactory.newInstance();
		XPath xpath = xpathFactory.newXPath();
		InputSource inputSource = new InputSource(document);
		NodeList result = (NodeList) xpath.evaluate(query,inputSource,XPathConstants.NODESET);
		System.out.println("XPath query: "+query);
		for (int i = 0; i < result.getLength(); i++) {
			Element t = (Element) result.item(i);
			NodeList list = t.getElementsByTagName("instructor");
			for (int j=0;j<list.getLength();j++) {
				Element title= (Element) list.item(j);
				System.out.println(title.getTextContent());
			}
	
		}
			// print(result.item(i));
		// System.out.println();
		}
	
    public static void main ( String[] args ) throws Exception {
	evalTtile("/root/course[subj='MATH' and place/building= 'LIB' and place/room='204']","reed.xml");
	System.out.println("----------------------------------------------Weitng---------------------------------------");
	evalCourse("/root/course[instructor='Wieting']","reed.xml");
	System.out.println("-----------------------------------------------------Inst-----------------------------------------------");
	evalINST("/root/course[subj='MATH' and crse= '412']","reed.xml");
    }
}
