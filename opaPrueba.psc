Algoritmo prueba_tecnica
	definir numero1 , suma , i ,prueba  Como Entero;
	Definir resultado Como Caracter;
	i=0;
	suma = 0;
	resultado = "";
	prueba = 0 ;
	Escribir "ingresar numero";
	leer numero1;
	
	si(numero1<=300 && numero1>=0)entonces
		para i =1 hasta numero1 Con Paso 1 Hacer
		
		si numero1 %  i = 0   Entonces
			suma = suma + i ; 
			si suma = numero1 Entonces
				prueba = suma ;
			FinSi
		FinSi	
		
		FinPara
	
		si prueba = numero1 Entonces
			resultado = "Es numero perfecto";
		SiNo
		resultado = "no es  perfecto";
		FinSi
	
	
	
	escribir resultado;
sino 
	escribir "Estas fuera del rango, recuerda que el rango esta entre 0 y 300"
finsi 
FinAlgoritmo

