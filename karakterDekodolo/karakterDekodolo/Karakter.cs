using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace karakterDekodolo
{
    class Karakter
    {

		public string karakter;
		public string matrix;
	


		public Karakter(string karakter, string matrix)
		{
			this.karakter = karakter;
			this.matrix = matrix;
		}

		public static void kiir(Karakter kiirando)
		{
			int j = 0;
			foreach (char kar in kiirando.matrix)
			{
				if (kar == '1')
				{
					Console.Write("X");
				}
				else
				{
					Console.Write(" ");
				}
				j++;

				if (j%4 == 0)
				{
					Console.WriteLine();
				}

			}
		}

		public static bool Felismer(Karakter kod, Karakter kodolando)
		{
			bool talal = false;

			if (kod.matrix == kodolando.matrix)
			{
				talal = true;
			}

			return talal;
		}


	}
}
