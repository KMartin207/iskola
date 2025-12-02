using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace CB_radio
{
    class Program
    {
        struct taxiradioforgalom
        {
            public int ora;
            public int perc;
            public int adasDb;
            public string nev;
        }

        static List<taxiradioforgalom> adatok = new List<taxiradioforgalom>();

        static void Main(string[] args)
        {

            //1p

            //1p
            //1p
            //1p
            //0p

            //1p, 1p, 1p, 1p (4p)

            
            //1p, 1p, 1p, 1p, 1p, 1p (6p)


            //1p, 1p, 1p, 1p, 1p (5p)

            //1p, 1p, 1p, 1p, 1p (5p)

            //1p, 1p, 1p, 1p, 1p (5p)

            //1p, 0p, 0p

            adatbeolvasas();

            osszbejegyzes();

            cbradioHasznalata();

            radioHaszMennyiseg();

            filebaIras();

            soforokSzama();

            Console.ReadKey();

        }

        private static void soforokSzama()
        {
            List<string> nevek = new List<string>();
            

            for (int i = 0; i < adatok.Count; i++)
            {
                for (int b = 0; b < nevek.Count; b++)
                {
                    if (adatok[i].nev == nevek[b])
                    {
                        nevek.Add(adatok[i].nev);
                    }
                }
                
                
            }

            Console.WriteLine(nevek.Count);

        }

        private static void filebaIras()
        {
            StreamWriter irocsatorna = new StreamWriter(@"Z:\Programozas_C\CB-radio\cb2.txt", true);

            irocsatorna.WriteLine("Kezdes;Nev;AdasDb");

            for (int i = 0; i < adatok.Count; i++)
            {
                irocsatorna.WriteLine("{0};{1};{2}", AtszamolPercre(adatok[i].ora, adatok[i].perc), adatok[i].nev, adatok[i].adasDb);
            }

        }

        private static double AtszamolPercre(double ora, double perc)
        {
            double oraPercben = ora * 60 + perc;

            return oraPercben;
        }

        private static void radioHaszMennyiseg()
        {
            Console.Write("5. feladat: Kérek egy nevet: ");
            string bekertNev = Console.ReadLine();

            int radioHasznalatOssz = 0;

            for (int i = 0; i < adatok.Count; i++)
            {
                if (bekertNev == adatok[i].nev)
                {
                    radioHasznalatOssz = radioHasznalatOssz + adatok[i].adasDb;
                }
            }

            if (radioHasznalatOssz == 0)
            {
                Console.WriteLine("\tNincs ilyen nevû sofõr!");
            }
            else
            {
                Console.WriteLine("\t{0} {1}x használta a CB-rádiót.", bekertNev, radioHasznalatOssz);
            }
        }

        private static void cbradioHasznalata()
        {
            Console.Write("4. feladat: ");

            int szamlalo = 0;
            string vanE = "Nem";

            while (vanE != "" || szamlalo < adatok.Count )
            {
                if(adatok[szamlalo].adasDb >= 4)
                {
                    vanE = "";
                }
                szamlalo++;
            }

            Console.WriteLine("{0}Volt négy adást indító sofõr.", vanE);

        }

        private static void osszbejegyzes()
        {
            Console.WriteLine("3. feladat: Bejegyzések száma: {0} db", adatok.Count);

        }

        private static void adatbeolvasas()
        {
            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\CB-radio\cb.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;

            
            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(';');

                taxiradioforgalom adat = new taxiradioforgalom();

                adat.ora = Convert.ToInt32(darabol[0]);
                adat.perc = Convert.ToInt32(darabol[1]);
                adat.adasDb = Convert.ToInt32(darabol[2]);
                adat.nev = darabol[3];


                adatok.Add(adat);
            }

            olvasocsatorna.Close();

        }
    }
}
