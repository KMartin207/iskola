using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace Kalapacsvetes
{
    class Program
    {

        static List<Sportolo> adatok = new List<Sportolo>();

        static void Main(string[] args)
        {

            adatbeolvasas();

            feladat05();

            Console.ReadKey();

        }

        private static void feladat05()
        {
            double atalgDobasok = 0;
            int szamlalo = 0;
            foreach (var adat in adatok)
            {
                if (adat.orszagKod == "HUN")
                {
                    szamlalo++;
                    atalgDobasok = atalgDobasok + adat.eredmeny;
                }
                
            }

            Console.WriteLine($"5. feladat: A magyar sportolók átlagosan {Math.Round(atalgDobasok / szamlalo, 2)} métert dobtak.");
        }

        private static void adatbeolvasas()
        {
            StreamReader olvasocsatorna = new StreamReader("kalapacsvetes.txt");

            string elsosor = olvasocsatorna.ReadLine();

            string sor;
            string[] darabol;


            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(';');

                Sportolo adat = new Sportolo(darabol);

                /*adat.helyezes = Convert.ToInt32(darabol[0]);
                adat.eredmeny = Convert.ToDouble(darabol[1]);
                adat.sportoloNev = darabol[2];
                adat.orszagKod = darabol[3];
                adat.helyszin = darabol[4];
                adat.datum = darabol[5];*/

                adatok.Add(adat);
                
            }
            olvasocsatorna.Close();


            Console.WriteLine($"4. feladat: {adatok.Count} dobás eredménye található");
        

        }
    }
}
