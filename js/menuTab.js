var tab = document.getElementsByClassName('menu-tab');
var content = document.getElementsByClassName('item-menu');

function display(name) {
    if (name == 'all') {
        for (var i = 0; i < content.length; i++) content[i].style.display = 'block';
    } else {
        for (var i = 0; i < content.length; i++) {
            if (content[i].classList.contains(name)) content[i].style.display = 'block';
            else content[i].style.display = 'none';
        }
    }
}

for (var i = 0; i < tab.length; i++) {
    tab[i].addEventListener('click', function() {
        for (var i = 0; i < tab.length; i++) {
            tab[i].classList.remove('active');
        }
        this.className += ' active';
        var id = this.id.toString();
        display(id);
    })
}