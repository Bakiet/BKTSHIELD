using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.IO;
using BusinessObjects;

namespace ACP
{
    public partial class Vistas : Form
    {
        public Vistas()
        {
            InitializeComponent();
        }

        private void Vistas_Load(object sender, EventArgs e)
        {
            dgImagen.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
            dgImagen.MultiSelect = false;
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            Controllers.ImagenController controller = new Controllers.ImagenController();
            if (txtBuscar.Text != string.Empty)
            {
                dgImagen.DataSource = controller.ObtenerImagenPorMatch(txtBuscar.Text);
                 

            }
            else
            {
                MessageBox.Show("Introduzca el MatchID");
            }
            
           
        }

        private void dgImagen_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            string valorid = string.Empty;
            valorid = dgImagen.Rows[e.RowIndex].Cells[2].Value.ToString();

            Controllers.ImagenController controller = new Controllers.ImagenController();

            byte[] MyData = new byte[0];

            Foto foto = new Foto();
            
            foto = controller.ObtenerFoto(int.Parse(valorid));

            MyData = foto.Imagen;

            MemoryStream stream = new MemoryStream(MyData);
           
            pictureBox1.Image = Image.FromStream(stream);


            Controllers.RegistroController controller2 = new Controllers.RegistroController();

            
            if (txtBuscar.Text != string.Empty)
            {
                dtCheat.DataSource = controller2.ObtenerCheatsUsuario(int.Parse(dgImagen.Rows[e.RowIndex].Cells[0].Value.ToString()), txtBuscar.Text);

                lblEscaneos.Text = Convert.ToString(dtCheat.Rows.Count);

                foreach (DataGridViewRow row in dtCheat.Rows)
                {
                    if (row.Cells["Observacion"].Value.ToString() != "Bien")
                    {
                        lblCheat.Text = "DETECTADO";
                        lblCheat.ForeColor = Color.Red;
                        row.Cells["Observacion"].Style.BackColor = Color.Red;
                    }
                }
            }
        }
    }
}
