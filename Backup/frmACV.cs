using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Diagnostics;
using BusinessObjects;
using System.Drawing.Imaging;
using CuteWebUI;
using System.Configuration;
using System.IO;

namespace ACP
{
    public partial class frmACV : Form
    {
        
        
        static int idusuario=0;
        int contador = 0;
        int contador2 = 0;

      


        public frmACV(int id)
        {
            idusuario = id;
            InitializeComponent();

          
            
        }

       private void InitializeTimer()
        {
            
            timer1.Interval = 5000;
            timer1.Enabled = true;
            btnAceptar.Text = "Detener";
            
        }


      



        private void timer1_Tick_1(object sender, EventArgs e)
        {

            contador = contador + 1;
            

            lblEstado.Text = "Escaneados : " + contador + "";

                Controllers.CheatController controller = new Controllers.CheatController();
                Controllers.RegistroController controller2 = new Controllers.RegistroController();
                BusinessObjects.cheat cheats = new BusinessObjects.cheat();
                BusinessObjects.Registro registro = new Registro();
                
                IList<cheat> list = new List<cheat>();

                    
                list = controller.ObtenerCheats();

                registro.cheat = 0;
                registro.ID = txtMatchID.Text;
                registro.UsuarioID = idusuario;
                registro.Observacion = "Bien";

                controller2.CrearRegistro(registro);

                foreach (Process clsProcess in Process.GetProcesses())
                {

                        foreach (cheat cheat in list)
                        {

                            if (clsProcess.ProcessName.StartsWith(cheat.Nombre))//get proces start with cheat
                            {
                                //lblEstado.Text = "Detectado.";

                                registro.cheat = 1;
                                registro.ID = txtMatchID.Text;
                                registro.UsuarioID = idusuario;
                                registro.Observacion = "Registrado por uso del archivo " + cheat.Nombre + "";

                                controller2.CrearRegistro(registro);
                            }
                            
                        }
                       
                    }
                BindUsuarios();
            
                
        }

        private void btnImpr_Click()
        {
            //imagenes

            contador2 = contador2 + 1;

            Bitmap printscreen = new Bitmap(Screen.PrimaryScreen.Bounds.Width, Screen.PrimaryScreen.Bounds.Height);

            Graphics graphics = Graphics.FromImage(printscreen as Image);

            graphics.CopyFromScreen(0, 0, 0, 0, printscreen.Size);


            string stream = @"C:\" + DateTime.Now.ToString().Replace("/", "").Replace(" ", "").Replace(":", "").Replace(".", "") + txtMatchID.Text + ".jpg";

            printscreen.Save(stream, ImageFormat.Jpeg);

            label5.Text = contador2.ToString();

            EnviarImagen(stream);
          

            
        }

        private void BindUsuarios()
        {
            Controllers.UsuarioController controller = new Controllers.UsuarioController();

            BusinessObjects.Usuario usuarios = new BusinessObjects.Usuario();

            if (txtMatchID.Text != "")
            {
                gvJugadores.DataSource = controller.ObtenerUsuarioPorMatch(txtMatchID.Text);
               
            }

        }

       
        private void EnviarImagen(string imagen)
        {
            Controllers.RegistroController controller = new Controllers.RegistroController();
            BusinessObjects.Registro registro = new Registro();
            registro.ID = txtMatchID.Text;
            registro.UsuarioID = idusuario;
            
            FileStream Lee = new FileStream(imagen, FileMode.Open, FileAccess.Read);
            byte[] BytesImg = new byte[Lee.Length];
            int len = Convert.ToInt32(Lee.Length);
            Lee.Read(BytesImg, 0, len);
            registro.Imagen = BytesImg;
            controller.UpdateRegistro(registro);

        }


        private void btnAceptar_Click_2(object sender, EventArgs e)
        {
            if (btnAceptar.Text == "Detener")
            {
                btnAceptar.Text = "Comenzar";
                timer1.Enabled = false;
                

            }
            else
            {
                InitializeTimer();
                BindUsuarios();
                
            }
        }

        private void btnActualizar_Click_1(object sender, EventArgs e)
        {
            BindUsuarios();
        }

        private void btnVista_Click_1(object sender, EventArgs e)
        {
            Vistas vistas = new Vistas();
            vistas.Show();
        }


      

     

        private void frmACV_KeyUp(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.PrintScreen)
            {
                btnImpr_Click();
            }
        }
   
    }
}
