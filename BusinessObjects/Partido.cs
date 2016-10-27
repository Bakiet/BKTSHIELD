using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects.BusinessRules;

namespace BusinessObjects
{
    public class Partido : BusinessObject
    {
        public string ID { get; set; }

        public string descripcion { get; set; }

        public string team1 { get; set; }

        public string team2 { get; set; }

        public int score1 { get; set; }

        public int score2 { get; set; }

        public string pass { get; set; }

    }
}
