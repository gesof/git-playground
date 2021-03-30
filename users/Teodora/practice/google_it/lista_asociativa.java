package lista_asociativa;

import java.util.Map.Entry;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.PrintWriter;
import java.util.*;

//Varianta 1
/*
class Stocare_Informatie{
    String cheie, valoare;
    
    Stocare_Informatie(String ch, String val){
        cheie = ch;
        valoare = val;
    }
}

public class lista_asociativa {
    
    public static void main(String[] args) {
        List<Stocare_Informatie> lista = new ArrayList<Stocare_Informatie>();
        
        lista.add(new Stocare_Informatie("Penoiu","Teodora"));
        lista.add(new Stocare_Informatie("Trandafir","Daniela"));
        lista.add(new Stocare_Informatie("Betiu","Pavel"));
        lista.add(new Stocare_Informatie("Bucalaete","Alina"));
        lista.add(new Stocare_Informatie("Geica","Robert"));
        
        for(int i=0;i<5;i++){
            System.out.print(lista.get(i).cheie+" "+lista.get(i).valoare+"\n");
        }
        
        try{
            FileWriter writer = new FileWriter("C:\\Users\\Pro\\Desktop\\key.txt");
            BufferedWriter out = new BufferedWriter(writer);
            
            for(int i=0;i<5;i++)
                out.write(lista.get(i).cheie+"\n");
            
            out.close();
        }
        catch(Exception e){
            e.printStackTrace();
        }
        
        try{
            FileWriter writer = new FileWriter("C:\\Users\\Pro\\Desktop\\value.txt");
            BufferedWriter out = new BufferedWriter(writer);
            
            for(int i=0;i<5;i++){
                out.write(lista.get(i).valoare+"\n");
            }
            
            out.close();
        }
        catch(Exception e){
            e.printStackTrace();
        }
    }
*/

//Varianta 2 (si cea pe care am ales-o ca fiind cea mai buna, personal)
/*
     Cred ca varianta asta e mai buna decat prima pentru ca, din cate citi despre liste asociative, valoarea unei chei apare o 
singura data (parafrazai eu), adica o valoare exista o singura data printre chei si chestia asta se intampla la HashMap.

PS: Nu strica nici ca e mai scurt programul.
*/

    public class lista_asociativa {
    
    public static void main(String[] args) {
        HashMap<String, String> persoane = new HashMap<String, String>();
        persoane.put("Penoiu", "Teodora");
        persoane.put("Transafir", "Daniela");
        persoane.put("Betiu","Pavel");
        persoane.put("Bucalaete","Alina");
        persoane.put("Geica ","Robert");        
        
        for (Entry<String, String> entry : persoane.entrySet()) {
            System.out.println(entry.getKey() + " " + entry.getValue().toString());
        }
        
        try{
            FileWriter writer = new FileWriter("C:\\Users\\Pro\\Desktop\\x\\git-playground\\google_it\\Teodora\\key.txt");
            BufferedWriter out = new BufferedWriter(writer);
            
            for(Entry<String, String> entry : persoane.entrySet())
                out.write(entry.getKey()+"\n");
            
            out.close();
        }
        catch(Exception e){
            e.printStackTrace();
        }
        
        try{
            FileWriter writer = new FileWriter("C:\\Users\\Pro\\Desktop\\x\\git-playground\\google_it\\Teodora\\value.txt");
            BufferedWriter out = new BufferedWriter(writer);
            
            for(Entry<String, String> entry : persoane.entrySet())
                out.write(entry.getValue()+"\n");
            
            out.close();
        }
        catch(Exception e){
            e.printStackTrace();
        }
    }
  
}
