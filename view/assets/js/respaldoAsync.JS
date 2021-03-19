AXIOS
axios({
        method: "post",
        url: "ajax/ajax.goalDetails.php",
        data: data,
        'Content-Type': `multipart/form-data; boundary=${data._boundary}`,

        // headers: { "Content-Type": "multipart/form-data" },
    })
    .then(function(response) {
        //handle success
        console.log(response);
    })
    .catch(function(response) {
        //handle error
        console.log(response);
    });


AJAX
const xhr = new XMLHttpRequest();

xhr.open('POST', "ajax/ajax.goalDetails.php", true);

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.onload = function() {
    if (this.status === 200) {
        const respuesta = (xhr.responseText);
        console.log(respuesta);
    }
};

xhr.send(data);