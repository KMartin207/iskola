using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace footgolf
{
    class Program
    {
        struct versenyzokStruktura
        {
            public string nev;
            public string kategoria;
            public string egyesulet;
            public int[] pontok;
        }
        static List<versenyzokStruktura> adatok = new List<versenyzokStruktura>();
        static void Main(string[] args)
        {

            feladat2();

            Console.ReadKey();

        }

        private static void feladat2()
        {

            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\Footgolf\fob2016.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;

            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();

                darabol = sor.Split(';');

                versenyzokStruktura adat = new versenyzokStruktura();

                adat.nev = darabol[0];
                adat.kategoria = darabol[1];
                adat.egyesulet = darabol[2];

                

                for (int i = 0; i <= 7; i++)
                {
                    adat.pontok[i] = Convert.ToInt32(darabol[i]);
                }

            };

        }
    }
}
