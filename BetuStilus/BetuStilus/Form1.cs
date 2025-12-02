using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace BetuStilus
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void pirosRBtn_CheckedChanged(object sender, EventArgs e)
        {
            CimkeLbl.ForeColor = Color.Red;
        }

        private void kekRBtn_CheckedChanged(object sender, EventArgs e)
        {
            CimkeLbl.ForeColor = Color.FromArgb(0,0,255);
        }

        private void feketeRBtn_CheckedChanged(object sender, EventArgs e)
        {
            CimkeLbl.ForeColor = Color.FromArgb(0, 0, 0);
        }

        private void bmeret10RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 10;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void bmeret11RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 11;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void bmeret12RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 12;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void bmeret14RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 14;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void bmeret16RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 16;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void bmeret18RBtn_CheckedChanged(object sender, EventArgs e)
        {
            float betuMeret = 18;
            CimkeLbl.Font = new Font(CimkeLbl.Font.Name, betuMeret, CimkeLbl.Font.Style);
        }

        private void felkoverCbx_CheckedChanged(object sender, EventArgs e)
        {
            FontStyle ujStilus = CimkeLbl.Font.Style ^ FontStyle.Bold;
            CimkeLbl.Font = new Font(CimkeLbl.Font, ujStilus);

        }

        private void doltCbx_CheckedChanged(object sender, EventArgs e)
        {
            FontStyle ujStilus = CimkeLbl.Font.Style ^ FontStyle.Italic;
            CimkeLbl.Font = new Font(CimkeLbl.Font, ujStilus);
        }

        private void alahuzottCbx_CheckedChanged(object sender, EventArgs e)
        {
            FontStyle ujStilus = CimkeLbl.Font.Style ^ FontStyle.Underline;
            CimkeLbl.Font = new Font(CimkeLbl.Font, ujStilus);
        }

        private void athuzottCbx_CheckedChanged(object sender, EventArgs e)
        {
            FontStyle ujStilus = CimkeLbl.Font.Style ^ FontStyle.Strikeout;
            CimkeLbl.Font = new Font(CimkeLbl.Font, ujStilus);
        }
    }
}
