Imports System.Net

Public Class prepare
    Private Sub GenesisButton3_Click(sender As Object, e As EventArgs) Handles GenesisButton3.Click
        Process.Start("https://discord.gg/wFeby")
    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Process.Start("http://cschanger.eu")
    End Sub

    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Me.Close()
    End Sub

    Private Sub login_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Dim CZASWC As New WebClient
        Dim CZAS0 As String = CZASWC.DownloadString("http://cschanger.eu/class/czas.php")
        GenesisSimpleLabel2.Text = CZAS0
    End Sub
End Class