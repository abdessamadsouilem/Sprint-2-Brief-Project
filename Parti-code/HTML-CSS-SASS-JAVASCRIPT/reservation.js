const form = document.getElementsByClassName('form');
const Name = document.getElementById('Name');
const email = document.getElementById('email');
const date = document.getElementById('date');
const number = document.getElementById('number');
const nameformat=/^[a-zA-Z]+$/;
const mailformat = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
function checkinputs(){
    const namevalue = Name.value.trim();
    const emailvalue = email.value.trim();
    const datevalue = date.value.trim();
    const numbervalue = number.value.trim();
    if(namevalue === ''){
      
    setErrorFor(Name,'Name cannot be blank');
    }else if(!namevalue.match(nameformat)){
        setErrorFor(Name,'not a valid format'); 
    }
    else{
    setSuccessFor(Name);
    }
    if(emailvalue===''){
      
        setErrorFor(email,'email cannot be blank');
        }else if(!emailvalue.match(mailformat) ){
            setErrorFor(email,'invalid format for email');
        }
        else{
        setSuccessFor(email);
    }
    
    if(datevalue === ''){
      
        setErrorFor(date,'You must pick a Date For your Reservation');
        }else{
        setSuccessFor(date);
    }
    if(numbervalue>20 ){
      
        setErrorFor(number,'number of person shold be between 1 and 20');
        }else if(numbervalue===''){
            setErrorFor(number,'you need to pick a number');
        }
        else{
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


$(document).ready(function(){

    $('#submit').click(function(){
        checkinputs();
        $('#success').hide(1);
        $.post("emailRes.php", $("#contact").serialize(),  function(response) {
            $('#success').html(response);
            $('#success').show(1000);
            
        });
        
        return false ;
       
        
        
        
      
    });
});