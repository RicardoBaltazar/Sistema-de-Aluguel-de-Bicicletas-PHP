
const cep = document.querySelector('#cep')
const btn = document.querySelector('#btn')

   const dados = (result)=>{
        for(const campo in result){
            if(document.querySelector('#'+campo)){
                console.log(campo)
                document.querySelector('#'+campo).value = result[campo] 
            }
        }
    }
    
btn.addEventListener('click', function(){
    var search = cep.value.replace("-","")

    const info = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }
    fetch(`https://viacep.com.br/ws/${search}/json/`, info)

    .then(function(response){
        return response.json();
    })
    .then(function(data){
        console.log(data)
        dados(data)
    })
    .catch(function(e){
        console.log('Erro: '+ e,message)
    })   

})




