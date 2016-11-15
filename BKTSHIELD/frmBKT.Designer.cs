namespace BKTSHIELD
{
    partial class frmBKT
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmBKT));
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle3 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle4 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle5 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle6 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle7 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle8 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle9 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle10 = new System.Windows.Forms.DataGridViewCellStyle();
            this.timer1 = new System.Windows.Forms.Timer(this.components);
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.btnAceptar = new System.Windows.Forms.Button();
            this.txtSearch = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.lblPartido = new System.Windows.Forms.Label();
            this.notifyIcon1 = new System.Windows.Forms.NotifyIcon(this.components);
            this.lblusername = new System.Windows.Forms.Label();
            this.lblresultado1 = new System.Windows.Forms.Label();
            this.dtgRoomsOthers = new System.Windows.Forms.DataGridView();
            this.lblversion = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.dtgRooms = new System.Windows.Forms.DataGridView();
            this.lblMatches = new System.Windows.Forms.Label();
            this.lblMatchesOthers = new System.Windows.Forms.Label();
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.lvpartidos = new System.Windows.Forms.ListView();
            this.pbEscanear = new System.Windows.Forms.PictureBox();
            this.pictureBoxSearch = new System.Windows.Forms.PictureBox();
            this.pbProfile = new System.Windows.Forms.PictureBox();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.usuarioToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.cerrarSesiónToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.ayudaToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.comprobarActualizacionesToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.verAyudaToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.acercaDeToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.pbEscaneando = new System.Windows.Forms.PictureBox();
            this.pbLoading = new System.Windows.Forms.PictureBox();
            this.lblloading = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dtgRoomsOthers)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dtgRooms)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbEscanear)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxSearch)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbProfile)).BeginInit();
            this.menuStrip1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pbEscaneando)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbLoading)).BeginInit();
            this.SuspendLayout();
            // 
            // timer1
            // 
            this.timer1.Interval = 3000;
            this.timer1.Tick += new System.EventHandler(this.timer1_Tick_1);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BackColor = System.Drawing.Color.Transparent;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.ForeColor = System.Drawing.SystemColors.ButtonFace;
            this.label4.Location = new System.Drawing.Point(127, 97);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(65, 13);
            this.label4.TabIndex = 27;
            this.label4.Text = "Imagenes:";
            this.label4.Visible = false;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.BackColor = System.Drawing.Color.Transparent;
            this.label5.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.ForeColor = System.Drawing.Color.Lime;
            this.label5.Location = new System.Drawing.Point(198, 89);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(44, 24);
            this.label5.TabIndex = 26;
            this.label5.Text = "null";
            this.label5.Visible = false;
            // 
            // btnAceptar
            // 
            this.btnAceptar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(192)))), ((int)(((byte)(0)))));
            this.btnAceptar.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAceptar.ForeColor = System.Drawing.SystemColors.Control;
            this.btnAceptar.Location = new System.Drawing.Point(13, 682);
            this.btnAceptar.Name = "btnAceptar";
            this.btnAceptar.Size = new System.Drawing.Size(108, 33);
            this.btnAceptar.TabIndex = 22;
            this.btnAceptar.UseVisualStyleBackColor = false;
            this.btnAceptar.Click += new System.EventHandler(this.btnAceptar_Click);
            this.btnAceptar.MouseClick += new System.Windows.Forms.MouseEventHandler(this.btnAceptar_MouseClick);
            // 
            // txtSearch
            // 
            this.txtSearch.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(50)))), ((int)(((byte)(50)))), ((int)(((byte)(50)))));
            this.txtSearch.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtSearch.ForeColor = System.Drawing.Color.Lime;
            this.txtSearch.Location = new System.Drawing.Point(49, 158);
            this.txtSearch.Name = "txtSearch";
            this.txtSearch.Size = new System.Drawing.Size(309, 20);
            this.txtSearch.TabIndex = 30;
            this.txtSearch.TextChanged += new System.EventHandler(this.txtSearch_TextChanged);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.Transparent;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.Lime;
            this.label2.Location = new System.Drawing.Point(123, 125);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(63, 13);
            this.label2.TabIndex = 34;
            this.label2.Text = "Partida  : ";
            // 
            // lblPartido
            // 
            this.lblPartido.AutoSize = true;
            this.lblPartido.BackColor = System.Drawing.Color.Transparent;
            this.lblPartido.Font = new System.Drawing.Font("Microsoft Sans Serif", 6.5F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblPartido.ForeColor = System.Drawing.Color.Lime;
            this.lblPartido.Location = new System.Drawing.Point(192, 126);
            this.lblPartido.Name = "lblPartido";
            this.lblPartido.Size = new System.Drawing.Size(0, 12);
            this.lblPartido.TabIndex = 35;
            // 
            // notifyIcon1
            // 
            this.notifyIcon1.BalloonTipIcon = System.Windows.Forms.ToolTipIcon.Info;
            this.notifyIcon1.BalloonTipText = "Trabajando en segundo plano";
            this.notifyIcon1.BalloonTipTitle = "BKT Shield";
            this.notifyIcon1.Icon = ((System.Drawing.Icon)(resources.GetObject("notifyIcon1.Icon")));
            this.notifyIcon1.Text = "BKT SHIELD";
            this.notifyIcon1.Visible = true;
            this.notifyIcon1.MouseClick += new System.Windows.Forms.MouseEventHandler(this.notifyIcon1_MouseClick);
            // 
            // lblusername
            // 
            this.lblusername.AutoSize = true;
            this.lblusername.BackColor = System.Drawing.Color.Transparent;
            this.lblusername.Font = new System.Drawing.Font("Microsoft Sans Serif", 8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblusername.ForeColor = System.Drawing.Color.LimeGreen;
            this.lblusername.Location = new System.Drawing.Point(127, 52);
            this.lblusername.Name = "lblusername";
            this.lblusername.Size = new System.Drawing.Size(0, 13);
            this.lblusername.TabIndex = 37;
            // 
            // lblresultado1
            // 
            this.lblresultado1.AutoSize = true;
            this.lblresultado1.BackColor = System.Drawing.Color.Transparent;
            this.lblresultado1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblresultado1.ForeColor = System.Drawing.Color.Lime;
            this.lblresultado1.Location = new System.Drawing.Point(295, 89);
            this.lblresultado1.Name = "lblresultado1";
            this.lblresultado1.Size = new System.Drawing.Size(41, 13);
            this.lblresultado1.TabIndex = 42;
            this.lblresultado1.Text = "label1";
            this.lblresultado1.Visible = false;
            // 
            // dtgRoomsOthers
            // 
            this.dtgRoomsOthers.AllowUserToAddRows = false;
            this.dtgRoomsOthers.AllowUserToDeleteRows = false;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.Color.LimeGreen;
            this.dtgRoomsOthers.AlternatingRowsDefaultCellStyle = dataGridViewCellStyle1;
            this.dtgRoomsOthers.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRoomsOthers.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dtgRoomsOthers.CellBorderStyle = System.Windows.Forms.DataGridViewCellBorderStyle.None;
            this.dtgRoomsOthers.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.LawnGreen;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dtgRoomsOthers.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle2;
            this.dtgRoomsOthers.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle3.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle3.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle3.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle3.SelectionBackColor = System.Drawing.Color.LawnGreen;
            dataGridViewCellStyle3.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle3.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dtgRoomsOthers.DefaultCellStyle = dataGridViewCellStyle3;
            this.dtgRoomsOthers.EnableHeadersVisualStyles = false;
            this.dtgRoomsOthers.GridColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRoomsOthers.Location = new System.Drawing.Point(21, 217);
            this.dtgRoomsOthers.Name = "dtgRoomsOthers";
            this.dtgRoomsOthers.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle4.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle4.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle4.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle4.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle4.SelectionBackColor = System.Drawing.Color.LimeGreen;
            dataGridViewCellStyle4.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle4.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dtgRoomsOthers.RowHeadersDefaultCellStyle = dataGridViewCellStyle4;
            dataGridViewCellStyle5.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle5.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle5.SelectionBackColor = System.Drawing.Color.LawnGreen;
            this.dtgRoomsOthers.RowsDefaultCellStyle = dataGridViewCellStyle5;
            this.dtgRoomsOthers.RowTemplate.DefaultCellStyle.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRoomsOthers.RowTemplate.DefaultCellStyle.ForeColor = System.Drawing.Color.Lime;
            this.dtgRoomsOthers.RowTemplate.DefaultCellStyle.SelectionBackColor = System.Drawing.Color.LawnGreen;
            this.dtgRoomsOthers.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.dtgRoomsOthers.Size = new System.Drawing.Size(351, 425);
            this.dtgRoomsOthers.TabIndex = 1;
            this.dtgRoomsOthers.Visible = false;
            this.dtgRoomsOthers.CellContentDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtgRoomsOthers_CellContentDoubleClick);
            // 
            // lblversion
            // 
            this.lblversion.AutoSize = true;
            this.lblversion.BackColor = System.Drawing.Color.Transparent;
            this.lblversion.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblversion.ForeColor = System.Drawing.Color.Lime;
            this.lblversion.Location = new System.Drawing.Point(97, 722);
            this.lblversion.Name = "lblversion";
            this.lblversion.Size = new System.Drawing.Size(53, 13);
            this.lblversion.TabIndex = 45;
            this.lblversion.Text = "Version:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.Lime;
            this.label1.Location = new System.Drawing.Point(10, 722);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(85, 13);
            this.label1.TabIndex = 48;
            this.label1.Text = "Version BETA";
            // 
            // dtgRooms
            // 
            this.dtgRooms.AllowUserToAddRows = false;
            this.dtgRooms.AllowUserToDeleteRows = false;
            dataGridViewCellStyle6.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle6.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle6.SelectionBackColor = System.Drawing.Color.LimeGreen;
            this.dtgRooms.AlternatingRowsDefaultCellStyle = dataGridViewCellStyle6;
            this.dtgRooms.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRooms.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dtgRooms.CellBorderStyle = System.Windows.Forms.DataGridViewCellBorderStyle.None;
            this.dtgRooms.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle7.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle7.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle7.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle7.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle7.SelectionBackColor = System.Drawing.Color.LawnGreen;
            dataGridViewCellStyle7.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle7.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dtgRooms.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle7;
            this.dtgRooms.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle8.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle8.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle8.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle8.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle8.SelectionBackColor = System.Drawing.Color.LawnGreen;
            dataGridViewCellStyle8.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle8.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dtgRooms.DefaultCellStyle = dataGridViewCellStyle8;
            this.dtgRooms.EnableHeadersVisualStyles = false;
            this.dtgRooms.GridColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRooms.Location = new System.Drawing.Point(18, 221);
            this.dtgRooms.Name = "dtgRooms";
            this.dtgRooms.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle9.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle9.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle9.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle9.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle9.SelectionBackColor = System.Drawing.Color.LimeGreen;
            dataGridViewCellStyle9.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle9.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dtgRooms.RowHeadersDefaultCellStyle = dataGridViewCellStyle9;
            dataGridViewCellStyle10.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            dataGridViewCellStyle10.ForeColor = System.Drawing.Color.Lime;
            dataGridViewCellStyle10.SelectionBackColor = System.Drawing.Color.LawnGreen;
            this.dtgRooms.RowsDefaultCellStyle = dataGridViewCellStyle10;
            this.dtgRooms.RowTemplate.DefaultCellStyle.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.dtgRooms.RowTemplate.DefaultCellStyle.ForeColor = System.Drawing.Color.Lime;
            this.dtgRooms.RowTemplate.DefaultCellStyle.SelectionBackColor = System.Drawing.Color.LawnGreen;
            this.dtgRooms.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.dtgRooms.Size = new System.Drawing.Size(351, 425);
            this.dtgRooms.TabIndex = 0;
            this.dtgRooms.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtgRooms_CellDoubleClick);
            // 
            // lblMatches
            // 
            this.lblMatches.AutoSize = true;
            this.lblMatches.BackColor = System.Drawing.Color.Transparent;
            this.lblMatches.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblMatches.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.lblMatches.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblMatches.ForeColor = System.Drawing.Color.Lime;
            this.lblMatches.Location = new System.Drawing.Point(35, 190);
            this.lblMatches.Name = "lblMatches";
            this.lblMatches.Size = new System.Drawing.Size(62, 17);
            this.lblMatches.TabIndex = 49;
            this.lblMatches.Text = "Partidos";
            this.lblMatches.Click += new System.EventHandler(this.lblMatches_Click);
            // 
            // lblMatchesOthers
            // 
            this.lblMatchesOthers.AutoSize = true;
            this.lblMatchesOthers.BackColor = System.Drawing.Color.Transparent;
            this.lblMatchesOthers.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblMatchesOthers.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.lblMatchesOthers.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblMatchesOthers.ForeColor = System.Drawing.Color.Lime;
            this.lblMatchesOthers.Location = new System.Drawing.Point(127, 190);
            this.lblMatchesOthers.Name = "lblMatchesOthers";
            this.lblMatchesOthers.Size = new System.Drawing.Size(100, 17);
            this.lblMatchesOthers.TabIndex = 50;
            this.lblMatchesOthers.Text = "Partidos Otros";
            this.lblMatchesOthers.Click += new System.EventHandler(this.lblMatchesOthers_Click);
            // 
            // pictureBox2
            // 
            this.pictureBox2.BackColor = System.Drawing.Color.Transparent;
            this.pictureBox2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox2.BackgroundImage")));
            this.pictureBox2.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pictureBox2.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox2.Location = new System.Drawing.Point(370, 3);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(19, 21);
            this.pictureBox2.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox2.TabIndex = 47;
            this.pictureBox2.TabStop = false;
            this.pictureBox2.Click += new System.EventHandler(this.pictureBox2_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackColor = System.Drawing.Color.Transparent;
            this.pictureBox1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox1.BackgroundImage")));
            this.pictureBox1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pictureBox1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBox1.Location = new System.Drawing.Point(344, 3);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(19, 21);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 46;
            this.pictureBox1.TabStop = false;
            this.pictureBox1.Click += new System.EventHandler(this.pictureBox1_Click);
            // 
            // lvpartidos
            // 
            this.lvpartidos.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("lvpartidos.BackgroundImage")));
            this.lvpartidos.BackgroundImageTiled = true;
            this.lvpartidos.Location = new System.Drawing.Point(671, 27);
            this.lvpartidos.Name = "lvpartidos";
            this.lvpartidos.Size = new System.Drawing.Size(230, 86);
            this.lvpartidos.TabIndex = 0;
            this.lvpartidos.UseCompatibleStateImageBehavior = false;
            // 
            // pbEscanear
            // 
            this.pbEscanear.BackColor = System.Drawing.Color.Transparent;
            this.pbEscanear.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pbEscanear.BackgroundImage")));
            this.pbEscanear.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pbEscanear.Location = new System.Drawing.Point(282, 652);
            this.pbEscanear.Name = "pbEscanear";
            this.pbEscanear.Size = new System.Drawing.Size(87, 83);
            this.pbEscanear.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pbEscanear.TabIndex = 43;
            this.pbEscanear.TabStop = false;
            // 
            // pictureBoxSearch
            // 
            this.pictureBoxSearch.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxSearch.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBoxSearch.BackgroundImage")));
            this.pictureBoxSearch.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pictureBoxSearch.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pictureBoxSearch.Location = new System.Drawing.Point(21, 157);
            this.pictureBoxSearch.Name = "pictureBoxSearch";
            this.pictureBoxSearch.Size = new System.Drawing.Size(19, 21);
            this.pictureBoxSearch.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBoxSearch.TabIndex = 38;
            this.pictureBoxSearch.TabStop = false;
            this.pictureBoxSearch.Click += new System.EventHandler(this.pictureBoxSearch_Click);
            // 
            // pbProfile
            // 
            this.pbProfile.BackColor = System.Drawing.Color.Transparent;
            this.pbProfile.Location = new System.Drawing.Point(21, 48);
            this.pbProfile.Name = "pbProfile";
            this.pbProfile.Size = new System.Drawing.Size(96, 90);
            this.pbProfile.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pbProfile.TabIndex = 31;
            this.pbProfile.TabStop = false;
            // 
            // menuStrip1
            // 
            this.menuStrip1.BackColor = System.Drawing.Color.Lime;
            this.menuStrip1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("menuStrip1.BackgroundImage")));
            this.menuStrip1.Font = new System.Drawing.Font("Segoe UI", 9F, System.Drawing.FontStyle.Bold);
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.usuarioToolStripMenuItem,
            this.ayudaToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(395, 24);
            this.menuStrip1.TabIndex = 40;
            this.menuStrip1.Text = "menuStrip1";
            // 
            // usuarioToolStripMenuItem
            // 
            this.usuarioToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.usuarioToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("usuarioToolStripMenuItem.BackgroundImage")));
            this.usuarioToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.cerrarSesiónToolStripMenuItem});
            this.usuarioToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.usuarioToolStripMenuItem.Name = "usuarioToolStripMenuItem";
            this.usuarioToolStripMenuItem.Size = new System.Drawing.Size(61, 20);
            this.usuarioToolStripMenuItem.Text = "Usuario";
            // 
            // cerrarSesiónToolStripMenuItem
            // 
            this.cerrarSesiónToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.cerrarSesiónToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("cerrarSesiónToolStripMenuItem.BackgroundImage")));
            this.cerrarSesiónToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.cerrarSesiónToolStripMenuItem.Name = "cerrarSesiónToolStripMenuItem";
            this.cerrarSesiónToolStripMenuItem.Size = new System.Drawing.Size(148, 22);
            this.cerrarSesiónToolStripMenuItem.Text = "Cerrar Sesión";
            this.cerrarSesiónToolStripMenuItem.Click += new System.EventHandler(this.cerrarSesiónToolStripMenuItem_Click);
            // 
            // ayudaToolStripMenuItem
            // 
            this.ayudaToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.ayudaToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("ayudaToolStripMenuItem.BackgroundImage")));
            this.ayudaToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.comprobarActualizacionesToolStripMenuItem,
            this.verAyudaToolStripMenuItem,
            this.acercaDeToolStripMenuItem});
            this.ayudaToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.ayudaToolStripMenuItem.Name = "ayudaToolStripMenuItem";
            this.ayudaToolStripMenuItem.Size = new System.Drawing.Size(53, 20);
            this.ayudaToolStripMenuItem.Text = "Ayuda";
            // 
            // comprobarActualizacionesToolStripMenuItem
            // 
            this.comprobarActualizacionesToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.comprobarActualizacionesToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("comprobarActualizacionesToolStripMenuItem.BackgroundImage")));
            this.comprobarActualizacionesToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.comprobarActualizacionesToolStripMenuItem.Name = "comprobarActualizacionesToolStripMenuItem";
            this.comprobarActualizacionesToolStripMenuItem.Size = new System.Drawing.Size(224, 22);
            this.comprobarActualizacionesToolStripMenuItem.Text = "Comprobar Actualizaciones";
            this.comprobarActualizacionesToolStripMenuItem.Click += new System.EventHandler(this.comprobarActualizacionesToolStripMenuItem_Click);
            // 
            // verAyudaToolStripMenuItem
            // 
            this.verAyudaToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.verAyudaToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("verAyudaToolStripMenuItem.BackgroundImage")));
            this.verAyudaToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.verAyudaToolStripMenuItem.Name = "verAyudaToolStripMenuItem";
            this.verAyudaToolStripMenuItem.Size = new System.Drawing.Size(224, 22);
            this.verAyudaToolStripMenuItem.Text = "Ver Ayuda";
            // 
            // acercaDeToolStripMenuItem
            // 
            this.acercaDeToolStripMenuItem.BackColor = System.Drawing.Color.Transparent;
            this.acercaDeToolStripMenuItem.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("acercaDeToolStripMenuItem.BackgroundImage")));
            this.acercaDeToolStripMenuItem.ForeColor = System.Drawing.Color.Lime;
            this.acercaDeToolStripMenuItem.Name = "acercaDeToolStripMenuItem";
            this.acercaDeToolStripMenuItem.Size = new System.Drawing.Size(224, 22);
            this.acercaDeToolStripMenuItem.Text = "Acerca de BKT SHIELD";
            // 
            // pbEscaneando
            // 
            this.pbEscaneando.BackColor = System.Drawing.Color.Transparent;
            this.pbEscaneando.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.pbEscaneando.Image = ((System.Drawing.Image)(resources.GetObject("pbEscaneando.Image")));
            this.pbEscaneando.Location = new System.Drawing.Point(240, 648);
            this.pbEscaneando.Name = "pbEscaneando";
            this.pbEscaneando.Size = new System.Drawing.Size(167, 100);
            this.pbEscaneando.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pbEscaneando.TabIndex = 44;
            this.pbEscaneando.TabStop = false;
            // 
            // pbLoading
            // 
            this.pbLoading.Image = ((System.Drawing.Image)(resources.GetObject("pbLoading.Image")));
            this.pbLoading.Location = new System.Drawing.Point(162, 336);
            this.pbLoading.Name = "pbLoading";
            this.pbLoading.Size = new System.Drawing.Size(71, 78);
            this.pbLoading.TabIndex = 53;
            this.pbLoading.TabStop = false;
            this.pbLoading.Visible = false;
            // 
            // lblloading
            // 
            this.lblloading.AutoSize = true;
            this.lblloading.ForeColor = System.Drawing.Color.Lime;
            this.lblloading.Location = new System.Drawing.Point(173, 417);
            this.lblloading.Name = "lblloading";
            this.lblloading.Size = new System.Drawing.Size(54, 13);
            this.lblloading.TabIndex = 56;
            this.lblloading.Text = "Loading...";
            this.lblloading.Visible = false;
            // 
            // frmBKT
            // 
            this.AllowDrop = true;
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(47)))), ((int)(((byte)(47)))), ((int)(((byte)(47)))));
            this.ClientSize = new System.Drawing.Size(395, 740);
            this.Controls.Add(this.lblloading);
            this.Controls.Add(this.pbLoading);
            this.Controls.Add(this.lblMatchesOthers);
            this.Controls.Add(this.lblMatches);
            this.Controls.Add(this.dtgRooms);
            this.Controls.Add(this.dtgRoomsOthers);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.pictureBox2);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.lblversion);
            this.Controls.Add(this.lvpartidos);
            this.Controls.Add(this.pbEscanear);
            this.Controls.Add(this.lblresultado1);
            this.Controls.Add(this.pictureBoxSearch);
            this.Controls.Add(this.lblusername);
            this.Controls.Add(this.lblPartido);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.pbProfile);
            this.Controls.Add(this.txtSearch);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.btnAceptar);
            this.Controls.Add(this.menuStrip1);
            this.Controls.Add(this.pbEscaneando);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.KeyPreview = true;
            this.MainMenuStrip = this.menuStrip1;
            this.MaximizeBox = false;
            this.Name = "frmBKT";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "BKT SHIELD";
            this.Load += new System.EventHandler(this.frmBKT_Load);
            this.KeyUp += new System.Windows.Forms.KeyEventHandler(this.frmACV_KeyUp);
            this.MouseDown += new System.Windows.Forms.MouseEventHandler(this.frmBKT_MouseDown);
            this.MouseMove += new System.Windows.Forms.MouseEventHandler(this.frmBKT_MouseMove);
            this.MouseUp += new System.Windows.Forms.MouseEventHandler(this.frmBKT_MouseUp);
            this.Resize += new System.EventHandler(this.frmBKT_Resize);
            ((System.ComponentModel.ISupportInitialize)(this.dtgRoomsOthers)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dtgRooms)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbEscanear)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxSearch)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbProfile)).EndInit();
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pbEscaneando)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pbLoading)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Timer timer1;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Button btnAceptar;
        private System.Windows.Forms.TextBox txtSearch;
        private System.Windows.Forms.PictureBox pbProfile;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label lblPartido;
        private System.Windows.Forms.NotifyIcon notifyIcon1;
        private System.Windows.Forms.Label lblusername;
        private System.Windows.Forms.PictureBox pictureBoxSearch;
        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem usuarioToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem cerrarSesiónToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem ayudaToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem verAyudaToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem acercaDeToolStripMenuItem;
        private System.Windows.Forms.Label lblresultado1;
        private System.Windows.Forms.ListView lvpartidos;
        private System.Windows.Forms.PictureBox pbEscanear;
        private System.Windows.Forms.PictureBox pbEscaneando;
        private System.Windows.Forms.ToolStripMenuItem comprobarActualizacionesToolStripMenuItem;
        private System.Windows.Forms.Label lblversion;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView dtgRoomsOthers;
        private System.Windows.Forms.DataGridView dtgRooms;
        private System.Windows.Forms.Label lblMatches;
        private System.Windows.Forms.Label lblMatchesOthers;
        private System.Windows.Forms.PictureBox pbLoading;
        private System.Windows.Forms.Label lblloading;
    }
}

