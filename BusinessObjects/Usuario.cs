using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects.BusinessRules;

namespace BusinessObjects
{
    public class Usuario : BusinessObject
    {
        public int UsuarioID { get; set; }

        public string Nombre { get; set; }

        public string password { get; set; }

        public DateTime fechacreado { get; set; }

        public string image { get; set; }

        // public IList<Perfil> Perfiles { get; set; }
    }
}
