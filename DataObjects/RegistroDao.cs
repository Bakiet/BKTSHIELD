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
    public static class RegistroDao
    {

        #region ESCRITURA

        public static DaoResult CrearRegistro(Registro Registro)
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

        public static DaoResult UpdateRegistro(Registro Registro)
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

            prn = new SqlParameter("@PartidoID", SqlDbType.VarChar, 50);
            prn.Value = Registro.PartidoID;
            parameters.Add(prn);


            DaoResult result = Db.Insert(parameters, "Imagen_INSERT", false);

            return result;
        }


        public static IList<detectado> ObtenerCheatsUsuario(int usuarioid, string matchid)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();

            SqlParameter prn = new SqlParameter("@MatchID", SqlDbType.VarChar, 50);
            prn.Value = matchid;
            parameters.Add(prn);

            prn = new SqlParameter("@UsuarioID", SqlDbType.Int);
            prn.Value = (int)usuarioid;
            parameters.Add(prn);


            DataTable dtCheat = Db.GetDataTable(parameters, "CheatsUsuario_GET");

            IList<detectado> list = new List<detectado>();

            foreach (DataRow row in dtCheat.Rows)
            {

                if (row != null)
                {

                    detectado cheat = new detectado();

                    cheat.fecha = DateTime.Parse(row["Fecha"].ToString());
                    cheat.Observacion = row["Observacion"].ToString();

                    list.Add(cheat);
                }
                else
                    return null;
            }

            return list;

        }
       
        #endregion
    }
}
