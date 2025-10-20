using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace ultraBalaton
{
    class Program
    {

        struct VersenyzoStruktura  
        {
            
            public string versenyzoNev;  
            public int rajtszam;         
            public string kategoria;         
            public int versenyidoO;
            public int versenyidoP;
            public int versenyidoS;
            public int tavszazalek;             
        }

        static List<VersenyzoStruktura> adatok = new List<VersenyzoStruktura>();

        static void Main(string[] args)
        {

            feladat2();

            feladat3();

            feladat4();

            feladat5();

            feladat7();

            feladat8();

            Console.ReadKey();


        }

        private static void feladat8()
        {

            int oraNoiLegjobb = 0;
            int percNoiLegjobb = 0;
            int mspercNoiLegjobb = 0;
            string nev = "";
            int versenyzoSzama = 0;


            for (int i = 0; i < adatok.Count; i++)
            {
                if (adatok[i].kategoria == "Noi" && adatok[i].tavszazalek == 100)
                {
                    if (adatok[i].versenyidoO >= oraNoiLegjobb)
                    {
                        if (adatok[i].versenyidoP >= percNoiLegjobb)
                        {
                            if (adatok[i].versenyidoS > mspercNoiLegjobb)
                            {
                                oraNoiLegjobb = adatok[i].versenyidoO;
                                percNoiLegjobb = adatok[i].versenyidoP;
                                mspercNoiLegjobb = adatok[i].versenyidoS;
                                nev = adatok[i].versenyzoNev;
                                versenyzoSzama = adatok[i].rajtszam;
                            }
                        }
                    }
                }
            }

            Console.WriteLine("8. feladat: Verseny győztesei");
            Console.WriteLine("Nők: {0} ({1}.) - {2}:{3}:{4}", nev, versenyzoSzama, oraNoiLegjobb, percNoiLegjobb, mspercNoiLegjobb);

            int oraFerfi = 0;
        }

        private static void feladat7()
        {
            
            double idoOrabanOssz = 0;
            int osszFerfi = 0;

            for (int i = 0; i < adatok.Count; i++)
            {
                if (adatok[i].kategoria == "Ferfi" && adatok[i].tavszazalek == 100)
                {
                    idoOrabanOssz = idoOrabanOssz + IdoOraban(adatok[i].versenyidoO, adatok[i].versenyidoP, adatok[i].versenyidoS);
                    osszFerfi++;
                }
            }

            Console.WriteLine("7. feladat: Átlagos idő: {0} óra", idoOrabanOssz / osszFerfi);





        }

        private static double IdoOraban(int ora, int perc, int msperc)
        {
            

            double teljesIdoOraban = ora + (perc / 60) + (msperc / 3600);
            
            return teljesIdoOraban;
        }

        private static void feladat5()
        {
            Console.Write("5. feladat: Kérem a sportoló nevét: ");
            string versenyzoNev = Console.ReadLine();

            int szamlalo = 0;
            string versenyzoVolt = "Nem";
            string versenyzoVegzett = "Nem";
            int ora = 0;
            int perc = 0;
            int msperc = 0;


            while ( szamlalo < adatok.Count  && versenyzoVolt != "Igen")
            {

                if (adatok[szamlalo].versenyzoNev == versenyzoNev)
                {
                    versenyzoVolt = "Igen";

                    if (adatok[szamlalo].tavszazalek == 100)
                    {
                        versenyzoVegzett = "Igen";
                    }
                    ora = adatok[szamlalo].versenyidoO;
                    perc = adatok[szamlalo].versenyidoP;
                    msperc = adatok[szamlalo].versenyidoS;
                }

                szamlalo++;

            }

            double teljesIdoOraban = IdoOraban(ora, perc, msperc);

            Console.WriteLine("\tIndult egyéniben a sportoló? {0}", versenyzoVolt);
            if (versenyzoVolt == "Igen")
            {
                Console.WriteLine("\tTeljesítette a teljes távot? {0}", versenyzoVegzett);
            }
        }

        private static void feladat4()
        {
            Console.Write("4. feladat: Célba érkező női sportolók: ");

            int noiTeljesTavDb = 0;

            for( int i = 0 ; i < adatok.Count ; i++ )
            {
                if (adatok[i].kategoria == "Noi" && adatok[i].tavszazalek == 100)
                {
                    noiTeljesTavDb++;
                }
            }

            Console.WriteLine("{0} fő.", noiTeljesTavDb);

        }

        private static void feladat3()
        {

            Console.WriteLine("3. Feladat: Egyéni indulók: {0} fő", adatok.Count);
        }

        private static void feladat2()
        {

            StreamReader olvasocsatorna = new StreamReader(@"D:\Iskola\Ultrabalaton\ub2017egyeni.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;


            
            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(';');
                VersenyzoStruktura eredmeny = new VersenyzoStruktura();

                eredmeny.versenyzoNev = darabol[0];
                eredmeny.rajtszam = Convert.ToInt32(darabol[1]);
                eredmeny.kategoria = darabol[2];

                string[] ido = darabol[3].Split(':');

                eredmeny.versenyidoO = Convert.ToInt32(ido[0]);
                eredmeny.versenyidoP = Convert.ToInt32(ido[1]);
                eredmeny.versenyidoS = Convert.ToInt32(ido[2]);
                eredmeny.tavszazalek = Convert.ToInt32(darabol[4]);

                adatok.Add(eredmeny);
            }

            olvasocsatorna.Close();

        }
    }
}
