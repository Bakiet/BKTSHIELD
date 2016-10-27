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
    public static class UsuarioDao
    {

        #region ESCRITURA

        //public static DaoResult CrearMiembro(Miembro Miembro)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();


        //    SqlParameter prn = new SqlParameter("@Nombre", SqlDbType.VarChar, 100);
        //    prn.Value = Miembro.Nombre;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@ComiteID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.ComiteID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@GrupoID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.GrupoID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@RangoID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.RangoID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@Link", SqlDbType.VarChar,500);
        //    prn.Value = Miembro.Link;
        //    parameters.Add(prn);

 
        //    DaoResult result = Db.Insert(parameters, "Miembro_INSERT", true);

        //    if (result.ErrorCount == 0)
        //    {
        //        /******** perfiles **********/
        //        foreach (Perfil perfil in Miembro.Perfiles)
        //        {
        //            DaoResult result2 = Miembro_Perfiles_Insert(perfil, (int)result.Identity);

        //            if (result2.ErrorCount != 0)
        //            {
        //                result.ErrorMessage = result.ErrorMessage + " /n" + result2.ErrorMessage;
        //                result.ErrorCount++;
        //            }
        //        }



        //    }
        //    return result;
        //}

        //private static DaoResult Miembro_Perfiles_Insert(Perfil perfil, int miembroid)
        //{

        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@PerfilID", SqlDbType.Int);
        //    prn.Value = perfil.PerfilID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@MiembroID", SqlDbType.Int);
        //    prn.Value = miembroid;
        //    parameters.Add(prn);

        //    DaoResult result = Db.Insert(parameters, "Perfil_Miembro_INSERT", false);

        //    return result;

        //}


        //public static DaoResult EliminarMiembro(Miembro Miembro)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@MiembroID", SqlDbType.Int);
        //    prn.Value = Miembro.MiembroID;
        //    parameters.Add(prn);


        //    return Db.Insert(parameters, "Miembro_DELETE");

        //}


        //#endregion

        //#region LECTURA

        public static Usuario ObtenerUsuario(string id,string pass)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@ID", SqlDbType.VarChar, 100);
            prn.Value = id;
            parameters.Add(prn);

            prn = new SqlParameter("@Pass", SqlDbType.VarChar, 100);
            prn.Value = pass;
            parameters.Add(prn);

            DataRow row = Db.GetDataRow(parameters, "Usuario_GET");
            if (row != null)
            {

                Usuario Usuario = new Usuario();

                Usuario.UsuarioID = int.Parse(row["ID"].ToString());
                Usuario.Nombre = row["Usuario"].ToString();
                Usuario.password = row["Password"].ToString();
                Usuario.fechacreado = DateTime.Parse(row["fechacreado"].ToString());

                return Usuario;
            }
            else
                return null;



        }

        public static IList<Conectado> ObtenerUsuarioPorMatch(string matchid)
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();


            SqlParameter prn = new SqlParameter("@MatchID", SqlDbType.VarChar, 100);
            prn.Value = matchid;
            parameters.Add(prn);

            DataTable dtUsuario = Db.GetDataTable(parameters, "UsuarioPorMatch_GET");

 
            
            IList<Conectado> list = new List<Conectado>();

            foreach (DataRow row in dtUsuario.Rows)
            {

                if (row != null)
                {

                    Conectado Usuario = new Conectado();

                    Usuario.Nombre = row["Usuario"].ToString();

                    Usuario.cantidad = int.Parse(row["cantidad"].ToString()); 

                    list.Add(Usuario);
                }
                else
                    return null;
            }

            return list;

        }
       

        //public static IList<Perfil> Miembro_Perfil_GET(int miembroid)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@MiembroID", SqlDbType.Int);
        //    prn.Value = miembroid;
        //    parameters.Add(prn);

        //    DataTable dtPerfil = Db.GetDataTable(parameters, "Miembro_Perfil_GET");

        //    IList<Perfil> list = new List<Perfil>();

        //    foreach (DataRow row in dtPerfil.Rows)
        //    {

        //        if (row != null)
        //        {
        //            Perfil perfil = new Perfil();
        //            perfil.Descripcion = row["Descripcion"].ToString();
        //            perfil.PerfilID = int.Parse(row["PerfilID"].ToString());
                   

        //            list.Add(perfil);
        //        }
        //    }

        //    return list;
        //}

        //public static DaoResult ActualizarMiembro(Miembro Miembro)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();


        //    SqlParameter prn = new SqlParameter("@Nombre", SqlDbType.VarChar, 100);
        //    prn.Value = Miembro.Nombre;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@MiembroID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.MiembroID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@ComiteID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.ComiteID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@GrupoID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.GrupoID;
        //    parameters.Add(prn);

        //    prn = new SqlParameter("@RangoID", SqlDbType.Int);
        //    prn.Value = (int)Miembro.RangoID;
        //    parameters.Add(prn);

        //    //prn = new SqlParameter("@Link", SqlDbType.VarChar,500);
        //    //prn.Value = Miembro.Link;
        //    //parameters.Add(prn);


        //    DaoResult result = Db.Insert(parameters, "Miembro_UPDATE", false);

        //    if (result.ErrorCount == 0)
        //    {
        //        /******** Envases **********/
        //        foreach (Perfil perfil in Miembro.Perfiles)
        //        {
        //            DaoResult result2 = Miembro_Perfiles_Insert(perfil, (int)Miembro.MiembroID);

        //            if (result2.ErrorCount != 0)
        //            {
        //                result.ErrorMessage = result.ErrorMessage + " /n" + result2.ErrorMessage;
        //                result.ErrorCount++;
        //            }
        //        }



        //    }
        //    return result;
        //}

        //public static IList<Miembro> Miembros_GET()
        //{
            

        //    DataTable dtMiembro = Db.GetDataTable("Miembros_GET");

        //    IList<Miembro> list = new List<Miembro>();

        //    foreach (DataRow row in dtMiembro.Rows)
        //    {
        //        if (row != null)
        //        {

        //            Miembro Miembro = new Miembro();

        //            Miembro.MiembroID = int.Parse(row["MiembroID"].ToString());
        //            Miembro.RangoID = int.Parse(row["RangoID"].ToString());
        //            Miembro.GrupoID = int.Parse(row["GrupoID"].ToString());
        //            Miembro.ComiteID = int.Parse(row["ComiteID"].ToString());
        //            Miembro.Nombre = row["Nombre"].ToString();
        //            Miembro.Imagen = row["Imagen"].ToString();
        //            Miembro.Link = row["Link"].ToString();
        //            Miembro.Comite = row["comite"].ToString();
        //            Miembro.Rango = row["Rango"].ToString();
        //            Miembro.Grupo = row["Grupo"].ToString();
        //            Miembro.FechaIngreso = DateTime.Parse(row["fechaingreso"].ToString());


        //            list.Add(Miembro);
        //        }
        //        else
        //            return null;
        //    }

        //    return list;

        //}


        //public static IList<Miembro> GetMiembroPorGrupo(int grupoid)
        //{
        //    IList<Miembro> list = new List<Miembro>();

        //    string var1 = "SET DATEFORMAT DMY " + "\n";
        //    var1 = var1 + "SELECT  Miembro.MiembroID, " + "\n";
        //    var1 = var1 + "Miembro.RangoID,  " + "\n";
        //    var1 = var1 + "Miembro.GrupoID,  " + "\n";
        //    var1 = var1 + "Miembro.ComiteID, " + "\n";
        //    var1 = var1 + "Miembro.Nombre, " + "\n";
        //    var1 = var1 + "Miembro.Imagen, " + "\n";
        //    var1 = var1 + "Miembro.Link, " + "\n";
        //    var1 = var1 + "Miembro.FechaIngreso, " + "\n";
        //    var1 = var1 + "rango.Descripcion AS Rango, " + "\n";
        //    var1 = var1 + "grupo.Descripcion AS Grupo, " + "\n";
        //    var1 = var1 + "comite.Descripcion AS Comite " + "\n";
        //    var1 = var1 + "FROM	Miembro " + "\n";
        //    var1 = var1 + "JOIN    Rango rango " + "\n";
        //    var1 = var1 + "ON      Miembro.RangoID = rango.RangoID " + "\n";
        //    var1 = var1 + "JOIN    Grupo grupo " + "\n";
        //    var1 = var1 + "ON      Miembro.GrupoID = grupo.GrupoID " + "\n";
        //    var1 = var1 + "JOIN    Comite comite " + "\n";
        //    var1 = var1 + "ON      Miembro.ComiteID = comite.ComiteID  " + "\n";
        //    var1 = var1 + "WHERE Miembro.GrupoID =  " + grupoid + "\n";

            

        //    DataTable dt = Db.GetDataTable(var1);

        //    foreach (DataRow row in dt.Rows)
        //    {
        //        if (row != null)
        //        {

        //            Miembro Miembro = new Miembro();

        //            Miembro.MiembroID = int.Parse(row["MiembroID"].ToString());
        //            Miembro.RangoID = int.Parse(row["RangoID"].ToString());
        //            Miembro.GrupoID = int.Parse(row["GrupoID"].ToString());
        //            Miembro.ComiteID = int.Parse(row["ComiteID"].ToString());
        //            Miembro.Nombre = row["Nombre"].ToString(); 
        //            Miembro.Imagen = row["Imagen"].ToString();
        //            Miembro.Link = row["Link"].ToString();
        //            Miembro.Comite = row["comite"].ToString();
        //            Miembro.Rango = row["Rango"].ToString();
        //            Miembro.Grupo = row["Grupo"].ToString();
        //            Miembro.FechaIngreso = DateTime.Parse(row["fechaingreso"].ToString());


        //            list.Add(Miembro);
        //        }
        //        else
        //            return null;
        //    }

        //    return list;

        //}

        //public static IList<Miembro> GetMiembroPorRango(int rangoid)
        //{
        //    IList<Miembro> list = new List<Miembro>();

        //    string var1 = "SET DATEFORMAT DMY " + "\n";
        //    var1 = var1 + "SELECT  Miembro.MiembroID, " + "\n";
        //    var1 = var1 + "Miembro.RangoID,  " + "\n";
        //    var1 = var1 + "Miembro.GrupoID,  " + "\n";
        //    var1 = var1 + "Miembro.ComiteID, " + "\n";
        //    var1 = var1 + "Miembro.Nombre, " + "\n";
        //    var1 = var1 + "Miembro.Imagen, " + "\n";
        //    var1 = var1 + "Miembro.Link, " + "\n";
        //    var1 = var1 + "Miembro.FechaIngreso, " + "\n";
        //    var1 = var1 + "rango.Descripcion AS Rango, " + "\n";
        //    var1 = var1 + "grupo.Descripcion AS Grupo, " + "\n";
        //    var1 = var1 + "comite.Descripcion AS Comite " + "\n";
        //    var1 = var1 + "FROM	Miembro " + "\n";
        //    var1 = var1 + "JOIN    Rango rango " + "\n";
        //    var1 = var1 + "ON      Miembro.RangoID = rango.RangoID " + "\n";
        //    var1 = var1 + "JOIN    Grupo grupo " + "\n";
        //    var1 = var1 + "ON      Miembro.GrupoID = grupo.GrupoID " + "\n";
        //    var1 = var1 + "JOIN    Comite comite " + "\n";
        //    var1 = var1 + "ON      Miembro.ComiteID = comite.ComiteID  " + "\n";
        //    var1 = var1 + "WHERE Miembro.RangoID =  " + rangoid + "\n";



        //    DataTable dt = Db.GetDataTable(var1);

        //    foreach (DataRow row in dt.Rows)
        //    {
        //        if (row != null)
        //        {

        //            Miembro Miembro = new Miembro();

        //            Miembro.MiembroID = int.Parse(row["MiembroID"].ToString());
        //            Miembro.RangoID = int.Parse(row["RangoID"].ToString());
        //            Miembro.GrupoID = int.Parse(row["GrupoID"].ToString());
        //            Miembro.ComiteID = int.Parse(row["ComiteID"].ToString());
        //            Miembro.Nombre = row["Nombre"].ToString();
        //            Miembro.Imagen = row["Imagen"].ToString();
        //            Miembro.Link = row["Link"].ToString();
        //            Miembro.Comite = row["comite"].ToString();
        //            Miembro.Rango = row["Rango"].ToString();
        //            Miembro.Grupo = row["Grupo"].ToString();
        //            Miembro.FechaIngreso = DateTime.Parse(row["fechaingreso"].ToString());


        //            list.Add(Miembro);
        //        }
        //        else
        //            return null;
        //    }

        //    return list;

        //}

        //public static IList<Miembro> GetMiembroPorDias()
        //{
        //    IList<Miembro> list = new List<Miembro>();

        //    string var1 = "SET DATEFORMAT DMY " + "\n";
        //    var1 = var1 + "SELECT  Miembro.MiembroID, " + "\n";
        //    var1 = var1 + "Miembro.RangoID,  " + "\n";
        //    var1 = var1 + "Miembro.GrupoID,  " + "\n";
        //    var1 = var1 + "Miembro.ComiteID, " + "\n";
        //    var1 = var1 + "Miembro.Nombre, " + "\n";
        //    var1 = var1 + "Miembro.Imagen, " + "\n";
        //    var1 = var1 + "Miembro.Link, " + "\n";
        //    var1 = var1 + "Miembro.FechaIngreso, " + "\n";
        //    var1 = var1 + "rango.Descripcion AS Rango, " + "\n";
        //    var1 = var1 + "grupo.Descripcion AS Grupo, " + "\n";
        //    var1 = var1 + "comite.Descripcion AS Comite " + "\n";
        //    var1 = var1 + "FROM	Miembro " + "\n";
        //    var1 = var1 + "JOIN    Rango rango " + "\n";
        //    var1 = var1 + "ON      Miembro.RangoID = rango.RangoID " + "\n";
        //    var1 = var1 + "JOIN    Grupo grupo " + "\n";
        //    var1 = var1 + "ON      Miembro.GrupoID = grupo.GrupoID " + "\n";
        //    var1 = var1 + "JOIN    Comite comite " + "\n";
        //    var1 = var1 + "ON      Miembro.ComiteID = comite.ComiteID  " + "\n";
        //    var1 = var1 + "WHERE   Miembro.FechaIngreso = getdate() - 30";



        //    DataTable dt = Db.GetDataTable(var1);

        //    foreach (DataRow row in dt.Rows)
        //    {
        //        if (row != null)
        //        {

        //            Miembro Miembro = new Miembro();

        //            Miembro.MiembroID = int.Parse(row["MiembroID"].ToString());
        //            Miembro.RangoID = int.Parse(row["RangoID"].ToString());
        //            Miembro.GrupoID = int.Parse(row["GrupoID"].ToString());
        //            Miembro.ComiteID = int.Parse(row["ComiteID"].ToString());
        //            Miembro.Nombre = row["Nombre"].ToString();
        //            Miembro.Imagen = row["Imagen"].ToString();
        //            Miembro.Link = row["Link"].ToString();
        //            Miembro.Comite = row["comite"].ToString();
        //            Miembro.Rango = row["Rango"].ToString();
        //            Miembro.Grupo = row["Grupo"].ToString();
        //            Miembro.FechaIngreso = DateTime.Parse(row["fechaingreso"].ToString());


        //            list.Add(Miembro);
        //        }
        //        else
        //            return null;
        //    }

        //    return list;

        //}

        //public static IList<Miembro> GetMiembroPorComite(int comiteid)
        //{
        //    IList<Miembro> list = new List<Miembro>();

        //    string var1 = "SET DATEFORMAT DMY " + "\n";
        //    var1 = var1 + "SELECT  Miembro.MiembroID, " + "\n";
        //    var1 = var1 + "Miembro.RangoID,  " + "\n";
        //    var1 = var1 + "Miembro.GrupoID,  " + "\n";
        //    var1 = var1 + "Miembro.ComiteID, " + "\n";
        //    var1 = var1 + "Miembro.Nombre, " + "\n";
        //    var1 = var1 + "Miembro.Imagen, " + "\n";
        //    var1 = var1 + "Miembro.Link, " + "\n";
        //    var1 = var1 + "Miembro.FechaIngreso, " + "\n";
        //    var1 = var1 + "rango.Descripcion AS Rango, " + "\n";
        //    var1 = var1 + "grupo.Descripcion AS Grupo, " + "\n";
        //    var1 = var1 + "comite.Descripcion AS Comite " + "\n";
        //    var1 = var1 + "FROM	Miembro " + "\n";
        //    var1 = var1 + "JOIN    Rango rango " + "\n";
        //    var1 = var1 + "ON      Miembro.RangoID = rango.RangoID " + "\n";
        //    var1 = var1 + "JOIN    Grupo grupo " + "\n";
        //    var1 = var1 + "ON      Miembro.GrupoID = grupo.GrupoID " + "\n";
        //    var1 = var1 + "JOIN    Comite comite " + "\n";
        //    var1 = var1 + "ON      Miembro.ComiteID = comite.ComiteID  " + "\n";
        //    var1 = var1 + "WHERE Miembro.ComiteID =  " + comiteid + "\n";



        //    DataTable dt = Db.GetDataTable(var1);

        //    foreach (DataRow row in dt.Rows)
        //    {
        //        if (row != null)
        //        {

        //            Miembro Miembro = new Miembro();

        //            Miembro.MiembroID = int.Parse(row["MiembroID"].ToString());
        //            Miembro.RangoID = int.Parse(row["RangoID"].ToString());
        //            Miembro.GrupoID = int.Parse(row["GrupoID"].ToString());
        //            Miembro.ComiteID = int.Parse(row["ComiteID"].ToString());
        //            Miembro.Nombre = row["Nombre"].ToString();
        //            Miembro.Imagen = row["Imagen"].ToString();
        //            Miembro.Link = row["Link"].ToString();
        //            Miembro.Comite = row["comite"].ToString();
        //            Miembro.Rango = row["Rango"].ToString();
        //            Miembro.Grupo = row["Grupo"].ToString();
        //            Miembro.FechaIngreso = DateTime.Parse(row["fechaingreso"].ToString());


        //            list.Add(Miembro);
        //        }
        //        else
        //            return null;
        //    }

        //    return list;

        //}
        #endregion
    }
}
