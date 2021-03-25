package com.company;
/*
    In cadrul taskului m-am gandit sa folosesc un HashMap
    care mi-a fost de folos in implementarea a doua metode
    diferite de parcurgere a acestuia. Una dintre ele
    necesita folosirea unui Iterator, iar ca si citire
    in fisier am utilizat BufferedWriter.
 */
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

public class Main {

        public static void main(String[] args)
        {
            final String outputFilePath1 = "key.txt";
            final String outputFilePath2 = "value.txt";
            // crearea HashMapului
            HashMap<String, Integer> map = new HashMap<>();

            // perechi cheie-valoare
            map.put("a", 1);
            map.put("b", 2);
            map.put("c", 3);
            map.put("d", 4);
            // crearea fisierelor obiect
            File file1 = new File(outputFilePath1);
            File file2 = new File(outputFilePath2);
            BufferedWriter bf1 = null;
            BufferedWriter bf2 = null;
            try {

                // Creare BufferedWriter pentru fisierele de Output
                bf1 = new BufferedWriter(new FileWriter(file1));
                bf2 = new BufferedWriter(new FileWriter(file2));
                // Iterarea mapului
                for (String i : map.keySet()) {
                    bf1.write(i);
                    bf1.newLine();
                }
                for (Integer i : map.values()) {
                    bf2.write("" + i);
                    bf2.newLine();
                }
                /*     Se poate decomenta partea asta unde am facut
                       cealalta parcurgere cu Iterator

                for (Map.Entry<String, Integer> entry :
                        map.entrySet()) {

                    // put key and value separated by a colon
                    bf1.write(entry.getKey());
                    bf2.write(entry.getValue());
                    // new line
                    bf1.newLine();
                    bf2.newLine();
                }
                */
                bf1.flush();
                bf2.flush();
            }
            catch (IOException e) {
                e.printStackTrace();
            }
            finally {

                try {
                    bf1.close();
                    bf2.close();
                }
                catch (Exception e) {
                }
            }
        }
}
