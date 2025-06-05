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


            StreamReader olvasocsatorna = new StreamReader(@"Z:\Programozas_C\12\FajlkezelesOtoslotto\FajlkezelesOtoslotto\lottoszamok.csv");

            string het = olvasocsatorna.ReadLine();
            Console.WriteLine(het);


            int[,] darabol = new int[51,5];
            int sor = 0;

            for (int i = 0; i < darabol.GetLength(0); i++)
            {

                for (int f = 0; f < darabol.GetLength(1); f++)
                {
                    darabol[i, sor] = Convert.ToInt32(het);
                    het = olvasocsatorna.ReadLine();
                }
                
                

                if (sor == 4)
                {
                    sor = -1;
                }
                sor++;
            }

            olvasocsatorna.Close();

            Console.Write("\n4.feladat: Kérlek írj be egy számot 1 és 51 között.");

            int bekertSzam = Convert.ToInt32(Console.ReadLine());



            Console.WriteLine("\n5.feladat: A beírt szám heti húzásai.\n");

            for (int i = 0; i < darabol.GetLength(1); i++)
            {
                Console.Write($"{darabol[bekertSzam-1, i]} ");
            }



            Console.WriteLine("\n6.feladat: Volt-e olyan szám amit egyszer sem húztak ki?");

            //HashSet<string> kihuzottSzamok = new HashSet<string>();


            /*for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int f = 0; f < 5; f++)
                {
                    //kihuzottSzamok.Add(Convert.ToChar(darabol[i,f]));
                    Console.WriteLine(Convert.ToInt32(darabol[0, 4]));

                }
                
                    
                    
                
            }*/

            

            for (int i = 0; i < darabol.GetLength(0); i++)
            {
                for (int b = 0; b < darabol.GetLength(1); b++)
                {
                    Console.WriteLine($"{i}.{b}/ {darabol[i, b]}");
                }
            }

            

            /*Console.WriteLine(kihuzottSzamok.Count());

            if (kihuzottSzamok.Count() != 90)
            {
                Console.WriteLine("Volt olyan szám amit egyszer sem húztak ki.");
            }*/
        }
    }
}
