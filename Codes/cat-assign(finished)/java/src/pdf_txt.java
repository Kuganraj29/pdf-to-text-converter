import java.io.File;
import java.io.IOException;
import java.util.Formatter;
import java.util.Scanner;

import org.apache.pdfbox.Loader; //Import external library "pdfbox"
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;
import org.apache.commons.io.FilenameUtils;

public class pdf_txt{
    public static void main(String[] args) throws IOException{ //Throw IO exception if found it
        File f = new File("java/filename.txt"); //Open file to get pdf name
        Scanner sc = new Scanner(f);
        String name = sc.nextLine();
	sc.close();

        File pdfFile = new File("java/uploads/"+name); //Open pdf file
        String pdfName_withoutExt = FilenameUtils.getBaseName(pdfFile.getName());/* To get pdf file name
                                                                                    without extension*/

        try(PDDocument doc = Loader.loadPDF(pdfFile)){ //To parse the pdf file
            PDFTextStripper stripper= new PDFTextStripper();//Strip out all the text ignoring formatting
            String text = stripper.getText(doc);//Store the text into the text variable

            //Create a txt file  from pdf file in text folder
            Formatter textFile = new Formatter("java/text/" + pdfName_withoutExt + ".txt");
            textFile.format(text);//Write the text into file
            textFile.close();//Close file

            Formatter file = new Formatter("java/filename.txt"); //Open the filename.txt again
            file.format(pdfName_withoutExt + ".txt");//Write the converted pdf file name with .txt extension
            file.close(); //Close the file
        }
    }
}
