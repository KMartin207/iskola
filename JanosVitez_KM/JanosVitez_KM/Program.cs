using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace JanosVitez_KM
{
    class Program
    {
        static void Main(string[] args)
        {
            feladatok();

            Console.ReadKey();
        }

        private static void feladatok()
        {
            StreamReader adat = new StreamReader(@"Z:\Programozas_C\12\JanosVitez_KM\JanosVitez_KM\JanosVitez.txt", Encoding.GetEncoding("iso-8859-2"));

            string vers = adat.ReadLine();
            string[] darabol;

            adat.Close();


            darabol = vers.Split(' ');

            int legHossz = 0;
            int szamlalo = 0;
            int neveloA = 0;
            int neveloOssz = 0;
            int tizedikBetuIndex = 0;
            int NagyBetuOssz = 0;
            int irasjelOssz = 0;
            int hasonloBetuOssz = 0;
            int hasonloBetuSzoban = 0;
            string hasonloBetuvelRendSzo = "";
            int szoSzamlalo = 0;

            for (int i = 0; i < darabol.Length; i++)
            {
                string nagyBetuSzo = darabol[i].ToUpper();
                foreach (var betu in darabol[i])
                {
                    if (betu != '.' && betu != ',')
                    {
                        szamlalo++;
                    }
                    foreach (var nagyBetu in nagyBetuSzo)
                    {
                        if (nagyBetu == betu && betu != '.' && betu != ',')
                        {
                            NagyBetuOssz++;
                        }
                    }

                    if (betu == '.' || betu == ',' || betu == '-' || betu == '!' || betu == '?')
                    {
                        irasjelOssz++;
                    }



                }

                if (szamlalo > legHossz)
                {
                    legHossz = szamlalo;
                }
                szamlalo = 0;

                if (darabol[i] == Convert.ToString('a') || darabol[i] == Convert.ToString('A'))
                {
                    neveloA++;
                }

                if (darabol[i] == "Az")
                {
                    neveloOssz++;
                }

                if (darabol[i] == "Az" || darabol[i] == "A" || darabol[i] == "a")
                {

                    tizedikBetuIndex++;

                }
            }



            Console.WriteLine($"\na.feladat: Ennyi szóbol áll a versrészlet: {darabol.Count()}");

            Console.WriteLine($"\nb.feladat: Ennyi betűs a leghoszabb szó: {legHossz}");

            Console.WriteLine($"\nc.feladat: Ennyi 'a' névelő van a versben: {neveloA}");

            Console.WriteLine($"\nd.feladat: Ennyi névelő van a versben: {neveloA + neveloOssz}");

            Console.WriteLine($"\ne.feladat: Ez a tizedik szó: {darabol[8 + tizedikBetuIndex]}");

            Console.WriteLine($"\nf.feladat: Összesen ennyi szó tartalmaz nagybetűt: {NagyBetuOssz}");

            Console.WriteLine($"\ng.feladat: Összesen ennyi írásjel van a versben: {irasjelOssz}");

            Console.Write("\nKérlek írj be egy betűt: ");
            char beirtBetu = Convert.ToChar(Console.ReadLine());
            Console.WriteLine();

            for (int i = 0; i < darabol.Length; i++)
            {
                szoSzamlalo++;
                foreach (var betu in darabol[i].ToLower())
                {
                    if (beirtBetu == betu)
                    {
                        hasonloBetuOssz++;
                        if (hasonloBetuOssz == 1)
                        {
                            hasonloBetuSzoban = szoSzamlalo;
                            hasonloBetuvelRendSzo = darabol[i];
                        }

                    }

                }

            }

            Console.WriteLine($"2.a.feladat: Összesen ennyi betű van a kért betűböl a versben: {hasonloBetuOssz}");

            Console.WriteLine($"2.b.feladat: A bekért betű a {hasonloBetuSzoban}. szóban található, és ez a szó a(z) '{hasonloBetuvelRendSzo}'");
        
            
        }
    }
}