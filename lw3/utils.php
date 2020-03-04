<?php
	function getQueryStringParameter(string $name): ?string
	{
		return isset($_GET[$name]) ? $_GET[$name] : null;
	}
	
	function isDigit(string $ch): bool
	{
		return $ch == '0' 
		|| $ch == '1' 
		|| $ch == '2' 
		|| $ch == '3' 
		|| $ch == '4' 
		|| $ch == '5' 
		|| $ch == '6' 
		|| $ch == '7' 
		|| $ch == '8'
		|| $ch == '9';
	}
	
	function isLetter(string $ch): bool
	{
		return $ch == 'A' || $ch == 'a'
		|| $ch == 'B' || $ch == 'b'
		|| $ch == 'C' || $ch == 'c'
		|| $ch == 'D' || $ch == 'd'
		|| $ch == 'E' || $ch == 'e'
		|| $ch == 'F' || $ch == 'f'
		|| $ch == 'G' || $ch == 'g'
		|| $ch == 'H' || $ch == 'h'
		|| $ch == 'I' || $ch == 'i'
		|| $ch == 'J' || $ch == 'j'
		|| $ch == 'K' || $ch == 'k'
		|| $ch == 'L' || $ch == 'l'
		|| $ch == 'M' || $ch == 'm'
		|| $ch == 'N' || $ch == 'n'
		|| $ch == 'O' || $ch == 'o'
		|| $ch == 'P' || $ch == 'p'
		|| $ch == 'Q' || $ch == 'q'
		|| $ch == 'R' || $ch == 'r'
		|| $ch == 'S' || $ch == 's'
		|| $ch == 'T' || $ch == 't'
		|| $ch == 'U' || $ch == 'u'
		|| $ch == 'V' || $ch == 'v'
		|| $ch == 'W' || $ch == 'w'
		|| $ch == 'X' || $ch == 'x'
		|| $ch == 'Y' || $ch == 'y'
		|| $ch == 'Z' || $ch == 'z';
	}
	
	function isAllowedSymbol(string $ch): bool
	{
		return isLetter($ch) || isDigit($ch);
	}