function added(selected,menu_section)
{
    var menu_item_name = document.getElementsByName("menu_item_name");
    var menu_item_price = document.getElementsByName("menu_item_price");
    var menu_item_description = document.getElementsByName("menu_item_description");
    var addmain = document.getElementsByName("addmain");
    
    var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                addmain[selected].innerHTML = "Added to Cart..!";
                fadeOutEffect(selected);
            }
        };
        
        xmlhttp.open("GET","addtocart.php?menu_section="+menu_section+"&menu_item="+menu_item_name[selected].innerHTML+"&menu_item_price="+menu_item_price[selected].innerHTML+"&menu_desc="+menu_item_description[selected].innerHTML, true);
        xmlhttp.send();
        window.setTimeout(refreshpage, 2000); 
}

function refreshpage()
{
    location.reload(true);
}

function fadeOutEffect(selected) {

    var addmain = document.getElementsByName("addmain");
    var fadeTarget = addmain[selected];
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity < 0.1) {
            clearInterval(fadeEffect);
        } else {
            fadeTarget.style.opacity -= 0.1;
        }
    }, 100);
}