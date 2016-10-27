using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects;
using DataObjects;
using BusinessObjects.BusinessRules;

namespace Controllers
{
    public class PartidoController
    {
        /*
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
                }*/
        public ControllerResult UpdatePartido(Partido partido)
        {
            ControllerResult resultado = new ControllerResult();


            DaoResult daoResult = PartidoDao.UpdatePartido(partido);


            return resultado;
        }
        public Partido ObtenerPass(string matchid)
        {
            ControllerResult resultado = new ControllerResult();

            Partido Partido = PartidoDao.ObtenerPass(matchid);

            return Partido;

        }
    }
}
