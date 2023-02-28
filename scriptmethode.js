var xhr=new XMLHttpRequest();
xhr.open('GET', 'http://localhost/digitex_isa/dashbord_bmethode/PlatformeDigiTex/phpfolder/methodeinterface.php',true);
xhr.onreadystatechange= function(){
    if (this.readyState===4 && this.status===200){
        var data =JSON.parse(this.responseText);
    }
};
xhr.send();

var table = document.getElementById('#ofTable');
for (var i = 0; i < data.length; i++) {
    var row = table.insertRow();
    var refCell = row.insertCell(0);
    var clientCell = row.insertCell(1);
    var atelierCell = row.insertCell(2);
    var statutsCell = row.insertCell(3);
    var quantiteCell = row.insertCell(4);
    var modelCell = row.insertCell(5);
    refCell.innerHTML = data[i].ref;
    clientCell.innerHTML = data[i].client;
    atelierCell.innerHTML = data[i].atelier;
    statutsCell.innerHTML = data[i].statuts;
    quantiteCell.innerHTML = data[i].quantite;
    modelCell.innerHTML = data[i].model;
}
document.body.appendChild(table);
var xhr = new XMLHttpRequest();
xhr.open('GET', 'api.php', true);
xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        var data = JSON.parse(this.responseText);
        var table = document.createElement('table');
        for (var i = 0; i < data.length; i++) {
            var row = table.insertRow();
            var refCell = row.insertCell(0);
            var clientCell = row.insertCell(1);
            var atelierCell = row.insertCell(2);
            var statutsCell = row.insertCell(3);
            var quantiteCell = row.insertCell(4);
            var modelCell = row.insertCell(5);
            refCell.innerHTML = data[i].ref;
            clientCell.innerHTML = data[i].client;
            atelierCell.innerHTML = data[i].atelier;
            statutsCell.innerHTML = data[i].statuts;
            quantiteCell.innerHTML = data[i].quantite;
            modelCell.innerHTML = data[i].model;
        }
    }
}