let today=new Date();
let currentMonth=today.getMonth();
let currentYear=today.getFullYear();
let months=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
showCalender(currentMonth,currentYear);
let monthandyear=document.getElementById('monthandyear');
function showCalender(month,year)
{
	let firstDay=new Date(year,month).getDay()
	let daysInMonth=32-newDate(year,month,32).getDate();
	let thl=document.getElementById('calender.body');
	tbl.innerHTMl="";

	monthandyear.innerHTMl=months(month)+""+year;
	let date=1;
	for(let i=0;i<6;i++)
	{
		let row=document.createElement('tr')
		for(let j=0;j<7;j++)
		{
			if(i === 0 && j<firstDay)
			{ 
				let cell=document.createElement('td')
				let cellText=document.createTextNode('');
				cell.appendChild(cellText);
				row.appendChild(cell);
			}
			elseif(date>daysInMonth)
			{
				break;
			}
			else
			{    
				let cell=document.createElement('td');
				let cellText=document.createTextNode(date);
				cell.appendChild(cellText);
				row.appendChild(cell);
			}
			date++;
		}
		tbl.appendChild(row);
	}
}