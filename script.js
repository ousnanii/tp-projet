document.querySelector('form').addEventListener('submit', function(e) {
    var nom = document.querySelector('input[name="nom"]').value;
    var prenom = document.querySelector('input[name="prenom"]').value;

    if(nom == '' || prenom == '') {
        e.preventDefault();
        alert('Entre le nom et le prénom');
    }
});