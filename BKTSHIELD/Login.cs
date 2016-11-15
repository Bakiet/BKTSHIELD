using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using System.Net;
using System.IO;
using System.Web;
using System.Net.Sockets;
using System.Collections.Specialized;
using System.Windows.Input;
using System.Reflection;

namespace BKTSHIELD
{
    public partial class Login : Form
    {
        public static string regionUri = "";
        public Boolean BeingDragged  = false;
        public int MouseDownX;
        public int MouseDownY;

        public static bool passcorrect = false;

        static string connetionString = "server=54.243.15.24;port=3306;database=bitnami_wordpress;uid=root;pwd=SNvmJKa1I9lA;";
        MySqlConnection cnn = new MySqlConnection(connetionString);


        Controllers.UsuarioController controller = new Controllers.UsuarioController();
        BusinessObjects.Usuario usuarios = new BusinessObjects.Usuario();

        public Login()
        {

            InitializeComponent();
            txtUsuario.Focus();
            
        }


        
        public Assembly ApplicationAssembly
        {
            get { return Assembly.GetExecutingAssembly(); }
        }

        
        private void Login_Load(object sender, EventArgs e)
        {
            lblversion.Text = this.ApplicationAssembly.GetName().Version.ToString();
            comboBox1.SelectedIndex = 0;
            SetDefault(btnLogin);            
        }

        private void btnCancelar_Click(object sender, EventArgs e)
        {
            txtUsuario.Text = string.Empty;
            txtClave.Text = string.Empty;
        }

        

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void lkDonacion_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            if (comboBox1.Text == "Latinoamérica")
            {
                System.Diagnostics.Process.Start("http://lan.bktgames.com/wp-login.php?action=lostpassword");
            }
            if (comboBox1.Text == "North America")
            {
                System.Diagnostics.Process.Start("http://na.bktgames.com/wp-login.php?action=lostpassword");
            }
            
        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            lblwait.Visible = true;
            lblcomunicated.Visible = true;
            if (comboBox1.Text == "Latinoamérica")
            {
                lblcomunicated.Text = "Enlazándose con bktgames.com";
                lblwait.Text = "Iniciando sesión, por favor espere...";
            }
            if (comboBox1.Text == "North America")
            {
                lblcomunicated.Text = "linking with bktgames.com";
                lblwait.Text = "Sign in, Please wait...";
            }
            
            try {
                string loginUri = "";
                if (comboBox1.Text == "Latinoamérica"){
                    regionUri = "Latinoamérica";
                    loginUri = "http://lan.bktgames.com/wp-login.php";
                }
                if (comboBox1.Text == "North America")
                {
                    regionUri = "North America";
                    loginUri = "http://na.bktgames.com/wp-login.php";
                }
                
                string username = txtUsuario.Text;
            string password = txtClave.Text;
            string reqString = "log=" + username + "&pwd=" + password;
            byte[] requestData = Encoding.UTF8.GetBytes(reqString);
               
                CookieContainer cc = new CookieContainer();
            var request = (HttpWebRequest)WebRequest.Create(loginUri);
            request.Proxy = null;
            request.AllowAutoRedirect = false;
            request.CookieContainer = cc;
            request.Method = "post";
              
                request.ContentType = "application/x-www-form-urlencoded";
            request.ContentLength = requestData.Length;
            using (Stream s = request.GetRequestStream())
                s.Write(requestData, 0, requestData.Length);

            using (HttpWebResponse response = (HttpWebResponse)request.GetResponse())
            {
                foreach (Cookie c in response.Cookies)
                    Console.WriteLine(c.Name + " = " + c.Value);
            }
               
                string responseText = "";
                string newloginUri = "";
                if (comboBox1.Text == "Latinoamérica")
                {
                    newloginUri = "http://lan.bktgames.com/";
                }
                if (comboBox1.Text == "North America")
                {
                    newloginUri = "http://na.bktgames.com/";
                }
               
                HttpWebRequest newrequest = (HttpWebRequest)WebRequest.Create(newloginUri);
            newrequest.Proxy = null;
               
                newrequest.CookieContainer = cc;
                
                HttpWebResponse newresponse = (HttpWebResponse)newrequest.GetResponse();
                
                Stream resSteam = newresponse.GetResponseStream();
                
                StreamReader sr = new StreamReader(resSteam);
            responseText = sr.ReadToEnd();
               
                File.WriteAllText("private.html", sr.ReadToEnd());
           // System.Diagnostics.Process.Start("private.html");
            var encoding = ASCIIEncoding.ASCII;
                
                /*
                using (var reader = new System.IO.StreamReader(newresponse.GetResponseStream(), encoding))
                {
                    responseText = reader.ReadToEnd();
                }
               */
                // string responsestring = resSteam;
               
                MySqlDataAdapter MyDA = new MySqlDataAdapter();
            // string query = "SELECT id,title,team1,team2 FROM `wp_cw_matches` WHERE `status` in(`active`,`pending`)";
            BusinessObjects.Usuario user = new BusinessObjects.Usuario();
               
                string sqlSelectAll = "";
                if (comboBox1.Text == "Latinoamérica")
                {
                    sqlSelectAll = "SELECT um.`user_id` AS id, um.`meta_value` AS imageprofile, u.`display_name` AS nikename FROM `wp_usermeta` um, `wp_users` u WHERE um.`user_id`= u.`ID` AND u.user_email='" + username + "' AND um.meta_key = 'profile_photo'";
                }
                if (comboBox1.Text == "North America")
                {
                    sqlSelectAll = "SELECT um.`user_id` AS id, um.`meta_value` AS imageprofile, u.`display_name` AS nikename FROM `wp_usermeta` um, `wp_users` u WHERE um.`user_id`= u.`ID` AND u.user_email='" + username + "' AND um.meta_key = 'profile_photo'";
                }
               
                MyDA.SelectCommand = new MySqlCommand(sqlSelectAll, cnn);
                
                cnn.Open();
               
                using (MySqlDataReader reader = MyDA.SelectCommand.ExecuteReader())
            {
                while (reader.Read())
                {
                    user.UsuarioID = Convert.ToInt32(reader[0].ToString());
                    user.image = reader[1].ToString();
                    user.Nombre = reader[2].ToString();
                  
                }
            }
                
                /*
                DataTable table = new DataTable();
                MyDA.Fill(table);
                BindingSource bSource = new BindingSource();
                bSource.DataSource = table;
                */
                
                cnn.Close();
                
                if (user.UsuarioID.ToString() != "0" || user.UsuarioID.ToString() != "") { 
                if (responseText.Contains(user.Nombre))
                {
                        
                        
                    int idusuario = usuarios.UsuarioID;
                    frmBKT form = new frmBKT(user.UsuarioID, user.Nombre);
                    form.Show();
                       

                    }
                else
                {
                        if (comboBox1.Text == "Latinoamérica")
                        {
                            MessageBox.Show("Usuario/Password Incorrectos. ó No hay conexión con el servidor!");
                        }
                        if (comboBox1.Text == "North America")
                        {
                            MessageBox.Show("User/Password error. or not connection with the servers!");
                        }
                        

                }
            }
            else
                {
                    if (comboBox1.Text == "Latinoamérica")
                    {
                        MessageBox.Show("Usuario/Password Incorrectos. ó No hay conexión con el servidor!");
                    }
                    if (comboBox1.Text == "North America")
                    {
                        MessageBox.Show("User/Password error. or not connection with the servers!");
                    }
                }
                /*


                  WebBrowser b = new WebBrowser();
                              b.DocumentCompleted += new WebBrowserDocumentCompletedEventHandler(b_DocumentCompleted);
                              b.Navigate(url);
                  */
                /*
                 if (usuarios != null)
                 {
                     this.Hide();
                     int idusuario = usuarios.UsuarioID;
                     frmBKT form = new frmBKT(idusuario);


                     form.Show();
                 }
                 else
                 {
                     MessageBox.Show("Usuario o Password Incorrectos.");


                 }*/
            }catch(Exception ex)
            {
                Exception e98 = ex;
                if (comboBox1.Text == "Latinoamérica")
                {
                    MessageBox.Show("Usuario/Password Incorrectos. ó No hay conexión con el servidor!");
                }
                if (comboBox1.Text == "North America")
                {
                    MessageBox.Show("User/Password error. or not connection with the servers!");
                }
                
            }
            
            lblwait.Visible = true;
            this.Hide();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            if (comboBox1.Text == "Latinoamérica")
            {
                System.Diagnostics.Process.Start(" http://lan.bktgames.com/user-registration-3/");
            }
            if (comboBox1.Text == "North America")
            {
                System.Diagnostics.Process.Start(" http://na.bktgames.com/user-registration-3/");
            }
            
        }

        private void btnLogin_KeyPress(object sender, KeyPressEventArgs e)
        {
           
        }
        private void SetDefault(Button myDefaultBtn)
        {
            this.AcceptButton = myDefaultBtn;
        }

        private void Login_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar == (char)Keys.Escape)
            {
                Application.Exit();
            }
        }

        private void btnCancel_Click(object sender, EventArgs e)
        {
            txtClave.Text = String.Empty;
            txtUsuario.Text = String.Empty;
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

       
        private void Login_MouseDown(object sender, System.Windows.Forms.MouseEventArgs e)
        {
            if(e.Button == MouseButtons.Left)
            {
                BeingDragged = true;
                MouseDownX = e.X;
                MouseDownY = e.Y;
            }
        }

        private void Login_MouseUp(object sender, System.Windows.Forms.MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                BeingDragged = false;
            }
        }
        private void Login_MouseMove(object sender, System.Windows.Forms.MouseEventArgs e)
        {
            if (BeingDragged)
            {
                Point tmp = new Point();
                tmp.X = this.Location.X + (e.X - MouseDownX);
                tmp.Y = this.Location.Y + (e.Y - MouseDownY);
                this.Location = tmp;
                
            }
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (comboBox1.Text == "Latinoamérica")
            {
                label2.Text = "Contraseña :";
                lkDonacion.Text = "Ha olvidado su contraseña?  click aquí";
                linkLabel1.Text = "Si no tienes una cuenta de BKT Games, Creala aquí";
                btnLogin.Text = "Aceptar";
                btnCancel.Text = "Cancelar";
            }
            if (comboBox1.Text == "North America")
            {
                label2.Text = "Password :";
                lkDonacion.Text = "Have you forgotten your password? click here";
                linkLabel1.Text = "If you do not have an account BKT Games, create it here";
                btnLogin.Text = "Sign in";
                btnCancel.Text = "Cancel";
            }
        }

        private void pbExit_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
}
