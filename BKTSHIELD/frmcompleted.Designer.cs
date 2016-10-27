namespace BKTSHIELD
{
    partial class frmcompleted
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmcompleted));
            this.btnContinuar = new System.Windows.Forms.Button();
            this.progressBar1 = new System.Windows.Forms.ProgressBar();
            this.lblresultado = new System.Windows.Forms.Label();
            this.pbloadinglogo = new System.Windows.Forms.PictureBox();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            ((System.ComponentModel.ISupportInitialize)(this.pbloadinglogo)).BeginInit();
            this.SuspendLayout();
            // 
            // btnContinuar
            // 
            this.btnContinuar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.btnContinuar.ForeColor = System.Drawing.Color.White;
            this.btnContinuar.Location = new System.Drawing.Point(104, 348);
            this.btnContinuar.Name = "btnContinuar";
            this.btnContinuar.Size = new System.Drawing.Size(159, 37);
            this.btnContinuar.TabIndex = 49;
            this.btnContinuar.Text = "Continuar";
            this.btnContinuar.UseVisualStyleBackColor = false;
            this.btnContinuar.Visible = false;
            this.btnContinuar.Click += new System.EventHandler(this.btnContinuar_Click);
            // 
            // progressBar1
            // 
            this.progressBar1.Location = new System.Drawing.Point(24, 267);
            this.progressBar1.Name = "progressBar1";
            this.progressBar1.Size = new System.Drawing.Size(319, 23);
            this.progressBar1.TabIndex = 46;
            this.progressBar1.Visible = false;
            // 
            // lblresultado
            // 
            this.lblresultado.AutoSize = true;
            this.lblresultado.BackColor = System.Drawing.Color.Transparent;
            this.lblresultado.Font = new System.Drawing.Font("Microsoft Sans Serif", 6.5F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblresultado.ForeColor = System.Drawing.Color.Lime;
            this.lblresultado.Location = new System.Drawing.Point(35, 311);
            this.lblresultado.Name = "lblresultado";
            this.lblresultado.Size = new System.Drawing.Size(289, 12);
            this.lblresultado.TabIndex = 47;
            this.lblresultado.Text = "CARGA DE IMAGENES Y RESULTADOS COMPLETADA";
            this.lblresultado.Visible = false;
            // 
            // pbloadinglogo
            // 
            this.pbloadinglogo.BackColor = System.Drawing.Color.Transparent;
            this.pbloadinglogo.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pbloadinglogo.BackgroundImage")));
            this.pbloadinglogo.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pbloadinglogo.Location = new System.Drawing.Point(57, 12);
            this.pbloadinglogo.Name = "pbloadinglogo";
            this.pbloadinglogo.Size = new System.Drawing.Size(253, 230);
            this.pbloadinglogo.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pbloadinglogo.TabIndex = 48;
            this.pbloadinglogo.TabStop = false;
            this.pbloadinglogo.Visible = false;
            // 
            // timer1
            // 
            this.timer1.Interval = 3000;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // frmcompleted
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.ClientSize = new System.Drawing.Size(373, 406);
            this.Controls.Add(this.btnContinuar);
            this.Controls.Add(this.progressBar1);
            this.Controls.Add(this.lblresultado);
            this.Controls.Add(this.pbloadinglogo);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frmcompleted";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "completed";
            this.Load += new System.EventHandler(this.completed_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pbloadinglogo)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnContinuar;
        private System.Windows.Forms.ProgressBar progressBar1;
        private System.Windows.Forms.Label lblresultado;
        private System.Windows.Forms.PictureBox pbloadinglogo;
        private System.Windows.Forms.Timer timer1;
    }
}