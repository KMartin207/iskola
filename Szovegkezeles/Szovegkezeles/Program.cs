using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Szovegkezeles
{
    class Program
    {
        static void Main(string[] args)
        {
            /*feladat1();

            feladat2();

            feladat3();

            feladat4();*/

            feladat5();

            /*feladat6();

            feladat7();

            feladat8();

            feladat9();

            feladat10();

            feladat11();

            feladat12();

            feladat13();

            feladat14();

            feladat15();

            feladat16();

            feladat17();

            feladat18();*/

            Console.ReadLine();
        }

        private static void feladat18()
        {
            Console.WriteLine("18. BETŰKERESŐ");

            string mondat;
            char karakter;
            string poz1 = "";
            string poz2 = "";
            string nagyb;
            string kisb;
            int szamlalo1 = 0;
            int szamlalo2 = 0;

            Console.Write("A mondat = ");
            mondat = Console.ReadLine();
            nagyb = mondat.ToUpper();
            kisb = mondat.ToLower();

            Console.Write("A keresendő karakter = ");
            karakter = Convert.ToChar(Console.ReadLine());

            for (int i = 0; i < mondat.Length; i++)
            {
                if (karakter == nagyb[i])
                {
                    Console.WriteLine(nagyb[i]);
                    Console.WriteLine(kisb[i]);
                    poz1 = poz1 + (i + 1) + ", ";
                    szamlalo1 = szamlalo1 + 1;
                }
                else if (karakter == kisb[i] || karakter == nagyb[i])
                {
                    poz2 = poz2 + (i + 1) + ", ";
                    szamlalo2 = szamlalo2 + 1;
                }
            }

            Console.WriteLine("Ha számít a kis- és nagybetű eltérés:\nA mondatban {0}db '{1}' karakter található. Helye a(z) {2}karakter", szamlalo2, karakter, poz2);
            Console.WriteLine("Ha nem számít a kis- és nagybetű eltérés:\nA mondatban {0}db '{1}' karakter található. Helye a(z) {2}karakter", szamlalo1, karakter, poz1);

        }

        private static void feladat17()
        {
            Console.WriteLine("17. KIS-NAGYBETŰ PÁR");

            string karakter;
            Console.Write("Mi lesz a karakter? ");
            karakter = Console.ReadLine();

            if (karakter == karakter.ToUpper())
            {
                Console.WriteLine("A beírt karakter nagybetű volt, párja: {0} - {1}", karakter, karakter.ToLower());
            }
            else if (karakter == karakter.ToLower())
            {
                Console.WriteLine("A beírt karakter kisbetű volt, párja: {0} - {1}", karakter, karakter.ToUpper());
            }
        }

        private static void feladat16()
        {
            Console.WriteLine("16. NÉV SZÉTBONTÁSA");
            /*
            bool van_e = false;
            int nev;

            string telnev;
            Console.WriteLine("A teljes név = ");
            telnev = Console.ReadLine();

            for (int i = 0; i < telnev.Length; i++)
            {
                if (Convert.ToString(telnev[i]) == " ")
                {
                    van_e = true;
                }
            }

            if (van_e == false)
            {
                Console.WriteLine("A nevedbe nincs szóköz.");
            }
            else
            {
                Console.WriteLine("A vezetéknév: {0}", telnev.IndexOf(' '));
            }
            */

            string teljesnev = Console.ReadLine();

            int szokozhelye = teljesnev.IndexOf(' ');
            string vezeteknev, keresztnev;
            int keresztnevhossza = teljesnev.Length - szokozhelye - 1;

            if (szokozhelye >= 0)
            {
                vezeteknev = teljesnev.Substring(0, szokozhelye);
                keresztnev = teljesnev.Substring(szokozhelye + 1, keresztnevhossza);
                Console.WriteLine("A vezetéknév: " + vezeteknev);
                Console.WriteLine("A keresztnév: " + keresztnev);

            }
        }

        private static void feladat15()
        {
            Console.WriteLine("15. NÉV-KOMBINÁCIÓK");

            string e_vez;
            string m_vez;
            string e_ker;
            string m_ker;

            Console.Write("Az első vezetéknév = ");
            e_vez = Console.ReadLine();

            Console.Write("A második vezetéknév = ");
            m_vez = Console.ReadLine();

            Console.Write("Az eslő keresztnev = ");
            e_ker = Console.ReadLine();

            Console.Write("A második keresztnév = ");
            m_ker = Console.ReadLine();

            Console.WriteLine("A lehetséges névkombinációk: ");
            Console.WriteLine(e_vez + " " + e_ker);
            Console.WriteLine(e_vez + " " + m_ker);
            Console.WriteLine(m_vez + " " + e_ker);
            Console.WriteLine(m_vez + " " + m_ker);
        }

        private static void feladat14()
        {
            Console.WriteLine("\n14. SZÓKÖZ NÉLKÜL");

            string mondat;
            string szokoz_nelkul = "";
            Console.Write("A mondat = ");
            mondat = Console.ReadLine();

            for (int i = 0; i < mondat.Length; i++)
            {
                if (mondat[i] != ' ')
                {
                    szokoz_nelkul = szokoz_nelkul + mondat[i];
                }
            }
            Console.WriteLine(szokoz_nelkul);
        }

        private static void feladat13()
        {
            Console.WriteLine("\n13. SZÓKÖZÖK SZÁMA");

            string mondat;
            int szokoz = 0;
            Console.Write("A mondat = ");
            mondat = Console.ReadLine();

            for (int i = 0; i < mondat.Length; i++)
            {
                if (mondat[i] == ' ')
                {
                    szokoz = szokoz + 1;
                }
            }
            Console.WriteLine("A fenti mondatban a szóközök száma: {0}", szokoz);
        }

        private static void feladat12()
        {
            Console.WriteLine("\n12. NAGYBETŰK FELSOROLÁSA");

            string betuk = "";
            string nagy_mondat;
            string mondat;
            

            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();
            nagy_mondat = mondat.ToUpper();

            for (int i = 0; i < mondat.Length; i++)
            {

                if (mondat[i] == nagy_mondat[i])
                {
                    betuk = betuk + mondat[i] + ' ';
                }
            }
            Console.WriteLine("A fenti mondatban ezek voltak a nagybetűk: {0}", betuk);
        }

        private static void feladat11()
        {
            Console.WriteLine("\n11. NAGYBETŰK SZÁMA");

            string nagy_mondat;
            string mondat;
            int szamlalo = 0;

            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();
            nagy_mondat = mondat.ToUpper();

            for (int i = 0; i < mondat.Length; i++)
            {

                if (mondat[i] == nagy_mondat[i])
                {
                    szamlalo = szamlalo + 1;
                }
            }
            Console.WriteLine("A fenti mondatban a nagybetűk száma: {0}", szamlalo);

        }

        private static void feladat10()
        {
            Console.WriteLine("\n10. VOLT-E NAGYBETŰ");

            bool volt_e = false;
            string nagy_mondat;

            string mondat;
            
            Console.WriteLine("Írj be egy mondatot: ");
            mondat = Console.ReadLine();
            nagy_mondat = mondat.ToUpper();

            for (int i = 0; i < mondat.Length; i++)
            {
                if (mondat[i] == nagy_mondat[i])
                {
                    volt_e = true;
                }
            }

            if (volt_e == true) //(volt_e)
            {
                Console.WriteLine("A fenti mondatban volt nagybetű.");
            }
            else
            {
                Console.WriteLine("nem volt");
            }
            /*Ezt a feladatot érdemes megcsinálni elöl vagy hátultesztelős ciklussal*/
        }

        private static void feladat9()
        {
            Console.WriteLine("\nKarakternégyzet");

            int a;
            Console.Write("Mennyi karakterből álljon a négyzet? ");
            a = Convert.ToInt32(Console.ReadLine());

            char karakter;
            Console.WriteLine("Milyen karakterből álljon a négyzet? ");
            karakter = Convert.ToChar(Console.ReadLine());

            for (int i = 1; i <= a; i++)
            {
                Console.Write(karakter);

                for (int b = 2; b <= a; b++)
                {
                    Console.Write(karakter);
                }
                Console.WriteLine();
            }

        }

        private static void feladat8()
        {
            Console.WriteLine("\n8. visszafelé program");

            string mondat;
            Console.WriteLine("Írj be egy mondatot: ");
            mondat = Console.ReadLine();

            Console.WriteLine("A beírt mondat visszafelé: ");

            for (int i = mondat.Length - 1; i >= 0; i--)
            {
                Console.Write(mondat[i]);
            }
        }

        private static void feladat7()
        {
            Console.WriteLine("\n7. Függőleges");

            string nev;
            Console.Write("Írj be egy keresztnevet: ");
            nev = Console.ReadLine();
            
            for (int i = 0; i < nev.Length; i++)
            {
                Console.WriteLine(nev[i]);
            }
        }

        private static void feladat6()
        {
            Console.WriteLine("\n6. KARAKTER  ASCII KÓD");


            /*Console.WriteLine("Az A karakter ASCII kódja: 65");
            

            string karakter;

            Console.Write("Kérek egy karaktert: ");
            karakter = Console.ReadLine();

            int ascii_karakter;
            int szam = 0;

            for (int i = 0; i <= 255; i++)
            {
                if (Convert.ToChar(i) == Convert.ToChar(karakter)) {
                    Console.Write(i);
                    szam = i;
                }   
            }*/

            int be_karakter;
            char karakter = 'A';
            
            Console.Write("Az {0} karakter ASCII kódja: ", karakter);
            Console.WriteLine(Convert.ToInt32(karakter));

            Console.Write("Kérek egy karaktert: ");
            be_karakter = Convert.ToChar(Console.ReadLine());

            Console.Write("A(z) {0} karakter kódja: {1}", be_karakter, Convert.ToInt32(be_karakter));
            

            //Console.WriteLine("\nA(z) {0} karakter kódja: {1}", karakter, szam);
        }

        private static void feladat5()
        {
            Console.WriteLine("\n5. ASCII KÓD  KARAKTER");

            

            for (int i = 0; i <= 255; i++)
            {
                
                Console.Write(" {0}", Convert.ToChar(i));
            }
        }

        private static void feladat4()
        {
            Console.WriteLine("4. Ritkított nagybetűs");

            string mondat;
            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();

            for (int i = 0; i < mondat.Length; i++)
            {
                mondat = mondat.ToUpper();
                Console.Write("{0} ", mondat[i]);
            }

            //Console.WriteLine(mondat[1].ToString().ToUpper(), " ");

        }

        private static void feladat3()
        {
            Console.WriteLine("\n3. Nagybetűs");

            string mondat;
            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();

            Console.WriteLine(mondat.ToUpper());

        }

        private static void feladat2()
        {
            Console.WriteLine("2. feladat: Ritkított");
            string mondat;
            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();

            for (int i = 0; i < mondat.Length; i++)
            {
                Console.Write("{0} ", mondat[i]);
            }

        }

        private static void feladat1()
        {
            Console.WriteLine("1. feladat: Karakterszám");

            string mondat;
            Console.Write("Írj be egy mondatot: ");
            mondat = Console.ReadLine();
            Console.WriteLine("A beírt mondat: {0} karakterből áll.", mondat.Length);
        }
    }
}
