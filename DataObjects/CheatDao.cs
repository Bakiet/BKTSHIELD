using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects;
using System.Data;
using DataObjects.AdoNet;
using MySql.Data.MySqlClient;
using System.Data.SqlClient;

namespace DataObjects
{
    public static class CheatDao
    {
        public static IList<cheat> ObtenerCheats()
        {
            IList<SqlParameter> parameters = new List<SqlParameter>();

           DataTable dtCheat = Db.GetDataTable(parameters, "Cheats_GET");

            IList<cheat> list = new List<cheat>();

            foreach (DataRow row in dtCheat.Rows)
            {

                if (row != null)
                {

                    cheat cheat = new cheat();

                    cheat.Nombre = row["Nombre"].ToString();

                    list.Add(cheat);
                }
                else
                    return null;
            }

            return list;

        }


       
    }
}
