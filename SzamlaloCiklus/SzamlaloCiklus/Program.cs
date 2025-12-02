using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SzamlaloCiklus
{
    class Program
    {
        static void Main(string[] args)
        {
            feladat1();

            feladat2();

            feladat3();

            feladat4();

            feladat5();

            feladat6();

            feladat7();

            feladat8();

            Console.ReadKey();
        }

        private static void feladat8()
        {
            Console.WriteLine("\n8. VOLT-E PÁROS\n");
            int szam;
            szam = Convert.ToInt32(Console.ReadLine());
            bool volt = false;
            for (int i = 1; i <= szam; i++)
            {
                int adat = Convert.ToInt32(Console.ReadLine());
                if ((adat % 2) == 0)
                {
                    volt = true;
                }
            }
            if (volt == true)
            {
                Console.WriteLine("Volt páros szám a beírtak között.");
            }
        }

        private static void feladat7()
        {
            Console.WriteLine("\n7. ADOTT SZÁMÚ ADAT BEKÉRÉSE\n");
            int szam;
            szam = Convert.ToInt32(Console.ReadLine());
            
            for(int i=1; i<=szam; i++)
            {
                Console.ReadLine();
            }
            Console.WriteLine("Vége");
        }

        private static void feladat6()
        {
            Console.WriteLine("\n6. SZÁMTANI SOROZATOK\n");

            Console.Write("a.,");
            for (int a=1; a<=10; a++)
            {
                Console.Write("{0} ", a);
            }
            Console.WriteLine();

            int szam = 0;

            Console.Write("b., ");
            for(int b=1; b<=10; b++)
            {
                szam = szam + 2;
                Console.Write("{0} ", szam);
            }
            Console.WriteLine();


            szam = -2;
            Console.Write("c., ");
            for(int c=1; c<=10; c++)
            {
                szam = szam + 7;
                Console.Write("{0} ", szam);
            }
            Console.WriteLine();

            szam = 197;

            Console.Write("d., ");
            for (int d=1; d<=10; d++)
            {
                Console.Write("{0} ", szam);
                szam = szam - 3;
            }
            Console.WriteLine();

            szam = 100;
            Console.Write("e., ");
            for( int e=1; e<=10; e++)
            {
                Console.Write("{0} ", szam);
                szam = szam - 10;
            }

        }

        private static void feladat5()
        {
            Console.WriteLine("\n5. SZÁMOLÁS 0-TÓL -50-IG\n");
            for(int i=0; i>=-50; i--)
            {
                Console.Write("{0},", i);
            }
        }

        private static void feladat4()
        {
            Console.WriteLine("\n4. SZÁMOLÁS 50-150-IG\n");
            for(int i=50; i<=150; i++)
            {
                Console.WriteLine(i);
            }
        }

        private static void feladat3()
        {
            Console.WriteLine("\n3. SZÖVEG KIÍRATÁSA ADOTT SZÁMSZOR (3)\n");
            
            for(int i=10; i>=1; i--)
            {
                Console.WriteLine("{0}x Jó reggelt!", i);
            }
        }

        private static void feladat2()
        {
            Console.WriteLine("\n2. SZÖVEG KIÍRATÁSA ADOTT SZÁMSZOR (2)\n");
            for(int i=1; i<=10; i++)
            {
                Console.WriteLine("{0} Jó reggelt!", i);
            }
        }

        private static void feladat1()
        {
            Console.WriteLine("\n1. SZÖVEG KIÍRATÁSA ADOTT SZÁMSZOR (1)\n");
            for(int i=1; i<=100; i++)
            {
                Console.WriteLine("Szeretem az informatikát!");
            }
        }
    }
}
