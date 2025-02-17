using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace szorzotabla
{
    class Program
    {
        static void Main(string[] args)
        {


            int valasz = kiiras();

            if(valasz == 1)
            {
                feladat();
            }
            else if(valasz == 2)
            {
                rangsor();
            }

            Console.ReadKey();

        }

        private static void rangsor()
        {
            
        }

        private static void feladat()
        {
            string nev = felhasz();


            

        }

        private static string felhasz()
        {
            Console.WriteLine("Feladatsor");
            Console.WriteLine("Kérlek írj be egy felhasználónevet: ");
            string felhasznalo = Console.ReadLine();

            return felhasznalo;

        }

        private static int kiiras()
        {
            Console.WriteLine("Szorzótábala");

            Console.WriteLine("Menü");
            Console.WriteLine("\t1.) Feladatsor");
            Console.WriteLine("\t2.) Ranglista");

            int szam = Convert.ToInt32(Console.ReadLine());


            return szam;
        }
    }
}
