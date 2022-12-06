
////////////Methode fetch()///////////////////////////

  fetch("https://www.une-url.com")
 .then(response => response.json())
 .then(response => alert(JSON.stringify(response)))
 .catch(error => alert("Erreur : " + error));