PROGRAM HelloName(INPUT, OUTPUT);
  {Печать соответствующего сообщения, завищясего от величины
   на входе:  '...by land'  для 1;  '...by sea'  для 2;
   иначе печать сообщения об ошибке}
USES
  DOS;
VAR
  Query, Name: STRING;
  I: INTEGER;
BEGIN {PaulRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF (Length(Query) > 0)
  THEN
    BEGIN
      FOR I := POS('=', Query) + 1 TO Length(Query)
      DO
        Name += Query[I];
      WRITELN('Hello Dear, ', Name)
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {PaulRevere}
