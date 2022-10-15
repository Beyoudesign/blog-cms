function revealMessage (){
    document.getElementById("hiddenMessage").style.display = 'block';

}

$("button").click(function() {
    alert("I'm alerting you");
})


var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options);