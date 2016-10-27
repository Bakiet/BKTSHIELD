using System;
using System.Windows.Forms;

namespace BKTSHIELD
{
    /// <summary>
    /// Form to show details about the update
    /// </summary>
    internal partial class SharpUpdateInfoForm : Form
    {
        /// <summary>
        /// Creates a new SharpUpdateInfoForm
        /// </summary>
        internal SharpUpdateInfoForm(ISharpUpdatable applicationInfo, SharpUpdateXml updateInfo)
        {
            InitializeComponent();

            // Sets the icon if it's not null
            if (applicationInfo.ApplicationIcon != null)
                this.Icon = applicationInfo.ApplicationIcon;

            // Fill in the UI
            if (Login.regionUri == "Latinoamérica")
            {
                this.Text = applicationInfo.ApplicationName + " - Info de Actualización";
                this.lblVersions.Text = String.Format("Versión Instalada: {0}\núltima Versión: {1}", applicationInfo.ApplicationAssembly.GetName().Version.ToString(),
                    updateInfo.Version.ToString());
            }
            if (Login.regionUri == "North America")
            {
                this.Text = applicationInfo.ApplicationName + " - Info about Update";
                this.lblVersions.Text = String.Format("Installed version: {0}\nLast version: {1}", applicationInfo.ApplicationAssembly.GetName().Version.ToString(),
                    updateInfo.Version.ToString());
            }
            
            this.txtDescription.Text = updateInfo.Description;
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void txtDescription_KeyDown(object sender, KeyEventArgs e)
        {
            // Only allow Cntrl - C to copy text
            if (!(e.Control && e.KeyCode == Keys.C))
                e.SuppressKeyPress = true;
        }
    }
}