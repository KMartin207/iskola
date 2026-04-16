using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Pars2012
{
    public class Versenyzo
    {
		public string nev;
		public char csoport;
		public string nemzetKod;
		public string sorozat;
		public double d1;
		public double d2;
		public double d3;
		string nemzet;
		string kod;


		private int myVar;

		public int MyProperty
		{
			get { return myVar; }
			set { myVar = value; }
		}

		public Versenyzo(string sor)
		{
			string[] darabol = sor.Split(';');

			this.nev = darabol[0];
			this.csoport = Convert.ToChar(darabol[1]);
			this.nemzetKod = darabol[2];
			this.sorozat = string.Join(";", darabol[3], darabol[4], darabol[5]);


			if (darabol[3] == "X")
			{
				this.d1 = -1.0;
			}
			else if (darabol[3] == "-")
			{
				this.d1 = -2.0;
			}
			else
			{
				this.d1 = Convert.ToDouble(darabol[3]);
			}


			if (darabol[4] == "X")
			{
				this.d2 = -1.0;
			}
			else if (darabol[4] == "-")
			{
				this.d2 = -2.0;
			}
			else
			{
				this.d2 = Convert.ToDouble(darabol[4]);
			}


			if (darabol[5] == "X")
			{
				this.d3 = -1.0;
			}
			else if (darabol[5] == "-")
			{
				this.d3 = -2.0;
			}
			else
			{
				this.d3 = Convert.ToDouble(darabol[5]);
			}

		}
		public void kiir()
		{
			//Console.WriteLine($"{nev}; {csoport}; {nemzetKod}; {sorozat}; {d1}; {d2}; {d3}");
			
		}

		/*public double Eredmeny
		{
			get 
			{
				double max = d1;
				if (d2 > max)
				{
					max = d2;
				}

				if (d3 > max)
				{
					max = d3;
				}

				return max;
			}
		}*/

		public double Eredmeny => Math.Max(d1, Math.Max(d2, d3));


		public string Kod
		{
			get
			{
				kod = nemzetKod.Split('(')[1].TrimEnd(')');

				return kod;
			}
		}

		public string Nemzet
		{
			get
			{
				nemzet = nemzetKod.Split('(')[0].TrimEnd(')');

				return nemzet;

			}
		}

	}
}
