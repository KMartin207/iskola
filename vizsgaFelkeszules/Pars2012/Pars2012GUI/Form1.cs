using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Pars2012;
using System.IO;

namespace Pars2012GUI
{
    public partial class Form1 : Form
    {
        static List<Versenyzo> adatok = new List<Versenyzo>();
        public Form1()
        {
            InitializeComponent();
            string utvonal = Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "Selejtezo2012.txt");

            StreamReader olvasocsatorna = new StreamReader(utvonal);

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
        }

        private void versenyzoNevCb_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            foreach (var adat in adatok)
            {
                versenyzoNevCb.Items.Add(adat.nev);

                /*if (adat.nev == "Pars Krisztián")
                {
                    versenyzoNevCb.Text = adat.nev;
                    csoportLbl.Text = Convert.ToString(adat.csoport);
                    NemzetLbl.Text = adat.Nemzet;
                    NemzetKodLbl.Text = adat.Kod;
                    sorozatLbl.Text = adat.sorozat;
                    eredmenyLbl.Text = Convert.ToString(adat.Eredmeny);
                    nemzetZaszloPb.ImageLocation = "Z:\\Programozas_C\\vizsgaFelkeszules\\Pars2012\\Images\\HUN.png";
                }*/

                
            }
            var parsKrisztian = adatok.Find(k => k.nev == "Pars Krisztián");

            versenyzoNevCb.SelectedItem = parsKrisztian.nev;

            csoportLbl.Text = Convert.ToString(parsKrisztian.csoport);

        }
    }
}
