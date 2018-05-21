Public Class Outdated
    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        login.Close()
        Close()
    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Process.Start("https://cschanger.eu/login.php")
    End Sub

    Private Sub Outdated_load(sender As Object, e As EventArgs) Handles MyBase.Load
        login.Hide()
    End Sub
End Class