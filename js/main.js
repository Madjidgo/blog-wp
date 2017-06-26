
// button button1
function myFunction() {
    document.getElementById("button1");
    alert('Salaud');
}


// end button

// start button2 form
function myFunction2() {
	document.getElementById("button2");
	alert("Un peu de respect");
}
// end button2 form	


// button times
function times(){
	var date = new Date();
	alert(date);	
} 
// end button times


// compteur//
var compte = 0;

function chrono()
{
  document.getElementById("chrono").innerHTML = "vous avez passé "+" "+compte+ " "+"s" ;
  compte++;
}

function start()
{
  setInterval(chrono, 1000);

}
window.onload = start

// end compteur//


   //On accède à notre premier paragraphe
        var p1 = document.querySelector('p');
        
        //On accroche un gestionnaire d'évènements à p1
        p1.addEventListener('mousedown',changeTexte);
        p1.addEventListener('mouseup',reset1);
        
        /*On construit notre fonction changeTexte qui ne sera
         *exécutée que lors du déclenchement de l'évènement*/
        function changeTexte(){
            this.innerHTML = '<strong>Bravo !</strong>';
            this.style.color = 'orange';
        };

        function reset1(){
            this.innerHTML = '<strong>A travers ce blog, nous souhaitons présenter une technologie qui marie culture et digitale. Nous souhaitons analyser l’impact des nouvelles technologies sur votre quotidien  et  vous faire découvirir la formation Simplon  .</strong>';
            this.style.color = 'red';
            this.style.fontSize = '30px';
            this.style.opacity ='.7';

        };



        	// start alt img
        var img = document.getElementsByTagName("img");
        var text = document.getElementById('text');

        
        	for(let i =0;i<img.length;i++){
       
      
        img[i].addEventListener('mouseover',function (){
        	 var alt = this.alt;
        	 text.textContent = alt;
        });
           // end alt img
}
        //  start heure
      var heure = document.getElementById('t');
            var tempsReel = setInterval(horloge, 1000);
            
            function horloge(){
                var d = new Date();
                heure.innerHTML = d.toLocaleTimeString();
            }
           // end heure














    




