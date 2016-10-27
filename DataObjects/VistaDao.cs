using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using DataObjects.AdoNet;
using System.Data.SqlClient;

namespace DataObjects
{
    public static class VistaDao
    {
        //public static DataRow GetVistaMetroCambioAcopio(DateTime? fecha, string login)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter();

        //    prn = new SqlParameter("@Login", SqlDbType.VarChar, 30);
        //    prn.Value = login;
        //    parameters.Add(prn);

        //    if (fecha != null)
        //    {
        //        prn = new SqlParameter("@Fecha", SqlDbType.VarChar, 10);
        //        prn.Value = string.Format("{0:dd/MM/yyyy}",(DateTime)fecha.Value);
        //        parameters.Add(prn);
        //    }
        //    return Db.GetDataRow(parameters, "rptMC_Acopio");
        //}

        //public static DataTable GetVistaCartaPortesMetroCambioAcopio(string fecha)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter();

        //    prn = new SqlParameter("@MetroCambioFecha", SqlDbType.VarChar, 10);
        //    prn.Value = fecha;
        //    parameters.Add(prn);

        //    return Db.GetDataTable(parameters, "rptMC_CartaPortesAcopio");
        //}

        //public static DataTable GetVistaCuenta(int cuentaid)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@CuentaID", SqlDbType.Int);
        //    prn.Value = cuentaid;
        //    parameters.Add(prn);

        //    return Db.GetDataTable(parameters, "Cuenta_GET");
        //}


        //public static DataTable VW_MC_Salida(DateTime fecha)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@Fecha", SqlDbType.VarChar,10);
        //    prn.Value = fecha.ToString("dd/MM/yyyy");
        //    parameters.Add(prn);

        //    return Db.GetDataTable(parameters, "rptMC_Salida");
           
        //}

        //public static DataTable VW_Vabt_Salida(DateTime fecha)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@Fecha", SqlDbType.VarChar, 10);
        //    prn.Value = fecha.ToString("dd/MM/yyyy");
        //    parameters.Add(prn);

        //    return Db.GetDataTable(parameters, "rptVabt_Salida");

        //}

        //public static DataTable VW_MC_SalidaUltimosTreintaDias()
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SELECT fecha, " + "\n";
        //    var1 = var1 + "       cartasportes, " + "\n";
        //    var1 = var1 + "       estaciones, " + "\n";
        //    var1 = var1 + "       rutas, " + "\n";
        //    var1 = var1 + "       monto, " + "\n";
        //    var1 = var1 + "       aprobado " + "\n";
        //    var1 = var1 + "FROM   vw_mc_salidas " + "\n";
        //    var1 = var1 + "WHERE  fecha >= ( Getdate() - 30 ) ";

        //    return Db.GetDataTable(var1);
        //}

        //public static DataTable VW_Vabt_SalidaUltimosTreintaDias()
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SELECT fecha, " + "\n";
        //    var1 = var1 + "       cartasportes, " + "\n";
        //    var1 = var1 + "       estaciones, " + "\n";
        //    var1 = var1 + "       rutas, " + "\n";
        //    var1 = var1 + "       monto, " + "\n";
        //    var1 = var1 + "       aprobado " + "\n";
        //    var1 = var1 + "FROM   vw_vabt_salidas " + "\n";
        //    var1 = var1 + "WHERE  fecha >= ( Getdate() - 30 ) ";

        //    return Db.GetDataTable(var1);
        //}

        //public static DataTable VW_MC_SalidaCartaPortesPorFecha(DateTime fecha)
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SET dateformat dmy  " + "\n";
        //    var1 = var1 + "SELECT cartaporte.cartaporteid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatarioid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorfechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatariofechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.oficialvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.auxiliarvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.guardiacustodiacajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.cajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.maquinaprecintadora, " + "\n";
        //    var1 = var1 + "       cartaporte.cartaportetipoid, " + "\n";
        //    var1 = var1 + "       cartaporte.montobs, " + "\n";
        //    var1 = var1 + "       cartaporte.logincreado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechacreado, " + "\n";
        //    var1 = var1 + "       cartaporte.aprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.loginaprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechaaprobado, " + "\n";
        //    var1 = var1 + "       PuntoVisita.nombre AS Estacion " + "\n";
        //    var1 = var1 + "FROM   cartaporte " + "\n";
        //    var1 = var1 + "JOIN   PuntoVisita " + "\n";
        //    var1 = var1 + "ON     cartaporte.consignatarioid = PuntoVisita.PuntoID" + "\n";
        //    var1 = var1 + "WHERE  cartaporte.consignadorfechaentrega = '" + string.Format("{0:dd/MM/yyyy}", fecha.Date) + "' " + "\n";
        //    var1 = var1 + "       AND cartaporte.cartaportetipoid = 2 " + "\n";
        //    var1 = var1 + "ORDER BY PuntoVisita.nombre ";
        //    return Db.GetDataTable(var1);
        //}

        //public static DataTable VW_Vabt_SalidaCartaPortesPorFecha(DateTime fecha)
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SET dateformat dmy  " + "\n";
        //    var1 = var1 + "SELECT cartaporte.cartaporteid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatarioid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorfechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatariofechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.oficialvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.auxiliarvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.guardiacustodiacajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.cajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.maquinaprecintadora, " + "\n";
        //    var1 = var1 + "       cartaporte.cartaportetipoid, " + "\n";
        //    var1 = var1 + "       cartaporte.montobs, " + "\n";
        //    var1 = var1 + "       cartaporte.logincreado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechacreado, " + "\n";
        //    var1 = var1 + "       cartaporte.aprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.loginaprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechaaprobado, " + "\n";
        //    var1 = var1 + "       PuntoVisita.nombre AS Estacion " + "\n";
        //    var1 = var1 + "FROM   cartaporte " + "\n";
        //    var1 = var1 + "JOIN   PuntoVisita " + "\n";
        //    var1 = var1 + "ON     cartaporte.consignatarioid = PuntoVisita.PuntoID" + "\n";
        //    var1 = var1 + "WHERE  cartaporte.consignadorfechaentrega = '" + string.Format("{0:dd/MM/yyyy}", fecha.Date) + "' " + "\n";
        //    var1 = var1 + "       AND cartaporte.cartaportetipoid = 4 " + "\n";
        //    var1 = var1 + "ORDER BY PuntoVisita.nombre ";
        //    return Db.GetDataTable(var1);
        //}

        //public static DataTable VW_MC_Entrada(DateTime fecha)
        //{
        //    IList<SqlParameter> parameters = new List<SqlParameter>();
        //    SqlParameter prn = new SqlParameter("@Fecha", SqlDbType.VarChar, 10);
        //    prn.Value = fecha.ToString("dd/MM/yyyy");
        //    parameters.Add(prn);

        //    return Db.GetDataTable(parameters, "rptMC_Entrada");

        //}

        //public static DataTable VW_MC_EntradaUltimosTreintaDias()
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SELECT fecha, " + "\n";
        //    var1 = var1 + "       cartasportes, " + "\n";
        //    var1 = var1 + "       estaciones, " + "\n";
        //    var1 = var1 + "       rutas, " + "\n";
        //    var1 = var1 + "       monto, " + "\n";
        //    var1 = var1 + "       aprobado " + "\n";
        //    var1 = var1 + "FROM   vw_mc_entradas " + "\n";
        //    var1 = var1 + "WHERE  fecha >= ( Getdate() - 30 ) ";

        //    return Db.GetDataTable(var1);
        //}

        //public static DataTable VW_MC_EntradaCartaPortesPorFecha(DateTime fecha)
        //{
        //    string var1 = string.Empty;
        //    var1 = var1 + "SET dateformat dmy  " + "\n";
        //    var1 = var1 + "SELECT cartaporte.cartaporteid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatarioid, " + "\n";
        //    var1 = var1 + "       cartaporte.consignadorfechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.consignatariofechaentrega, " + "\n";
        //    var1 = var1 + "       cartaporte.oficialvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.auxiliarvaloresid, " + "\n";
        //    var1 = var1 + "       cartaporte.guardiacustodiacajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.cajeroid, " + "\n";
        //    var1 = var1 + "       cartaporte.maquinaprecintadora, " + "\n";
        //    var1 = var1 + "       cartaporte.cartaportetipoid, " + "\n";
        //    var1 = var1 + "       cartaporte.montobs, " + "\n";
        //    var1 = var1 + "       cartaporte.logincreado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechacreado, " + "\n";
        //    var1 = var1 + "       cartaporte.aprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.loginaprobado, " + "\n";
        //    var1 = var1 + "       cartaporte.fechaaprobado, " + "\n";
        //    var1 = var1 + "       PuntoVisita.nombre AS Estacion " + "\n";
        //    var1 = var1 + "FROM   cartaporte " + "\n";
        //    var1 = var1 + "JOIN   PuntoVisita " + "\n";
        //    var1 = var1 + "ON     cartaporte.consignadorid = PuntoVisita.PuntoID" + "\n";
        //    var1 = var1 + "WHERE  cartaporte.consignatariofechaentrega = '" + string.Format("{0:dd/MM/yyyy}", fecha.Date) + "' " + "\n";
        //    var1 = var1 + "       AND cartaporte.cartaportetipoid = 1 " + "\n";
        //    var1 = var1 + "ORDER BY PuntoVisita.nombre ";
        //    return Db.GetDataTable(var1);
        //}

    }
}
