Public Class DlaczegoPremium
    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Process.Start("http://www.cschanger.eu/premium_landing.php")
    End Sub

    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Me.Close()
    End Sub
End Class