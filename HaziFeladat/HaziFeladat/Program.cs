using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HaziFeladat
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("Helló világ!\n");


            Console.ForegroundColor = ConsoleColor.White;
            Console.WriteLine("Vár 5sec-ig");
            System.Threading.Thread.Sleep(1000);
            Console.WriteLine("1s");
            System.Threading.Thread.Sleep(1000);
            Console.WriteLine("2s");
            System.Threading.Thread.Sleep(1000);
            Console.WriteLine("3s");
            System.Threading.Thread.Sleep(1000);
            Console.WriteLine("4s");
            System.Threading.Thread.Sleep(1000);
            Console.WriteLine("5s");
            Console.WriteLine("Várakozás vége\n");
            System.Threading.Thread.Sleep(1000);

            Console.ForegroundColor = ConsoleColor.Green;
            Console.WriteLine("Nyomj le egy betűt");
            Console.ReadKey();
            System.Threading.Thread.Sleep(2000);

            Console.ForegroundColor = ConsoleColor.DarkYellow;
            Console.WriteLine("\n\nNyomd meg az entert a kilépéshez");
            Console.ReadLine();

        }
    }
}
