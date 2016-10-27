using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace ACP
{
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
            txtUsuario.Focus();
            
        }

      

        private void Login_Load(object sender, EventArgs e)
        {

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

        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            string usuario = txtUsuario.Text;

            string contrasena = txtClave.Text;

            Controllers.UsuarioController controller = new Controllers.UsuarioController();

            BusinessObjects.Usuario usuarios = new BusinessObjects.Usuario();

            usuarios = controller.ObtenerUsuario(usuario, contrasena);

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


            }
        }
    }
}
