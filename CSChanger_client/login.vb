Imports System.Net

Public Class login

    Private Sub login_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles MyBase.Load

        Dim VersionWC As New WebClient
        Dim Version0 As String = VersionWC.DownloadString("http://cschanger.eu/class/version.php")

        If My.Settings.version = Version0 Then
        ElseIf Version0 = "zamknieta" Then
            GenesisSimpleLabel12.Visible = True
            BetaZamknieta.Show()
            Me.Close()
            GenesisTextbox1.Enabled = False
            GenesisTextbox1.Text = "BETA is closed!"
            GenesisTextbox2.Text = "BETA is closed"
            GenesisTextbox2.Enabled = False
        ElseIf Version0 = "odliczanie" Then
            GenesisSimpleLabel12.Visible = True
            prepare.Show()
            Me.Close()
            GenesisTextbox1.Enabled = False
            GenesisTextbox1.Text = "UPDATE SOON!"
            GenesisTextbox2.Text = "UPDATE SOON!"
            GenesisTextbox2.Enabled = False
        Else
            GenesisSimpleLabel12.Visible = True
            Outdated.Show()
            Me.Close()
            GenesisTextbox1.Enabled = False
            GenesisTextbox1.Text = "Update client on CSCHANGER.EU"
            GenesisTextbox2.Text = "Update client"
            GenesisTextbox2.Enabled = False
        End If

        GenesisTextbox1.Text = My.Settings.login
        GenesisTextbox2.Text = My.Settings.haslo

        GenesisSimpleLabel10.Visible = False
        GenesisSimpleLabel3.Visible = False
        GenesisSimpleLabel4.Visible = False
        GenesisSimpleLabel5.Visible = False
        GenesisSimpleLabel6.Visible = False
        GenesisSimpleLabel7.Visible = False
        GenesisSimpleLabel11.Visible = False
        GenesisSimpleLabel11.Visible = False

        GenesisTextbox2.UseSystemPasswordChar = True

    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs) Handles GenesisButton1.Click
        Dim LoginWC As New WebClient
        Dim Login0 As String = LoginWC.DownloadString("http://cschanger.eu/class/types.php?type=login&nick=" + GenesisTextbox1.Text + "&password=" + GenesisTextbox2.Text)
        Dim BanWC As New WebClient
        Dim ban0 As String = BanWC.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=ban")

        If Login0 = "0" Then
            GenesisSimpleLabel3.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel5.Visible = False
            GenesisSimpleLabel6.Visible = False
            GenesisSimpleLabel7.Visible = False
            GenesisSimpleLabel10.Visible = False
            GenesisSimpleLabel11.Visible = False
            GenesisSimpleLabel11.Visible = False
        ElseIf Login0 = "1" Then
            If ban0 = "0" Or ban0 = "" Then
                GenesisSimpleLabel10.Visible = True
                GenesisSimpleLabel4.Visible = False
                GenesisSimpleLabel3.Visible = False
                GenesisSimpleLabel5.Visible = False
                GenesisSimpleLabel6.Visible = False
                GenesisSimpleLabel7.Visible = False
                GenesisSimpleLabel10.Visible = False
                GenesisSimpleLabel11.Visible = False
                GenesisSimpleLabel11.Visible = False
                Dane()
                Dim RAPORTWC As New WebClient
                Dim RAPORT0 As String = RAPORTWC.DownloadString("http://cschanger.eu/class/types.php?type=beta_report_bug&user_login=" + GenesisTextbox1.Text + "&user_date=" + GenesisTextbox2.Text + "&user_msg=login succ")
                CSChanger.Show()
                Me.Close()
            ElseIf ban0 = "1" Then
                Process.Start("http://cschanger.eu/banned.php?w=1&log=" + GenesisTextbox1.Text)
            ElseIf ban0 = "2" Then
                Process.Start("http://cschanger.eu/banned.php?w=2&log=" + GenesisTextbox1.Text)
            ElseIf ban0 = "3" Then
                Process.Start("http://cschanger.eu/banned.php?w=3&log=" + GenesisTextbox1.Text)
            ElseIf ban0 = "4" Then
                Process.Start("http://cschanger.eu/banned.php?w=4&log=" + GenesisTextbox1.Text)
            End If
        ElseIf Login0 = "2" Then
            GenesisSimpleLabel5.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel3.Visible = False
            GenesisSimpleLabel6.Visible = False
            GenesisSimpleLabel7.Visible = False
            GenesisSimpleLabel10.Visible = False
            GenesisSimpleLabel11.Visible = False
            GenesisSimpleLabel11.Visible = False
        ElseIf Login0 = "3" Then
            GenesisSimpleLabel6.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel5.Visible = False
            GenesisSimpleLabel3.Visible = False
            GenesisSimpleLabel7.Visible = False
            GenesisSimpleLabel10.Visible = False
            GenesisSimpleLabel11.Visible = False
            GenesisSimpleLabel11.Visible = False
        ElseIf Login0 = "4" Then
            GenesisSimpleLabel7.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel5.Visible = False
            GenesisSimpleLabel6.Visible = False
            GenesisSimpleLabel3.Visible = False
            GenesisSimpleLabel11.Visible = False
            GenesisSimpleLabel11.Visible = False
        ElseIf Login0 = "5" Then
            GenesisSimpleLabel7.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel5.Visible = False
            GenesisSimpleLabel6.Visible = False
            GenesisSimpleLabel3.Visible = False
            GenesisSimpleLabel11.Visible = True
            GenesisSimpleLabel11.Visible = False
        End If

    End Sub

    Private Sub Dane()
        Dim DaneWC As New WebClient
        Dim Dane0 As String = DaneWC.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=plan")

        If Dane0 = "1" Then
            My.Settings.plan = "premium"
            Dim PlanDataWC As New WebClient
            Dim PlanData0 As String = DaneWC.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=plan_date")
            My.Settings.koniecpremium = PlanData0
        Else
            My.Settings.plan = "free"
        End If


        Dim SteamID As New WebClient
        Dim SteamID0 As String = SteamID.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=steam_id")

        If SteamID0 = "" Then
            CSChanger.GenesisFlatLabel1.Visible = True
            My.Settings.steamid = ""
        Else
            My.Settings.steamid = SteamID0
        End If


        Dim SubWC As New WebClient
        Dim Sub0 As String = SubWC.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=sub")

        If Sub0 = "0" Then
            My.Settings.tejksub = "0"
        Else
            My.Settings.tejksub = "1"
        End If


    End Sub


    Private Sub GenesisSimpleLabel1_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel1.Click
        Process.Start("http://www.cschanger.eu/")
    End Sub

    Private Sub check_ban()
        Dim BanWC As New WebClient
        Dim ban0 As String = BanWC.DownloadString("http://cschanger.eu/class/types.php?type=info&login_nick=" + GenesisTextbox1.Text + "&gets=ban")

        If ban0 = "0" Or ban0 = "" Then
            GenesisSimpleLabel10.Visible = True
            GenesisSimpleLabel4.Visible = False
            GenesisSimpleLabel3.Visible = False
            GenesisSimpleLabel5.Visible = False
            GenesisSimpleLabel6.Visible = False
            GenesisSimpleLabel7.Visible = False
            GenesisSimpleLabel10.Visible = False
            GenesisSimpleLabel11.Visible = False
            GenesisSimpleLabel11.Visible = False
            Dane()
            Dim RAPORTWC As New WebClient
            Dim RAPORT0 As String = RAPORTWC.DownloadString("http://cschanger.eu/class/types.php?type=beta_report_bug&user_login=" + GenesisTextbox1.Text + "&user_date=" + GenesisTextbox2.Text + "&user_msg=login succ")
            CSChanger.Show()
            Me.Close()
        ElseIf ban0 = "1" Then
            Process.Start("http://cschanger.eu/banned.php?w=1&log=" + GenesisTextbox1.Text)
        ElseIf ban0 = "2" Then
            Process.Start("http://cschanger.eu/banned.php?w=2&log=" + GenesisTextbox1.Text)
        ElseIf ban0 = "3" Then
            Process.Start("http://cschanger.eu/banned.php?w=3&log=" + GenesisTextbox1.Text)
        ElseIf ban0 = "4" Then
            Process.Start("http://cschanger.eu/banned.php?w=4&log=" + GenesisTextbox1.Text)
        End If
    End Sub
End Class