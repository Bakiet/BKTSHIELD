using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects.BusinessRules;

namespace BusinessObjects
{
    public class Foto : BusinessObject
    {
       
        public int ID { get; set; }

        public byte[] Imagen { get; set; }

    }
}
