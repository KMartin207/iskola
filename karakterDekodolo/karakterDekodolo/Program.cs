using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace karakterDekodolo
{
    class Program
    {
        static List<Karakter> adatok = new List<Karakter>();
        static List<Karakter> szavak = new List<Karakter>();

        static string betu;

        static void Main(string[] args)
        {

            adatbeolvasas();

            feladat06();

            feladat07();

            feladat08();

            feladat09();
            Console.ReadKey();

        }

        private static void feladat09()
        {
            Console.WriteLine("9. feladat: Dekódolás");
            

            foreach (Karakter szo in szavak)
            {
                int i = 0;
                while (i < adatok.Count && !Karakter.Felismer(adatok[i], szo))
                {
                    i++;
                }

                if (i < adatok.Count) //megtalalta a keresett betű kódját
                {
                    Console.Write(adatok[i].karakter);
                }
                else
                {
                    Console.Write("?");
                }
            }

        }

        private static void feladat08()
        {
            StreamReader olvasocsatorna = new StreamReader(@"dekodol.txt", true);

            string sor;
            string karakter;
            string matrix;

            while (!olvasocsatorna.EndOfStream)
            {
                karakter = olvasocsatorna.ReadLine();

                matrix = "";



                for (int i = 0; i < 7; i++)
                {
                    sor = olvasocsatorna.ReadLine();

                    matrix = matrix + sor;

                }
                Karakter szo = new Karakter(karakter, matrix);
                szavak.Add(szo);

            }
            olvasocsatorna.Close();

            foreach (Karakter szo in szavak)
            {
                Console.WriteLine(szo.karakter + " " + szo.matrix);
            }
        }

        private static void feladat07()
        {
            Console.WriteLine("7. feladat: ");
            bool van_e = false;
            int i = 0;

            while (van_e == false && i < adatok.Count)
            {
                if (betu == adatok[i].karakter)
                {
                    van_e = true;
                    Karakter.kiir(adatok[i]);
                }
                i++;
            }

            if (!van_e)
            {
                Console.WriteLine("Nincs ilyen karakter az osztályban.");
            }


            /*string matrixJelen = "";

            foreach (Karakter adat in adatok)
            {

                if (betu == adat.karakter)
                {
                    matrixJelen = adat.matrix;
                }
                
            }

            int szamlalo = 0;

            for (int i = 0; i < 7; i++)
            {
                for (int b = 0; b < 4; b++)
                {
                    if (matrixJelen[szamlalo] == '0')
                    {
                        Console.Write(" ");
                    }
                    else
                    {
                        Console.Write("x");
                    }
                    szamlalo++;
                }
                Console.WriteLine();
            }*/

        }

        

        private static void feladat06()
        {
            List<string> angolAbc = new List<string>(); 

            Console.Write("Kérek egy angol nagybetűt: ");
            for (char i = 'A'; i < 'Z'; i++)
            {
                angolAbc.Add(i.ToString());
            }
            betu = Console.ReadLine();

            while (!angolAbc.Contains(betu))
            {
                Console.Write("Kérek egy angol nagybetűt: ");
                betu = Console.ReadLine();
            }

        }



        private static void adatbeolvasas()
        {
            //Fájl beolvasása adatok eltárolása

            StreamReader olvasocsatorna = new StreamReader(@"bank.txt", true);

            string sor;
            string karakter;
            string matrix;

            while (!olvasocsatorna.EndOfStream)
            {
                karakter = olvasocsatorna.ReadLine();

                matrix = "";

                

                for (int i = 0; i < 7; i++)
                {
                    sor = olvasocsatorna.ReadLine();

                    matrix = matrix + sor;

                }
                Karakter adat = new Karakter(karakter, matrix);
                adatok.Add(adat);

            }
            olvasocsatorna.Close();

            Console.WriteLine($"5.feladat: Karakterek száma: {adatok.Count}");

            foreach (Karakter adat in adatok)
            {
                Console.WriteLine(adat.karakter + " " + adat.matrix);
            }
        }
    }
}
