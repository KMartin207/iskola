using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Kalapacsvetes
{
    class Sportolo
    {

        public int helyezes;
        public double eredmeny;
        public string sportoloNev;
        public string orszagKod;
        public string helyszin;
        public string datum;



        public Sportolo(string[] darabol)
        {
            helyezes = Convert.ToInt32(darabol[0]);
            eredmeny = Convert.ToDouble(darabol[1]);
            sportoloNev = darabol[2];
            orszagKod = darabol[3];
            helyszin = darabol[4];
            datum = darabol[5];
        }


    }
}
