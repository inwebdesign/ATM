let input = document.querySelector('#unos');
let button = document.querySelector('#btn');
let fld = document.querySelectorAll('.field');
let showAvailabeMoney = document.querySelector('#my-money');
// raspolozive novcanice
let money = [200,500,1000,2000,5000,10000];

// stanje na racunu 
let me = {
	username: 'Nenad',
	account: 8000,
	card: 'Master'
}

// picking money by entering ammount into input field //

button.addEventListener('click', catchingMoney);

function catchingMoney(){

	let val =  parseInt(input.value);
	me.account -= val;

}

addMoney();
// dodavanje apoena poljima
function addMoney(){
	for(let i = 0; i < 6; i++){
		fld[i].innerHTML = money[i];
	}
}
// podizanje novca
//dugme.addEventListener('click', pickUpMoney);
pickUpMoney();
function pickUpMoney(){
for(let z = 0; z < money.length; z++){
	fld[z].addEventListener('click', checkAcc);
	}
}

function checkAcc(){
	let fieldValue = parseInt(this.innerHTML);
	if(me.account < fieldValue){
		warningMsg();
		return;
	}else{
		money.forEach(function(e,i){
		if(fieldValue === money[i]){
		me.account -= fieldValue;
		} 
	})
	}
	}

function warningMsg(){
	alert(`You don't have enoough ammounts`);
	restOfMoney();
}

showAvailabeMoney.addEventListener('click', restOfMoney);
// pregled stanja na racunu
function restOfMoney(){
	alert(`Available ammounts on your account is: ${me.account} RSD. \n Do you wish another operation?`)
	input.value = "";

}