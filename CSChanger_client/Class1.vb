Imports System.Drawing.Text
Imports System.Drawing.Drawing2D
Imports System.ComponentModel

' // Genesis theme.
' // Made by AeroRev9.
' // Credits: Leumonic, Xertz.
' // Please, give credits if used.

' // Updated : 10/11/14 - 22:00.

Enum MouseState As Byte
    None = 0
    Over = 1
    Down = 2
    Block = 3
End Enum

<ToolboxItem(True)>
Class GenesisForm
    Inherits ContainerControl

    Private State As MouseState = MouseState.None
    Private MouseXLoc As Integer
    Private MouseYLoc As Integer
    Private CaptureMovement As Boolean
    Private MouseP As Point = New Point(0, 0)



#Region "Move form, control box"

    Private IsBeingMoved As Boolean = False
    Private MousePositions As Point = New Point(0, 0)

    Protected Sub OnMouseDowns(ByVal e As System.Windows.Forms.MouseEventArgs)

        MyBase.OnMouseDown(e)

        If e.Button = System.Windows.Forms.MouseButtons.Left And New Rectangle(0, 0, Width, Height / 10).Contains(e.Location) Then
            IsBeingMoved = True : MousePositions = e.Location
        End If

    End Sub

    Protected Sub OnMouseMoves(ByVal e As System.Windows.Forms.MouseEventArgs)
        MyBase.OnMouseMove(e)

        If IsBeingMoved Then
            Parent.Location = MousePosition - MousePositions
        End If

    End Sub

    Protected Sub OnMouseUps(ByVal e As System.Windows.Forms.MouseEventArgs)
        MyBase.OnMouseUp(e) : IsBeingMoved = False
    End Sub

    Protected Overrides Sub OnMouseUp(ByVal e As System.Windows.Forms.MouseEventArgs)
        MyBase.OnMouseUp(e)
        CaptureMovement = False
        State = MouseState.Over
        Invalidate()
    End Sub

    Protected Overrides Sub OnMouseEnter(e As EventArgs)
        MyBase.OnMouseEnter(e)
        State = MouseState.Over : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseLeave(e As EventArgs)
        MyBase.OnMouseLeave(e)
        State = MouseState.None : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseMove(e As MouseEventArgs)
        MyBase.OnMouseMove(e)
        MouseXLoc = e.Location.X
        MouseYLoc = e.Location.Y
        Invalidate()
        If CaptureMovement Then
            Parent.Location = MousePosition - CType(MouseP, Size)
        End If
        If e.Y > 26 Then Cursor = Cursors.Arrow Else Cursor = Cursors.Arrow
    End Sub

#End Region

    Protected Overrides Sub OnMouseDown(e As MouseEventArgs)
        MyBase.OnMouseDown(e)

        If MouseXLoc > Width - 30 AndAlso MouseXLoc < Width AndAlso MouseYLoc < 26 Then
            Environment.Exit(0)

        ElseIf MouseXLoc > Width - 60 AndAlso MouseXLoc < Width - 30 AndAlso MouseYLoc < 26 Then

            Select Case FindForm.WindowState
                Case FormWindowState.Normal
                    FindForm.WindowState = FormWindowState.Normal
                Case FormWindowState.Normal
                    FindForm.WindowState = FormWindowState.Maximized
            End Select

        ElseIf MouseXLoc > Width - 90 AndAlso MouseXLoc < Width - 60 AndAlso MouseYLoc < 26 Then

            Select Case FindForm.WindowState
                Case FormWindowState.Normal
                    FindForm.WindowState = FormWindowState.Minimized
                Case FormWindowState.Normal
                    FindForm.WindowState = FormWindowState.Minimized
            End Select

        ElseIf e.Button = System.Windows.Forms.MouseButtons.Left And New Rectangle(0, 0, Width - 90, Height / 10).Contains(e.Location) Then
            CaptureMovement = True
            MouseP = e.Location
        ElseIf e.Button = System.Windows.Forms.MouseButtons.Left And New Rectangle(Width - 90, 22, 75, 13).Contains(e.Location) Then
            CaptureMovement = True
            MouseP = e.Location
        ElseIf e.Button = System.Windows.Forms.MouseButtons.Left And New Rectangle(Width - 15, 0, 15, Height / 10).Contains(e.Location) Then
            CaptureMovement = True
            MouseP = e.Location
        Else
            Focus()
        End If

        State = MouseState.Down
        Invalidate()
    End Sub

    Sub New()
        DoubleBuffered = True
        Font = New Font("Verdana", 8)
    End Sub

    Protected Overrides Sub OnCreateControl()
        MyBase.OnCreateControl()
        Dock = DockStyle.Fill

        BackColor = Color.FromArgb(53, 53, 53)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)

        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        Select Case State
            Case MouseState.Over
                If MouseXLoc > Width - 30 AndAlso MouseXLoc < Width AndAlso MouseYLoc < 26 Then
                    G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(Width - 30, 1, 29, 25))
                ElseIf MouseXLoc > Width - 60 AndAlso MouseXLoc < Width - 30 AndAlso MouseYLoc < 26 Then
                    G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(Width - 60, 1, 30, 25))
                ElseIf MouseXLoc > Width - 90 AndAlso MouseXLoc < Width - 60 AndAlso MouseYLoc < 26 Then
                    G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(Width - 90, 1, 30, 25))
                End If
        End Select

        G.DrawLine(New Pen(Color.FromArgb(237, 234, 235), 2), Width - 20, 10, Width - 12, 18)
        G.DrawLine(New Pen(Color.FromArgb(237, 234, 235), 2), Width - 20, 18, Width - 12, 10)

        G.FillRectangle(New SolidBrush(Color.FromArgb(237, 234, 235)), Width - 79, 17, 8, 2)

        If FindForm.WindowState = FormWindowState.Normal Then
            G.DrawLine(New Pen(Color.FromArgb(117, 117, 117)), Width - 49, 18, Width - 40, 18)
            G.DrawLine(New Pen(Color.FromArgb(117, 117, 117)), Width - 49, 18, Width - 49, 10)
            G.DrawLine(New Pen(Color.FromArgb(117, 117, 117)), Width - 40, 18, Width - 40, 10)
            G.DrawLine(New Pen(Color.FromArgb(117, 117, 117)), Width - 49, 10, Width - 40, 10)
            G.DrawLine(New Pen(Color.FromArgb(117, 117, 117)), Width - 49, 11, Width - 40, 11)
        ElseIf FindForm.WindowState = FormWindowState.Maximized Then
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 48, 16, Width - 39, 16)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 48, 16, Width - 48, 8)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 39, 16, Width - 39, 8)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 48, 8, Width - 39, 8)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 48, 9, Width - 39, 9)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 51, 20, Width - 42, 20)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 51, 20, Width - 51, 12)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 42, 20, Width - 42, 12)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 51, 12, Width - 42, 12)
            G.DrawLine(New Pen(Color.FromArgb(237, 234, 235)), Width - 51, 13, Width - 42, 13)
        End If

        G.DrawString(Text, New Font("Segoe UI", 9), New SolidBrush(Color.FromArgb(237, 234, 235)), New Point(27, 6))
        G.DrawRectangle(New Pen(Color.FromArgb(50, 50, 50)), New Rectangle(0, 0, Width - 1, Height - 1))

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub

End Class

Class GenesisHeader
    Inherits Control

    Sub New()
        Size = New Point(270, 40)
    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)
        Size = New Point(Width, 40)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)
        MyBase.OnPaint(e)

        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        G.FillRectangle(New SolidBrush(Color.FromArgb(32, 203, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        G.DrawString(Text, New Font("Segoe UI", 12, FontStyle.Bold), New SolidBrush(Color.FromArgb(237, 234, 235)), New Point(15, 20), New StringFormat With {.Alignment = StringAlignment.Near, .LineAlignment = StringAlignment.Center})

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub
End Class

Class GenesisHeaderLabel
    Inherits Label

    Sub New()
        Font = New Font("Segoe UI", 10)
        ForeColor = Color.FromArgb(32, 150, 88)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)
        MyBase.OnPaint(e)

        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()
    End Sub
End Class

Class GenesisSimpleLabel
    Inherits Label

    Sub New()
        Font = New Font("Segoe UI", 9)
        ForeColor = Color.FromArgb(150, 150, 150)
    End Sub
End Class

Class GenesisFlatLabel
    Inherits Label

    Sub New()
        Font = New Font("Segoe UI", 9)
        ForeColor = Color.FromArgb(32, 140, 88)
    End Sub
End Class

Class GenesisProgressBar
    Inherits Control

    Private _Maximum As Integer
    Public Property Maximum() As Integer
        Get
            Return _Maximum
        End Get
        Set(ByVal v As Integer)
            Select Case v
                Case Is < _Value
                    _Value = v
            End Select
            _Maximum = v
            Invalidate()
        End Set
    End Property

    Private _Value As Integer
    Public Property Value() As Integer
        Get
            Select Case _Value
                Case 0
                    Return 1
                Case Else
                    Return _Value
            End Select
        End Get
        Set(ByVal v As Integer)
            Select Case v
                Case Is > _Maximum
                    v = _Maximum
            End Select
            _Value = v
            Invalidate()
        End Set
    End Property


    Private _MainText As String
    Public Property MainText() As String
        Get
            Return _MainText
        End Get

        Set(ByVal v As String)
            Select Case v
                Case Is < _MainText
                    _MainText = v
            End Select
            _MainText = v
            Invalidate()
        End Set
    End Property

    Private _Showtext As Boolean
    Public Property Showtext() As Boolean
        Get
            Return _Showtext
        End Get

        Set(ByVal v As Boolean)
            Select Case v
                Case Is < _Showtext
                    _Showtext = v
            End Select
            _Showtext = v
            Invalidate()
        End Set
    End Property

    Sub New()
        Size = New Point(200, 23)
        Value = 0
        Maximum = 100
        Showtext = True
        MainText = "GenesisMainTextProgress"
    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)
        Size = New Point(Width, 22)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)
        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        Select Case _Value
            Case Is > 2
                G.FillRectangle(New SolidBrush(Color.FromArgb(32, 140, 88)), New Rectangle(0, 0, CInt(_Value / _Maximum * Width), Height))
            Case Is > 0
                G.FillRectangle(New SolidBrush(Color.FromArgb(32, 140, 88)), New Rectangle(0, 0, CInt(_Value / _Maximum * Width), Height))
        End Select

        G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(0, 0, Width - 1, Height - 1))

        If Showtext = True Then
            G.DrawString(MainText, New Font("Segoe UI", 9), New SolidBrush(Color.FromArgb(237, 234, 235)), New Point(5, 2))
        End If

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub

End Class

Class GenesisWrapper
    Inherits Control

    Private State As MouseState = MouseState.None

    Private _FirstText As String
    Public Property FirstText() As String
        Get
            Return _FirstText
        End Get
        Set(ByVal v As String)
            Select Case v
                Case Is < _FirstText
                    _FirstText = v
            End Select
            _FirstText = v
            Invalidate()
        End Set
    End Property

    Private _SecondText As String
    Public Property SecondText() As String
        Get
            Return _SecondText
        End Get

        Set(ByVal v As String)
            Select Case v
                Case Is < _SecondText
                    _SecondText = v
            End Select
            _SecondText = v
            Invalidate()
        End Set
    End Property

    Private _ThirdText As String
    Public Property ThirdText() As String
        Get
            Return _ThirdText
        End Get

        Set(ByVal v As String)
            Select Case v
                Case Is < _ThirdText
                    _ThirdText = v
            End Select
            _ThirdText = v
            Invalidate()
        End Set
    End Property

    Protected Overrides Sub OnMouseEnter(e As EventArgs)
        MyBase.OnMouseEnter(e)
        State = MouseState.Over : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseLeave(e As EventArgs)
        MyBase.OnMouseLeave(e)
        State = MouseState.None : Invalidate()
    End Sub

    Sub New()
        Size = New Point(250, 70)
        DoubleBuffered = True
        _FirstText = "GENESIS"
        _SecondText = "NEW"
        _ThirdText = "xd"
    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)
        Size = New Point(250, 70)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)

        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        e.Graphics.SmoothingMode = SmoothingMode.AntiAlias




        e.Graphics.DrawString(_FirstText, New Font("Segoe UI", 10, FontStyle.Bold), New SolidBrush(Color.FromArgb(32, 140, 88)), New Point(12, 14))
        e.Graphics.DrawString(_SecondText, New Font("Segoe UI,", 9), New SolidBrush(Color.FromArgb(150, 150, 150)), New Point(16, 30))
        e.Graphics.DrawString(_ThirdText, New Font("Segoe UI,", 7), New SolidBrush(Color.FromArgb(150, 150, 150)), New Point(16, 45))


        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub

End Class

Class GenesisGroupBox
    Inherits GroupBox

    Sub New()
        SetStyle(ControlStyles.AllPaintingInWmPaint Or ControlStyles.OptimizedDoubleBuffer Or
                   ControlStyles.UserPaint Or ControlStyles.ResizeRedraw, True)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)

        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        G.Clear(Color.FromArgb(53, 53, 53))

        G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(0, 0, Width - 1, Height - 1))
        G.DrawLine(New Pen(Color.FromArgb(32, 150, 88), 2), New Point(Width, 0), New Point(0, 0))

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()


    End Sub

End Class

Class GenesisTextbox
    Inherits Control

    Dim WithEvents _tb As New TextBox
    Private State As MouseState

#Region "Properties"

    Private _allowpassword As Boolean = False
    Public Shadows Property UseSystemPasswordChar() As Boolean
        Get
            Return _allowpassword
        End Get
        Set(ByVal value As Boolean)
            _tb.UseSystemPasswordChar = UseSystemPasswordChar
            _allowpassword = value
            Invalidate()
        End Set
    End Property

    Private _maxChars As Integer = 32767
    Public Shadows Property MaxLength() As Integer
        Get
            Return _maxChars
        End Get
        Set(ByVal value As Integer)
            _maxChars = value
            _tb.MaxLength = MaxLength
            Invalidate()
        End Set
    End Property

    Private _textAlignment As HorizontalAlignment
    Public Shadows Property TextAlign() As HorizontalAlignment
        Get
            Return _textAlignment
        End Get
        Set(ByVal value As HorizontalAlignment)
            _textAlignment = value
            Invalidate()
        End Set
    End Property

    Private _multiLine As Boolean = False
    Public Shadows Property MultiLine() As Boolean
        Get
            Return _multiLine
        End Get
        Set(ByVal value As Boolean)
            _multiLine = value
            _tb.Multiline = value
            OnResize(EventArgs.Empty)
            Invalidate()
        End Set
    End Property

    Private _readOnly As Boolean = False
    Public Shadows Property [ReadOnly]() As Boolean
        Get
            Return _readOnly
        End Get
        Set(ByVal value As Boolean)
            _readOnly = value
            If _tb IsNot Nothing Then
                _tb.ReadOnly = value
            End If
        End Set
    End Property

    Protected Overrides Sub OnTextChanged(ByVal e As EventArgs)
        MyBase.OnTextChanged(e)
        Invalidate()
    End Sub

    Protected Overrides Sub OnBackColorChanged(ByVal e As EventArgs)
        MyBase.OnBackColorChanged(e)
        Invalidate()
    End Sub

    Protected Overrides Sub OnForeColorChanged(ByVal e As EventArgs)
        MyBase.OnForeColorChanged(e)
        _tb.ForeColor = ForeColor
        Invalidate()
    End Sub

    Protected Overrides Sub OnFontChanged(ByVal e As EventArgs)
        MyBase.OnFontChanged(e)
        _tb.Font = Font
    End Sub

    Protected Overrides Sub OnGotFocus(ByVal e As EventArgs)
        MyBase.OnGotFocus(e)
        _tb.Focus()
    End Sub

    Private Sub TextChangeTb() Handles _tb.TextChanged
        Text = _tb.Text
    End Sub

    Private Sub TextChng() Handles MyBase.TextChanged
        _tb.Text = Text
    End Sub

#End Region

    Public Sub NewTextBox()
        With _tb
            .Text = String.Empty
            .BackColor = Color.FromArgb(53, 53, 53)
            .ForeColor = ForeColor
            .TextAlign = HorizontalAlignment.Left
            .BorderStyle = BorderStyle.None
            .Location = New Point(3, 3)
            .Font = New Font("Segoe UI", 10)
            .Size = New Size(Width - 3, Height - 3)
            .UseSystemPasswordChar = UseSystemPasswordChar
        End With
    End Sub

    Sub New()
        MyBase.New()
        NewTextBox()
        Controls.Add(_tb)
        SetStyle(ControlStyles.UserPaint Or ControlStyles.SupportsTransparentBackColor, True)
        DoubleBuffered = True
        TextAlign = HorizontalAlignment.Left
        ForeColor = Color.FromArgb(150, 150, 150)
        Font = New Font("Segoe UI", 10)
        Size = New Size(130, 29)
    End Sub

    Protected Overrides Sub OnPaint(ByVal e As System.Windows.Forms.PaintEventArgs)
        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        G.Clear(Color.FromArgb(53, 53, 53))

        G.SmoothingMode = SmoothingMode.HighQuality
        G.InterpolationMode = InterpolationMode.HighQualityBicubic
        G.TextRenderingHint = Drawing.Text.TextRenderingHint.AntiAlias

        If State = MouseState.Down Then
            G.DrawRectangle(New Pen(Color.FromArgb(32, 160, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        Else
            G.DrawRectangle(New Pen(Color.FromArgb(65, 65, 65)), New Rectangle(0, 0, Width - 1, Height - 1))
        End If


        _tb.TextAlign = TextAlign
        _tb.UseSystemPasswordChar = UseSystemPasswordChar

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()
    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)
        If Not MultiLine Then
            Dim tbheight As Integer = _tb.Height
            _tb.Location = New Point(10, CType(((Height / 2) - (tbheight / 2) - 0), Integer))
            _tb.Size = New Size(Width - 20, tbheight)
        Else
            _tb.Location = New Point(10, 10)
            _tb.Size = New Size(Width - 20, Height - 20)
        End If
    End Sub

    Protected Overrides Sub OnEnter(e As EventArgs)
        MyBase.OnEnter(e)
        State = MouseState.Down : Invalidate()
    End Sub

    Protected Overrides Sub OnLeave(e As EventArgs)
        MyBase.OnLeave(e)
        State = MouseState.None : Invalidate()
    End Sub

End Class

Class GenesisButton
    Inherits Button

    Private State As MouseState

    Sub New()
        SetStyle(ControlStyles.UserPaint Or ControlStyles.SupportsTransparentBackColor, True)
        Size = New Point(115, 30)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)
        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        G.Clear(Color.FromArgb(53, 53, 53))

        If State = MouseState.None Then
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 160, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        ElseIf State = MouseState.Over Then
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 180, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        Else
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 150, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        End If


        G.DrawString(Text, New Font("Segoe UI", 12), New SolidBrush(Color.FromArgb(237, 234, 235)), New Point(10, 3))

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)

        Size = New Point(Width, 30)
    End Sub

    Protected Overrides Sub OnMouseEnter(e As EventArgs)
        MyBase.OnMouseEnter(e)
        State = MouseState.Over : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseLeave(e As EventArgs)
        MyBase.OnMouseLeave(e)
        State = MouseState.None : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseDown(e As MouseEventArgs)
        MyBase.OnMouseDown(e)
        State = MouseState.Down : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseUp(mevent As MouseEventArgs)
        MyBase.OnMouseUp(mevent)
        State = MouseState.Over : Invalidate()
    End Sub
End Class


Class GenesisButton2
    Inherits Button

    Private State As MouseState

    Sub New()
        SetStyle(ControlStyles.UserPaint Or ControlStyles.SupportsTransparentBackColor, True)
        Size = New Point(115, 15)
    End Sub

    Protected Overrides Sub OnPaint(e As PaintEventArgs)
        Dim B As Bitmap = New Bitmap(Width, Height)
        Dim G As Graphics = Graphics.FromImage(B)

        MyBase.OnPaint(e)

        G.Clear(Color.FromArgb(128, 255, 128))

        If State = MouseState.None Then
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 160, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        ElseIf State = MouseState.Over Then
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 180, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        Else
            G.FillRectangle(New SolidBrush(Color.FromArgb(32, 150, 88)), New Rectangle(0, 0, Width - 1, Height - 1))
        End If


        G.DrawString(Text, New Font("Segoe UI", 12), New SolidBrush(Color.FromArgb(237, 234, 235)), New Point(10, 3))

        e.Graphics.DrawImage(B, New Point(0, 0))
        G.Dispose() : B.Dispose()

    End Sub

    Protected Overrides Sub OnResize(e As EventArgs)
        MyBase.OnResize(e)

        Size = New Point(Width, 30)
    End Sub

    Protected Overrides Sub OnMouseEnter(e As EventArgs)
        MyBase.OnMouseEnter(e)
        State = MouseState.Over : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseLeave(e As EventArgs)
        MyBase.OnMouseLeave(e)
        State = MouseState.None : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseDown(e As MouseEventArgs)
        MyBase.OnMouseDown(e)
        State = MouseState.Down : Invalidate()
    End Sub

    Protected Overrides Sub OnMouseUp(mevent As MouseEventArgs)
        MyBase.OnMouseUp(mevent)
        State = MouseState.Over : Invalidate()
    End Sub
End Class