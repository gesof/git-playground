//Scrieti un string (care sa contina spatii) de la tastatura, parcurgeti apoi stringul si adaugati vocalele si consoanele
//in 2 liste separate, precum si o variabila in care se salveaza numarul de spatii.Scrieti continutul
//listelor precum si numarul de spatii intr-un fisier text.


#include <iostream>
using namespace std;

int main()
{
    string line;
    int vocale, consoane, spatii;

    vocale = consoane= spatii = 0;

    cout << "Introduceti stringul: ";
    cin >> line;
   

    for (int i = 0; i < line.length(); ++i)
    {
        if (line[i] == 'a' || line[i] == 'e' || line[i] == 'i' ||
            line[i] == 'o' || line[i] == 'u' || line[i] == 'A' ||
            line[i] == 'E' || line[i] == 'I' || line[i] == 'O' ||
            line[i] == 'U')
        {
            ++vocale;
        }
        else if ((line[i] >= 'a' && line[i] <= 'z') || (line[i] >= 'A' && line[i] <= 'Z'))
        {
            ++consoane;
        }
       
        else if (line[i] == ' ')
        {
            ++spatii;
        }
    }

    cout << "Vocale: " << vocale << endl;
    cout << "Consoane: " << consoane << endl;
    cout << "Spatii libere: " << spatii<< endl;

    return 0;
}