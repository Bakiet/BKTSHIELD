using System;
using System.Collections.Generic;
using System.Linq;
using System.Windows.Forms;

namespace BKTSHIELD
{
    static class Program
    {
        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        [STAThread]
        static void Main()
        {
           
                Application.EnableVisualStyles();
                Application.SetCompatibleTextRenderingDefault(false);
               
                Application.Run(new Login());
                int id = 0;
                string username = "";
                MainForm = new frmBKT(id, username);
                Application.Run(MainForm);
           
           
        }

        public static frmBKT MainForm;
     //   public static SharedStorage SharedStorage = new SharedStorage();
      //  public static GameMonitor GameMonitor = new GameMonitor();

        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        
    }
}
