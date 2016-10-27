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
    public static class ImagenDao
    {

        #region ESCRITURA


        public static IList<Imagenes> ObtenerImagenPorMatch(string matchid)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@MatchID", SqlDbType.VarChar, 100);
            prn.Value = matchid;
            parameters.Add(prn);

            DataTable dtImagen = Db.GetDataTable(parameters, "ImagenPorMatch_GET");

            IList<Imagenes> list = new List<Imagenes>();

            foreach (DataRow row in dtImagen.Rows)
            {

                if (row != null)
                {

                    Imagenes imagen = new Imagenes();

                    imagen.ID = row["ID"].ToString();

                    imagen.Nombre = row["Nombre"].ToString();
                    
                    imagen.UsuarioID = int.Parse(row["UsuarioID"].ToString());

                    //imagen.Imagen = byte.Parse(row["Imagen"].ToString());

                    list.Add(imagen);
                }
                else
                    return null;
            }

            return list;

        }


        public static Foto ObtenerFoto(int id)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@ID", SqlDbType.Int);
            prn.Value = id;
            parameters.Add(prn);

            

            Foto foto = new Foto();

 
               DataRow row = Db.GetDataRow(parameters, "Foto_GET");
                if (row != null)
                {

                    foto.ID = int.Parse(row["ID"].ToString());

                    foto.Imagen = (byte[])row["Imagen"];

                }
                else
                {
                    return null;
                }
           

            return foto;

        }
       

      
        #endregion
    }
}
