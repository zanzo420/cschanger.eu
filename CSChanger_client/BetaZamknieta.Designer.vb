<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class BetaZamknieta
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
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(BetaZamknieta))
        Me.GenesisForm1 = New Wild_Games.GenesisForm()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.GenesisGroupBox1 = New Wild_Games.GenesisGroupBox()
        Me.GenesisHeaderLabel1 = New Wild_Games.GenesisHeaderLabel()
        Me.GenesisButton1 = New Wild_Games.GenesisButton()
        Me.GenesisForm1.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.GenesisGroupBox1.SuspendLayout()
        Me.SuspendLayout()
        '
        'GenesisForm1
        '
        Me.GenesisForm1.BackColor = System.Drawing.Color.FromArgb(CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer), CType(CType(53, Byte), Integer))
        Me.GenesisForm1.Controls.Add(Me.PictureBox1)
        Me.GenesisForm1.Controls.Add(Me.GenesisGroupBox1)
        Me.GenesisForm1.Dock = System.Windows.Forms.DockStyle.Fill
        Me.GenesisForm1.Font = New System.Drawing.Font("Verdana", 8.0!)
        Me.GenesisForm1.ImeMode = System.Windows.Forms.ImeMode.NoControl
        Me.GenesisForm1.Location = New System.Drawing.Point(0, 0)
        Me.GenesisForm1.Name = "GenesisForm1"
        Me.GenesisForm1.Size = New System.Drawing.Size(499, 125)
        Me.GenesisForm1.TabIndex = 0
        Me.GenesisForm1.Text = "CSCHANGER.EU :: BETA ACCESS IS CLOSED"
        '
        'PictureBox1
        '
        Me.PictureBox1.Image = CType(resources.GetObject("PictureBox1.Image"), System.Drawing.Image)
        Me.PictureBox1.Location = New System.Drawing.Point(9, 6)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(16, 16)
        Me.PictureBox1.TabIndex = 3
        Me.PictureBox1.TabStop = False
        '
        'GenesisGroupBox1
        '
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisHeaderLabel1)
        Me.GenesisGroupBox1.Controls.Add(Me.GenesisButton1)
        Me.GenesisGroupBox1.Location = New System.Drawing.Point(0, 29)
        Me.GenesisGroupBox1.Name = "GenesisGroupBox1"
        Me.GenesisGroupBox1.Size = New System.Drawing.Size(499, 185)
        Me.GenesisGroupBox1.TabIndex = 0
        Me.GenesisGroupBox1.TabStop = False
        Me.GenesisGroupBox1.Text = "GenesisGroupBox1"
        '
        'GenesisHeaderLabel1
        '
        Me.GenesisHeaderLabel1.AutoSize = True
        Me.GenesisHeaderLabel1.Font = New System.Drawing.Font("Segoe UI", 10.0!)
        Me.GenesisHeaderLabel1.ForeColor = System.Drawing.Color.FromArgb(CType(CType(32, Byte), Integer), CType(CType(150, Byte), Integer), CType(CType(88, Byte), Integer))
        Me.GenesisHeaderLabel1.Location = New System.Drawing.Point(46, 16)
        Me.GenesisHeaderLabel1.Name = "GenesisHeaderLabel1"
        Me.GenesisHeaderLabel1.Size = New System.Drawing.Size(408, 19)
        Me.GenesisHeaderLabel1.TabIndex = 1
        Me.GenesisHeaderLabel1.Text = "Beta access is disabled, there is nothing to testing, thanks to you!"
        '
        'GenesisButton1
        '
        Me.GenesisButton1.Location = New System.Drawing.Point(217, 50)
        Me.GenesisButton1.Name = "GenesisButton1"
        Me.GenesisButton1.Size = New System.Drawing.Size(75, 30)
        Me.GenesisButton1.TabIndex = 0
        Me.GenesisButton1.Text = "CLOSE"
        Me.GenesisButton1.UseVisualStyleBackColor = True
        '
        'BetaZamknieta
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(499, 125)
        Me.Controls.Add(Me.GenesisForm1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Name = "BetaZamknieta"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "CSCHANGER.EU :: BETA IS CLOSED!"
        Me.GenesisForm1.ResumeLayout(False)
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.GenesisGroupBox1.ResumeLayout(False)
        Me.GenesisGroupBox1.PerformLayout()
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents GenesisForm1 As GenesisForm
    Friend WithEvents GenesisGroupBox1 As GenesisGroupBox
    Friend WithEvents PictureBox1 As PictureBox
    Friend WithEvents GenesisButton1 As GenesisButton
    Friend WithEvents GenesisHeaderLabel1 As GenesisHeaderLabel
End Class
