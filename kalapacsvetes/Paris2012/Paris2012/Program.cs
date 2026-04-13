using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Paris2012
{
    internal class Program
    {
        struct versenyzok
        {
            public string nev;
            public string csoport;
            public string nemzet;
            public string kod;
            public string Elsodobas;
            public string Masodikdobas;
            public string HarmadikDobas;
        }

        static List<versenyzok> adatok = new List<versenyzok>();

        static void Main(string[] args)
        {

            adatokbeolvasasa();

            Console.WriteLine("5. feladat: Versenyzők száma a selejtezőben: {0}fő ", adatok.Count);

            feladat6();


            Console.ReadKey();
        }

        private static void feladat6()
        {
            Console.Write("6. feladat: 78 méter feletti eredménnyel továbbjutott: ");

            int szamlalo = 0;
            for (int i = 0; i < adatok.Count; i++)
            {
                double dobas1Ell = ellenorzes(adatok[i].Elsodobas);
                double dobas2Ell = ellenorzes(adatok[i].Masodikdobas);
                double dobas3Ell = ellenorzes(adatok[i].HarmadikDobas);
                if (dobas1Ell > 78 || dobas2Ell > 78 || dobas3Ell > 78)
                {
                    szamlalo++;
                }
            }

            Console.WriteLine($"{szamlalo} fő");


        }

        private static double ellenorzes(string dobas)
        {
            if (dobas == "X" || dobas == "-")
                return 0;

            return Convert.ToDouble(dobas);
        }

        private static void adatokbeolvasasa()
        {
            StreamReader olvasocsatorna = new StreamReader(@"E:\kalapacsvetes\Selejtezo2012.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;
            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(';');

                versenyzok versenyzo = new versenyzok();

                versenyzo.nev = darabol[0];
                versenyzo.csoport = darabol[1];

                string nemzetEsKod = darabol[2];
                versenyzo.nemzet = nemzetEsKod.Split('(')[0].Trim();
                versenyzo.kod = nemzetEsKod.Split('(')[1].Replace(")", "").Trim();

                versenyzo.Elsodobas = darabol[3];
                versenyzo.Masodikdobas = darabol[4];
                versenyzo.HarmadikDobas = darabol[5];


                adatok.Add(versenyzo);
            }

            olvasocsatorna.Close();
        }
    }
}
