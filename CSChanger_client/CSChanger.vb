Imports System
Imports System.IO
Imports System.Net.Dns
Imports System.Net
Imports System.Diagnostics


Public Class CSChanger
    Private TargetProcessHandle As Integer
    Private pfnStartAddr As Integer
    Private pszLibFileRemote As String
    Private TargetBufferSize As Integer

    Public Const PROCESS_VM_READ = &H10
    Public Const TH32CS_SNAPPROCESS = &H2
    Public Const MEM_COMMIT = 4096
    Public Const PAGE_READWRITE = 4
    Public Const PROCESS_CREATE_THREAD = (&H2)
    Public Const PROCESS_VM_OPERATION = (&H8)
    Public Const PROCESS_VM_WRITE = (&H20)
    Dim DLLFileName As String
    Public Declare Function ReadProcessMemory Lib "kernel32" (
    ByVal hProcess As Integer,
    ByVal lpBaseAddress As Integer,
    ByVal lpBuffer As String,
    ByVal nSize As Integer,
    ByRef lpNumberOfBytesWritten As Integer) As Integer

    Public Declare Function LoadLibrary Lib "kernel32" Alias "LoadLibraryA" (
    ByVal lpLibFileName As String) As Integer

    Public Declare Function VirtualAllocEx Lib "kernel32" (
    ByVal hProcess As Integer,
    ByVal lpAddress As Integer,
    ByVal dwSize As Integer,
    ByVal flAllocationType As Integer,
    ByVal flProtect As Integer) As Integer

    Public Declare Function WriteProcessMemory Lib "kernel32" (
    ByVal hProcess As Integer,
    ByVal lpBaseAddress As Integer,
    ByVal lpBuffer As String,
    ByVal nSize As Integer,
    ByRef lpNumberOfBytesWritten As Integer) As Integer

    Public Declare Function GetProcAddress Lib "kernel32" (
    ByVal hModule As Integer, ByVal lpProcName As String) As Integer

    Private Declare Function GetModuleHandle Lib "Kernel32" Alias "GetModuleHandleA" (
    ByVal lpModuleName As String) As Integer

    Public Declare Function CreateRemoteThread Lib "kernel32" (
    ByVal hProcess As Integer,
    ByVal lpThreadAttributes As Integer,
    ByVal dwStackSize As Integer,
    ByVal lpStartAddress As Integer,
    ByVal lpParameter As Integer,
    ByVal dwCreationFlags As Integer,
    ByRef lpThreadId As Integer) As Integer

    Public Declare Function OpenProcess Lib "kernel32" (
    ByVal dwDesiredAccess As Integer,
    ByVal bInheritHandle As Integer,
    ByVal dwProcessId As Integer) As Integer

    Private Declare Function FindWindow Lib "user32" Alias "FindWindowA" (
    ByVal lpClassName As String,
    ByVal lpWindowName As String) As Integer

    Private Declare Function CloseHandle Lib "kernel32" Alias "CloseHandleA" (
    ByVal hObject As Integer) As Integer


    Dim ExeName As String = IO.Path.GetFileNameWithoutExtension(Application.ExecutablePath)

    Private Sub Me_Close(ByVal sender As Object, ByVal e As System.EventArgs)
        login.Close()
    End Sub


    Public Sub Sg234534trgDSG()
        Dim dsgads
        Dim dsgfgfs As Byte = 345634624
        Dim dfjtyu45trd As String = "sadgft"
        Dim asddzSDf As String = "5637564yredgyh"
        Dim tweat As Integer = 234235342646
        Dim rehdfgggggg As String = "weraefsd"
        Dim iAfghjDDQMZ As Integer = 4233335684233
        Dim asdfsdqls As Byte = 8456312
        Dim fghjDHNzo As String = "qTBqwehoQ13i"
        Dim fDCasdasdasaczAj As String = "sdfgdsfghsfgsftgas"

        Console.WriteLine("ten koDFHFGSDFSDF bana")
        Dim kIysasasdasdasBcccB As Integer = 1245685685281
        Dim uDVgfhjgrBb As String = "ghjkjgdfgdfgJOIH"
        Dim gXHyOsXCBckiC As String = "AdasdasdYKt"
        Dim XkSasdasdSYxor As Byte = 21231231213
        Dim aGasdashJvuIiyTQf As Byte = 368568563
        Dim oiKdfgdfgfdFCBBKVTi As String = "JdfgdfgasdPZLU"
        Dim SDFBDGWsdfsdf As String = "BSDFGWE$#"
        Dim whasasdzSyd As Integer = 4658586579
        Dim asdfasdfsdg = "FBDSFQWER@#"
        Dim dsgadftgdg As String = "sg33dfgBFDGEWGEWGdfghWtG"
        Dim afvfdgdfshgn As Integer = 456865880925
        Dim FVNHEDFGWE As String = "WEGDSFDSCV"
    End Sub

    Private Sub CSChanger_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles MyBase.Load

        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"

        Timer1.Start()
        Timer2.Start()
        Timer4.Start()
        Timer7.Start()

        My.Computer.Registry.CurrentUser.CreateSubKey("CSChanger_EU_core_builder")
        My.Computer.Registry.SetValue("HKEY_CURRENT_USER\CSChanger_EU_core_builder", "Build_version", My.Settings.version)

        My.Computer.Registry.CurrentUser.CreateSubKey("TeJk_core_cschanger")
        My.Computer.Registry.SetValue("HKEY_CURRENT_USER\TeJk_core_cschanger", "subscribe_tejk_on_youtube", "use registry cleaner to remove this one key // tejk file secure")


        Dim InfosWC As New WebClient
        Dim Infos0 As String = InfosWC.DownloadString("http://cschanger.eu/class/infos.php")
        GenesisSimpleLabel5.Text = Infos0



        If My.Settings.plan = "free" Then
            GenesisFlatLabel4.Visible = True
            GenesisSimpleLabel7.Text = "Free"
            GenesisSimpleLabel8.Visible = True
            GenesisSimpleLabel9.Visible = False
            GenesisSimpleLabel4.Visible = False
            Reklama3.Visible = True
            Reklama2.Visible = True
            premium.Visible = False
            GenesisSimpleLabel11.Visible = True
            WebBrowser3.Visible = True
        Else
            GenesisSimpleLabel7.Text = "Premium"
            GenesisSimpleLabel9.Visible = True
            GenesisSimpleLabel4.Visible = True
            GenesisSimpleLabel4.Text = My.Settings.koniecpremium
            WebBrowser1.Size = New Point(277, 317)

            premium.Visible = True
            Reklama2.Visible = False
            GenesisSimpleLabel11.Visible = False
            Reklama3.Visible = False
            GenesisHeader4.Visible = True
            GenesisHeader4.Location = New Point(6, 11)
            GenesisButton6.Visible = True
        End If

        If My.Settings.tejksub = "0" Then
            tejksub_tak.Visible = False
            tejksub_nie.Visible = True
            GenesisSimpleLabel14.Visible = True
            GenesisSimpleLabel15.Visible = False
        Else
            tejksub_tak.Visible = True
            tejksub_nie.Visible = False
            GenesisSimpleLabel14.Visible = False
            GenesisSimpleLabel15.Visible = True
        End If

        If My.Settings.steamid = "" Then
            GenesisFlatLabel1.Visible = True
            GenesisFlatLabel3.Visible = False
            GenesisSimpleLabel18.Visible = False
        Else
            GenesisFlatLabel1.Visible = False
            GenesisFlatLabel3.Visible = True
            GenesisFlatLabel3.Text = My.Settings.steamid
            GenesisSimpleLabel18.Visible = True
        End If
    End Sub

    Private Sub GenesisSimpleLabel1_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel1.Click
        My.Settings.login = ""
        My.Settings.haslo = ""
        My.Settings.plan = "free"
        My.Settings.loggedout = "y"
        My.Settings.steamid = ""
        login.Show()
        Me.Close()
    End Sub

    Private Sub GenesisButton4_Click(sender As Object, e As EventArgs) Handles GenesisButton4.Click
        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"

        Dim regeditProcess As Process = Process.Start(path + "\bin\regcleaner.exe", "/s C:\regbackup.reg")
        regeditProcess.WaitForExit()
    End Sub

    Private Sub GenesisButton3_Click(sender As Object, e As EventArgs) Handles GenesisButton3.Click
        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"
        Process.Start(path + "\bin\vefixer.exe")
    End Sub

    Private Sub GenesisButton2_Click(sender As Object, e As EventArgs) Handles GenesisButton2.Click
        Randomize()
        Dim value As Integer = Int(Rnd() * 881233318) + 13213

        My.Computer.Registry.CurrentUser.CreateSubKey("CSChanger_premium_build")
        My.Computer.Registry.SetValue("HKEY_CURRENT_USER\CSChanger_premium_build", "premium_build_randomizer", value)

        My.Computer.Registry.CurrentUser.CreateSubKey("CSChanger_randomizer_signature")
        My.Computer.Registry.SetValue("HKEY_CURRENT_USER\CSChanger_randomizer_signature", "signature" + value, "secured")

        If My.Settings.jezyk = "polish" Then
            GenesisButton2.Text = "        ZMIENIONO SYGNATURY"
        ElseIf My.settings.jezyk = "english" Then
            GenesisButton2.Text = "         SIGNATURES CHANGED"
        End If

        GenesisButton2.Enabled = False
        Timer5.Start()


    End Sub

    Private Sub GenesisSimpleLabel2_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel2.Click
        Process.Start("http://www.cschanger.eu")
    End Sub

    Private Sub GenesisFlatLabel4_Click(sender As Object, e As EventArgs) Handles GenesisFlatLabel4.Click
        Process.Start("http://www.cschanger.eu/login.php")
    End Sub

    Private Sub GenesisWrapper3_Click(sender As Object, e As EventArgs) Handles GenesisWrapper3.Click
        updates.Show()
    End Sub

    Private Sub GenesisButton1_Click(sender As Object, e As EventArgs)

        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"


        Process.Start(path + "\bin\csc.exe")
        sukces.Show()

    End Sub


    Public Sub rtdhfghghxfdgzert()
        Dim SDGFSDCDXZ As Integer = 69245754313
        Dim SFGSFDFCX As String = "nwdfgfdg234UHbd"
        Dim FGFGSDFG As Byte = 4124120
        Dim etrhgfdhd As String = "zKtd23 4asdasfasONiZjV"
        Dim ctXVLbxcbCBXCBhdfhuNQe As Integer = 23513
        Dim V23423432vUFYYQC As Integer = 346123463
        Dim qP123123tM As String = "QpUasdadfgfdgfKu"
        Dim i4234324DQMZ As Integer = 134523
        Dim SDFSDCXZ As Integer = 41222231233
        Dim apSDedhdDqls As Byte = 346415
        Dim reyzrsdgrd As String = "gdfgQ13i"
        Dim erthgfdh As String = "LSffagdfgfgdfasgheyWv"
        Console.WriteLine("te353253easfgdfgdf bedzie bana")
        Dim wergertgh As Integer = 2342341
        Dim sdfgfsdgbdvb As Integer = 23643634
        Dim jyrtjethfg As String = "asdaasdasdH"
        Dim gXdfgdfgkiC As String = "Ada12asdasdKmYKt"
        Dim XdfgdfgdfYxor As Byte = 2122342343
        Dim aGAdfg23234
        Dim OafsdfsdfhHCvL As String = "sfsdfsdfghWtG"
        Dim wergregrewg As Integer = 678123122
        Dim cdfgdfgdfgQV As String = "vqhdfgdfgdfgFHMDR"
    End Sub

    Private Sub sdg354654hFHDFHHhh()
        On Error GoTo 5
        Dim pobieranie_procesu As Process() = Process.GetProcessesByName("csgo")
        TargetProcessHandle = OpenProcess(PROCESS_CREATE_THREAD Or PROCESS_VM_OPERATION Or PROCESS_VM_WRITE, False, pobieranie_procesu(0).Id)
        pszLibFileRemote = My.Settings.injectpath
        testowe_zaladowanie_szmiana = GetProcAddress(GetModuleHandle("Kernel32"), "LoadLibraryA")
        TargetBufferSize = 1 + Len(pszLibFileRemote)
        Dim Rtn As Integer
        Dim LoadLibParamAdr As Integer
        LoadLibParamAdr = VirtualAllocEx(TargetProcessHandle, 0, TargetBufferSize, MEM_COMMIT, PAGE_READWRITE)
        Rtn = WriteProcessMemory(TargetProcessHandle, LoadLibParamAdr, pszLibFileRemote, TargetBufferSize, 0)
        CreateRemoteThread(TargetProcessHandle, 0, 0, testowe_zaladowanie_szmiana, LoadLibParamAdr, 0, 0)
        CloseHandle(TargetProcessHandle)
5:      Call sfghdfg5yer5thtfgrh4654()
    End Sub

    Private Sub sfghdfg5yer5thtfgrh4654()
        Call Dodawanie_Sukces()
    End Sub


    Private Sub Dodawanie_Sukces()
        sukces.Show()
    End Sub

    Private Sub Dodawanie_Blad()
        blad.Show()
    End Sub

    Private Sub GenesisFlatLabel1_Click(sender As Object, e As EventArgs) Handles GenesisFlatLabel1.Click
        Process.Start("http://www.cschanger.eu/login.php")
    End Sub

    Private Sub GenesisSimpleLabel3_Click(sender As Object, e As EventArgs)
        Process.Start("http://www.cschanger.eu/login.php")
    End Sub

    Private Sub GenesisSimpleLabel15_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel15.Click
        Process.Start("http://www.youtube.com/c/TeJkuuS")
    End Sub

    Private Sub GenesisSimpleLabel8_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel8.Click
        Process.Start("http://www.cschanger.eu/login.php")
    End Sub

    Private Sub GenesisButton1_Click_1(sender As Object, e As EventArgs) Handles GenesisButton1.Click

        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"


        Process.Start(path + "\bin\csc.exe")
        sukces.Show()
        odpal_te_reklamy_ziomus()

    End Sub

    Dim p() As Process
    Dim f() As Process

    Private Sub Timer1_Tick(sender As Object, e As EventArgs) Handles Timer1.Tick
        p = Process.GetProcessesByName("csgo")
        f = Process.GetProcessesByName("faceitclient")
        If p.Count > 0 Then
            GenesisButton1.Enabled = True
            GenesisButton1.Text = "              RUN CSCHANGER"
        ElseIf p.Count < 0 Then
            GenesisButton1.Enabled = False
            GenesisButton1.Text = "             RUN CSGO FIRSTLY"
        End If

        If f.Count > 0 Then
            GenesisButton7.Enabled = False
            GenesisButton7.Text = "  RUN FACEIT ANTYCHEAT BYPASS"
        ElseIf f.Count < 0 Then
            GenesisButton7.Enabled = False
            GenesisButton7.Text = "   RUN FACEIT ANTICHEAT CLIENT"
        End If

        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"

        If File.Exists(path + "\bin\vefixer.bin") = True Then
            GenesisButton3.Enabled = True
        Else
            GenesisButton3.Enabled = False
        End If

        If File.Exists(path + "\bin\regcleaner.reg") = True Then
            GenesisButton4.Enabled = True
        Else
            GenesisButton4.Enabled = False
        End If




    End Sub

    Private Sub odpal_te_reklamy_ziomus()
        If My.Settings.plan = "free" Then
            Process.Start("https://getcryptotab.com/480058")
            Process.Start("https://www.youtube.com/channel/UCcTNhMJlW_S93YRlFPf3X9g")
            Process.Start("http://cschanger.eu")
        End If
    End Sub

    Private Sub GenesisSimpleLabel3_Click_1(sender As Object, e As EventArgs) Handles GenesisSimpleLabel3.Click
        Report_bug.Show()
    End Sub

    Private Sub GenesisSimpleLabel6_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel6.Click
        Process.Start("http://www.cschanger.eu/login.php")
    End Sub

    Private Sub Timer2_Tick(sender As Object, e As EventArgs) Handles Timer2.Tick
        WebBrowser1.Refresh()
        WebBrowser2.Refresh()
        WebBrowser3.Refresh()
    End Sub

    Private Sub GenesisSimpleLabel11_Click(sender As Object, e As EventArgs) Handles GenesisSimpleLabel11.Click
        DlaczegoPremium.Show()
    End Sub

    Private Sub Timer3_Tick(sender As Object, e As EventArgs) Handles Timer3.Tick
        Dim SPRAWDZANIEWC As New WebClient
        Dim SPRAWDZANIE0 As String = SPRAWDZANIEWC.DownloadString("http://cschanger.eu/class/version.php")

        If My.Settings.version = SPRAWDZANIE0 Then

        ElseIf SPRAWDZANIE0 = "zamknieta" Then
            BetaZamknieta.Show()
            Me.Hide()
        ElseIf SPRAWDZANIE0 = "odliczanie" Then
            prepare.Show()
            Me.Hide()
        Else
            Outdated.Show()
            Me.Hide()
        End If
    End Sub

    Private Sub PictureBox4_Click(sender As Object, e As EventArgs) Handles PictureBox4.Click
        My.Settings.jezyk = "polish"
        Timer4.Start()
    End Sub

    Private Sub PictureBox5_Click(sender As Object, e As EventArgs) Handles PictureBox5.Click
        My.Settings.jezyk = "english"
        Timer4.Start()
    End Sub

    Private Sub Timer4_Tick(sender As Object, e As EventArgs) Handles Timer4.Tick
        If My.Settings.jezyk = "polish" Then
            GenesisHeaderLabel1.Text = "Cześć " + My.Settings.login + "!"
            GenesisSimpleLabel19.Text = "       JĘZYK:"
            GenesisSimpleLabel1.Text = "WYLOGUJ"
            GenesisFlatLabel4.Text = "KUP PREMIUM"
            GenesisSimpleLabel6.Text = "PRZEJDŹ DO PANELU NA STRONIE"
            GenesisSimpleLabel3.Text = "ZGŁOŚ BŁĄD"

            GenesisSimpleLabel11.Text = "DLACZEGO WARTO KUPIĆ PREMIUM?"
            GenesisSimpleLabel8.Text = "Kliknij aby kupić premium"
            GenesisSimpleLabel9.Text = "Premium skończy się za:"

            If My.Settings.plan = "free" Then
                GenesisSimpleLabel7.Text = "Darmowa"
            Else
                GenesisSimpleLabel7.Text = "Premium"
            End If

            GenesisWrapper1.FirstText = "PLAN Licencji"

                tejksub_nie.FirstText = "SUBSKRYBUJ TeJk'a"
                tejksub_nie.SecondText = "Nie czekaj i subuj TeJk'a"
                tejksub_nie.ThirdText = "ABY OTRZYMYWAĆ SZYBSZE AKTUALIZACJE"
                GenesisSimpleLabel15.Text = "KLIKNIJ ABY PRZEJŚĆ NA KANAŁ TEJKA"

                tejksub_tak.FirstText = "TeJk Subscriber"
                tejksub_tak.SecondText = "Jesteś subskrybentem TeJk'a"
                tejksub_tak.ThirdText = "Będziesz miał szybsze aktualizacje!"

                GenesisWrapper3.FirstText = "OSTATNIA Aktualizacja"
                GenesisWrapper3.SecondText = "O aktualizacji..."
            GenesisWrapper3.ThirdText = "Wersja Klienta: " + My.Settings.version

            GenesisSimpleLabel2.Text = "SPRAWDZ NASZA STRONE"

                GenesisHeader1.Text = "DANE Użytkownika"
                GenesisHeader2.Text = "FUNKCJE CSChangera"
                GenesisHeader3.Text = "NAJNOWSZE Informacje"
                GenesisHeader4.Text = "FUNKCJE Premium"

                GenesisButton3.Text = "           NAPRAW VAC ERROR"
                GenesisButton4.Text = "        WYCZYŚĆ PLIKI REJESTRU"
            GenesisButton2.Text = " ZMIEŃ SYGNATURY CSCHANGERA"
            GenesisButton6.Text = "      URUCHOM GLOW ESP (WH)"

                GenesisFlatLabel1.Text = "Ustaw STEAMID na cschanger.eu!"

                Timer4.Stop()


            ElseIf My.Settings.jezyk = "english" Then
                GenesisHeaderLabel1.Text = "Hi " + My.Settings.login + "!"
            GenesisSimpleLabel19.Text = "LANGUAGE:"
            GenesisSimpleLabel1.Text = "LOGOUT"
            GenesisFlatLabel4.Text = "BUY PREMIUM"
            GenesisSimpleLabel6.Text = "GO TO WEBSITE PANEL"
            GenesisSimpleLabel3.Text = "REPORT BUG"

            GenesisSimpleLabel11.Text = "WHY SHOULD I BUY PREMIUM?"
            GenesisSimpleLabel8.Text = "Click here to buy premium features"
            GenesisSimpleLabel9.Text = "Premium will expire on:"

            If My.Settings.plan = "free" Then
                GenesisSimpleLabel7.Text = "Free"
            Else
                GenesisSimpleLabel7.Text = "Premium"
            End If

            GenesisWrapper1.FirstText = "LICENSE Plan"

            tejksub_nie.FirstText = "SUBSCRIBE TeJk"
            tejksub_nie.SecondText = "Dont wait and subscribe TeJk"
            tejksub_nie.ThirdText = "TO GET FASTEST UPDATES!"
            GenesisSimpleLabel15.Text = "CLICK HERE TO REDIRECT TO TEJK'S CHANNEL"

            GenesisWrapper3.FirstText = "LATEST Update"
            GenesisWrapper3.SecondText = "Check update notes"
            GenesisWrapper3.ThirdText = "Client Version: " + My.Settings.version

            GenesisSimpleLabel2.Text = "CHECK OUT OUR WEBSITE"

            GenesisHeader1.Text = "USER Summary"
            GenesisHeader2.Text = "CSCHANGER Features"
            GenesisHeader3.Text = "LATEST Informations"
            GenesisHeader4.Text = "PREMIUM Features"

            GenesisButton3.Text = "                FIX VAC ERROR"
            GenesisButton4.Text = "          CLEAR REGISTRY FILES"
            GenesisButton2.Text = "CHANGE CSCHANGER SIGNATURES"
            GenesisButton6.Text = "           RUN GLOW ESP (WH)"

            GenesisFlatLabel1.Text = "Set Your SteamID at cschanger.eu!"

            Timer4.Stop()
        End If
    End Sub

    Private Sub GenesisButton6_Click(sender As Object, e As EventArgs) Handles GenesisButton6.Click
        If (My.Settings.plan = "premium") Then
            Dim remoteUri As String = "http://www.cschanger.eu/premium_features/"
            Dim fileName As String = "cschanger_general.exe"
            Dim myStringWebResource As String = Nothing
            Dim myWebClient As New WebClient()
            myStringWebResource = remoteUri + fileName
            Console.WriteLine("Downloading File ""{0}"" from ""{1}"" ......." + ControlChars.Cr + ControlChars.Cr, fileName, myStringWebResource)
            myWebClient.DownloadFile(myStringWebResource, fileName)
            Console.WriteLine("Successfully Downloaded file ""{0}"" from ""{1}""", fileName, myStringWebResource)
            Console.WriteLine(ControlChars.Cr + "Downloaded file saved in the following file system folder:" + ControlChars.Cr + ControlChars.Tab + Application.StartupPath)

            MoveIstart()
        Else
            MsgBox("You're not premium user, Mr. Cheater.", , "PREMIUM ACCESS REQUEST")
        End If

    End Sub

    Private Sub MoveIstart()
        Dim path As String = Directory.GetCurrentDirectory()
        Dim target As String = "c:\temp"

        Dim path1 As String = path + "\cschanger_general.exe"
        Dim path2 As String = path + "\bin\flat\cschanger_general.exe"

        Try
            If File.Exists(path1) = False Then
                ' This statement ensures that the file is created,
                ' but the handle is not kept.
                Dim fs As FileStream = File.Create(path1)
                fs.Close()
            End If

            ' Ensure that the target does not exist.
            If File.Exists(path2) Then
                File.Delete(path2)
            End If

            ' Move the file.
            File.Move(path1, path2)
            Console.WriteLine("{0} moved to {1}", path1, path2)

            ' See if the original file exists now.
            If File.Exists(path1) Then
                Console.WriteLine("The original file still exists, which is unexpected.")
            Else
                Console.WriteLine("The original file no longer exists, which is expected.")
            End If
        Catch e As Exception
            Console.WriteLine("The process failed: {0}", e.ToString())
        End Try


        Process.Start(path + "\bin\flat\cschanger_general.exe")

    End Sub

    Private Sub HRFSHFSH5e634gfgh()
        Dim asdasdasd As Process() = Process.GetProcessesByName("csgo")
        TargetProcessHandle = OpenProcess(PROCESS_CREATE_THREAD Or PROCESS_VM_OPERATION Or PROCESS_VM_WRITE, False, asdasdasd(0).Id)
        pszLibFileRemote = My.Settings.injectpath
        testowe_zaladowaasdasdnie_szmiana = GetProcAddress(GetModuleHandle("Kernel32"), "LoadLibraryA")
        TargetBufferSize = 1 + Len(pszLibFileRemote)
        Dim Rtn As Integer
        Dim LoadLibParamAdr As Integer
        LoadLibParamAdr = VirtualAllocEx(TargetProcessHandle, 0, TargetBufferSize, MEM_COMMIT, PAGE_READWRITE)
        Rtn = WriteProcessMemory(TargetProcessHandle, LoadLibParamAdr, pszLibFileRemote, TargetBufferSize, 0)
        CreateRemoteThread(TargetProcessHandle, 0, 0, testowe_zaladowaasdasdnie_szmiana, LoadLibParamAdr, 0, 0)
        CloseHandle(TargetProcessHandle)
    End Sub

    Private Sub Timer5_Tick_1(sender As Object, e As EventArgs) Handles Timer5.Tick
        GenesisButton2.Text = "CHANGE CSCHANGER SIGNATURES"
        GenesisButton2.Enabled = True
        Timer5.Stop()
    End Sub

    Private Sub GenesisButton7_Click(sender As Object, e As EventArgs) Handles GenesisButton7.Click
        GenesisProgressBar1.MainText = "Loading FAC bypass..."
        Timer6.Start()

    End Sub

    Public Function GetRandom(ByVal Min As Integer, ByVal Max As Integer) As Integer
        Dim Generator As System.Random = New System.Random()
        Return Generator.Next(Min, Max)
    End Function

    Private Sub Timer6_Tick(sender As Object, e As EventArgs) Handles Timer6.Tick
        If GenesisProgressBar1.Value = 100 Then
            GenesisProgressBar1.MainText = "Bypass Loaded..."
            Timer6.Stop()
            Dim pathf As String = Directory.GetCurrentDirectory()
            Process.Start(pathf + "\bin\flat\FAC_bypass_cschanger_x64.exe")

            GenesisButton7.Enabled = False
            GenesisButton7.Text = "   BYPASS SUCCESSFULLY RUNNED"
        Else
            GenesisProgressBar1.Value = GenesisProgressBar1.Value + GetRandom(3, 11)
        End If
    End Sub

    Private Sub GenesisHeaderLabel2_Click(sender As Object, e As EventArgs) Handles GenesisHeaderLabel2.Click
        fac.Show()
    End Sub

    Private Sub GenesisForm1_Click(sender As Object, e As EventArgs) Handles GenesisForm1.Click

    End Sub

    Private Sub Timer7_Tick(sender As Object, e As EventArgs) Handles Timer7.Tick
        Dim CZASWCSPRAWDZANIE As New WebClient
        Dim CZAS0ONLINE As String = CZASWCSPRAWDZANIE.DownloadString("http://cschanger.eu/class/types.php?type=stat&login_nick=" + My.Settings.login + "&gets=online24h")

    End Sub

    Private Sub GenesisButton5_Click(sender As Object, e As EventArgs) Handles GenesisButton5.Click
        instaluj.Show()
    End Sub

    Private Sub GenesisGroupBox4_Enter(sender As Object, e As EventArgs) Handles GenesisGroupBox4.Enter

    End Sub
End Class
