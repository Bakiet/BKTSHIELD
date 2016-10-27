using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects;
using DataObjects;
using BusinessObjects.BusinessRules;

namespace Controllers
{
    public class ImagenController
    {
       

        public IList<Imagenes> ObtenerImagenPorMatch(string matchid)
        {
            ControllerResult resultado = new ControllerResult();

            IList<Imagenes> imagen = ImagenDao.ObtenerImagenPorMatch(matchid);

            return imagen;

        }



        public Foto ObtenerFoto(int id)
        {
            ControllerResult resultado = new ControllerResult();

            Foto foto = ImagenDao.ObtenerFoto(id);

            return foto;

        }



        //public ControllerResult CrearMiembro(Miembro Miembro)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);


        //    DaoResult daoResult = UsuarioDao.CrearMiembro(Miembro);

        //    if (daoResult.ErrorCount == 0)
        //    {
        //        resultado.Mensaje = "Correcto: El Miembro " + Miembro.Nombre + " se ha creado satisfactoriamente.";
        //        resultado.Resultado = Result.Successful;
        //    }
        //    else
        //    {
        //        resultado.Mensaje = daoResult.ErrorMessage;
        //        resultado.Resultado = Result.Error;
        //    }

        //    return resultado;
        //}



        //public ControllerResult EliminarMiembro(Miembro Miembro)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);


        //    DaoResult daoResult = UsuarioDao.EliminarMiembro(Miembro);

        //    if (daoResult.ErrorCount == 0)
        //    {
        //        resultado.Mensaje = "Correcto: El Miembro  " + Miembro.MiembroID + " se ha Eliminado satisfactoriamente.";
        //        resultado.Resultado = Result.Successful;
        //    }
        //    else
        //    {
        //        resultado.Mensaje = daoResult.ErrorMessage;
        //        resultado.Resultado = Result.Error;
        //    }

        //    return resultado;
        //}

        //public ControllerResult ActualizarMiembro(Miembro miembro)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    DaoResult daoResult = UsuarioDao.ActualizarMiembro(miembro);

        //    if (daoResult.ErrorCount == 0)
        //    {
        //        resultado.Mensaje = "Correcto: El Miembro  " + miembro.Nombre + " se ha actualizado satisfactoriamente.";
        //        resultado.Resultado = Result.Successful;
        //    }
        //    else
        //    {
        //        resultado.Mensaje = daoResult.ErrorMessage;
        //        resultado.Resultado = Result.Error;
        //    }

        //    return resultado;
        //}

        //public IList<Miembro> Miembros_GET()
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    IList<Miembro> Miembro = UsuarioDao.Miembros_GET();

        //    return Miembro;

        //}

        //public IList<Miembro> Miembros_Grupos_GET(int grupoid)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    IList<Miembro> Miembro = UsuarioDao.GetMiembroPorGrupo(grupoid);

        //    return Miembro;

        //}

        //public IList<Miembro> Miembros_Rangos_GET(int rangoid)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    IList<Miembro> Miembro = UsuarioDao.GetMiembroPorRango(rangoid);

        //    return Miembro;

        //}

        //public IList<Miembro> Miembros_Dias_GET()
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    IList<Miembro> Miembro = UsuarioDao.GetMiembroPorDias();

        //    return Miembro;

        //}

        //public IList<Miembro> Miembros_Comites_GET(int comiteid)
        //{
        //    ControllerResult resultado = new ControllerResult(string.Empty);

        //    IList<Miembro> Miembro = UsuarioDao.GetMiembroPorComite(comiteid);

        //    return Miembro;

        //}

        
    }
}
