


const btEliminar = document.querySelector('#btEliminar');


if(btEliminar){
  
  btEliminar.addEventListener('click',function(e){
  e.preventDefault();
  
  Swal.fire({
    title: '¿Quieres borrar tus datos?',
    text: "Ten presente que la operación no es reversible",   
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'SI',
    cancelButtonText: 'NO'
  }).then((result) => {
    if (result.value) {
      document.querySelector('#frEliminar').submit();      
  
    }   
  })
    })
}





