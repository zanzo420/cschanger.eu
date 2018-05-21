<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class sukces
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
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(sukces))
        Me.GenesisForm1 = New Wild_Games.GenesisForm()
        Me.GenesisGroupBox1 = New Wild_Games.GenesisGroupBox()
        Me.GenesisHeaderLabel2 = New Wild_Games.GenesisHeaderLabel()
        Me.GenesisHeaderLabel1 = New Wild_Games.GenesisHeaderLabel()
        Me.GenesisButton2 = New Wild_Games.GenesisButton()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.GenesisForm1.SuspendLayout()
        Me.GenesisGroupBox1.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'GenesisForm1
        '
        Me.GenesisForm1.BackColor = System.Drawing.Color.FromArgb(CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer))
        Me.GenesisForm1.Controls.Add(Me.GenesisGroupBox1)
        Me.GenesisForm1.Controls.Add(Me.PictureBox1)
        Me.GenesisForm1.Dock = System.Windows.Forms.DockStyle.Fill
        Me.GenesisForm1.Font = New System.Drawing.Font("Verdana", 8.0!)
        Me.GenesisForm1.Location = New System.Drawing.Point(0, 0)
        Me.GenesisForm1.Name = "GenesisForm1"
        Me.GenesisForm1.Size = New System.Drawing.Size(400, 149)
        Me.GenesisForm1.TabIndex = 0
        Me.GenesisForm1.Text = "CSCHANGER.EU :: SUCCESS!"
        '
        'GenesisGroupBox1
        '
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisHeaderLabel2)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisHeaderLabel1)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisButton2)
        Me.GenesisGroupBox1.Location = New System.Drawing.Point(0, 28)
        Me.GenesisGroupBox1.Name = "GenesisGroupBox1"
        Me.GenesisGroupBox1.Size = New System.Drawing.Size(400, 121)
        Me.GenesisGroupBox1.TabIndex = 5
        Me.GenesisGroupBox1.TabStop = False
        Me.GenesisGroupBox1.Text = "GenesisGroupBox1"
        '
        'GenesisHeaderLabel2
        '
        Me.GenesisHeaderLabel2.AutoSize = True
        Me.GenesisHeaderLabel2.Font = New System.Drawing.Font("Segoe UI", 10.0!)
        Me.GenesisHeaderLabel2.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(150, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisHeaderLabel2.Location = New System.Drawing.Point(39, 35)
        Me.GenesisHeaderLabel2.Name = "GenesisHeaderLabel2"
        Me.GenesisHeaderLabel2.Size = New System.Drawing.Size(309, 19)
        Me.GenesisHeaderLabel2.TabIndex = 7
        Me.GenesisHeaderLabel2.Text = "Now you can use INSERT to show menu in game!"
        '
        'GenesisHeaderLabel1
        '
        Me.GenesisHeaderLabel1.AutoSize = True
        Me.GenesisHeaderLabel1.Font = New System.Drawing.Font("Segoe UI", 10.0!)
        Me.GenesisHeaderLabel1.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(150, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisHeaderLabel1.Location = New System.Drawing.Point(82, 16)
        Me.GenesisHeaderLabel1.Name = "GenesisHeaderLabel1"
        Me.GenesisHeaderLabel1.Size = New System.Drawing.Size(216, 19)
        Me.GenesisHeaderLabel1.TabIndex = 6
        Me.GenesisHeaderLabel1.Text = "CSChanger launch was successful!"
        '
        'GenesisButton2
        '
        Me.GenesisButton2.Location = New System.Drawing.Point(132, 79)
        Me.GenesisButton2.Name = "GenesisButton2"
        Me.GenesisButton2.Size = New System.Drawing.Size(119, 30)
        Me.GenesisButton2.TabIndex = 5
        Me.GenesisButton2.Text = "     CLOSE"
        Me.GenesisButton2.UseVisualStyleBackColor = True
        '
        'PictureBox1
        '
        Me.PictureBox1.Image = CType(resources.GetObject("PictureBox1.Image"), System.Drawing.Image)
        Me.PictureBox1.Location = New System.Drawing.Point(9, 6)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(16, 16)
        Me.PictureBox1.TabIndex = 4
        Me.PictureBox1.TabStop = False
        '
        'sukces
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(400, 149)
        Me.Controls.Add(Me.GenesisForm1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Name = "sukces"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "CSCHANGER.EU :: SUCCESS"
        Me.GenesisForm1.ResumeLayout(False)
        Me.GenesisGroupBox1.ResumeLayout(False)
        Me.GenesisGroupBox1.PerformLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents GenesisForm1 As GenesisForm
    Friend WithEvents PictureBox1 As PictureBox
    Friend WithEvents GenesisGroupBox1 As GenesisGroupBox
    Friend WithEvents GenesisHeaderLabel2 As GenesisHeaderLabel
    Friend WithEvents GenesisHeaderLabel1 As GenesisHeaderLabel
    Friend WithEvents GenesisButton2 As GenesisButton
End Class
