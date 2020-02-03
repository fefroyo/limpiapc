window.onload = function() {

	visor=document.getElementById("reloj");
	visor.innerHTML = "0 : 00 : 00 : 00";
	
		// document.cron.reinicia.onclick = reiniciar;
		// document.cron.empieza.onclick = empezar;
		// document.cron.para.onclick = parar;
		// document.cron.continua.onclick = continuar;
}

var marcha=0;
var cro=0;

function reiniciar() {
				 
	if (marcha==1) {
	 		
	 	clearInterval(elcrono);
	 		visor.innerHTML = "0 : 00 : 00 : 00";
			marcha=0;
			cro=0;
	}
	else {
			visor.innerHTML = "0 : 00 : 00 : 00";
			cro=0;
	}	
}			

function empezar() {
		 
		 if (marcha==0) {
		 		emp=new Date()
				elcrono=setInterval(tiempo,10);
		 		marcha=1
		 }
}
function continuar() {
		 
		 if (marcha==0) {
		 		emp2=new Date()
				emp2=emp2.getTime()
				emp3=emp2-cro
				
				emp=new Date()
				emp.setTime(emp3)
				elcrono=setInterval(tiempo,10);
		 		marcha=1;
		 }		
}

function parar() {
		
		if (marcha==1) {
		 		clearInterval(elcrono);
				marcha=0;
		}		
} 			 
function tiempo() {
		 
		 actual=new Date()
		 cro=actual-emp
		 cr=new Date()
		 cr.setTime(cro)
		 cs=cr.getMilliseconds()
		 cs=cs/10;
		 cs=Math.round(cs)
		 sg=cr.getSeconds();
		 mn=cr.getMinutes();
		 ho=cr.getHours()-1;
			 if (cs<10) {cs="0"+cs;} 
			 if (sg<10) {sg="0"+sg;} 
			 if (mn<10) {mn="0"+mn;} 
		
		visor.innerHTML=ho+" : "+mn+" : "+sg+" : "+cs;
}