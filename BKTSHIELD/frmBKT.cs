﻿using System;
using System.Collections.Generic;
using System.Data;
using System.Drawing;
using System.Windows.Forms;
using System.Diagnostics;
using BusinessObjects;
//using CuteWebUI;
using System.IO;
using MySql.Data.MySqlClient;
//using tessnet2;
using System.Drawing.Imaging;
using Amazon;
using Amazon.S3;
using System.ComponentModel;
using System.Text;
using System.Net;
using System.Reflection;

namespace BKTSHIELD
{
    public partial class frmBKT : Form, ISharpUpdatable
    {
        private SharpUpdater updater;
        public static string strshowUI;
        public static DateTime recordStarttime;

        public Boolean BeingDragged = false;
        public int MouseDownX;
        public int MouseDownY;


        // private Tesseract _ocr;

        public static bool passcorrect = false;

         static string connetionString= "server=54.243.15.24;port=3306;database=bitnami_wordpress;uid=root;pwd=SNvmJKa1I9lA;";
       // static string connetionString = "server=50.62.209.159;port=3306;database=bktgames_lan;uid=bktgames_lan;pwd=Terbkt01;";
        MySqlConnection cnn = new MySqlConnection(connetionString);

        string stream = "";
        static int idusuario=0;
        static string username = "";
        int contador = 0;
        int contador2 = 0;
        string partidoid = "";



        

        public frmBKT(int id,string user)
        {
            idusuario = id;
            username = user;
            InitializeComponent();

            lblversion.Text = this.ApplicationAssembly.GetName().Version.ToString();
            updater = new SharpUpdater(this);
            menuStrip1.Renderer = new MyRenderer();

            if (Login.regionUri == "Latinoamérica")
            {
                label4.Text = "Imagenes:";
                label2.Text = "Partida  : ";
                tabControlBKT.TabPages[0].Text = "Partidos";
                usuarioToolStripMenuItem.Text = "Usuario";
                usuarioToolStripMenuItem.DropDownItems[0].Text = "Cerrar sesion";
                opcionesToolStripMenuItem.Text = "Herramientas";
                opcionesToolStripMenuItem.DropDownItems[0].Text = "Opciones";
                ayudaToolStripMenuItem.Text = "Ayuda";
                ayudaToolStripMenuItem.DropDownItems[0].Text = "Verificar actualizaciones";
                ayudaToolStripMenuItem.DropDownItems[1].Text = "Ver ayuda";
                ayudaToolStripMenuItem.DropDownItems[2].Text = "Acerca de BKT SHIELD";
            }
            if (Login.regionUri == "North America")
            {
                label4.Text = "Images";
                label2.Text = "Match  : ";
                tabControlBKT.TabPages[0].Text = "Matches";
                usuarioToolStripMenuItem.Text = "User";
                usuarioToolStripMenuItem.DropDownItems[0].Text = "Logout";
                opcionesToolStripMenuItem.Text = "Tools";
                opcionesToolStripMenuItem.DropDownItems[0].Text = "Options";
                ayudaToolStripMenuItem.Text = "Help";
                ayudaToolStripMenuItem.DropDownItems[0].Text = "Check Updates";
                ayudaToolStripMenuItem.DropDownItems[1].Text = "See Help";
                ayudaToolStripMenuItem.DropDownItems[2].Text = "About BKT SHIELD";
            }

        }

       private void InitializeTimer()
        {
            
           // timer1.Interval = 15000;
            timer1.Enabled = true;
            if (Login.regionUri == "Latinoamérica")
            {
                btnAceptar.Text = "Detener";
            }
            if (Login.regionUri == "North America")
            {
                btnAceptar.Text = "Stop";
            }
           

        }



        private void timer1_Tick_1(object sender, EventArgs e)
        {
            try
            {
               
               

                string filetemp = @"" + System.IO.Directory.GetCurrentDirectory() + "/prints/" + "player" + idusuario + "match" + partidoid + "Temp.wmv";
                // startrecording();
           

                contador = contador + 1;
                if (Login.regionUri == "Latinoamérica")
                {
                    btnAceptar.Text = "Salir de Partido";
                }
                if (Login.regionUri == "North America")
                {
                    btnAceptar.Text = "Match ended";
                }
               
                IList<cheat> list = new List<cheat>();
                /*
                   BusinessObjects.Registro registro = new Registro();



                   registro.cheat = 0;
                   registro.ID = partidoid;
                   registro.UsuarioID = idusuario;
                   registro.Observacion = "Bien";
                   */

                cnn.Open();
                MySqlDataAdapter MyDAcheat = new MySqlDataAdapter();
                BusinessObjects.Usuario user = new BusinessObjects.Usuario();
                    string sqlSelectAllCheats = "SELECT `ID`,`Nombre` FROM `bkt_cheat`";
                    MyDAcheat.SelectCommand = new MySqlCommand(sqlSelectAllCheats, cnn);
               
                using (MySqlDataReader reader = MyDAcheat.SelectCommand.ExecuteReader())
                {
                    while (reader.Read())
                    {
                        cheat cheat = new cheat();
                        cheat.Nombre = reader[1].ToString();
                        list.Add(cheat);
                       
                    }
                }
                cnn.Close();


                btnImpr_Click();

              
                Controllers.PartidoController partido_controller = new Controllers.PartidoController();
                BusinessObjects.Partido partido = new Partido();


                Registro registro = new Registro();
                foreach (Process clsProcess in Process.GetProcesses())
                {
                   

                    // foreach (cheat cheat in list)
                    foreach (cheat cheat in list)
                    {

                        if (clsProcess.ProcessName.StartsWith(cheat.Nombre))//get proces start with cheat
                        {
                            
                            //lblEstado.Text = "Detectado.";
                            cnn.Open();
                            registro.cheat = 1;
                            registro.ID = partidoid;
                            registro.UsuarioID = idusuario;
                            if(Login.regionUri == "Latinoamérica") { 
                            registro.Observacion = "Baneo por uso del archivo: " + cheat.Nombre + " Jugador: " + username;
                            }
                            if (Login.regionUri == "North America")
                            {
                                registro.Observacion = "Banned for file: " + cheat.Nombre + " Player: " + username;
                            }
                            string query = "INSERT INTO bkt_registro (UsuarioID,cheat,Observacion,PartidoID) VALUES(" + registro.UsuarioID + "," + registro.cheat + ",'" + registro.Observacion + "'," + registro.ID + ")";
                            MySqlCommand cmd = new MySqlCommand(query, cnn);
                            cmd.ExecuteNonQuery();

                            cnn.Close();
                            // controller2.CrearRegistro(registro);
                        }

                    }
                    
                }
                list = null;
               // BindUsuarios();

            }
            catch (Exception ex)
            {
                ex.GetBaseException();// MessageBox.Show("Can not open connection ! ");
            }
        }
      

        private void btnImpr_Click()
        {
            //imagenes
            string pathcreate = @"" + System.IO.Directory.GetCurrentDirectory() + "/prints/";

            if (Directory.Exists(pathcreate))
            {

            }
            else
            {
                DirectoryInfo di = Directory.CreateDirectory(pathcreate);
                //di.Delete();
            }
            contador2 = contador2 + 1;

            Bitmap printscreen = new Bitmap(Screen.PrimaryScreen.Bounds.Width, Screen.PrimaryScreen.Bounds.Height);

            Graphics graphics = Graphics.FromImage(printscreen as Image);

            graphics.CopyFromScreen(0, 0, 0, 0, printscreen.Size);

            stream = @"" + System.IO.Directory.GetCurrentDirectory() + "/prints/Date-" + DateTime.Now.ToString().Replace("/", "").Replace(" ", "").Replace(":", "").Replace(".", "") + "-Match-" + partidoid + "-Player-" + username + "(" +idusuario + ").jpg";
            // string stream = "@" + System.IO.Directory.GetCurrentDirectory() + "/ photos/" + DateTime.Now.ToString().Replace("/", "").Replace(" ", "").Replace(":", "").Replace(".", "") + txtMatchID.Text + ".jpg";            
            printscreen.Save(stream, ImageFormat.Jpeg);
            //File.SetAttributes(stream, FileAttributes.);
            label5.Text = contador2.ToString();

            /*  String patj = @"C:/Users/Juan/Documents/bktshield/BKTSHIELD/prints/";

              IEnumerator files = Directory.GetFiles(patj).GetEnumerator();
              while (files.MoveNext())
              {
                  //get file extension 
                  string fileExtension = Path.GetExtension(Convert.ToString(files.Current));


              }
              */
           
            // Bitmap image = new Bitmap(stream);
           // Bitmap image = new Bitmap(@"C:\Users\Juan\Desktop\maxresdefault.jpg");

          //    Tesseract ocr = new Tesseract();
            //  ocr.SetVariable("tessedit_char_whitelist", "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.,$-/#&=()\"':?"); // Accepted characters
            //      ocr.SetVariable("tessedit_char_whitelist", "0123456789"); // Accepted characters
           // ocr.SetVariable("tessedit_char_whitelist", "0123456789"); // Accepted characters
          //       ocr.Init(null, "eng", false); // Directory of your tessdata folder
          //  ocr.SetVariable("outputbase", "digits");
                 //image.SetResolution(1920, 1080);

            // List<Word> result = ocr.DoOCR(image, Rectangle.Empty);
         //   List<Word> result = ocr.DoOCR(image, new Rectangle(70, 1, 100, 50));
         //   string Results = "";
         //      foreach (Word word in result)
         //     {
            //Results += word.Confidence + ", " + word.Text + ", " + word.Top + ", " + word.Bottom + ", " + word.Left + ", " + word.Right + "\n";
             // Results += word.Confidence + ", " + word.Text + ", " + word.Left + ", " + word.Top + ", " + word.Bottom + ", " + word.Right + "\n";
           //      Results += word.Text + "\n";
           //   }


            //  textBox1.Text = Results;
            /*
            _ocr = new Tesseract(stream, "eng", OcrEngineMode.TesseractCubeCombined);
            _ocr.SetVariable("tessedit_char_whitelist", "ABCDEFGHIJKLMNOPQRSTUVWXYZ-1234567890");

            _ocr.Dispose();
            */

        }

        


        private void BindUsuarios()
        {
            Controllers.UsuarioController controller = new Controllers.UsuarioController();

            BusinessObjects.Usuario usuarios = new BusinessObjects.Usuario();
/*
            if (txtMatchID.Text != "")
            {
                gvJugadores.DataSource = controller.ObtenerUsuarioPorMatch(txtMatchID.Text);
               
            }*/

        }


        private void btnActualizar_Click_1(object sender, EventArgs e)
        {
            BindUsuarios();
        }

        private void btnVista_Click_1(object sender, EventArgs e)
        {
           
        }


        private void frmACV_KeyUp(object sender, KeyEventArgs e)
        {
          /*  if (e.KeyCode == Keys.PrintScreen)
            {
                btnImpr_Click();
            }*/
        }
        private class MyRenderer : ToolStripProfessionalRenderer
        {
            public MyRenderer() : base(new MyColors()) { }
        }

        private class MyColors : ProfessionalColorTable
        {
            public override Color MenuItemPressedGradientBegin
            {
                get
                {
                    return Color.FromArgb(47, 47, 47);
                }
            }
            public override Color MenuItemPressedGradientEnd
            {
                get
                {
                    return Color.FromArgb(47, 47, 47);
                }
            }
            public override Color MenuItemSelected
            {
                get { return Color.FromArgb(47, 47, 47); }
            }
            public override Color MenuItemSelectedGradientBegin
            {
                get { return Color.FromArgb(47, 47, 47); }
            }
            public override Color MenuItemSelectedGradientEnd
            {
                get { return Color.FromArgb(47,47,47); }
            }
            public override Color MenuItemBorder
            {
                get { return Color.Lime; }
            }
        }
        private void frmBKT_Load(object sender, EventArgs e)
        {
            loadgrid();
        }
       
        public void Insert()
        {

            string query = "INSERT INTO tableinfo (name, age) VALUES('John Smith', '33')";
            //open connection
            cnn.Open();
            //create command and assign the query and connection from the constructor
            MySqlCommand cmd = new MySqlCommand(query, cnn);

                //Execute command
                cmd.ExecuteNonQuery();

                //close connection
                cnn.Close();
           
        }
        private void loadgrid()
        {
            pbEscaneando.Visible = false;
            pbEscanear.Visible = true;
            btnAceptar.Visible = false;
            notifyIcon1.Visible = false;
            try
            {
                cnn.Close();
                cnn.Open();
                MySqlDataAdapter MyDAUser = new MySqlDataAdapter();
                BusinessObjects.Usuario user = new BusinessObjects.Usuario();
                string sqlSelectAllUser = "SELECT um.`user_id` AS id, um.`meta_value` AS imageprofile, u.`display_name` AS nikename FROM `wp_usermeta` um, `wp_users` u WHERE um.`user_id`= u.`ID` AND u.ID=" + idusuario + " AND um.meta_key = 'profile_photo'";
                MyDAUser.SelectCommand = new MySqlCommand(sqlSelectAllUser, cnn);



                using (MySqlDataReader reader = MyDAUser.SelectCommand.ExecuteReader())
                {
                    while (reader.Read())
                    {
                        user.UsuarioID = Convert.ToInt32(reader[0].ToString());
                        user.image = reader[1].ToString();
                        user.Nombre = reader[2].ToString();

                    }
                }

                pbProfile.ImageLocation = user.image;
                lblusername.Text = user.Nombre;
                //  MessageBox.Show("Connection Open ! ");

                MySqlDataAdapter MyDA = new MySqlDataAdapter();
                MySqlDataAdapter MyDA2 = new MySqlDataAdapter();
                MySqlDataAdapter MyDA3 = new MySqlDataAdapter();
                // string query = "SELECT id,title,team1,team2 FROM `wp_cw_matches` WHERE `status` in(`active`,`pending`)";
                StringBuilder sql = new StringBuilder();

                DataSet d1 = new DataSet();
                DataSet d2 = new DataSet();
                DataSet d3 = new DataSet();
                string query = "";

                if (Login.regionUri == "Latinoamérica")
                {
                    query = "SELECT  m.`id` AS `ID`,p.`guid` AS `Equipo AS`, m.`title` AS `Partido` , (SELECT p2.guid AS logo1 FROM wp_2_posts p2,wp_2_cw_matches m2,wp_2_cw_teams t2 WHERE m.team1 = t2.id AND t2.logo = p2.id  group by m.id) AS `Equipo BS`,m.`status` AS `Status` FROM `wp_2_posts` p,`wp_2_cw_matches` m,`wp_2_cw_teams` t WHERE m.status IN ('pending','active') AND m.`team2` = t.`id` AND t.`logo` = p.`id`  group by m.`id`";
                }
                if (Login.regionUri == "North America")
                {
                    query = "SELECT m.`id` AS `ID`,p.`guid` AS `Equipo AS`, m.`title` AS `Partido` , (SELECT p2.guid AS logo1 FROM wp_5_posts p2, wp_5_cw_matches m2,wp_5_cw_teams t2 WHERE m.team1 = t2.id AND t2.logo = p2.id  group by m.id) AS `Equipo BS`, m.`status` AS `Status` FROM `wp_5_posts` p,`wp_5_cw_matches` m,`wp_5_cw_teams` t WHERE m.status IN ('pending', 'active') AND m.`team2` = t.`id` AND t.`logo` = p.`id`  group by m.`id`";
                }


                MyDA.SelectCommand = new MySqlCommand(query, cnn);

                d1 = new DataSet();
                dtgRooms.DataSource = d1;
                dtgRooms.Columns.Clear();
                // MySqlCommand command = new MySqlCommand(sql.ToString(), cnn);
                // string sqlSelectAll = ";SELECT  p.`guid` AS `logo2` FROM `wp_posts` p,`wp_cw_matches` m,`wp_cw_teams` t  WHERE m.`team2` = t.`id` AND t.`logo` = p.`id` group by m.`id`";
                //  MyDA.SelectCommand = new MySqlCommand(sqlSelectAll, cnn);

                //  "SELECT  m.`id` AS `Partido ID`, m.`title` AS `Partido` ,r.`tickets1` AS `Equipo 1`, p.`guid` AS `logo1`, r.`tickets2` AS `Equipo 2`, p.`guid` AS `logo2`,m.`status` AS `Status` FROM `wp_cw_matches` m, `wp_cw_rounds` r, `wp_cw_teams` t, `wp_posts` p WHERE m.`id`= r.`match_id` AND m.status IN ('pending','active') AND m.`team1` = t.`id` OR m.`team2` = t.`id` AND t.`logo` = p .`id`";

                //Open connection

                //Create Command
                // MySqlCommand cmd = new MySqlCommand(query, cnn);
                //Create a data reader and Execute the command
                //MySqlDataReader readerDatagrid = command.ExecuteReader();


                DataTable table = new DataTable();


                dtgRooms.AutoGenerateColumns = false;
                MyDA.Fill(d1, "table");
                dtgRooms.DataSource = d1.Tables[0].DefaultView;
                /*dtgRooms.Columns[0].Width = 40;
                dtgRooms.Columns[1].Width = 60;
                dtgRooms.Columns[2].Width = 100;
                dtgRooms.Columns[3].Width = 60;
                dtgRooms.Columns[4].Width = 40;*/
                /*
                                DataGridViewImageColumn teamA = new DataGridViewImageColumn();

                                Image image = Image.FromFile("Image Path");
                                teamA.Image = image;
                                dtgRooms.Columns.Add(teamA);
                                teamA.HeaderText = "Equipo A";
                                teamA.Name = "img";
                                */

                int number_of_rows = dtgRooms.RowCount;

                //dtgRooms.DataBind();


                BindingSource bSource = new BindingSource();

                // bSource.DataSource = table;


                // dtgRooms.DataSource = bSource;
                //dtgRooms.DataSource = bSource;

                DataGridViewColumn ID = new DataGridViewTextBoxColumn();
                ID.DataPropertyName = "ID";
                ID.HeaderText = "ID";
                ID.Name = "ID";
                ID.Width = 30;
                dtgRooms.Columns.Add(ID);

                DataGridViewColumn teamAstring = new DataGridViewTextBoxColumn();
                teamAstring.DataPropertyName = "Equipo AS";
                if (Login.regionUri == "Latinoamérica")
                {
                    teamAstring.HeaderText = "Equipo A";
                }
                if (Login.regionUri == "North America")
                {
                    teamAstring.HeaderText = "Team A";
                }

               
                teamAstring.Name = "Equipo AS";
                teamAstring.Width = 80;
                teamAstring.Visible = false;
                dtgRooms.Columns.Add(teamAstring);

                DataGridViewImageColumn teamA = new DataGridViewImageColumn();
                teamA.DataPropertyName = "Equipo A";
                if (Login.regionUri == "Latinoamérica")
                {
                    teamA.HeaderText = "Equipo A";
                }
                if (Login.regionUri == "North America")
                {
                    teamA.HeaderText = "Team A";
                }
                
                teamA.Name = "logo1";
                teamA.Width = 50;
                teamA.ImageLayout = DataGridViewImageCellLayout.Stretch;
                dtgRooms.Columns.Add(teamA);

                DataGridViewColumn vs = new DataGridViewTextBoxColumn();
                vs.DataPropertyName = "Partido";
                if (Login.regionUri == "Latinoamérica")
                {
                    vs.HeaderText = "Partido";
                }
                if (Login.regionUri == "North America")
                {
                    vs.HeaderText = "Match";
                }
                
                vs.Name = "vs";
                vs.Width = 100;
                dtgRooms.Columns.Add(vs);

                DataGridViewColumn teamBstring = new DataGridViewTextBoxColumn();
                teamBstring.DataPropertyName = "Equipo BS";
                if (Login.regionUri == "Latinoamérica")
                {
                    teamBstring.HeaderText = "Equipo B";
                }
                if (Login.regionUri == "North America")
                {
                    teamBstring.HeaderText = "Team B";
                }
               
                teamBstring.Name = "Equipo BS";
                teamBstring.Width = 80;
                teamBstring.Visible = false;
                dtgRooms.Columns.Add(teamBstring);

                DataGridViewImageColumn teamB = new DataGridViewImageColumn();
                teamB.DataPropertyName = "Equipo B";
                if (Login.regionUri == "Latinoamérica")
                {
                    teamB.HeaderText = "Equipo B";
                }
                if (Login.regionUri == "North America")
                {
                    teamB.HeaderText = "Team B";
                }
               
                teamB.Name = "logo2";
                teamB.Width = 50;
                teamB.ImageLayout = DataGridViewImageCellLayout.Stretch;
                dtgRooms.Columns.Add(teamB);

                DataGridViewColumn status = new DataGridViewTextBoxColumn();
                status.DataPropertyName = "Status";
                status.HeaderText = "Status";
                status.Name = "status";
                status.Width = 70;
                dtgRooms.Columns.Add(status);

                // Bitmap bmp = new Bitmap();
                //Bitmap bmp2 = new Bitmap();
                // dtgRooms.DataSource = d1.Tables[0].DefaultView;
                foreach (DataGridViewRow row in dtgRooms.Rows)
                {
                    row.Height = 50;
                    
                    //var wc = new WebClient();
                    //  Image x = Image.FromStream(wc.OpenRead(row["Equipo AS"].ToString()));

                    HttpWebRequest myRequest = (HttpWebRequest)WebRequest.Create(row.Cells[1].Value.ToString());
                    myRequest.Method = "GET";
                    HttpWebResponse myResponse = (HttpWebResponse)myRequest.GetResponse();
                    Bitmap bmp = new Bitmap(myResponse.GetResponseStream());
                    //Image bmp = Image.FromFile(@"" + row["Equipo A"].ToString());
                    myResponse.Close();
                    row.Cells[2].Value = bmp;

                    HttpWebRequest myRequest2 = (HttpWebRequest)WebRequest.Create(row.Cells[4].Value.ToString());
                    myRequest2.Method = "GET";
                    HttpWebResponse myResponse2 = (HttpWebResponse)myRequest2.GetResponse();
                    Bitmap bmp2 = new Bitmap(myResponse2.GetResponseStream());
                    //Image bmp = Image.FromFile(@"" + row["Equipo A"].ToString());
                    myResponse2.Close();
                    row.Cells[5].Value = bmp2;

                    //   Image bmp2 = Image.FromFile(@"" + row["Equipo B"].ToString());
                    //myResponse.Close();
                    //   row["Equipo B"] = bmp2;

                }
                dtgRooms.AllowUserToAddRows = false;
                //    readerDatagrid.Close();
                cnn.Close();
            }
            catch (Exception ex)
            {
                ex.GetBaseException();// MessageBox.Show("Can not open connection ! ");
            }
        }

        //Update statement
        public void UpdateStuff()
        {
            string query = "UPDATE tableinfo SET name='Joe', age='22' WHERE name='John Smith'";

            //Open connection
            cnn.Open();
            //create mysql command
            MySqlCommand cmd = new MySqlCommand();
                //Assign the query using CommandText
                cmd.CommandText = query;
                //Assign the connection using Connection
                cmd.Connection = cnn;

                //Execute query
                cmd.ExecuteNonQuery();

                //close connection
                cnn.Close();
           
        }

        //Delete statement
        public void Delete()
        {
            string query = "DELETE FROM tableinfo WHERE name='John Smith'";

            cnn.Open();
            MySqlCommand cmd = new MySqlCommand(query, cnn);
                cmd.ExecuteNonQuery();
                cnn.Close();
            cnn.Close();
        }

        
        public int Count()
        {
            string query = "SELECT Count(*) FROM tableinfo";
            int Count = -1;

            //Open Connection
            cnn.Open();
            //Create Mysql Command
            MySqlCommand cmd = new MySqlCommand(query, cnn);

                //ExecuteScalar will return one value
                Count = int.Parse(cmd.ExecuteScalar() + "");

                //close Connection
                cnn.Close();

                return Count;
            
        }

        public static string ShowDialog(string text, string caption)
        {
            Color color = new Color();
            color = Color.FromArgb(47,47,47);
            Form prompt = new Form()
            {
                Width = 500,
                Height = 150,
                FormBorderStyle = FormBorderStyle.None,
                BackColor = color,
                ForeColor = Color.FromName("Lime"),
                Text = caption,
                StartPosition = FormStartPosition.CenterScreen
            };
            Label textLabel = new Label() { Left = 50, Top = 20, Text = text, Width = 400 };
            TextBox textBox = new TextBox() { Left = 50, Top = 50, Width = 400 };
            textBox.ForeColor = Color.FromName("White");
            textBox.BackColor = color;
           
            if (Login.regionUri == "Latinoamérica")
            {
                Button confirmation = new Button() { Text = "Enviar", Left = 350, Width = 100, Top = 70, DialogResult = DialogResult.OK };
                confirmation.Click += (sender, e) => { prompt.Close(); };
                confirmation.BackColor = Color.FromName("Lime");
                confirmation.ForeColor = Color.FromName("White");
                prompt.Controls.Add(textBox);
                prompt.Controls.Add(confirmation);
                prompt.Controls.Add(textLabel);
                prompt.AcceptButton = confirmation;
            }
            if (Login.regionUri == "North America")
            {
                Button confirmation = new Button() { Text = "Send", Left = 350, Width = 100, Top = 70, DialogResult = DialogResult.OK };
                confirmation.Click += (sender, e) => { prompt.Close(); };
                confirmation.BackColor = Color.FromName("Lime");
                confirmation.ForeColor = Color.FromName("White");
                prompt.Controls.Add(textBox);
                prompt.Controls.Add(confirmation);
                prompt.Controls.Add(textLabel);
                prompt.AcceptButton = confirmation;
            }
            
           
           

            return prompt.ShowDialog() == DialogResult.OK ? textBox.Text : "";
        }

        private void dtgRooms_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {

           
            int rowIndex = e.RowIndex;
            DataGridViewRow row = dtgRooms.Rows[rowIndex];

            frmPass pass = new frmPass();

            Controllers.PartidoController partidoController = new Controllers.PartidoController();

            cnn.Close();
            cnn.Open();
            MySqlDataAdapter MyDAcheat = new MySqlDataAdapter();
            BusinessObjects.Usuario user = new BusinessObjects.Usuario();
            string sqlSelectAllCheats = "SELECT `pass` FROM `wp_2_cw_matches` WHERE id=" + row.Cells[0].Value.ToString() + "";
            partidoid = row.Cells[0].Value.ToString();
            MyDAcheat.SelectCommand = new MySqlCommand(sqlSelectAllCheats, cnn);
            Partido partido = new Partido();
            using (MySqlDataReader reader = MyDAcheat.SelectCommand.ExecuteReader())
            {
                while (reader.Read())
                {

                    partido.pass = reader[0].ToString();

                }
            }
            cnn.Close();

            

          //  Partido partido = partidoController.ObtenerPass(row.Cells[0].Value.ToString());
           
            if (partido != null)
            {
                pass.pass = partido.pass;
                string clave = "";
                //  pass.Show();
                if (Login.regionUri == "Latinoamérica")
                {
                     clave = ShowDialog("Por favor Ingresa clave del partido", "BKT SHIELD");
                }
                if (Login.regionUri == "North America")
                {
                     clave = ShowDialog("Please put match password", "BKT SHIELD");
                }
 
                if (partido.pass == clave)
                {
                    lblPartido.Text = row.Cells[3].Value.ToString();
                    InitializeTimer();
                    BindUsuarios();
                    btnAceptar.Visible = true;
                    btnAceptar.Text = "Salir de Partido";
                    pbEscaneando.Visible = true;
                    pbEscanear.Visible = false;
                }
                else
                {
                    string message = String.Empty;
                    string caption = String.Empty;
                    if (clave == String.Empty)
                    {
                        if (Login.regionUri == "Latinoamérica")
                        {
                             message = "Coloque la clave de la partida, Por favor intente nuevamente!";
                             caption = "Error Detectado";
                        }
                        if (Login.regionUri == "North America")
                        {
                             message = "Put the password to the match, Please try again!";
                             caption = "Error Detected";
                        }
                        
                        MessageBoxButtons buttons = MessageBoxButtons.OK;
                        DialogResult result;

                        result = MessageBox.Show(message, caption, buttons);
                    }
                    else
                    {
                        if (Login.regionUri == "Latinoamérica")
                        {
                            message = "Coloque la clave de la partida, Por favor intente nuevamente!";
                            caption = "Error Detectado";
                        }
                        if (Login.regionUri == "North America")
                        {
                            message = "Password not match, Please try again!";
                            caption = "Password not match";
                        }

                       
                        MessageBoxButtons buttons = MessageBoxButtons.OK;
                        DialogResult result;

                        result = MessageBox.Show(message, caption, buttons);
                    }
                }
            }
            else
            {

            }
            
           
        }

        private void notifyIcon1_MouseClick(object sender, MouseEventArgs e)
        {
            ShowInTaskbar = true;
            notifyIcon1.Visible = false;
            WindowState = FormWindowState.Normal;
            loadgrid();
        }

        private void frmBKT_Resize(object sender, EventArgs e)
        {
            if (FormWindowState.Minimized == this.WindowState)
            {
                ShowInTaskbar = false;
                notifyIcon1.Visible = true;
              //  notifyIcon1.ShowBalloonTip(1000);

             /*   notifyIcon1.Visible = true;
                notifyIcon1.ShowBalloonTip(30000);
                this.Hide();*/
            }
          /*  else if (FormWindowState.Normal == this.WindowState)
            {
                notifyIcon1.Visible = false;
            }*/
        }

        private void btnContinuar_Click(object sender, EventArgs e)
        {
           
            lvpartidos.Visible = true;
            tabControlBKT.Visible = true;
          /*  pbloadinglogo.Visible = false;
            progressBar1.Visible = false;
            btnContinuar.Visible = false;
            lblresultado.Visible = false;*/
            dtgRooms.Visible = true;
            btnAceptar.Visible = false;
        }

        private void btnAceptar_MouseClick(object sender, MouseEventArgs e)
        {
           
        }

        private void btnAceptar_Click(object sender, EventArgs e)
        {
            pbEscaneando.Visible = false;
            pbEscanear.Visible = true;
            lblPartido.Text = "";
            timer1.Enabled = false;
            //tabControlBKT.Visible = false;
            // lvpartidos.Visible = false;
            btnAceptar.Visible = false;
            //btnAceptar.Text = "Enviando....";
            frmcompleted complete = new frmcompleted(idusuario,username,partidoid);
            complete.Show();

        }

        private void cerrarSesiónToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void pictureBoxSearch_Click(object sender, EventArgs e)
        {
            string searchValue = txtSearch.Text;

            dtgRooms.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
            try
            {
                foreach (DataGridViewRow row in dtgRooms.Rows)
                {
                    if (row.Cells[3].Value.ToString().Contains(searchValue))
                    {
                        row.Selected = true;
                        break;
                    }
                }
            }
            catch (Exception exc)
            {
                Exception e98 = exc;
               // MessageBox.Show(exc.Message);
            }
        }

        private void txtSearch_TextChanged(object sender, EventArgs e)
        {
           
            string searchValue = txtSearch.Text;

            dtgRooms.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
            try
            {
                foreach (DataGridViewRow row in dtgRooms.Rows)
                {
                    if (row.Cells[3].Value.ToString().Contains(searchValue))
                    {
                        row.Selected = true;
                        break;
                    }
                    else {
                        row.Selected = false;
                        break;
                    }
                }
            }
            catch (Exception exc)
            {
                Exception e98 = exc;
                //MessageBox.Show(exc.Message);
            }
        }

        public string ApplicationName
        {
            get { return "BKTSHIELD"; }
        }

        public string ApplicationID
        {
            get { return "BKTSHIELD"; }
        }

        public Assembly ApplicationAssembly
        {
            get { return Assembly.GetExecutingAssembly(); }
        }

        public Icon ApplicationIcon
        {
            get { return this.Icon; }
        }

        public Uri UpdateXmlLocation
        {
            get { return new Uri("https://bktgames.com/updates/project.xml"); }
          // { return new Uri("https://raw.githubusercontent.com/henryxrl/SharpUpdate/master/project.xml"); }
            
        }

        public Form Context
        {
            get { return this; }
        }

        private void comprobarActualizacionesToolStripMenuItem_Click(object sender, EventArgs e)
        {
            updater.DoUpdate();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            ShowInTaskbar = false;
            notifyIcon1.Visible = true;
            this.WindowState = FormWindowState.Minimized;
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void frmBKT_MouseDown(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                BeingDragged = true;
                MouseDownX = e.X;
                MouseDownY = e.Y;
            }
        }

        private void frmBKT_MouseUp(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                BeingDragged = false;
            }
        }

        private void frmBKT_MouseMove(object sender, MouseEventArgs e)
        {
            if (BeingDragged)
            {
                Point tmp = new Point();
                tmp.X = this.Location.X + (e.X - MouseDownX);
                tmp.Y = this.Location.Y + (e.Y - MouseDownY);
                this.Location = tmp;

            }
        }
    }
}
