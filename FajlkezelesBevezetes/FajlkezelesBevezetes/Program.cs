using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace FajlkezelesBevezetes
{
    class Program
    {
        static void Main(string[] args)
        {
            //Fájlkezelés bevezetés
            //Első lépés: a fájl megnyitása
            //második: ki vagy bemenő adat hozzácsatolása a bemenő kimenő adathoz
            //harmadik: stream
            //negyedik: a fájl bezárása

            //két típusú fájl van: szöveges pl.:txt/csv, bináris fájlok

            //fel01();
            //fel02();
            //fel03();
            //fel04();
            fel05();
            fel06();
            Console.ReadKey();
        }

        private static void fel06()
        {
            throw new NotImplementedException();
        }

        private static void fel05()
        {
            //Véletlenek átlaga
       

            Console.WriteLine("Fájlból olvasás... ");

            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\veletlenek.txt", Encoding.GetEncoding("iso-8859-2"), false);

            string sor = olvasocsatorna.ReadLine();

            int szamlalo = 0;
            double ossz = 0;
            double atlag;


            while (sor != null)
            {
                szamlalo++;
                ossz = ossz + Convert.ToInt32(sor);
                sor = olvasocsatorna.ReadLine();
            }


            olvasocsatorna.Close();

            atlag = ossz / szamlalo;

            Console.WriteLine("A számok átlaga: {0}", atlag);

            Console.WriteLine("Fájlból olvasás vége");
        }

        private static void fel04()
        {
            Console.WriteLine("Fájlból olvasás... ");

            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\veletlenek.txt", Encoding.GetEncoding("iso-8859-2"), false);

            string sor = olvasocsatorna.ReadLine();

            while (sor != null)
            {
                Console.WriteLine(sor);
                sor = olvasocsatorna.ReadLine();
                
            }

            olvasocsatorna.Close();

            Console.WriteLine("Fájlból olvasás vége");
        }

        private static void fel03()
        {
            Random random = new Random();

            Console.Write("\n\nKérlek írj be egy számot: ");
            int bekertSzam = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Fájlba írás... ");

            StreamWriter irocsatorna = new StreamWriter(@"Z:\Programozas_C\12\veletlenek.txt", false, Encoding.GetEncoding("iso-8859-2"));

            for (int i = 0; i < bekertSzam; i++)
            {
                irocsatorna.WriteLine(random.Next(50, 500));
            }

            irocsatorna.Close();

            Console.WriteLine("\nA véletlenszámok generálása sikeres volt.");
            Console.WriteLine("\nFájlba írás kész");
        }

        private static void fel02()
        {
            Console.WriteLine("Fájlból olvasás... ");

            //StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\Hello.txt");
            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\Hello.txt", Encoding.GetEncoding("iso-8859-2"), false);


            Console.WriteLine(olvasocsatorna.ReadLine());
            Console.WriteLine(olvasocsatorna.ReadLine());
            Console.WriteLine(olvasocsatorna.ReadLine());

            olvasocsatorna.Close();

            Console.WriteLine("Fájlból olvasás vége");



        }

        private static void fel01()
        {
            //fájlba írás StreamWriter segítségével

            Console.WriteLine("Fájlba írás... ");

            StreamWriter irocsatorna = new StreamWriter(@"Z:\Programozas_C\12\Hello.txt", false, Encoding.GetEncoding("iso-8859-2"));

            irocsatorna.WriteLine("Hello Martin!");
            irocsatorna.WriteLine("Ez a második sor");
            irocsatorna.WriteLine("Őáépőüóúőáű");
            irocsatorna.Close();

            Console.WriteLine("Fájlba írás kész");


        }
    }
}
