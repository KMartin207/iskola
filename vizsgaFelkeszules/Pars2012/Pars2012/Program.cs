using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace Pars2012
{
    class Program
    {
        static List<Versenyzo> adatok = new List<Versenyzo>();

        static void Main(string[] args)
        {
            adatbeolvasas();

            feladat06();

            feladat09();

            feladat10();

            Console.ReadKey();

        }

        private static void feladat10()
        {
            //LINQ lekérdezést használva
            var rendezettadatok = adatok
                .OrderByDescending(k => k.Eredmeny) // k az az aktuális elem a listában, eredmény ami miatt rendezünk
                .Take(12) // csak az elso 12 elem
                .ToList(); // listává alakítja

            //LINQ-t sql szerű szintaxissal

            /*var rendezettadatok2 =
                (from k in adatok
                 where k.Eredmeny > 50
                 orderby k.Eredmeny descending
                 select k).Take(12).ToList();*/

            Console.WriteLine("Fájlba írás...");

            StreamWriter irocsatorna = new StreamWriter("Dontos2012.txt");




            irocsatorna.WriteLine("Helyezés;Név;Csoport;Nemzet;NemzetKód;Sorozat;Eredmény");

            int i = 0;
            foreach (var adat in rendezettadatok)
            {
                i++;
                irocsatorna.WriteLine($"{i};{adat.nev};{adat.csoport};{adat.Nemzet};{adat.Kod};{adat.sorozat};{adat.Eredmeny}");
            }


            irocsatorna.Close();
        }

        private static void feladat09()
        {
            //double maxErtek = adatok[0].Eredmeny;

            Versenyzo legjobbEredmeny = adatok[0];

            foreach (var adat in adatok)
            {
                if (adat.Eredmeny > legjobbEredmeny.Eredmeny)
                {
                    legjobbEredmeny = adat;
                }
            }

            Console.WriteLine(
                $"9. feladat: A selejtező nyertese:\n\tNév: {legjobbEredmeny.nev}" +
                $"\n\tCsoport: {legjobbEredmeny.csoport}\n\tNemzet: {legjobbEredmeny.Nemzet}" +
                $"\n\tNemzet kód: {legjobbEredmeny.Kod}\n\tSorozat: {legjobbEredmeny.sorozat}" +
                $"\n\tEredmény: {legjobbEredmeny.Eredmeny}"
            );

        }

        private static void feladat06()
        {
            int tovabbjutokDb = 0;

            foreach (Versenyzo adat in adatok)
            {
                if (adat.d1 > 78 || adat.d2 > 78)
                {
                    tovabbjutokDb++;
                }
            }

            Console.WriteLine($"6. feladat: 78,00 méter feletti eredménnyel továbbjutott: {tovabbjutokDb} fő");
        }

        private static void adatbeolvasas()
        {
            StreamReader olvasocsatorna = new StreamReader("Selejtezo2012.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;
            string[] darabol;

            

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                Versenyzo adat = new Versenyzo(sor);

                adatok.Add(adat);
            }

            olvasocsatorna.Close();
            //ellenőrzés
            /*foreach (Versenyzo adat in adatok)
            {
                adat.kiir();
            }*/

            Console.WriteLine($"5. feladat Versenyzők száma a selejtezőben: {adatok.Count} fő");


        }
    }
}
