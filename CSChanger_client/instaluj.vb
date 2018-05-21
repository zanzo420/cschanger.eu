Imports System
Imports System.IO
Imports System.Net
Imports System.Timers
Imports System.Threading

Public Class instaluj
    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        GenesisButton2.Enabled = False

        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"

        RichTextBox1.Text = "Downloading process runned..." & vbNewLine & "Downloading Windows6.1-KB3033929-x64.msu | Server: microsoft"

        My.Computer.Network.DownloadFile(
            "https://download.microsoft.com/download/C/8/7/C87AE67E-A228-48FB-8F02-B2A9A1238099/Windows6.1-KB3033929-x64.msu",
            path + "\install\Windows6.1-KB3033929-x64.msu")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Windows6.1-KB3033929-x64.msu downloaded!" & vbNewLine & "Downloading .NET Framework 4.7 | Server: microsoft"
        GenesisSimpleLabel2.Text = "1/7"

        My.Computer.Network.DownloadFile(
            "https://download.microsoft.com/download/A/E/A/AEAE0F3F-96E9-4711-AADA-5E35EF902306/NDP47-KB3186500-Web.exe",
            path + "\install\NDP47-KB3186500-Web.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & ".NET Framework 4.7 downloaded!" & vbNewLine & "Downloading Visual C++ 2008 Redist | Server: microsoft"
        GenesisSimpleLabel2.Text = "2/7"

        My.Computer.Network.DownloadFile(
            "https://download.microsoft.com/download/1/1/1/1116b75a-9ec3-481a-a3c8-1777b5381140/vcredist_x86.exe",
            path + "\install\vcredist_x86_1.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Visual C++ 2008 Redist downloaded!" & vbNewLine & "Downloading Visual C++ 2010 Redist | Server: microsoft"
        GenesisSimpleLabel2.Text = "3/7"

        My.Computer.Network.DownloadFile(
            "https://download.microsoft.com/download/5/B/C/5BC5DBB3-652D-4DCE-B14A-475AB85EEF6E/vcredist_x86.exe",
            path + "\install\vcredist_x86_2.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Visual C++ 2010 Redist downloaded!" & vbNewLine & "Downloading Visual C++ Redist | Server: microsoft"
        GenesisSimpleLabel2.Text = "4/7"

        My.Computer.Network.DownloadFile(
            "https://www.microsoft.com/en-us/download/confirmation.aspx?id=30679&6B49FDFB-8E5B-4B07-BC31-15695C5A2143=1",
            path + "\install\vcredist_x64_1.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Visual C++ Redist downloaded!" & vbNewLine & "Downloading Visual C++ Redist 2013 | Server: microsoft"
        GenesisSimpleLabel2.Text = "5/7"

        My.Computer.Network.DownloadFile(
            "https://www.microsoft.com/en-us/download/confirmation.aspx?id=40784&6B49FDFB-8E5B-4B07-BC31-15695C5A2143=1",
            path + "\install\vcredist_arm_1.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Visual C++ Redist 2013 downloaded!" & vbNewLine & "Downloading Visual C++ Redist 2015 | Server: microsoft"
        GenesisSimpleLabel2.Text = "6/7"

        My.Computer.Network.DownloadFile(
            "https://www.microsoft.com/en-us/download/confirmation.aspx?id=40784&6B49FDFB-8E5B-4B07-BC31-15695C5A2143=1",
            path + "\install\vcredist_arm_2.exe")

        RichTextBox1.Text = RichTextBox1.Text + vbNewLine & "Visual C++ Redist 2015 downloaded!" & vbNewLine & "Installing..."
        GenesisSimpleLabel2.Text = "7/7"

        Process.Start(path + "\install\Windows6.1-KB3033929-x64.msu")
        Process.Start(path + "\install\NDP47-KB3186500-Web.exe")
        Process.Start(path + "\install\vcredist_x86_1.exe")
        Process.Start(path + "\install\vcredist_x86_2.exe")
        Process.Start(path + "\install\vcredist_x64_1.exe")
        Process.Start(path + "\install\vcredist_arm_1.exe")
        Process.Start(path + "\install\vcredist_arm_2.exe")

        GenesisButton2.Enabled = True

    End Sub

    Private Sub GenesisButton1_Click_1(sender As Object, e As EventArgs) Handles GenesisButton1.Click

    End Sub

    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Me.Close()
    End Sub

    Private Sub GenesisHeaderLabel4_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel4.Click

    End Sub

    Private Sub GenesisSimpleLabel2_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel2.Click

    End Sub

    Private Sub GenesisSimpleLabel1_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel1.Click

    End Sub

    Private Sub RichTextBox1_TextChanged(sender As Object, e As EventArgs) Handles RichTextBox1.TextChanged

    End Sub

    Private Sub GenesisHeaderLabel5_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel5.Click

    End Sub

    Private Sub GenesisHeaderLabel3_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel3.Click

    End Sub

    Private Sub GenesisHeaderLabel2_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel2.Click

    End Sub

    Private Sub GenesisHeaderLabel1_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel1.Click

    End Sub
End Class