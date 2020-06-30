




jQuery(document).ready(function($)
{
  var articles = document.querySelectorAll("article");
for (var i = 0; i < articles.length; i++) {
    var article = articles[i];
    var modal = article.querySelector(".modal");
    var button = article.querySelector(".featured-img");
    var closeButton = article.querySelector(".close");

    // if there is no modal, ignore this article
    if (!modal) continue;

    button.onclick = function() {
        modal.style.display = "block";
    }
    closeButton.onclick = function() {
        modal.style.display = "none";
    }

    // add event listener instead so it can be added multiple times
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
}
});
