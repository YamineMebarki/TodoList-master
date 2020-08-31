$(function() {
    let element = document.getElementById("container-loader");
    element.classList.add("invisible");

    const btnEdit = document.getElementsByClassName("edit-stains");
    for (let i = 0; i < btnEdit.length; i++) {
        btnEdit[i].addEventListener("click", openModal);
    }

    const btnRemove = document.getElementsByClassName("remove-stains");
    for (let i = 0; i < btnRemove.length; i++) {
        btnRemove[i].addEventListener("click", removeStains);
    }

    document.getElementById("save").addEventListener("click", saveStains);


    function openModal(){
        const idStains = this.getAttribute("data-id");
        const labelStains = this.getAttribute("data-label");
        const url = "/taches/"+idStains+"/edition";
        $("#modal-edit").modal("show");
        $.ajax( url)
            .done(function(result) {
                let titre = 'Edition de la tâche ' + labelStains;
                if(labelStains === ""){
                    titre = "Ajouter une tâche"
                }
                document.getElementById("modal-edit-label").text = titre;
                document.getElementById("modal-body").innerHTML =result;
            })
    }

    function saveStains(){
        let element = document.getElementById("container-loader");
        element.classList.toggle("invisible");
        document.getElementsByName("stains")[0].submit();
    }

    function removeStains(){
        const idStains = this.getAttribute("data-id");
        const url = "/taches/"+idStains+"/suppression";
        let element = document.getElementById("container-loader");
        element.classList.toggle("invisible");
        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(result) {
                if(result){
                    document.getElementById("row-"+idStains).remove();
                    let element = document.getElementById("container-loader");
                    element.classList.toggle("invisible");
                }
            }
        })
    }

});
