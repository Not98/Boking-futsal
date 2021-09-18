unit Unit1;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Data.DB, Data.Win.ADODB;

type
  TForm1 = class(TForm)
    ADOConnection1: TADOConnection;
    KataSandiADODataSet: TADODataSet;
    HakAksesADODataSet: TADODataSet;
    HakAksesDataSource: TDataSource;
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.dfm}

end.
