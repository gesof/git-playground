#include <iostream>
#include <fstream>
#include <string>
using namespace std;
string s, c, v;
string vocale =  "aeiouAEIOU" ;
string fileName = "output.txt";
ofstream fout (fileName);
int nrSpatii;
int main()
{
	getline(cin, s);
	for (auto i : s)
	{
		if (isalpha(i)) {
			if (vocale.find(i) != string::npos)
				v += i;
			else
				c += i;
		}
		else if (i == ' ')
			nrSpatii++;
	}
	fout << v << "\n" << c << "\n" << nrSpatii;

}