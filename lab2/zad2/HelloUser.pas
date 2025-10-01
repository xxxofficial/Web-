PROGRAM HelloUser(INPUT, OUTPUT);
USES
  DOS;
VAR
  Name: STRING;
  PosName: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  PosName := Pos('name=', Name);
  IF PosName <> 0
  THEN
    WRITELN('Hello dear, ', Copy(Name, 6, Length(Name) - 5), '!')
  ELSE
    WRITELN('Hello Anonymous!');
  WRITELN
END.
