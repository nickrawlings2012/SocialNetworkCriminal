

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}


// Open the lightbox


function openbox(formtitle, fadin)
{
  var box = document.getElementById('box'); 
  document.getElementById('shadowing').style.display='block';

  var btitle = document.getElementById('boxtitle');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box", 0);
	 fadein("box");
  }
  else
  { 	
    box.style.display='block';
  }  	
}


// Close the lightbox

function closebox()
{
   document.getElementById('box').style.display='none';
   document.getElementById('shadowing').style.display='none';
}




function openbox2(formtitle, fadin)
{
  var box = document.getElementById('box2'); 
  document.getElementById('shadowing2').style.display='block';

  var btitle = document.getElementById('boxtitle2');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box2", 0);
	 fadein("box2");
  }
  else
  { 	
    box.style.display='block';
  }  	
}


// Close the lightbox

function closebox2()
{
   document.getElementById('box2').style.display='none';
   document.getElementById('shadowing2').style.display='none';
}

function closebox3()
{
   document.getElementById('box3').style.display='none';
   document.getElementById('shadowing3').style.display='none';
}


function closebox4()
{
   document.getElementById('box4').style.display='none';
   
}


function closebox5()
{
   document.getElementById('box5').style.display='none';
   document.getElementById('shadowing5').style.display='none';
}

function commonboxclos()
{
   document.getElementById('commonbox').style.display='none';
  
}

