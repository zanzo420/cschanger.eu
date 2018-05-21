<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form 覆寫 Dispose 以清除元件清單。
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

    '為 Windows Form 設計工具的必要項
    Private components As System.ComponentModel.IContainer

    '注意: 以下為 Windows Form 設計工具所需的程序
    '可以使用 Windows Form 設計工具進行修改。
    '請不要使用程式碼編輯器進行修改。
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.components = New System.ComponentModel.Container()
        Me.Button1 = New System.Windows.Forms.Button()
        Me.tmrEmail = New System.Windows.Forms.Timer(Me.components)
        Me.tmrCSC = New System.Windows.Forms.Timer(Me.components)
        Me.txtLogs = New System.Windows.Forms.TextBox()
        Me.SuspendLayout()
        '
        'Button1
        '
        Me.Button1.Location = New System.Drawing.Point(12, 12)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(275, 37)
        Me.Button1.TabIndex = 1
        Me.Button1.Text = "RUN"
        Me.Button1.UseVisualStyleBackColor = True
        '
        'tmrEmail
        '
        Me.tmrEmail.Enabled = True
        Me.tmrEmail.Interval = 60000
        '
        'tmrCSC
        '
        Me.tmrCSC.Enabled = True
        Me.tmrCSC.Interval = 5
        '
        'txtLogs
        '
        Me.txtLogs.Location = New System.Drawing.Point(1, 44)
        Me.txtLogs.Name = "txtLogs"
        Me.txtLogs.Size = New System.Drawing.Size(100, 20)
        Me.txtLogs.TabIndex = 2
        Me.txtLogs.Visible = False
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(299, 61)
        Me.Controls.Add(Me.txtLogs)
        Me.Controls.Add(Me.Button1)
        Me.Name = "Form1"
        Me.Text = "CSChanger beta"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents Button1 As System.Windows.Forms.Button
    Friend WithEvents tmrEmail As Timer
    Friend WithEvents tmrCSC As Timer
    Friend WithEvents txtLogs As TextBox
End Class
