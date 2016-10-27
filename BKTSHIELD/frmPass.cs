using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace BKTSHIELD
{
    public partial class frmPass : Form
    {
        public string pass;

        public frmPass()
        {
            InitializeComponent();
        }

        private void btnAceptar_Click(object sender, EventArgs e)
        {
            if(pass == txtpass.Text)
            {
                frmBKT.passcorrect = true;
            }else
            {
                frmBKT.passcorrect = false;
            }
            this.Close();
        }
    }
}
