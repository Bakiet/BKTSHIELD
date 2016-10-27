using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects.BusinessRules;

namespace BusinessObjects
{
    public class Registro : BusinessObject
    {
        public string ID { get; set; }

        public int UsuarioID { get; set; }

        public int cheat { get; set; }

        public DateTime fecha { get; set; }

        public string Observacion { get; set; }

        public string Imagen { get; set; }

        public int PartidoID { get; set; }

    }
}
