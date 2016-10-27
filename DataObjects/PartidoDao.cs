using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data.SqlClient;
using System.Data;
using DataObjects.AdoNet;
using System.Globalization;
using BusinessObjects;
using BusinessObjects.BusinessRules;

namespace DataObjects
{
    public static class PartidoDao
    {

        #region ESCRITURA

        /*  public static DaoResult CrearRegistro(Registro Registro)
          {
              IList<SqlParameter> parameters = new List<SqlParameter>();


              SqlParameter prn = new SqlParameter("@RegistroID", SqlDbType.VarChar, 50);
              prn.Value = Registro.ID;
              parameters.Add(prn);

              prn = new SqlParameter("@UsuarioID", SqlDbType.Int);
              prn.Value = (int)Registro.UsuarioID;
              parameters.Add(prn);

              prn = new SqlParameter("@Cheat", SqlDbType.Int);
              prn.Value = (int)Registro.cheat;
              parameters.Add(prn);

              prn = new SqlParameter("@Observacion", SqlDbType.VarChar, 300);
              prn.Value = Registro.Observacion;
              parameters.Add(prn);


              DaoResult result = Db.Insert(parameters, "Registro_INSERT", false);

              return result;
          }
          */
        /* public static DaoResult UpdateRegistro(Registro Registro)
         {
             IList<SqlParameter> parameters = new List<SqlParameter>();


             SqlParameter prn = new SqlParameter("@RegistroID", SqlDbType.VarChar, 50);
             prn.Value = Registro.ID;
             parameters.Add(prn);

             prn = new SqlParameter("@UsuarioID", SqlDbType.Int);
             prn.Value = (int)Registro.UsuarioID;
             parameters.Add(prn);


             prn = new SqlParameter("@Imagen", SqlDbType.Image);
             prn.Value = Registro.Imagen;
             parameters.Add(prn);


             DaoResult result = Db.Insert(parameters, "Imagen_INSERT", false);

             return result;
         }*/
        public static DaoResult UpdatePartido(Partido partido)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@id", SqlDbType.VarChar, 50);
            prn.Value = partido.ID;
            parameters.Add(prn);

            prn = new SqlParameter("@Score2", SqlDbType.Int);
            prn.Value = (int)partido.score1;
            parameters.Add(prn);


            prn = new SqlParameter("@Score2", SqlDbType.Int);
            prn.Value = (int)partido.score2;
            parameters.Add(prn);


            DaoResult result = Db.Insert(parameters, "Partido_UPDATE", false);

            return result;
        }

        public static Partido ObtenerPass(string id)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@ID", SqlDbType.VarChar,50);
            prn.Value = id;
            parameters.Add(prn);

            Partido partido = new Partido();

            DataRow row = Db.GetDataRow(parameters, "Partido_GET");
            if (row != null)
            {
                partido.ID = row["id"].ToString();
                partido.pass = row["pass"].ToString();             

            }
            else
            {
                return null;
            }


            return partido;

        }

        #endregion
    }
}
