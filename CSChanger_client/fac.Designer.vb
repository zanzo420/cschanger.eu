<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class fac
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(fac))
        Me.GenesisForm1 = New Wild_Games.GenesisForm()
        Me.GenesisGroupBox1 = New Wild_Games.GenesisGroupBox()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.GenesisButton1 = New Wild_Games.GenesisButton()
        Me.GenesisFlatLabel1 = New Wild_Games.GenesisFlatLabel()
        Me.GenesisFlatLabel2 = New Wild_Games.GenesisFlatLabel()
        Me.GenesisFlatLabel3 = New Wild_Games.GenesisFlatLabel()
        Me.GenesisForm1.SuspendLayout()
        Me.GenesisGroupBox1.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'GenesisForm1
        '
        Me.GenesisForm1.BackColor = System.Drawing.Color.FromArgb(CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer))
        Me.GenesisForm1.Controls.Add(Me.PictureBox1)
        Me.GenesisForm1.Controls.Add(Me.GenesisGroupBox1)
        Me.GenesisForm1.Dock = System.Windows.Forms.DockStyle.Fill
        Me.GenesisForm1.Font = New System.Drawing.Font("Verdana", 8.0!)
        Me.GenesisForm1.Location = New System.Drawing.Point(0, 0)
        Me.GenesisForm1.Name = "GenesisForm1"
        Me.GenesisForm1.Size = New System.Drawing.Size(314, 110)
        Me.GenesisForm1.TabIndex = 0
        Me.GenesisForm1.Text = "CSCHANGER.EU :: FAC"
        '
        'GenesisGroupBox1
        '
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisFlatLabel3)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisFlatLabel2)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisFlatLabel1)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisButton1)
        Me.GenesisGroupBox1.Location = New System.Drawing.Point(0, 28)
        Me.GenesisGroupBox1.Name = "GenesisGroupBox1"
        Me.GenesisGroupBox1.Size = New System.Drawing.Size(314, 82)
        Me.GenesisGroupBox1.TabIndex = 0
        Me.GenesisGroupBox1.TabStop = False
        Me.GenesisGroupBox1.Text = "GenesisGroupBox1"
        '
        'PictureBox1
        '
        Me.PictureBox1.Image = CType(resources.GetObject("PictureBox1.Image"), System.Drawing.Image)
        Me.PictureBox1.Location = New System.Drawing.Point(9, 6)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(16, 16)
        Me.PictureBox1.TabIndex = 5
        Me.PictureBox1.TabStop = False
        '
        'GenesisButton1
        '
        Me.GenesisButton1.Location = New System.Drawing.Point(234, 46)
        Me.GenesisButton1.Name = "GenesisButton1"
        Me.GenesisButton1.Size = New System.Drawing.Size(74, 30)
        Me.GenesisButton1.TabIndex = 0
        Me.GenesisButton1.Text = "CLOSE"
        Me.GenesisButton1.UseVisualStyleBackColor = True
        '
        'GenesisFlatLabel1
        '
        Me.GenesisFlatLabel1.AutoSize = True
        Me.GenesisFlatLabel1.Font = New System.Drawing.Font("Segoe UI", 9.0!)
        Me.GenesisFlatLabel1.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(140, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisFlatLabel1.Location = New System.Drawing.Point(12, 16)
        Me.GenesisFlatLabel1.Name = "GenesisFlatLabel1"
        Me.GenesisFlatLabel1.Size = New System.Drawing.Size(290, 15)
        Me.GenesisFlatLabel1.TabIndex = 1
        Me.GenesisFlatLabel1.Text = "If you want to use SKIN CHANGER on Faceit You need"
        '
        'GenesisFlatLabel2
        '
        Me.GenesisFlatLabel2.AutoSize = True
        Me.GenesisFlatLabel2.Font = New System.Drawing.Font("Segoe UI", 9.0!)
        Me.GenesisFlatLabel2.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(140, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisFlatLabel2.Location = New System.Drawing.Point(12, 31)
        Me.GenesisFlatLabel2.Name = "GenesisFlatLabel2"
        Me.GenesisFlatLabel2.Size = New System.Drawing.Size(189, 15)
        Me.GenesisFlatLabel2.TabIndex = 2
        Me.GenesisFlatLabel2.Text = "to run FACEIT ANTICHEAT BYPASS"
        '
        'GenesisFlatLabel3
        '
        Me.GenesisFlatLabel3.AutoSize = True
        Me.GenesisFlatLabel3.Font = New System.Drawing.Font("Segoe UI", 9.0!)
        Me.GenesisFlatLabel3.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(140, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisFlatLabel3.Location = New System.Drawing.Point(12, 46)
        Me.GenesisFlatLabel3.Name = "GenesisFlatLabel3"
        Me.GenesisFlatLabel3.Size = New System.Drawing.Size(145, 15)
        Me.GenesisFlatLabel3.TabIndex = 3
        Me.GenesisFlatLabel3.Text = "to prevent errors/log outs!"
        '
        'fac
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(314, 110)
        Me.Controls.Add(Me.GenesisForm1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Name = "fac"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "CSCHANGER.EU :: FAC"
        Me.GenesisForm1.ResumeLayout(False)
        Me.GenesisGroupBox1.ResumeLayout(False)
        Me.GenesisGroupBox1.PerformLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents GenesisForm1 As GenesisForm
    Friend WithEvents GenesisGroupBox1 As GenesisGroupBox
    Friend WithEvents PictureBox1 As PictureBox
    Friend WithEvents GenesisButton1 As GenesisButton
    Friend WithEvents GenesisFlatLabel3 As GenesisFlatLabel
    Friend WithEvents GenesisFlatLabel2 As GenesisFlatLabel
    Friend WithEvents GenesisFlatLabel1 As GenesisFlatLabel
End Class
