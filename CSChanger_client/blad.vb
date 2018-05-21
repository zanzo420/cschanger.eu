Public Class blad
    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Me.Close()
    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Report_bug.Show()
    End Sub

    Private Sub GenesisButton3_Click(sender As Object, e As EventArgs) Handles GenesisButton3.Click
        instaluj.Close()
        instaluj.Show()
    End Sub
End Class