#include <iostream>
#include <string>
#include <fstream>
#include <vector>
using namespace std;
vector <char> v, c;
string s;
int nrSpatii;
ofstream fout("output.txt");
int main()
{
	getline(cin, s);
	for (string::iterator it = s.begin(); it != s.end(); it++)
	{
		if (isalpha(*it))
		{
			if (strchr("aeiouAEIOU", *it) != NULL)
			{
				v.push_back(*it);
			}
			else {
				c.push_back(*it);
			}
		}
		else if (isspace(*it))
			nrSpatii++;
	}
	for (vector<char>::iterator it = v.begin(); it != v.end(); it++)
	{
		fout << *it;
	}
	fout << "\n";
	for (vector<char>::iterator it = c.begin(); it != c.end(); it++)
	{
		fout << *it;
	}
	fout << "\n" << nrSpatii;



}