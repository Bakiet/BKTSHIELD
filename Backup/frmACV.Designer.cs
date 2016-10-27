namespace ACP
{
    partial class frmACV
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmACV));
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.btnVista = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.lblUsuarioID = new System.Windows.Forms.Label();
            this.lblEstado = new System.Windows.Forms.Label();
            this.btnActualizar = new System.Windows.Forms.Button();
            this.btnAceptar = new System.Windows.Forms.Button();
            this.txtMatchID = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.gvJugadores = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.gvJugadores)).BeginInit();
            this.SuspendLayout();
            // 
            // timer1
            // 
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick_1);
            // 
            // btnVista
            // 
            this.btnVista.BackColor = System.Drawing.Color.DarkGray;
            this.btnVista.Location = new System.Drawing.Point(136, 185);
            this.btnVista.Name = "btnVista";
            this.btnVista.Size = new System.Drawing.Size(75, 23);
            this.btnVista.TabIndex = 28;
            this.btnVista.Text = "Vista Previa";
            this.btnVista.UseVisualStyleBackColor = false;
            this.btnVista.Click += new System.EventHandler(this.btnVista_Click_1);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BackColor = System.Drawing.Color.Transparent;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.SystemColors.ButtonFace;
            this.label4.Location = new System.Drawing.Point(348, 28);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(65, 13);
            this.label4.TabIndex = 27;
            this.label4.Text = "Imagenes:";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.BackColor = System.Drawing.Color.Transparent;
            this.label5.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.ForeColor = System.Drawing.Color.Blue;
            this.label5.Location = new System.Drawing.Point(415, 23);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(44, 24);
            this.label5.TabIndex = 26;
            this.label5.Text = "null";
            // 
            // lblUsuarioID
            // 
            this.lblUsuarioID.AutoSize = true;
            this.lblUsuarioID.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblUsuarioID.Location = new System.Drawing.Point(229, 193);
            this.lblUsuarioID.Name = "lblUsuarioID";
            this.lblUsuarioID.Size = new System.Drawing.Size(35, 13);
            this.lblUsuarioID.TabIndex = 25;
            this.lblUsuarioID.Text = "label2";
            this.lblUsuarioID.Visible = false;
            // 
            // lblEstado
            // 
            this.lblEstado.AutoSize = true;
            this.lblEstado.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblEstado.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.lblEstado.Location = new System.Drawing.Point(28, 193);
            this.lblEstado.Name = "lblEstado";
            this.lblEstado.Size = new System.Drawing.Size(39, 13);
            this.lblEstado.TabIndex = 24;
            this.lblEstado.Text = "NULL";
            // 
            // btnActualizar
            // 
            this.btnActualizar.BackColor = System.Drawing.Color.DarkGray;
            this.btnActualizar.Location = new System.Drawing.Point(364, 188);
            this.btnActualizar.Name = "btnActualizar";
            this.btnActualizar.Size = new System.Drawing.Size(75, 23);
            this.btnActualizar.TabIndex = 23;
            this.btnActualizar.Text = "Actualizar";
            this.btnActualizar.UseVisualStyleBackColor = false;
            this.btnActualizar.Click += new System.EventHandler(this.btnActualizar_Click_1);
            // 
            // btnAceptar
            // 
            this.btnAceptar.BackColor = System.Drawing.Color.DarkGray;
            this.btnAceptar.Location = new System.Drawing.Point(267, 21);
            this.btnAceptar.Name = "btnAceptar";
            this.btnAceptar.Size = new System.Drawing.Size(75, 23);
            this.btnAceptar.TabIndex = 22;
            this.btnAceptar.Text = "Entrar";
            this.btnAceptar.UseVisualStyleBackColor = false;
            this.btnAceptar.Click += new System.EventHandler(this.btnAceptar_Click_2);
            // 
            // txtMatchID
            // 
            this.txtMatchID.BackColor = System.Drawing.Color.DarkGray;
            this.txtMatchID.Location = new System.Drawing.Point(101, 21);
            this.txtMatchID.Name = "txtMatchID";
            this.txtMatchID.Size = new System.Drawing.Size(139, 20);
            this.txtMatchID.TabIndex = 21;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.label1.Location = new System.Drawing.Point(28, 28);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(63, 13);
            this.label1.TabIndex = 20;
            this.label1.Text = "Match ID:";
            // 
            // gvJugadores
            // 
            this.gvJugadores.BackgroundColor = System.Drawing.SystemColors.ControlDarkDark;
            this.gvJugadores.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.WindowFrame;
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle1.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.gvJugadores.DefaultCellStyle = dataGridViewCellStyle1;
            this.gvJugadores.Location = new System.Drawing.Point(31, 50);
            this.gvJugadores.MultiSelect = false;
            this.gvJugadores.Name = "gvJugadores";
            this.gvJugadores.ReadOnly = true;
            this.gvJugadores.Size = new System.Drawing.Size(408, 129);
            this.gvJugadores.TabIndex = 19;
            // 
            // frmACV
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ControlText;
            this.ClientSize = new System.Drawing.Size(477, 232);
            this.Controls.Add(this.btnVista);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.lblUsuarioID);
            this.Controls.Add(this.lblEstado);
            this.Controls.Add(this.btnActualizar);
            this.Controls.Add(this.btnAceptar);
            this.Controls.Add(this.txtMatchID);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.gvJugadores);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.Fixed3D;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.KeyPreview = true;
            this.MaximizeBox = false;
            this.Name = "frmACV";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Piranha Anticheat";
            this.KeyUp += new System.Windows.Forms.KeyEventHandler(this.frmACV_KeyUp);
            ((System.ComponentModel.ISupportInitialize)(this.gvJugadores)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Button btnVista;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label lblUsuarioID;
        private System.Windows.Forms.Label lblEstado;
        private System.Windows.Forms.Button btnActualizar;
        private System.Windows.Forms.Button btnAceptar;
        private System.Windows.Forms.TextBox txtMatchID;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView gvJugadores;
    }
}

