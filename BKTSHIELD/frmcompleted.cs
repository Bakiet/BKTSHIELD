using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using System.Drawing.Imaging;
using Amazon;
using Amazon.S3;
using System.IO;
using BusinessObjects;

namespace BKTSHIELD
{
    public partial class frmcompleted : Form
    {
        public static string strshowUI;
        public static DateTime recordStarttime;


        // private Tesseract _ocr;

        public static bool passcorrect = false;

        static string connetionString = "server=54.243.15.24;port=3306;database=bitnami_wordpress;uid=root;pwd=SNvmJKa1I9lA;";
        // static string connetionString = "server=50.62.209.159;port=3306;database=bktgames_lan;uid=bktgames_lan;pwd=Terbkt01;";
        MySqlConnection cnn = new MySqlConnection(connetionString);

       
        static int idusuario = 0;
        static string username = "";
       
        string partidoid = "";

        public frmcompleted(int id, string user, string partido)
        {
            idusuario = id;
            username = user;
            partidoid = partido;
            InitializeComponent();
        }
        
        private void completed_Load(object sender, EventArgs e)
        {
            lblresultado.Visible = true;
            if (Login.regionUri == "Latinoamérica")
            {
                lblresultado.Text = "CARGANDO POR FAVOR ESPERE";
            }
            if (Login.regionUri == "North America")
            {
                lblresultado.Text = "LOADING PLEASE WAIT";
            }
           
            btnContinuar.Visible = false;
            pbloadinglogo.Visible = true;
            progressBar1.Visible = true;

            progressBar1.Value = 0;
            timer1.Enabled = true;
            //System.Threading.Thread.Sleep(3000);
           
           // progressBar1.Visible = false;
           
        }
        private void EnviarImagen()
        {
            string path = System.IO.Directory.GetCurrentDirectory() + "/prints/";

            progressBar1.Visible = true;
            try
            {
                cnn.Open();

                DirectoryInfo Folder;
                FileInfo[] Images;

                Folder = new DirectoryInfo(path);
                Images = Folder.GetFiles();
                List<String> imagesList = new List<String>();
                // Double progress = 0;
                // int progresstotal = 0;
                progressBar1.Maximum = Images.Length - 1;
                for (int i = 0; i < Images.Length; i++)
                {
                   

                   
                    lblresultado.Visible = true;
                    if (Login.regionUri == "Latinoamérica")
                    {
                        lblresultado.Text = "CARGANDO POR FAVOR ESPERE";
                    }
                    if (Login.regionUri == "North America")
                    {
                        lblresultado.Text = "LOADING PLEASE WAIT";
                    }
                  

                    btnContinuar.Visible = true;
                    pbloadinglogo.Visible = true;


                    progressBar1.Increment(1);

                    /*   if(progressBar1.Value == 100)
                       {
                           progressBar1.Value = 0;
                       }*/
                    Controllers.RegistroController controller = new Controllers.RegistroController();

                    BusinessObjects.Registro registro = new Registro();
                    registro.ID = partidoid;
                    registro.UsuarioID = idusuario;

                    registro.PartidoID = Convert.ToInt32(partidoid);

                    FileStream Lee = new FileStream(System.IO.Directory.GetCurrentDirectory() + "/prints/" + Images[i].Name, FileMode.Open, FileAccess.Read);
                    // byte[] BytesImg = new byte[Lee.Length];
                    //int len = Convert.ToInt32(Lee.Length);
                    // Lee.Read(BytesImg, 0, len);
                    // registro.Imagen = System.IO.Directory.GetCurrentDirectory() + "/prints/" + Images[i].Name;

                    string fileName = Path.GetFileName(Lee.Name);
                    string projectFilePath = Directory.GetCurrentDirectory() + "/prints/";
                    string projectFileServer = "https://s3.amazonaws.com/s3.bktgameslatam.com/";
                    // File.Copy(Lee.Name, projectFilePath);
                    string workingdirectoryserver = projectFileServer;
                    string uploadfile = fileName;


                    //enter your password

                    string localimage = @"" + projectFilePath + uploadfile + "";

                    registro.Imagen = @"" + projectFileServer + uploadfile;
                    // WordPressWrapper _wpWrapper = new WordPressWrapper(Url, User, Password);
                    // _wpWrapper.UploadFile(localimage, fileName, true, "image/jpeg");

                    // string accessKey = "AKIAIJVNHSZARDPW5THQ";
                    string accessKey = "AKIAJUAY3NZPSQ2UOXIQ";

                    // string secretAccessKey = "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";
                    string secretAccessKey = "9iNxoLoBiOiiWJfHqCUjhakFxViKvvsQu4DzOnH1";
                    string filePath = localimage;
                    string s3Bucket = "s3.bktgameslatam.com";
                    
                    string serviceUrl = "http://s3-us-west-2.amazonaws.com";  //N. Oregon service url         
                    // string serviceUrl = "http://s3-external-1.amazonaws.com";  //N. Virginia service url         
                    string newFileName = fileName; //new filename in s3, optional

                    //create aws object
                    S3 s3 = new S3(accessKey, secretAccessKey, serviceUrl);

                    //upload
                    s3.UploadFile(filePath, s3Bucket, newFileName, false);


                    string query = "INSERT INTO bkt_imagen (UsuarioID,RegistroID,Imagen,PartidoID) VALUES(@usuarioid,@registroid,@image,@partidoid)";

                    MySqlCommand cmd = new MySqlCommand(query, cnn);

                    MySqlParameter oParam0 = cmd.Parameters.Add("@usuarioid", MySqlDbType.Int32);
                    oParam0.Value = registro.UsuarioID;

                    MySqlParameter oParam1 = cmd.Parameters.Add("@registroid", MySqlDbType.VarChar, 50);
                    oParam1.Value = registro.ID;

                    MySqlParameter oParam2 = cmd.Parameters.Add("@image", MySqlDbType.VarChar, 500);
                    oParam2.Value = registro.Imagen;

                    MySqlParameter oParam3 = cmd.Parameters.Add("@partidoid", MySqlDbType.Int32);
                    oParam3.Value = registro.PartidoID;

                    cmd.ExecuteNonQuery();

                    // controller.UpdateRegistro(registro);


                    // imagesList.Add(String.Format(@"{0}/{1}", folderName, Images[i].Name));

                }
                btnContinuar.Visible = true;
                lblresultado.Visible = true;
                if (Login.regionUri == "Latinoamérica")
                {
                    lblresultado.Text = "CARGA DE IMAGENES Y RESULTADOS COMPLETADA";
                }
                if (Login.regionUri == "North America")
                {
                    lblresultado.Text = "LOADING IMAGES AND RESULTS COMPLETED";
                }
               
            }
            catch (Exception ex)
            {
                ex.GetBaseException();// MessageBox.Show("Can not open connection ! ");
            }

        }

        private void btnContinuar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnEnviarResultados_Click(object sender, EventArgs e)
        {
            
          //  EnviarImagen();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            EnviarImagen();
        }
    }
}
