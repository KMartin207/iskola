using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace FajlkezelesOtoslotto
{
    class Program
    {
        static void Main(string[] args)
        {

            feladat();
            Console.ReadKey();
        }

        private static void feladat()
        {

            Console.WriteLine("1.feladat: 52. hét lottószámai megadása. ");
            //List<string> het52 = new List<string>();

            int[] het52 = new int[5];

            for (int i = 0; i < 5; i++)
            {
                Console.Write($"{i+1}.) Kérlek írj be egy számot: ");
                //het52.Add(Console.ReadLine());
                het52[i] = Convert.ToInt32(Console.ReadLine());
            }

            Console.WriteLine("\n\n2.feladat: Bekért számok elrendezve:\n");

            Array.Sort(het52);

            foreach (var szam in het52)
            {
                Console.Write($"{szam} ");

            }
            Console.WriteLine();

            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\FajlkezelesOtoslotto\FajlkezelesOtoslotto\lottoszamok.csv");

            string[] het = olvasocsatorna.ReadLine().Split(' ');
            

            int[,] darabol = new int[51,5];

            for (int i = 0; i < darabol.GetLength(0); i++)
            {

                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    darabol[i, f] = Convert.ToInt32(het[f]);
                    Console.Write($"{het[f]} ");
                }
                Console.WriteLine();
                if (!olvasocsatorna.EndOfStream)
                {
                    het = olvasocsatorna.ReadLine().Split(' ');
                }
                
            }

            olvasocsatorna.Close();

            Console.Write("\n4.feladat: Kérlek írj be egy számot 1 és 51 között.\n");

            int bekertSzam = Convert.ToInt32(Console.ReadLine());



            Console.WriteLine("\n5.feladat: A beírt szám heti húzásai.\n");

            for (int i = 0; i < darabol.GetLength(1); i++)
            {
                Console.Write($"{darabol[bekertSzam-1, i]} ");
            }



            Console.WriteLine("\n6.feladat: Volt-e olyan szám amit egyszer sem húztak ki?");

            HashSet<int> kihuzottSzamok = new HashSet<int>();


            for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    kihuzottSzamok.Add(darabol[i,f]);
                    Console.WriteLine(Convert.ToInt32(darabol[i,f]));

                }

                Console.WriteLine(); 
                
            }

            Console.WriteLine();

            Console.WriteLine(kihuzottSzamok.Count());

            if (kihuzottSzamok.Count() != 90)
            {
                Console.WriteLine("Volt olyan szám amit egyszer sem húztak ki.");
            }

            /*kihuzottSzamok.Sort();

            foreach (var szam in kihuzottSzamok)
            {

            }*/

            //7.feladat

            int paratlanSzamok = 0;

            for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    if (darabol[i,f] % 2 != 0)
                    {
                        paratlanSzamok++;
                    }
                }
            }


            Console.WriteLine($"\n7.feladat: Páratlan kihúzott számok mennyisége: {paratlanSzamok}");


            //8.feladat

            Console.WriteLine($"\n8.feladat: Lottó számok és a bekért számok kiírása egy jegyzetbe.");

            StreamWriter irocsatorna = new StreamWriter(@"Z:\Programozas_C\12\FajlkezelesOtoslotto\FajlkezelesOtoslotto\lotto52.txt", false);

            for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    irocsatorna.Write($"{darabol[i,f]} ");
                }
                irocsatorna.WriteLine();
            }

            foreach (var szam in het52)
            {
                irocsatorna.Write($"{szam} ");
            }
            


            irocsatorna.Close();


            //9.feladat

            Console.WriteLine($"\n9.feladat: A kihúzott számok megszámlálása 1től 90ig.");

            List<int> lottoSzamok = new List<int>();

            for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    lottoSzamok.Add(darabol[i, f]);
                }
            }

            lottoSzamok.Sort();

            for (int i = 0; i < lottoSzamok.Count; i++)
            {
                Console.Write($"{lottoSzamok[i]} ");
            }



        }
    }
}
