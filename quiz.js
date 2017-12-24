var score=0;//set score to 0
var total=30;//Total number of questions
var point=5;//points per correct answer
var highest= total*point;
var original=30*60;
var seconds =30*60,
   countDiv = document.getElementById('countDown'),
   secondPass,
   countDown =setInterval(function() {
	   
	     "use strict";
		 secondPass();
		 
   },1000);
   
function secondPass(){
		
	
	
	
	"use strict";
	var minutes = Math.floor(seconds /60),
	   remSeconds = seconds % 60;
	
	
	if(seconds <10){
		remSeconds="0"+remSeconds;
	}
	
	
	countDiv.innerHTML= minutes+ ":" +remSeconds;
	 
	
	
	if(seconds>0){
		seconds = seconds -1;//decrease one second every 1000 Millsecond
		
	}
	else{
		stop2(seconds);
	 }
	
}
function stop(y){
	var remain=Math.floor(original-y);
	var Rsec=Math.floor(((remain/60)-(Math.floor(remain/60)))*60);
	var Rmin=Math.floor(remain/60);
	$('.questionForm').hide();
	if(y==0){
		countDiv .innerHTML = "TimeOut!!";
	    $('#results').html('</br><h3>&emsp;Good Job!</br>&emsp;Your final score is : '+score+' out of 150, in '+seconds+' secondes.</br>&emsp;Thank you for participating, We will declare a winner at the end of the day.</br></br>&emsp; <a href="index.php">HomePage</h3></a>');

	}
	
	if(remain<60){
	$('#results').html('</br>	<h3>&emsp;Good Job!</br>&emsp;Your final score is : '+score+' out of 150, in '+remain+' secondes.</br>&emsp;Thank you for participating, We will declare a winner at the end of the day.</br></br>&emsp; <a href="index.php">HomePage</h3></a>');
     countDiv .innerHTML = "wohooo!!";
    }
	else{
		
	$('#results').html('</br>	<h3>&emsp;Good Job!</br>&emsp;Your final score is : '+score+' out of 150, in '+Rmin+' minutes and '+Rsec+' secondes.</br>&emsp;Thank you for participating, We will declare a winner at the end of the day.</br></br>&emsp; <a href="index.php">HomePage</h3></a>');
     countDiv .innerHTML = "wohooo!!";
	}
	clearInterval(countDown); //stop Countdown timer
	document.getElementById("time").value=remain;
	document.getElementById("score").value=score;
	
	}

function stop2(y){
	clearInterval(countDown); //stop Countdown timer
	var Rremain=Math.floor(original-y);
	var NewScore=Math.floor((score)-(Rremain/original)*10);
	$(location).attr('href','http://abnio.com/res.php?score='+NewScore+'&time='+Rremain);
	
}

function init(){
	 //set correct answers
	sessionStorage.setItem('a1','a');
	sessionStorage.setItem('a2','d');
	sessionStorage.setItem('a3','b');
	sessionStorage.setItem('a4','b');
	sessionStorage.setItem('a5','b');
	sessionStorage.setItem('a6','b');
	sessionStorage.setItem('a7','b');
	sessionStorage.setItem('a8','b');
	sessionStorage.setItem('a9','b');
	sessionStorage.setItem('a10','b');
	sessionStorage.setItem('a11','b');
	sessionStorage.setItem('a12','b');
	sessionStorage.setItem('a13','b');
	sessionStorage.setItem('a14','b');
	sessionStorage.setItem('a15','b');
	sessionStorage.setItem('a16','b');
	sessionStorage.setItem('a17','b');
	sessionStorage.setItem('a18','b');
	sessionStorage.setItem('a19','b');
	sessionStorage.setItem('a20','b');
	sessionStorage.setItem('a21','b');
	sessionStorage.setItem('a22','b');
	sessionStorage.setItem('a23','b');
	sessionStorage.setItem('a24','b');
	sessionStorage.setItem('a25','b');
	sessionStorage.setItem('a26','b');
	sessionStorage.setItem('a27','b');
	sessionStorage.setItem('a28','b');
	sessionStorage.setItem('a29','b');
	sessionStorage.setItem('a30','b');	
}


$(document).ready(function(){
	//Hide Questions
	$('.questionForm').hide();
	
	//show first questionForm
	$('#q1').show();
	
	$('#q1 #submit').click(function(){
		$('.questionForm').hide();
		process('q1');
		$('#q2').fadeIn(300);
		return false;
		
	});
		$('#q2 #submit').click(function(){
		$('.questionForm').hide();
		process('q2');
		$('#q3').fadeIn(300);
		return false;
		
	});
	
		$('#q3 #submit').click(function(){
		$('.questionForm').hide();
		process('q3');
		$('#q4').fadeIn(300);
		return false;
		
		
	});
	
		$('#q4 #submit').click(function(){
		$('.questionForm').hide();
		process('q4');
		$('#q5').fadeIn(300);
		return false;
		
	});
	
		$('#q5 #submit').click(function(){
		$('.questionForm').hide();
		process('q5');
		$('#q6').fadeIn(300);
		return false;
		
	});
	
		$('#q6 #submit').click(function(){
		$('.questionForm').hide();
		process('q6');
		$('#q7').fadeIn(300);
		return false;
		
	});
	
		$('#q7 #submit').click(function(){
		$('.questionForm').hide();
		process('q7');
		$('#q8').fadeIn(300);
		return false;
		
	});
	
		$('#q8 #submit').click(function(){
		$('.questionForm').hide();
		process('q8');
		$('#q9').fadeIn(300);
		return false;
		
	});
	
		$('#q9 #submit').click(function(){
		$('.questionForm').hide();
		process('q9');
		$('#q10').fadeIn(300);
		return false;
		
	});
	
		$('#q10 #submit').click(function(){
		$('.questionForm').hide();
		process('q10');
		$('#q11').fadeIn(300);
		return false;
		
	});	$('#q11 #submit').click(function(){
		$('.questionForm').hide();
		process('q11');
		$('#q12').fadeIn(300);
		return false;
		
	});
	$('#q12 #submit').click(function(){
		$('.questionForm').hide();
		process('q12');
		$('#q13').fadeIn(300);
		return false;
		
	});
	$('#q13 #submit').click(function(){
		$('.questionForm').hide();
		process('q13');
		$('#q14').fadeIn(300);
		return false;
		
	});
	$('#q14 #submit').click(function(){
		$('.questionForm').hide();
		process('q14');
		$('#q15').fadeIn(300);
		return false;
		
	});	
	$('#q15 #submit').click(function(){
		$('.questionForm').hide();
		process('q15');
		$('#q16').fadeIn(300);
		return false;
		
	});	
	$('#q16 #submit').click(function(){
		$('.questionForm').hide();
		process('q16');
		$('#q17').fadeIn(300);
		return false;
		
	});
	
	$('#q17 #submit').click(function(){
		$('.questionForm').hide();
		process('q17');
		$('#q18').fadeIn(300);
		return false;
		
	});
		$('#q18 #submit').click(function(){
		$('.questionForm').hide();
		process('q18');
		$('#q19').fadeIn(300);
		return false;
		
	});
	
	$('#q19 #submit').click(function(){
		$('.questionForm').hide();
		process('q19');
		$('#q20').fadeIn(300);
		return false;
		
	});
		$('#q20 #submit').click(function(){
		$('.questionForm').hide();
		process('q20');
		$('#q21').fadeIn(300);
		return false;
		
	});
		$('#q21 #submit').click(function(){
		$('.questionForm').hide();
		process('q21');
		$('#q22').fadeIn(300);
		return false;
		
	});
		$('#q22 #submit').click(function(){
		$('.questionForm').hide();
		process('q22');
		$('#q23').fadeIn(300);
		return false;
		
	});
	
	$('#q23 #submit').click(function(){
		$('.questionForm').hide();
		process('q23');
		$('#q24').fadeIn(300);
		return false;
		
	});
		$('#q24 #submit').click(function(){
		$('.questionForm').hide();
		process('q24');
		$('#q25').fadeIn(300);
		return false;
		
	});
	
	$('#q25 #submit').click(function(){
		$('.questionForm').hide();
		process('q25');
		$('#q26').fadeIn(300);
		return false;
		
	});
	
	$('#q26 #submit').click(function(){
		$('.questionForm').hide();
		process('q26');
		$('#q27').fadeIn(300);
		return false;
		
	});
		$('#q27 #submit').click(function(){
		$('.questionForm').hide();
		process('q27');
		$('#q28').fadeIn(300);
		return false;
		
	});
		$('#q28 #submit').click(function(){
		$('.questionForm').hide();
		process('q28');
		$('#q29').fadeIn(300);
		return false;
		
	});
		$('#q29 #submit').click(function(){
		$('.questionForm').hide();
		process('q29');
		$('#q30').fadeIn(300);
		return false;
		
	});
	
	$('#q30 #submit').click(function(){
		$('.questionForm').hide();
		process('q30');
		//$('#results').fadeIn(300);
		
		return false;
	})
});

//process the answers
function process(q){
	if (q == "q1"){
		var submitted = $('input[name=q1]:checked').val();
		if(submitted == sessionStorage.a1){
			score+=5;
	    }
		
	}
	if (q == "q2"){
		var submitted =  $('input[name=q2]:checked').val();
		if(submitted ==sessionStorage.a2){
			score+=5;
	   }

	}
	if (q == "q3"){
		var submitted =  $('input[name=q3]:checked').val();
		if(submitted ==sessionStorage.a3){
			score+=5;
	    } 
  		
	}
	if (q == "q4"){
		var submitted =  $('input[name=q4]:checked').val();
		if(submitted ==sessionStorage.a4){
			score+=5;
	    }
	
    }
	if (q == "q5"){
		var submitted =  $('input[name=q5]:checked').val();
		if(submitted ==sessionStorage.a5){
			score+=5;
	    }
		
	}		
	if (q == "q6"){
		var submitted =  $('input[name=q6]:checked').val();
		if(submitted ==sessionStorage.a6){
			score+=5;
     	}
	
	}

	if (q == "q7"){
		var submitted =  $('input[name=q7]:checked').val();
		if(submitted ==sessionStorage.a7){
			score+=5;
	    }
		
	}
	if (q == "q8"){
		var submitted =  $('input[name=q8]:checked').val();
		if(submitted ==sessionStorage.a8){
			score+=5;
     	}
		
	}
	if (q == "q9"){
		var submitted =  $('input[name=q9]:checked').val();
		if(submitted ==sessionStorage.a9){
			score+=5;
	    }
		
	}
	if (q == "q10"){
		var submitted =  $('input[name=q10]:checked').val();
		if(submitted ==sessionStorage.a10){
			score+=5;
	    }
		
	}
	if (q == "q11"){
		var submitted =  $('input[name=q11]:checked').val();
		if(submitted ==sessionStorage.a11){
			score+=5;
	    }
		
	}
	if (q == "q12"){
		var submitted =  $('input[name=q12]:checked').val();
		if(submitted ==sessionStorage.a12){
			score+=5;
	    }
		
	}
	if (q == "q13"){
		var submitted =  $('input[name=q13]:checked').val();
		if(submitted ==sessionStorage.a13){
			score+=5;
	    }
		
	}
	if (q == "q14"){
		var submitted =  $('input[name=q14]:checked').val();
		if(submitted ==sessionStorage.a14){
			score+=5;
	    }
		
	}
	if (q == "q15"){
		var submitted =  $('input[name=q15]:checked').val();
		if(submitted ==sessionStorage.a15){
			score+=5;
	    }
	
	}
	if (q == "q16"){
		var submitted =  $('input[name=q16]:checked').val();
		if(submitted ==sessionStorage.a16){
			score+=5;
	    }
		
	}
	if (q == "q17"){
		var submitted =  $('input[name=q17]:checked').val();
		if(submitted ==sessionStorage.a17){
			score+=5;
	    }
		
	}
	if (q == "q18"){
		var submitted =  $('input[name=q18]:checked').val();
		if(submitted ==sessionStorage.a18){
			score+=5;
	    }
		
	}
	if (q == "q19"){
		var submitted =  $('input[name=q19]:checked').val();
		if(submitted ==sessionStorage.a19){
			score+=5;
	    }
		
	}
	if (q == "q20"){
		var submitted =  $('input[name=q20]:checked').val();
		if(submitted ==sessionStorage.a20){
			score+=5;
	    }
		
	}
	if (q == "q21"){
		var submitted =  $('input[name=q21]:checked').val();
		if(submitted ==sessionStorage.a21){
			score+=5;
	    }
		
	}
	if (q == "q22"){
		var submitted =  $('input[name=q22]:checked').val();
		if(submitted ==sessionStorage.a22){
			score+=5;
	    }
		
	}
	if (q == "q23"){
		var submitted =  $('input[name=q23]:checked').val();
		if(submitted ==sessionStorage.a23){
			score+=5;
	    }
		
	}
	if (q == "q24"){
		var submitted =  $('input[name=q24]:checked').val();
		if(submitted ==sessionStorage.a24){
			score+=5;
	    }
		
	}
	if (q == "q25"){
		var submitted =  $('input[name=q25]:checked').val();
		if(submitted ==sessionStorage.a25){
			score+=5;
	    }
		
	}
	if (q == "q26"){
		var submitted =  $('input[name=q26]:checked').val();
		if(submitted ==sessionStorage.a26){
			score+=5;
	    }
		
	}
	if (q == "q27"){
		var submitted =  $('input[name=q27]:checked').val();
		if(submitted ==sessionStorage.a27){
			score+=5;
	    }
		
	}
	if (q == "q28"){
		var submitted =  $('input[name=q28]:checked').val();
		if(submitted ==sessionStorage.a28){
			score+=5;
	    }
	
	}
	if (q == "q29"){
		var submitted =  $('input[name=q29]:checked').val();
		if(submitted ==sessionStorage.a29){
			score+=5;
	    }
	
	}
	if (q == "q30"){
		var submitted =  $('input[name=q30]:checked').val();
		if(submitted ==sessionStorage.a30){
			score+=5;
	    }
			
		stop2(seconds);
		return false;
	}
	
	return false;

	
}
//Add event listener
window.addEventListener('load',init,false);

