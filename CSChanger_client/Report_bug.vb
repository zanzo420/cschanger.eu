Imports System
Imports System.IO
Imports System.Net.Dns
Imports System.Net

Public Class Report_bug
    Private Sub login_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles MyBase.Load
        GenesisTextbox1.Text = My.Settings.login
        GenesisTextbox2.Text = DateTime.Now.ToString("yyyy/MM/dd @ HH:mm:ss")
        GenesisButton1.Enabled = True
    End Sub

    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Me.Close()
    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Dim RAPORTWC As New WebClient
        Dim RAPORT0 As String = RAPORTWC.DownloadString("http://cschanger.eu/class/types.php?type=beta_report_bug&user_login=" + GenesisTextbox1.Text + "&user_date=" + GenesisTextbox2.Text + "&user_msg=" + RichTextBox1.Text)
        GenesisSimpleLabel4.Visible = True
        GenesisButton1.Enabled = False
    End Sub

    Private Sub GenesisHeaderLabel1_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel1.Click
        Process.Start("https://discord.gg/a9pjcFk")
    End Sub
End Class