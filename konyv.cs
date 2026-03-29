using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace konyvOsztaly
{
    public class konyv
    {
        public string szerzo;
        public string cim;
        public int oldal;


        public konyv(string szerzoje, string cime, int oldala)
        {
            this.szerzo = szerzoje;
            this.cim = cime;
            this.oldal = oldala;
        }


    }
}
