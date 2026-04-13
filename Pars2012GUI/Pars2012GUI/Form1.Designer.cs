namespace Pars2012GUI
{
    partial class Form1
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
            this.label1 = new System.Windows.Forms.Label();
            this.versenyzoNevekCb = new System.Windows.Forms.ComboBox();
            this.label2 = new System.Windows.Forms.Label();
            this.csoportLbl = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.nemzetLbl = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.nemzetKodLbl = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.sorozatLbl = new System.Windows.Forms.Label();
            this.label10 = new System.Windows.Forms.Label();
            this.eredmenyLbl = new System.Windows.Forms.Label();
            this.zaszloPb = new System.Windows.Forms.PictureBox();
            this.label3 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.zaszloPb)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(91, 56);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(112, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "Válasszon versenyzőt!";
            // 
            // versenyzoNevekCb
            // 
            this.versenyzoNevekCb.FormattingEnabled = true;
            this.versenyzoNevekCb.Location = new System.Drawing.Point(94, 96);
            this.versenyzoNevekCb.Name = "versenyzoNevekCb";
            this.versenyzoNevekCb.Size = new System.Drawing.Size(243, 21);
            this.versenyzoNevekCb.TabIndex = 1;
            this.versenyzoNevekCb.SelectedIndexChanged += new System.EventHandler(this.versenyzoNevekCb_SelectedIndexChanged);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(91, 150);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(46, 13);
            this.label2.TabIndex = 2;
            this.label2.Text = "Csoport:";
            // 
            // csoportLbl
            // 
            this.csoportLbl.AutoSize = true;
            this.csoportLbl.Location = new System.Drawing.Point(143, 150);
            this.csoportLbl.Name = "csoportLbl";
            this.csoportLbl.Size = new System.Drawing.Size(35, 13);
            this.csoportLbl.TabIndex = 3;
            this.csoportLbl.Text = "label3";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(91, 179);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(46, 13);
            this.label4.TabIndex = 4;
            this.label4.Text = "Nemzet:";
            // 
            // nemzetLbl
            // 
            this.nemzetLbl.AutoSize = true;
            this.nemzetLbl.Location = new System.Drawing.Point(143, 179);
            this.nemzetLbl.Name = "nemzetLbl";
            this.nemzetLbl.Size = new System.Drawing.Size(35, 13);
            this.nemzetLbl.TabIndex = 5;
            this.nemzetLbl.Text = "label5";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(91, 212);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(67, 13);
            this.label6.TabIndex = 6;
            this.label6.Text = "Nemzet kód:";
            // 
            // nemzetKodLbl
            // 
            this.nemzetKodLbl.AutoSize = true;
            this.nemzetKodLbl.Location = new System.Drawing.Point(160, 212);
            this.nemzetKodLbl.Name = "nemzetKodLbl";
            this.nemzetKodLbl.Size = new System.Drawing.Size(35, 13);
            this.nemzetKodLbl.TabIndex = 7;
            this.nemzetKodLbl.Text = "label7";
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Location = new System.Drawing.Point(91, 243);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(46, 13);
            this.label8.TabIndex = 8;
            this.label8.Text = "Sorozat:";
            // 
            // sorozatLbl
            // 
            this.sorozatLbl.AutoSize = true;
            this.sorozatLbl.Location = new System.Drawing.Point(143, 243);
            this.sorozatLbl.Name = "sorozatLbl";
            this.sorozatLbl.Size = new System.Drawing.Size(35, 13);
            this.sorozatLbl.TabIndex = 9;
            this.sorozatLbl.Text = "label9";
            // 
            // label10
            // 
            this.label10.AutoSize = true;
            this.label10.Location = new System.Drawing.Point(91, 267);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(57, 13);
            this.label10.TabIndex = 10;
            this.label10.Text = "Eredmény:";
            // 
            // eredmenyLbl
            // 
            this.eredmenyLbl.AutoSize = true;
            this.eredmenyLbl.Location = new System.Drawing.Point(154, 267);
            this.eredmenyLbl.Name = "eredmenyLbl";
            this.eredmenyLbl.Size = new System.Drawing.Size(41, 13);
            this.eredmenyLbl.TabIndex = 11;
            this.eredmenyLbl.Text = "label11";
            // 
            // zaszloPb
            // 
            this.zaszloPb.Location = new System.Drawing.Point(120, 321);
            this.zaszloPb.Name = "zaszloPb";
            this.zaszloPb.Size = new System.Drawing.Size(261, 117);
            this.zaszloPb.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.zaszloPb.TabIndex = 12;
            this.zaszloPb.TabStop = false;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(94, 295);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(41, 13);
            this.label3.TabIndex = 13;
            this.label3.Text = "Zászló:";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(508, 450);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.zaszloPb);
            this.Controls.Add(this.eredmenyLbl);
            this.Controls.Add(this.label10);
            this.Controls.Add(this.sorozatLbl);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.nemzetKodLbl);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.nemzetLbl);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.csoportLbl);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.versenyzoNevekCb);
            this.Controls.Add(this.label1);
            this.Name = "Form1";
            this.Text = "London 2012 - Férfi kalapácsvetés - selejtező";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.zaszloPb)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ComboBox versenyzoNevekCb;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label csoportLbl;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label nemzetLbl;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label nemzetKodLbl;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label sorozatLbl;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.Label eredmenyLbl;
        private System.Windows.Forms.PictureBox zaszloPb;
        private System.Windows.Forms.Label label3;
    }
}

