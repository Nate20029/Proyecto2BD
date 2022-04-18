function removeElement(event){
    event.target.parentElement.remove()
}

(function load(){
    const $form = document.getElementById("frmUsers")
    const $divElements = document.getElementById("divElements")
    const $btnAdd = document.getElementById("btnAdd")

    const templateElement = data => {
        return(`
            <button class="delete" onclick="removeElement(event)"></button>
            <button>Ingresar</button>  ${data}
        `)
    }
    $btnAdd.addEventListener("click", (event) => {
        if($form.name.value != ""){
            const $div = document.createElement("div")
            $div.classList.add("notification", "is-primary")
            $div.innerHTML = templateElement(`${$form.name.value}`)
            $divElements.appendChild($div)

            $divElements.insertBefore($div, $divElements.firstChild)

            $form.reset()


        }else{
            alert("Complete los campos")
        }
    })

})();