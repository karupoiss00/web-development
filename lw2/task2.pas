PROGRAM PaulRevere(INPUT,OUTPUT);
  {����� ᮮ⢥�����饣� ᮮ�饭��, ������ᥣ� �� ����稭�
   �� �室�:  '...by land'  ��� 1;  '...by sea'  ��� 2;
   ���� ����� ᮮ�饭�� �� �訡��}
USES
  DOS;
VAR
  Lanterns: CHAR;
  Query: STRING;
  I: INTEGER;
BEGIN {PaulRevere}
  Query := GetEnv('QUERY_STRING');
  WRITELN('Content-Type: text/plain');
  WRITELN;
  FOR I := 1 TO Length(Query)
  DO
    BEGIN
      IF (Query[I] = '=')
      THEN
        Lanterns := Query[I + 1];
    END;
  {Issue Paul Revere's message}
  IF (Lanterns > '0') AND (Lanterns < '3')
  THEN
    WRITE('The British are coming by ');
    IF Lanterns = '1'
    THEN
      WRITELN('land.')
    ELSE IF Lanterns = '2'
    THEN
      WRITELN('sea.')
  ELSE
    WRITELN('The North Church shows only ''', Lanterns, '''.');
END. {PaulRevere}
