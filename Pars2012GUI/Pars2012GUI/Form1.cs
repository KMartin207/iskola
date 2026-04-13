using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace Pars2012GUI
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        struct versenyzok
        {
            public string nev;
            public string csoport;
            public string nemzet;
            public string kod;
            public string Elsodobas;
            public string Masodikdobas;
            public string HarmadikDobas; 
        }

        static List<versenyzok> adatok = new List<versenyzok>();

        private void Form1_Load(object sender, EventArgs e)
        {
            StreamReader olvasocsatorna = new StreamReader(@"E:\kalapacsvetes\Selejtezo2012.txt", true);

            string elsosor = olvasocsatorna.ReadLine();
            string sor;
            string[] darabol;

            while (!olvasocsatorna.EndOfStream)
            {
                sor = olvasocsatorna.ReadLine();
                darabol = sor.Split(';');

                versenyzok versenyzo = new versenyzok();

                versenyzo.nev = darabol[0];
                versenyzo.csoport = darabol[1];

                string nemzetEsKod = darabol[2];
                versenyzo.nemzet = nemzetEsKod.Split('(')[0].Trim();
                versenyzo.kod = nemzetEsKod.Split('(')[1].Replace(")", "").Trim();

                versenyzo.Elsodobas = darabol[3];
                versenyzo.Masodikdobas = darabol[4];
                versenyzo.HarmadikDobas = darabol[5];

                if (versenyzo.nev == "Pars Krisztián")
                {
                    versenyzoNevekCb.Text = versenyzo.nev;
                    csoportLbl.Text = versenyzo.csoport;
                    nemzetLbl.Text = versenyzo.nemzet;
                    nemzetKodLbl.Text = versenyzo.kod;
                    sorozatLbl.Text = Convert.ToString(versenyzo.Elsodobas) + ";" + Convert.ToString(versenyzo.Masodikdobas) + ";" + Convert.ToString(versenyzo.HarmadikDobas);

                    string kepKod = versenyzo.kod + ".png";
                    zaszloPb.ImageLocation = "E:\\kalapacsvetes\\Images\\" + kepKod;
                }
                
                versenyzoNevekCb.Items.Add(versenyzo.nev);
                
                adatok.Add(versenyzo);
            }




            olvasocsatorna.Close();
        }

        private void versenyzoNevekCb_SelectedIndexChanged(object sender, EventArgs e)
        {
            adatokModositasa(versenyzoNevekCb.Text);
        }

        private void adatokModositasa(string versenyzo)
        {
            int szamlalo = 0;

            while (versenyzo != adatok[szamlalo].nev)
            {
                szamlalo++;
            }

            versenyzoNevekCb.Text = adatok[szamlalo].nev;
            csoportLbl.Text = adatok[szamlalo].csoport;
            nemzetLbl.Text = adatok[szamlalo].nemzet;
            nemzetKodLbl.Text = adatok[szamlalo].kod;
            sorozatLbl.Text = Convert.ToString(adatok[szamlalo].Elsodobas) + ";" + Convert.ToString(adatok[szamlalo].Masodikdobas) + ";" + Convert.ToString(adatok[szamlalo].HarmadikDobas);

            string kepKod = adatok[szamlalo].kod + ".png";
            zaszloPb.ImageLocation = "E:\\kalapacsvetes\\Images\\" + kepKod;
        }
    }
}
