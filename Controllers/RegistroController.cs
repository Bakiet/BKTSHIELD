using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects;
using DataObjects;
using BusinessObjects.BusinessRules;

namespace Controllers
{
    public class RegistroController
    {

        public ControllerResult CrearRegistro(Registro registro)
        {
            ControllerResult resultado = new ControllerResult();


            DaoResult daoResult = RegistroDao.CrearRegistro(registro);


            return resultado;
        }
        public ControllerResult UpdateRegistro(Registro registro)
        {
            ControllerResult resultado = new ControllerResult();


            DaoResult daoResult = RegistroDao.UpdateRegistro(registro);


            return resultado;
        }

        public IList<detectado> ObtenerCheatsUsuario(int usuarioid, string matchid)
        {
            ControllerResult resultado = new ControllerResult();

            IList<detectado> Cheat = RegistroDao.ObtenerCheatsUsuario(usuarioid, matchid);

            return Cheat;

        }
    }
}
