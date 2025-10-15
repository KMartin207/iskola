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
            public string rajtszam;         
            public string kategoria;         
            public int versenyido;             
            public int tavszazalek;             
        }

        static void Main(string[] args)
        {

            feladat2();

            


        }

        private static void feladat2()
        {

            StreamReader olvasocsatorna = new StreamReader(@"..\ub2017egyeni", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;


            List<VersenyzoStruktura> adatok = new List<VersenyzoStruktura>();
            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(' ');

                VersenyzoStruktura eredmeny = new VersenyzoStruktura();

                eredmeny.versenyzoNev = darabol[0];
                eredmeny.rajtszam = darabol[1];
                eredmeny.kategoria = darabol[2];
                eredmeny.versenyido = darabol[3];
                eredmeny.tavszazalek = darabol[4];

            }

        }
    }
}
