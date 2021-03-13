const form = document.getElementById('form');
const Name = document.getElementById('Name');
const email = document.getElementById('email');
const date = document.getElementById('date');
const number = document.getElementById('number');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    checkinputs();
})


function checkinputs(){
    const namevalue = Name.value.trim();
    const emailvalue = email.value.trim();
    const datevalue = date.value.trim();
    const numbervalue = number.value.trim();
    if(namevalue === ''){
      
    setErrorFor(Name,'Name cannot be blank');
    }else{
    setSuccessFor(Name);
    }
    if(emailvalue === ''){
      
        setErrorFor(email,'email cannot be blank');
        }else{
        setSuccessFor(email);
    }
    if(datevalue === ''){
      
        setErrorFor(date,'You must pick a Date For your Reservation');
        }else{
        setSuccessFor(date);
    }
    if(numbervalue=== ''){
      
        setErrorFor(number,'you need to pick a number');
        }else{
        setSuccessFor(number);
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
	const small = formControl.querySelector('small');
    formControl.className = 'form-control Error';
    small.innerText = message;
}
function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control sucsses';
}