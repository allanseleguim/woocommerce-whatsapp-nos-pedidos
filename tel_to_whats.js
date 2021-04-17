function changeTeltoWhats(number) 
	{
      		console.log("cLicou");
      
			var linkElement = document.querySelector(".clientwhats");
			var number = linkElement.text;
			var res = number.replace(/\D/g, "");
			var finalnumber = "https://wa.me/" + "+55" + res;
			linkElement.setAttribute("href", finalnumber);
      }