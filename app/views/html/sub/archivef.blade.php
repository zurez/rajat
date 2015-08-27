
<!-- saved from url=(0022)http://internet.e-mail -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ATC Labs Flash Player</title>
<style>
a.style1:link {color:#FFF;text-decoration: none; font-family:Verdana, Geneva, sans-serif; font-size:12px;}
a.style1:visited {color:#FFF;text-decoration: none; font-family:Verdana, Geneva, sans-serif; font-size:12px;}
a.style1:active {color:#FFF;text-decoration: none; font-family:Verdana, Geneva, sans-serif; font-size:12px;}
a.style1:hover {color:#CCC;text-decoration: none; font-family:Verdana, Geneva, sans-serif; font-size:12px;}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script language="javascript" >

var isArchive = 0;

var streamOne = "http://ducr1.du.ac.in:8000/DUStream1.aac";
var streamTwo = "";
var mp3StreamOne = "http://ducr1.du.ac.in:8000/DUStream1.mp3";
var mp3StreamTwo = "";

var isFlashSupported = 0;
var volumeGlobal = 50;
var isPaused = false;
var isMute = 1;
var previousState = 0;
var html5Timer;
var html5Timer2;

//select for type of player to use based on the OS
function testFlash()
{
	if((navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Dalvik/i)) || (navigator.userAgent.match(/GINGERBREAD/i)) ||(		        navigator.userAgent.match(/Linux;.*Mobile Safari/i)) || (navigator.userAgent.match(/Linux 1\..*AppleWebKit/i))) 
		{
			isFlashSupported = 0;
			document.getElementById("flash").style.visibility = 'hidden';
			document.getElementById("animate").style.visibility = 'visible';
			var temp = streamOne;
			streamOne = mp3StreamOne;
			mp3StreamOne = temp;
			temp = streamTwo;
			streamTwo = mp3StreamTwo;
			mp3StreamTwo = temp;
		}
		
		else if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))  || (navigator.userAgent.match(/iPad/i)) || (	        navigator.userAgent.match(/iemobile/i)))
		{
			isFlashSupported = 0;
			document.getElementById("flash").style.visibility = 'hidden';
			document.getElementById("animate").style.visibility = 'visible';
		}
			
		else
		{
			//loadFlash();
			isFlashSupported = 1;
			document.getElementById("radio").style.visibility = 'hidden';
			document.getElementById("animate").style.visibility = 'hidden';
			
			if(swfobject.hasFlashPlayerVersion("1"))
			{
				document.getElementById("flash").style.visibility = 'hidden';
			}
		}
		
	document.getElementById("radio").style.visibility = 'hidden';
}
//

function showDiv(pass) 
{ 
	var divs = document.getElementsByTagName('div'); 
	for(i=0;i<divs.length;i++)
	{ 
		if(divs[i].id.match(pass))
		{//if they are 'see' divs 
			if(document.getElementById) // DOM3 = IE5, NS6 
			{
				divs[i].style.visibility="visible";// show/hide 
			}
			else if (document.layers) // Netscape 4 
			{
				document.layers[divs[i]].display = 'visible'; 
			}
			else // IE 4 
			{
				document.all.divs[i].visibility = 'visible'; 
			}
		} 
	} 
}

function hideDiv(pass) 
{ 
	var divs = document.getElementsByTagName('div'); 
	for(i=0;i<divs.length;i++)
	{ 
		if(divs[i].id.match(pass))
		{//if they are 'see' divs 
			if(document.getElementById) // DOM3 = IE5, NS6 
			{
				divs[i].style.visibility='hidden';// show/hide 
			}
			else if (document.layers) // Netscape 4 
			{
				document.layers[divs[i]].display = 'hidden'; 
			}
			else // IE 4 
			{
				document.all.divs[i].visibility = 'hidden'; 
			}
		} 
	} 
}

var stream = "";
var stream2 = "";
var selectedArchive = "";

function selectStream(num)
{
	if(isArchive == 0)
	{
		stream = streamOne;
		//document.getElementById('radioSelect').innerHTML = "DU Community Radio";
		document.getElementById("nowPlaying").innerHTML = "Now Playing DU Community Radio";
		stream2 = mp3StreamOne;
	}
	
	if(num != '0' && isArchive == 1)
	{
		selectedArchive = num;
		var split1 = selectedArchive.split('/');
		var range = split1.length;
		var split2 = (split1[range-1]).split('.');
		document.getElementById("nowPlaying").innerHTML = "Now Playing DU " + split2[0];
	}
}

function setUnpause()
{
	isPaused = false;
}

function play(num)
{	
	try
	{
		if(num == '0')
		{
			if(isArchive == 1)
			{
				stopStream();
			}
		}
	
		if(document.getElementById('playBtn').value == "pause")
		{
			pauseStream();
			return;
		}
		
		if(isPaused)
		{
			if(isArchive == 0)
			{	
				if(isFlashSupported == 1) //flash
				{
					document.getElementById("flash").setRadioVolume(volumeGlobal);
				}
		
				else //html5
				{
					document.getElementById("aud").play();
					//document.getElementById("animate").style.visibility = 'visible';
				}
			}
	
			//play archive
			else
			{
				document.getElementById("archivePlayer").play();
			}
		
			isPaused = false;
			//document.getElementById("pauseBtn").style.visibility = 'visible';
			document.getElementById("playBtn").value = "pause";
			document.getElementById("playBtn").src = "Images/pausebutton.png";
			document.getElementById("radioSelect").style.visibility = 'hidden';
			document.getElementById("nowPlaying").style.visibility = 'visible';
			return;
		}
	
		selectStream(num);
	
		if(isArchive == 0)
		{
			if(isFlashSupported == 1) //flash
			{
				try
				{
				document.getElementById("flash").playRadio(stream);
				document.getElementById("flash").setRadioVolume(volumeGlobal);
				}
				catch(e) {alert(e);}
			}
	
			else //html5
			{
				document.getElementById("aud").src = stream;
				var audio = document.getElementById("aud");
				audio.load();

				var s = audio.getElementsByTagName("source");
				s[0].src = stream;
				s[1].src = stream2;

				//animation handler
				audio.addEventListener("progress",progress);
				audio.addEventListener("stalled",stalled);
				audio.addEventListener("suspend",suspend);
				audio.addEventListener("error",error);
				audio.addEventListener("durationchange",durationchange);
				//audio.addEventListener("play",play2);
				//audio.addEventListener("playing",playing);
				audio.addEventListener("timeupdate",loadeddata);
				html5Timer = window.setInterval(timerEventHandler, 30);
				document.getElementById("aud").play();
				document.getElementById("aud").volume = volumeGlobal/100;
				previousState = 0;
			}
			//document.getElementById("pauseBtn").style.visibility = 'visible';
			document.getElementById("playBtn").value = "pause";
			document.getElementById("playBtn").src = "img/pausebutton.png";
		}
	
		//play archive
		else
		{
			document.getElementById("archivePlayer").src = selectedArchive;
			document.getElementById("archivePlayer").load();	

			var s = document.getElementById("archivePlayer").getElementsByTagName("source");
			s[0].src = selectedArchive;
			
			document.getElementById("archivePlayer").play();
			document.getElementById("archivePlayer").volume = volumeGlobal/100;
		}
	
		document.getElementById("radioSelect").style.visibility = 'hidden';
		document.getElementById("nowPlaying").style.visibility = 'visible';
	
		if(isMute == 0)
		{
			document.getElementById("speakerBtn").src = "img/speakerIcon.png";
			isMute = 1;
		}
	}
	
	catch(e)
	{
		//alert(e);
	}
}

function pauseStream()
{
	if(isArchive == 0)
	{
		if(isFlashSupported == 1) //flash
		{
			document.getElementById("flash").setRadioVolume(0);
		}
	
		else //html5
		{
			document.getElementById("aud").pause();
		}
	}
	
	//pause archive
	else
	{
		//document.getElementById("archivePlayer").pause();
	}
	
	isPaused = true;
	//document.getElementById("pauseBtn").style.visibility = 'hidden';
	document.getElementById("playBtn").value = "play";
	document.getElementById("playBtn").src = "img/playbutton.png";
	document.getElementById("radioSelect").style.visibility = 'visible';
	document.getElementById("nowPlaying").style.visibility = 'hidden';
}

function muteUnmute(btn)
{
	try
	{
		if(isMute == 1)
		{
			if(isArchive == 0)
			{
				if(isFlashSupported == 1) //flash
				{
					document.getElementById("flash").setRadioVolume(0);
				}
		
				else //html5
				{
					document.getElementById("aud").pause();
				}
			}
		
			//archive
			else
			{
				document.getElementById("archivePlayer").pause();
			}
	
			btn.src = "Images/speakerMuteIcon.png";
			isMute = 0;
		}
	
		else
		{
			if(isArchive == 0)
			{
				if(isFlashSupported == 1) //flash
				{
					document.getElementById("flash").setRadioVolume(volumeGlobal);
				}
		
				else //html5
				{
					document.getElementById("aud").play();			
				}
			}
		
			//archive
			else
			{
				document.getElementById("archivePlayer").play();
			}
		
			btn.src = "Images/speakerIcon.png";
			isMute = 1;
		}
	}
	
	catch(e)
	{
		//alert(e);
	}
}

function stopArchive()
{
	isArchive = 0;
	
	var table = document.getElementById('showArchiveTable');

    for(var i=0; i < table.rows.length; i++)
	{
        var btn  = table.rows[i].cells[1].firstChild;
		btn.src = "Images/playArchive.png";
		btn.value = "play";
    }
}

function stopStream()
{
	if(isArchive == 0)
	{
		if(isFlashSupported == 1) //flash
		{
			document.getElementById("flash").stopRadio();
		}
	
		else //html5
		{
			try
			{
				document.getElementById("aud").pause();
			}
				
			catch(e)
			{
				//alert(e);
			}
		window.clearInterval(html5Timer);
		window.clearInterval(html5Timer2);
		}
		
		document.getElementById("playBtn").value = "play";
		document.getElementById("playBtn").src = "Images/playbutton.png";

	}
	
	//archive
	else
	{
		try
		{
			document.getElementById("archivePlayer").pause();	
			stopArchive();
		}
		
		catch(e)
		{
			alert(e);
		}
	}
	
	//document.getElementById("pauseBtn").style.visibility = 'hidden';
	document.getElementById("radioSelect").style.visibility = 'visible';
	document.getElementById("nowPlaying").style.visibility = 'hidden';
	document.getElementById("animate").innerHTML = '';
}

function drawvolumecontroller(length,height,nowselected)
{	
	document.getElementById("volumcontroller").innerHTML = "";
	for (i=0;i<length;i++){
		magassag = 7 + Math.round((1.4)*(length - i)); //where 40 is the container height
		margintop = height-magassag;
		if (margintop <= 0) {margintop=0;}
		if (i >= nowselected)
		{		//background-color valtozik ameddig epp ki van jelolve
			document.getElementById("volumcontroller").innerHTML = document.getElementById("volumcontroller").innerHTML+'<div  	  			onmouseup="volumecontrolchanged('+i+')" style="left:600px; background-color:#0a369e;height:'+magassag+'px;margin-top:'+margintop+'px;" class="volumecontrollerbar"></div>';
		} 
		else
		{
			document.getElementById("volumcontroller").innerHTML = document.getElementById("volumcontroller").innerHTML+'<div  onmouseup="volumecontrolchanged('+i+')" style="left:600px; height:'+magassag+'px;margin-top:'+margintop+'px;" class="volumecontrollerbar"></div>';
		}		
	}	
}

function volumecontrolchanged(newvolume)
{
	try
	{
		drawvolumecontroller(20,35,newvolume);
		var volume2 = ((20 - newvolume) * 10)/2;
		var volume = document.getElementById("volume");
		volume.value = ((20 - newvolume) * 10)/2;
		volumeGlobal = 	volume2;
	
		if(isArchive == 0)
		{
			if(isFlashSupported == 1)
			{
				document.getElementById("flash").setRadioVolume(volume2);
			}
	
			else 
			{
				document.getElementById("aud").volume = volume2/100;
			}
		}

		else
		{
			document.getElementById("archivePlayer").volume = volume2/100;
		}
	}

	catch(e)
	{
		//alert(e);
	}
}

function startOrStopArchive(num, btn)
{
	if(btn.value == "play")
	{
		stopStream();
		isArchive = 1; 
		btn.src = "Images/stopArchive.png";
		btn.value = "stop";
		play (num);
	}
	
	else
	{
		isArchive = 1; 
		btn.src = "Images/playArchive.png";
		btn.value = "play";
		stopStream();
	}
}

function loadXMLDoc(filename)
{
	if (window.XMLHttpRequest)
  	{
  		xhttp=new XMLHttpRequest();
 	}
	else // code for IE5 and IE6
  	{
 		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	
	xhttp.open("GET",filename,false);
	xhttp.send();
	return xhttp.responseXML;
}

function fetchXML() 
{
	try
	{
		var xmlDoc=loadXMLDoc("archive.xml");
		var x=xmlDoc.getElementsByTagName("location");
		var archiveArea = document.getElementById('archives');
		var table = document.createElement('table');
		var tr_header = document.createElement('tr');
		var td1_header = document.createElement('td');
	    var td2_header = document.createElement('td');
		var td3_header = document.createElement('td');
		var td4_header = document.createElement('td');
		td1_header.innerHTML = "Path";
		td2_header.innerHTML = "Play";
		td3_header.innerHTML = "Date";
		td4_header.innerHTML = "Name";
		tr_header.appendChild(td1_header);
		tr_header.appendChild(td2_header);
		tr_header.appendChild(td3_header);
		tr_header.appendChild(td4_header);
		table.appendChild(tr_header);
		
		for (i=0;i<x.length;i++)
  		{
 		 	// Process only element nodes (type 1)
 			if (x[i].nodeType==1)
   		 	{
   				var tr = document.createElement('tr');
   				var td1 = document.createElement('td');
	    		var td2 = document.createElement('td');
				var td3 = document.createElement('td');
				var td4 = document.createElement('td');
				var pathLink = document.createElement('a');
				var node1 = x[i].getElementsByTagName("path")[0].childNodes[0].nodeValue;
				var node2 = x[i].getElementsByTagName("date")[0].childNodes[0].nodeValue;
				var node3 = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
				var split1 = node1 .split('/');
				var range = split1.length;
				var split2 = (split1[range-1]).split('.');
	    		var text1 = document.createTextNode(split2[0]);
				var text2 = document.createTextNode(node2);
				var text3 = document.createTextNode(node1);
				var buttonnode= document.createElement('input');
				buttonnode.setAttribute('type','image');
				buttonnode.setAttribute('src',"Images/playArchive.png");
				buttonnode.setAttribute('name',x[i].getElementsByTagName("path")[0].childNodes[0].nodeValue);
				buttonnode.setAttribute('value','play');
				buttonnode.onclick = function() { startOrStopArchive(this.name, this); };
				pathLink.setAttribute('href', node1);
				pathLink.innerHTML = split2[0];
   				td1.appendChild(text1);
				td2.appendChild(buttonnode);
	    		td3.appendChild(text2);
				td4.appendChild(pathLink);
				tr.appendChild(td1);
	    		tr.appendChild(td2);
				tr.appendChild(td3);
				tr.appendChild(td4);
	    		table.appendChild(tr);
				table.id = "showArchiveTable";
    	 	}
		}
		
		archiveArea.appendChild(table);
	}
	
	catch(e) 
	{
		alert(e);
	}
}

function zo()
{
	var screenPhone = 760;
	if(screen.width >= 1024)
	{	
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border = "0px black solid;";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "8px";
		document.getElementById("controls").style.left = "8px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px black solid";
		document.getElementById("controls").style.padding = "8px;";
		
		document.getElementById("playerBg").style.width = "400px";
		document.getElementById("playerBg").style.height = "100px;";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";	
		
		document.getElementById("radioSelect").style.width = "auto";
		document.getElementById("radioSelect").style.height = "auto";	
		
		document.getElementById("archiveContainer").style.top = "70px";
		document.getElementById("archiveContainer").style.left = "4px";
		
		document.getElementById("archives").style.overflowX = "auto";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "400px";
		document.getElementById("archives").style.height = "600px";
	}
	
	else if((screen.width >= 768) && (screen.width <= 1024))
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border = "0px red solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "12px";
		document.getElementById("controls").style.left = "12px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px red solid";
		document.getElementById("controls").style.padding = "20px";
		
		document.getElementById("playerBg").style.width = "300px";
		document.getElementById("playerBg").style.height = "100px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = "auto";
		document.getElementById("radioSelect").style.height = "auto";
		
		document.getElementById("archiveContainer").style.top = "0px";
		document.getElementById("archiveContainer").style.left = "550px";
		
		document.getElementById("archives").style.overflowX = "auto";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "400px";
		document.getElementById("archives").style.height = "600px";
	}
	
	else if((screen.width <= 480) &&(screen.width > screen.height) /*&& (-webkit-min-device-pixel-ratio == 2)*/)
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border = "0px blue solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "8px";
		document.getElementById("controls").style.left = "8px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px blue solid";
		//document.getElementById("controls").style.padding = "20px";
		
		document.getElementById("playerBg").style.width = ((screen.width * 63)/100) + "px";
		document.getElementById("playerBg").style.height = ((screen.width * 17)/100) + "px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = ((screen.width * 23)/100) + "px";
		document.getElementById("radioSelect").style.height = "auto";
		
		var y = document.getElementById("playerBg").style.height;
		y = y - 30;
		//document.getElementById("animate").style.top = y + "px";
		
		document.getElementById("archiveContainer").style.top = "100px";
		document.getElementById("archiveContainer").style.left = "0px";
		
		document.getElementById("archives").style.overflowX = "hidden";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "auto";
		document.getElementById("archives").style.height = "auto";
	}
	
	else if((screen.width <= 480) && (screen.width < screen.height/*orientation == portrait*/))
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border = "0px gray solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "9px";
		document.getElementById("controls").style.left = "9px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px gray solid";
		
		document.getElementById("playerBg").style.width = ((screen.width * 63)/100) + "px";
		document.getElementById("playerBg").style.height = ((screen.width * 17)/100) + "px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = ((screen.width * 23)/100) + "px";
		document.getElementById("radioSelect").style.height = "auto";
				
		var y = document.getElementById("playerBg").style.height;
		y = y - 30;
		//document.getElementById("animate").style.top = y + "px";
		
		document.getElementById("archiveContainer").style.top = "100px";
		document.getElementById("archiveContainer").style.left = "0px";
		
		document.getElementById("archives").style.overflowX = "hidden";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "auto";
		document.getElementById("archives").style.height = "auto";
	}
	
	else if(screen.width <= 640 && (screen.width < screen.height /*potrait*/))
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border = "0px green solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "15px";
		document.getElementById("controls").style.left = "15px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px green solid";
		//document.getElementById("controls").style.padding = "20px";
		
		document.getElementById("playerBg").style.width = ((screen.width * 63)/100) + "px";
		document.getElementById("playerBg").style.height = ((screen.width * 17)/100) + "px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = ((screen.width * 23)/100) + "px";
		document.getElementById("radioSelect").style.height = "auto";
		
		var y = document.getElementById("playerBg").style.height;
		y = y - 30;
		//document.getElementById("animate").style.top = y + "px";
		
		document.getElementById("archiveContainer").style.top = "100px";
		document.getElementById("archiveContainer").style.left = "0px";
		
		document.getElementById("archives").style.overflowX = "hidden";
		document.getElementById("archives").style.overflowY = "hidden";	
		document.getElementById("archives").style.width = "auto";
		document.getElementById("archives").style.height = "auto";	
	}
	
	else if((screen.width <= 640) && (screen.width > screen.height/*orientation == landscape*/))
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border =  "0px yellow solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "5px";
		document.getElementById("controls").style.left = "5px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px yellow solid";
		//document.getElementById("controls").style.padding = "20px";
		
		document.getElementById("playerBg").style.width = ((screen.width * 63)/100) + "px";
		document.getElementById("playerBg").style.height = (((screen.width * 17)/100) + 17) + "px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = ((screen.width * 23)/100) + "px";
		document.getElementById("radioSelect").style.height = "auto";
				
		document.getElementById("archiveContainer").style.top = "100px";
		document.getElementById("archiveContainer").style.left = "0px";
		
		document.getElementById("archives").style.overflowX = "hidden";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "auto";
		document.getElementById("archives").style.height = "auto";
	}
	
	else
	{
		document.getElementById("player").style.position = "absolute";
		document.getElementById("player").style.top = "0px";
		document.getElementById("player").style.left = "0px";
		document.getElementById("player").style.height = "auto";
		document.getElementById("player").style.width = "auto";
		document.getElementById("player").style.border =  "0px yellow solid";
		
		document.getElementById("controls").style.position = "absolute";
		document.getElementById("controls").style.top = "5px";
		document.getElementById("controls").style.left = "5px";
		document.getElementById("controls").style.height = "auto";
		document.getElementById("controls").style.width = "auto";
		document.getElementById("controls").style.border = "0px yellow solid";
		//document.getElementById("controls").style.padding = "20px";
		
		document.getElementById("playerBg").style.width = ((screen.width * 43)/100) + "px";
		document.getElementById("playerBg").style.height = (((screen.width * 10)/100) + 10) + "px";
		
		document.getElementById("playBtn").style.width = "auto";
		document.getElementById("playBtn").style.height = "auto";
		
		document.getElementById("stopBtn").style.width = "auto";
		document.getElementById("stopBtn").style.height = "auto";
		
		document.getElementById("logo").style.width = "auto";
		document.getElementById("logo").style.height = "auto";
		
		document.getElementById("radioSelect").style.width = ((screen.width * 14)/100) + "px";
		document.getElementById("radioSelect").style.height = "auto";
		
		document.getElementById("archiveContainer").style.top = "100px";
		document.getElementById("archiveContainer").style.left = "0px";
		
		document.getElementById("archives").style.overflowX = "hidden";
		document.getElementById("archives").style.overflowY = "hidden";
		document.getElementById("archives").style.width = "auto";
		document.getElementById("archives").style.height = "auto";
	}
	
	if(screen.width < screenPhone)
	{		
		document.getElementById("speakerBtn").style.visibility = 'hidden';
		document.getElementById("volumcontroller").style.visibility = 'hidden';
	}
	
	else
	{
		drawvolumecontroller(20,35,10);
	}
	
	testFlash();
	loadFlash();
}

function loadFlash()
{
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))  || (navigator.userAgent.match(/iPad/i)) || (	        	navigator.userAgent.match(/iemobile/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Dalvik/i)) || (navigator.userAgent.match(/GINGERBREAD/i)) ||(navigator.userAgent.match(/Linux;.*Mobile Safari/i)) || (navigator.userAgent.match(/Linux 1\..*AppleWebKit/i)))
	{
		return;
	}
		
	var flashvars = {};
	var params = {wmode:"transparent"};
	var attributes = {};
	attributes.id = "flash";
	swfobject.embedSWF("invisiblePlayer_animated.swf", "flash", "120", "20", "9.0.0", false, flashvars, params, attributes);
}
			
//show html5 animation start
function timerEventHandler() 
{	
	//network state
	var d = document.getElementById("animate");
	audio = document.getElementById('aud');
	var sh = audio.networkState;
	
	if(sh == 0)
	{
		d.innerHTML = /*"NETWORK_EMPTY"*/ "LOADING";	
	}
	
	else if(sh == 1)
	{
		d.innerHTML = /*"NETWORK_IDLE"*/ "LOADING";	
	}
	
	else if(sh == 2)
	{
		d.innerHTML = /*"NETWORK_LOADING"*/ "LOADING";	
	}
	
	else if(sh == 3)
	{
		d.innerHTML = /*"NETWORK_NO_SOURCE"*/ "ERROR";	
		//updateProgress();
	}
}

function progress() 
{
	//onprogress
	var d = document.getElementById("animate");
	audio = document.getElementById('aud');
	//alert("in progress");
	
	if(audio.networkState != 2)
	{
		d.innerHTML = /*"TRYING"*/ "LOADING";
		return;
	}
		
    window.clearInterval(html5Timer);
	window.clearInterval(html5Timer2);
	var i = audio.currentTime;
	
	//var diff = i - previousState;
	
	if((Math.abs(i - previousState) < 0.000001))
	{
		if(audio.paused)
		{
			if(!isMute)
			{
				d.innerHTML = "MUTED";
			}
			else
			{
				d.innerHTML = "PAUSED";
			}
		}
		
		else
		{
			d.innerHTML = "LOADING";
		}
	}
	
	else
	{
		if(audio.paused)
		{
			if(!isMute)
			{
				d.innerHTML = "MUTED";
			}
			else
			{
				d.innerHTML = "PAUSED";
			}
		}
		else
		{
			d.innerHTML = "PLAYING";
		}
	}
	
	previousState = i;
}

function progress2() 
{
	//alert("in prgress 2");
	//onprogress
	var d = document.getElementById("animate");
	audio = document.getElementById('aud');
	
	d.innerHTML = audio.played.length();
	return;
	
	/*if(audio.networkState != 2)
	{
		d.innerHTML = "TRYING";
		return;
	}*/
		
    window.clearInterval(html5Timer);
	var i = audio.currentTime;
		
	if((Math.abs(i - previousState) < 0.000001))
	{
		if(audio.paused)
		{
			if(!isMute)
			{
				d.innerHTML = "MUTED";
			}
			else
			{
				d.innerHTML = "PAUSED";
			}
		}
		
		else
		{
			d.innerHTML = "PLAYING";
		}
	}
	
	else
	{
		if(audio.paused)
		{
			if(!isMute)
			{
				d.innerHTML = "MUTED";
			}
			else
			{
				d.innerHTML = "PAUSED";
			}
		}
		else
		{
			d.innerHTML = "LOADING";
		}
	}	
	previousState = i;
}

function stalled()
{
	document.getElementById("animate").innerHTML = /*"STALLED"*/ "LOADING";
}

function suspend()
{
	document.getElementById("animate").innerHTML = /*"SUSPENDED"*/ "LOADING";
}

function error()
{
	document.getElementById("animate").innerHTML = /*document.getElementById("aud").error.code*/ "LOADING";
}

function durationchange()
{
	document.getElementById("animate").innerHTML = /*"change"*/ "LOADING";
	//html5Timer2 = window.setInterval(progress2, 3);
}

function play2()
{
	//alert("playing");;
}

function playing()
{
	//alert("playing playing");;
}

function loadeddata()
{
	//document.getElementById("animate").innerHTML = "loaded";
}

//html5 animation end
</script>
</head>

<body bgcolor="" onload="zo(); fetchXML();" style="overflow:hidden; background:none;">
<div id="" style="position:absolute; left:130px; top:40px; background-color: none; z-index: 26">
<div id="flash" style="background: none; border:none; z-index:26;">
<a href="http://www.adobe.com/go/getflashplayer">
	<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
</a>
</div>
</div>
        
<div id="player">
<img id="playerBg" src="Images/radioBg.png" style="z-index: 1;"/>
</div>
<div id="controls"  style="z-index: 2;">
<table>
<tr>
<td>
<input type="image" src="Images/playbutton.png" style="width:50px; height:50px" id="playBtn" onClick="play('0');" value="play"/>
</td>
<td>
<input type="image" src="Images/stopbutton.png" style="width:50px; height:50px" id="stopBtn" onClick="stopStream();"/>
</td>
<td>
<img id="logo" src="Images/logo.png" />
</td>
<td>
<center><div id="radioSelect" readonly="readonly" style="background:none; border:none; font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; color:#03C; z-index:1;">DU Community Radio</div></center>
</td>
<td>
<div style="z-index:29; left:0px; top:0px;" onMouseOver="showDiv('volumeDisplay')" onMouseOut="hideDiv('volumeDisplay')">
<div id="volumcontroller" style="z-index:1; left:0px; top:0px;"">
</div>
</div>
</td>
<td>
<input type="image" src="Images/speakerIcon.png" style="width:50px; height:50px" id="speakerBtn" onClick="muteUnmute(this);"/>
</td>
</tr>
</table>
<div id="animate" style="position:absolute; left:10px; top:auto; z-index:26; width:auto; height:auto; background:none; border:none; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#03C;" align="left">
</div>
</div>

<div id="bv_" style="position:absolute; left:134px; top:22px; z-index:28; width: 105px;" align="left"> 
<marquee id="nowPlaying" style="z-index:28; background:none; border:none; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#03C;"> </marquee>
</div>

<div id="volumeDisplay" style="position:absolute; left:266px; top:10px; width:50px; height:20px; z-index:27; visibility:hidden;" align="left">
   <input type="text" id="volume" value="50" style="background:none; border:none; width:20px; height:20px; font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#03C; text-align:right;"/>
   <input type="text" value="%" style="background:none; border:none; width:10px; height:20px; font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#03C; text-align:left; "/>
</div>
 
<div id="radio" style="position:absolute; z-index:26; visibility:hidden;" align="left">
    <audio id="aud" style="visibility='hidden';" controls>
    <source src = ""></source>
    <source src = ""></source>
  </audio>
</div>

<div id="archivePlayerDiv" style="position:absolute; z-index:26; visibility:hidden;" align="left">
    <audio id="archivePlayer" style="visibility='hidden';" controls>
    <source src = ""></source>
  </audio>
</div>
<div id="archiveContainer" style="position:absolute;; z-index:26;" class='grid_12'>
<div style="background:none; border:none; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#03C;"> Gyanodaya - V </div>
<div id="archives" style="z-index:26;">
</div>
</div>
</body>
</html>
p