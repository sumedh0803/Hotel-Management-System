var adults,children,days,totGuests,extraGuests,netTotal,gtotal,gst;
		var extracharge;
		function calcdays()
		{
			var indate = new Date(document.getElementById('in').value);
			var outdate = new Date(document.getElementById('out').value);
			days = document.getElementById('days');
			var totdays = parseInt((outdate - indate) / (24 * 3600 * 1000));
			days.value = totdays;
			var rate = parseInt(document.getElementById('rate').value);
			netTotal= (rate * totdays);
			document.getElementById("net").value = netTotal;

			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!

			var yyyy = today.getFullYear();
			if(dd<10){
   				 dd='0'+dd;
			} 
			if(mm<10){
    			mm='0'+mm;
			} 
			var today = dd+'/'+mm+'/'+yyyy;
			document.getElementById('in').min = today;



			calcbill();
		}
		function calcguest()
		{

			adults = parseInt(document.getElementById('adults').value);
			children = parseInt(document.getElementById('children').value);
			totGuests = adults + children;
			extraGuests = parseInt(totGuests - 2);
			extracharge = parseInt(document.getElementById('extracharge').value);
			var temp = extracharge * extraGuests;
			document.getElementById("tot_guests").value = totGuests;
			document.getElementById('guest_extra').value = temp;  
		}
		function calcbill()
		{
			gst = (netTotal + extracharge) * 18/100;
			document.getElementById('gst').value = gst;
			gtotal = netTotal + extracharge + gst;
			document.getElementById('gtotal').value = gtotal;
		}
		function addimage()
		{
			var image = document.getElementById('roompic');
			var category = document.getElementById('category').value;
			var elem = document.createElement("img");
			elem.setAttribute("src", "images/hydrangeas.jpg");
			switch(category)
			{
				case "Deluxe": elem.setAttribute("src","assets/deluxe.jpg"); break;
				case "Super Deluxe": elem.setAttribute("src","assets/superdeluxe.jpg"); break;
				case "Family Suite": elem.setAttribute("src","assets/familysuite.jpg"); break;
				case "Super Suite": elem.setAttribute("src","assets/supersuite.jpg"); break;
			}
			elem.setAttribute("width", "100%");
			elem.setAttribute("height", "100%");
			image.appendChild(elem);
		}
