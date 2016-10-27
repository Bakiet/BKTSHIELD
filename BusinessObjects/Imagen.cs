using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects.BusinessRules;

namespace BusinessObjects
{
    public class Imagenes : BusinessObject
    {
        public int UsuarioID { get; set; }

        public string Nombre { get; set; }

        public string ID { get; set; }

        //public byte Imagen { get; set; }

     
    }
}
