Imports System.Net

Public Class Form1
    Public Declare Function VirtualAllocEx Lib "kernel32" (ByVal hProcess As Integer, ByVal lpAddress As Integer, ByVal dwSize As Integer, ByVal flAllocationType As Integer, ByVal flProtect As Integer) As Integer
    Public Const MEM_COMMIT = 4096, PAGE_EXECUTE_READWRITE = &H40
    Public Declare Function WriteProcessMemory Lib "kernel32" (ByVal hProcess As Integer, ByVal lpBaseAddress As Integer, ByVal lpBuffer As Byte(), ByVal nSize As Integer, ByRef lpNumberOfBytesWritten As Integer) As Integer
    Public Declare Function GetProcAddress Lib "kernel32" (ByVal hModule As Integer, ByVal lpProcName As String) As Integer
    Private Declare Function GetModuleHandle Lib "Kernel32" Alias "GetModuleHandleA" (ByVal lpModuleName As String) As Integer
    Public Declare Function CreateRemoteThread Lib "kernel32" (ByVal hProcess As Integer, ByVal lpThreadAttributes As Integer, ByVal dwStackSize As Integer, ByVal lpStartAddress As Integer, ByVal lpParameter As Integer, ByVal dwCreationFlags As Integer, ByRef lpThreadId As Integer) As Integer


    Public Sub dsfadsfadsf()
        Dim asdfgafdgdfg As Integer = 34643523
        Dim SFGSFDFCX As String = "dsfgvsdvds"
        Dim dsfgdfgdffsg As Integer = 12312456
        Dim sdfgdfhg As String = "zdfhgfgvbdfbdfgdfz"
        Dim gfhjhgfjdfg As Integer = 23513
        Dim xcvbxcvbcv As Integer = 346123463
        Dim ngfxcvgbcvxh As String = "fdgzfdgfdxfhdf"
        Dim xghtgxhzdbcv As Integer = 134523
        Dim xgfbhfghbhxfgdb As Integer = 4567457
        Dim fgxhretgdf As Integer = 2314
        Dim xgbgbxdfghb As String = "xfgbncvbfghdfgh"
        Dim xbfgdbfg As String = "xfghfgbcvbzdfg"
        Console.WriteLine("xgfhfgbcvxbdgfxh")
        Dim fgzfdzvbcb As Integer = 8956785
        Dim xfgbfgbcvb As Integer = 6354654
        Dim zdrfgdfvbcx As String = "fgyjyguifghh"
        Dim cvbncnxgfh As String = "zdfbxvcbfhgdfh"
        Dim nxgfncvbf As Integer = 564756
    End Sub


    '==========================================================================================
    Private Sub ComboBoxDropDown(ByVal sender As Object, ByVal e As System.EventArgs)
        CType(sender, ComboBox).Items.Clear()
        For Each p As Process In Process.GetProcesses
            CType(sender, ComboBox).Items.Add(p.ProcessName)
        Next
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles Me.Load

        Dim DllPath As String = Application.StartupPath + "/cs_changer_eu.dll"

        If (Process.GetProcessesByName("csgo").Length = 0) Then
            MsgBox("Run CSGO firstly!")
            Me.Close()
            Exit Sub
        End If

        Dim TargetHandle As IntPtr = Process.GetProcessesByName("csgo")(0).Handle
        If (TargetHandle.Equals(IntPtr.Zero)) Then
            MsgBox("Error starting CSChanger in CSGO, try again")
            Me.Close()
            Exit Sub
        End If

        Dim GetAdrOfLLBA As IntPtr = GetProcAddress(GetModuleHandle("Kernel32"), "LoadLibraryA")
        If (GetAdrOfLLBA.Equals(IntPtr.Zero)) Then
            MsgBox("The primary address of the LoadLibraryA API can not be obtained.")
            Me.Close()
            Exit Sub
        End If

        Dim OperaChar As Byte() = System.Text.Encoding.Default.GetBytes(DllPath)

        Dim DllMemPathAdr = VirtualAllocEx(TargetHandle, 0&, &H64, MEM_COMMIT, PAGE_EXECUTE_READWRITE)
        If (DllMemPathAdr.Equals(IntPtr.Zero)) Then
            MsgBox("An error occurred while completing the signature data.")
            Me.Close()
            Exit Sub
        End If

        If (WriteProcessMemory(TargetHandle, DllMemPathAdr, OperaChar, OperaChar.Length, 0) = False) Then
            MsgBox("Error while completing the process.")
            Me.Close()
            Exit Sub
        End If

        CreateRemoteThread(TargetHandle, 0, 0, GetAdrOfLLBA, DllMemPathAdr, 0, 0)
        Me.Close()


    End Sub

    Function GenerateRandomNumber() As Integer
        Static Random_Number As New Random()
        Return Random_Number.Next(0, 101)
    End Function

    Function GenerateRandomNumber2() As Integer
        Static Random_Number2 As New Random()
        Return Random_Number2.Next(0, 1012)
    End Function

    Public Sub weqrfq34trfrgver()
        Dim asdfsdfsdsd
        Dim sdvdgadsg As Integer = 1235543165
        Dim dfghdfhbfgn As String = "adfgafdgdfgdf"
        Dim fgdhgfhgfnb As String = "dasfgdafgfdg"
        Dim dfghfgnfgnfg As Integer = 1351235
        Dim hfdghgfbhngf As String = "weraefsd"
        Dim dfgnfgngfh As Integer = 43534534
        Dim trhdrt As Integer = 8456312
        Dim gfhnjghutydrghf As String = "dfasgfsdagdfa"
        Dim ghfjghnhgf As String = "dfagdrsg"

        Console.WriteLine("fghhnghnghfjjfgh")
        Dim fghnghn As Integer = 1234123423
        Dim fhgnfghnghf As String = "sdfgdfgvbdf"
        Dim ghfnghnfghn As String = "sdfgdfsg"
        Dim XkSasdasdSYxor As Integer = 3453234
        Dim aGasdashJvuIiyTQf As Integer = 54353463
        Dim fghnfghnghnhg As String = "sfdhbfddf"
        Dim SDFBDGWsdfsdf As String = "ergerdfgvbs#"
        Dim whasasdzSyd As Integer = 123234
        Dim fghnghnghnfgh = "FBDSFQWER@#"
        Dim dsgadftgdg As String = "grtewgerfgvdfg"
        Dim fghnfghnfghnghfn As Integer = 3453452
        Dim rtyerthgfnbgnd As String = "WEGDSFDSCV"
    End Sub

End Class

